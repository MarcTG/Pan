<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use App\bitacora;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['only' => 'showLoginForm']);    
    }
    public function showLoginForm(){
        return view('auth.login');
    }
    public function login()
    {
        $credencials= $this->validate(request(),[
            $this->username() => 'required|string',
            'password' => 'required|string'
        ]);
        if(Auth::attempt($credencials))
        {
            $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Login' ];
            bitacora::create($bitacora);
            return redirect()->route('dashboard');
        }
        return back()
            ->withErrors([$this->username() => trans('auth.failed')])
            ->withInput(request([$this->username()]));
    }
    public function logout()
    {
        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Logout' ];

        Auth::logout();

        bitacora::create($bitacora);

        return redirect('/');
    }
    public function username(){
        return 'id';
    }

}
