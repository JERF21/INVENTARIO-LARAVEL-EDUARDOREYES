<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    //
    public function principal()
    {
        $user = User::withTrashed()->paginate(20);
        return view('usuarios.principal', ['us' => $user]);
    }



    public function mostrar($variable)
    {
        $user=User::find($variable);


        // return view('productos.mostrar', ['prod'=>$variable]);
        return view("usuarios.mostrar", compact('user'));
    }



    
     public function crear()
    {
        return view('usuarios.crear');
    }




    public function store(Request $request)
    {
        $us=new User();
        $us->name=$request->name;
        $us->email=$request->email;
        $us->password=$request->password;



        // return $request->all();
        $us->save();

        // return redirect()->route('producto.principal');
        return redirect()->route('usuario.mostrar', $us->id);

    }


    public function editar(User $user){

        return view("usuarios.editar", compact('user'));
        
    }

    public function update(Request $request, User $user)
    {
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;



        // return $request->all();
        $user->save();

        return redirect()->route('usuario.mostrar', $user->id);

    }

    public function borrar($id){
        $user=User::withTrashed()->find($id);
        $user->forceDelete();

        return redirect()->route('usuario.principal');
    }

    public function desactivausuario($id){
        $user=User::find($id);
        $user->delete();

        return redirect()->route('usuario.principal');
    }

    
    public function activausuario($id){
        $user=User::withTrashed()->find($id);
        $user->restore($id);

        return redirect()->route('usuario.principal');
    }

}
