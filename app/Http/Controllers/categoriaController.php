<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class categoriaController extends Controller
{
    //
    public function principal()
    {
        $categoria = Categoria::withTrashed()->paginate(20);
        return view('categorias.principal', ['cat' => $categoria]);
    }

    
    public function crear()
    {
        return view('categorias.crear');
    }

    public function mostrar($variable)
    {
        $categoria=Categoria::find($variable);
        // return view('productos.mostrar', ['prod'=>$variable]);
        return view("categorias.mostrar", compact('categoria'));
    }


    public function store(Request $request)
    {
        $cat=new Categoria();
        $cat->nombre=$request->nombre;
        $cat->descripcion=$request->descripcion;



        // return $request->all();
        $cat->save();

        // return redirect()->route('producto.principal');
        return redirect()->route('categoria.mostrar', $cat->id);

    }


    public function editar(Categoria $categoria){

        return view("categorias.editar", compact('categoria'));
        
    }

    public function update(Request $request, Producto $categoria)
    {
        $categoria->nombre=$request->nombre;
        $categoria->descripcion=$request->descripcion;



        // return $request->all();
        $categoria->save();

        return redirect()->route('categoria.mostrar', $categoria->id);

    }

    public function borrar($id){
        $producto=Categoria::withTrashed()->find($id);
        $producto->forceDelete();

        return redirect()->route('categoria.principal');
    }

    public function desactivacategoria($id){
        $categoria=Categoria::find($id);
        $categoria->delete();

        return redirect()->route('categoria.principal');
    }

    
    public function activacategoria($id){
        $categoria=Categoria::withTrashed()->find($id);
        $categoria->restore($id);

        return redirect()->route('categoria.principal');
    }



}
