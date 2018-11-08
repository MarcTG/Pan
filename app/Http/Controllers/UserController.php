<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function viewUsers(){

        return view('users.users')->with('users', User::all());

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
        
        return redirect()->route('view.users');
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
        return redirect()->route('view.users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user){

        $user->delete();
        return redirect()->back();

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    
    
}
