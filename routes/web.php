<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\categoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', inicioController::class);






Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    Route::controller(productoController::class)->group(function(){
        route::get('producto', 'principal')->name('producto.principal');
    
        route::get('producto/{variable}/mostrar', 'mostrar')->name('producto.mostrar');    
        
        route::get('producto/crear', 'crear')->name('producto.crear');
    
        route::post('producto','store')->name('producto.store');
    
    
        Route::get('producto/{producto}/edit', 'editar')->name('producto.editar');
    
        route::put('producto/{producto}', 'update')->name('producto.update');
    
        route::delete('producto/{id}', 'borrar')->name('producto.borrar');
    
        route::get('desactivar/{id}', 'desactivaproducto')->name('desactivapro');
    
        route::get('activar/{id}', 'activaproducto')->name('activapro');

    });
    //Eduardo Reyes
    Route::controller(categoriaController::class)->group(function(){

        route::get('categoria', 'principal')->name('categoria.principal'); 

        route::get('categoria/{variable}/mostrar', 'mostrar')->name('categoria.mostrar');   

        route::get('categoria/crear', 'crear')->name('categoria.crear');
    
        route::post('categoria','store')->name('categoria.store');

        Route::get('categoria/{categoria}/edit', 'editar')->name('categoria.editar');
    
        route::put('categoria/{categoria}', 'update')->name('categoria.update');

        route::delete('categoria/{id}', 'borrar')->name('categoria.borrar');
    
        route::get('desactiva/{id}', 'desactivacategoria')->name('desactivacat');
    
        route::get('activa/{id}', 'activacategoria')->name('activacat');

    });
});
