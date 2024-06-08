<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;    
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{  
    public function login() 
    {
        return view('admin/layout/login');
    }

    public function login_action (Request $request)
    {
        // dd($request->all());
        
        $check = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($check)) {
            $request->session()->regenerate();
    
            return redirect()->intended('/dashboard');
        } 
        // else {
        //     Session::flash('status', 'failed');
        //     Session::flash('message', 'Username atau Password yang dimasukan salah!');

        //     return redirect()->route('login');
        // }

        return back()->withErrors([
            'username' => 'Salah!',
        ])->onlyInput('username');
    }
    // public function logout(Request $request)
    // {
    //     Auth::logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect()->route('login');
    // }
}
