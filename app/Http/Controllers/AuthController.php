<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //Auth Admin
    public function showLoginForm()
    {
        return view('admin.layout.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard/{id}');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }

    // Auth User
    public function showLoginUser()
    {
        return view('user.layout.login');
    }

    public function showRegisterUser()
    {
        return view('user.layout.signup');
    }

    public function registerUserAction(Request $request)
    {
        $register = new User;
        $register->nama_user = $request->nama_user;
        $register->username = $request->username;
        $register->email_user = $request->email_user;
        $register->password = $request->password;
        $register->nomor_telephone = $request->nomor_telephone;
        $register->save();
        if ($request->filled('password')) {
            // Enkripsi password
            $register->password = Hash::make($request->password);
        }
        $register->save();

        return redirect('/user/login');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/user/kegiatan/{id}');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    public function logoutUser(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/user/login');
    }
}
