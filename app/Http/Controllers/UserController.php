<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\DB;
use App\bitacora;

class UserController extends Controller
{
    public function viewUsers(){


        
        return view('users.users')->with('users', User::all()->where('estado', true));

    }
    
    
    public function create(){


        return view('users.createUser')->with('roles',Role::all());

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){



        $this->validate($request, [
            'id' => 'required|string|max:8',
            'nombre' => 'required|string|max:255',
            'apellidoP' => 'required|string|max:255',
            'apellidoM' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user= new User;
        $user->id=$request->id;
        $user->nombre=$request->nombre;
        $user->apellidoP=$request->apellidoP;
        $user->apellidoM=$request->apellidoM;
        $user->telefono=$request->telefono;
        $user->password=Hash::make($request->password);
        $user->save();
        DB::table('role_user')->insert(
            array('role_id' => $request->get('rol'),
             'user_id' => $request->id));   
        
        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Crear usuario', 'tabla' => 'Usuarios', 'idTabla' => $request->id  ];
        bitacora::create($bitacora);     

        return redirect()->route('view.users')->with('info', 'Usuario creado con éxito');
    }

    public function edit(User $user){
        return view('users.editUser')->with('user', $user);
    }

    public function update(Request $request,User $user)
    {
        $this->validate($request, [
            'id' => 'required|string|max:8',
            'nombre' => 'required|string|max:255',
            'apellidoP' => 'required|string|max:255',
            'apellidoM' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user->id=$request->id;
        $user->nombre=$request->nombre;
        $user->apellidoP=$request->apellidoP;
        $user->apellidoM=$request->apellidoM;
        $user->telefono=$request->telefono;
        $user->password=Hash::make($request->password);

        $user->save();

        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Editar usuario', 'tabla' => 'Usuarios', 'idTabla' => $request->id  ];
        bitacora::create($bitacora);

        return redirect()->route('view.users')->with('info', 'Usuario editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user){

        

        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Eliminar usuario', 'tabla' => 'Usuarios', 'idTabla' => $user->id  ];
        bitacora::create($bitacora);
        $user->estado = false;
        $user->save();
        return redirect()->back()->with('info', 'Usuario Eliminado con éxito');

    }

    public function logout(){
        Auth::logout();
        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Logout' ];
            bitacora::create($bitacora);
        return redirect('/');
    }

    
    
}
