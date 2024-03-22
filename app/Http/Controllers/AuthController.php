<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|string|min:3'
        ],[
            'username.required' => 'username jangan kosong',
            'password.required' => 'password jangan kosong',
            'password.min' => 'password minimal 3'
        ]);

        if(Auth::attempt(['username' => $request->username, "password" => $request->password])){
            $request->session()->regenerate();

            return redirect()->route('dashboard.index');
        }

        return redirect()->back()->with('loginError', "username / password salah");
    }

    public function logout(){
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();

        return redirect()->route('login');
    }
}
