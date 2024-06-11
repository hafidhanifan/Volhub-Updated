<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Kriteria;
use App\Models\Kategori;
use App\Models\Kegiatan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // All About Daftar Kegiatan
    public function showDaftarKegiatanPage($id)
    {   
        $user = User::find($id);
        $kegiatan = Kegiatan::all();
        return view('user.layout.daftar-volunteer', compact('kegiatan', 'user'));
    }

    // All About Detail User
    public function showDetailUserPage($id)
    {
        $user = User::find($id);
        return view('user.layout.profile', compact('user'));
    }

    public function showEditUserPage($id)
    {
        $user = User::find($id);
        $gender = ['Perempuan', 'Laki-Laki'];
        $pendidikanTerakhir = ['SD', 'SMP', 'SMA/SMK', 'Diploma (D1 - D4)', 'Sarjana (S1)', 'Magister (S2)', 'Doktor (S3)'];
        return view('user.layout.edit-data-diri', compact('user', 'gender', 'pendidikanTerakhir'));
    }

    public function showEditAkunPage($id)
    {
        $user = User::find($id);
        return view('user.layout.edit-pengaturan-akun', compact('user'));
    }

    public function editUserAction(Request $request, $id)
    {
        $user = User::find($id);
        $user->nama_user = $request->nama_user;
        $user->bio = $request->bio;
        $user->nomor_telephone = $request->nomor_telephone;
        $user->usia = $request->usia;
        $user->domisili = $request->domisili;
        $user->gender = $request->gender;
        $user->pendidikan_terakhir = $request->pendidikan_terakhir;
        $user->cv = $request->cv;
        $user->deskripsi=$request->deskripsi;

        $user->save();

        return view('user.layout.profile', compact('user'))->with('success', 'User berhasil diupdate.');
    }
    public function editAkunAction(Request $request, $id) 
    {
        $user = User::find($id);
        $user->username = $request->username;
        $user->password = $request->password;
        $user->email_user = $request->email_user;

        if ($request->filled('password')) {
            // Enkripsi password
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return view('user.layout.profile', compact('user'))->with('success', 'User berhasil diupdate.');
    }

    //All About Kegiatan
    public function showDetailKegiatanPage($id)
    {
        $kegiatan = Kegiatan::with(['kategori', 'kriteria', 'benefit'])->find($id);
        if (!$kegiatan) {
            return redirect()->route('user.daftar-volunteer')->with('error', 'Kegiatan tidak ditemukan.');
        } 
        return view('user.layout.detail-kegiatan', compact('kegiatan'));
    }
}
