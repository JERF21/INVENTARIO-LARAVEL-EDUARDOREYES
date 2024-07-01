<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class roleController extends Controller
{
    //
    public function principal()
    {
        $role = Role::paginate(20);
        return view('roles.principal', ['role' => $role]);
    }

    
    public function crear()
    {
        return view('roles.crear');
    }

    public function mostrar($variable)
    {
        $role=Role::find($variable);
        // return view('productos.mostrar', ['prod'=>$variable]);
        return view("roles.mostrar", compact('role'));
    }


    public function store(Request $request)
    {
        $rol=new Role();
        $rol->nombre=$request->nombre;


        // return $request->all();
        $rol->save();

        // return redirect()->route('producto.principal');
        return redirect()->route('role.mostrar', $rol->id);

    }


    public function editar(Role $role){

        return view("roles.editar", compact('role'));
        
    }

    public function update(Request $request, Role $role)
    {
        $role->nombre=$request->nombre;



        // return $request->all();
        $role->save();

        return redirect()->route('role.mostrar', $role->id);

    }

  /*   public function borrar($id){
        $producto=Categoria::withTrashed()->find($id);
        $producto->forceDelete();

        return redirect()->route('categoria.principal');
    } */
/* 
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
 */


}
