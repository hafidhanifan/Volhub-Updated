<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;


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
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard', ['id' => Auth::guard('admin')->user()->id]));
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->withInput($request->except('password'));
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
        $existing_username = User::where('username', $request->username)->first();
        if ($existing_username) {
            Alert::error('Oops !', 'Username sudah digunakan :(');
            return redirect()->back()->withInput(); 
        }

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
        Alert::success('Hore!', 'Akun Berhasil Ditambahkan');


        return redirect('/user/login');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/user/kegiatan/{id}');
        }

        Alert::error('Oops !', 'Username atau Password salah :(');
        return back();
    }

    public function logoutUser(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home');
    }
}
