<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use App\Models\Kegiatan;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
// use Intervention\Image\Image;
use Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    //All About Navigasi
    public function showHome() {
        $kegiatan = Kegiatan::all()
         ->take(3) ;
        return view('user.layout.index', compact('kegiatan'));
    }

    public function showDaftarKegiatan() {
        $kegiatan = Kegiatan::all();
        $totalKegiatan = $kegiatan->count();
        return view('user.layout.daftar-volunteer', compact('kegiatan', 'totalKegiatan'));
    }

    public function showFaqPage() {
        return view('user.layout.faq');
    }

    public function showDaftarKegiatanPage($id)
    {   
        $user = User::find($id);
        $kegiatan = Kegiatan::all();
        $totalKegiatan = $kegiatan->count();

        return view('user.layout.daftar-volunteer', compact('kegiatan', 'user', 'totalKegiatan'));
    }

    public function showDetailKegiatan($id_kegiatan)
    {
        $kegiatan = Kegiatan::with(['kategori'])->find($id_kegiatan);
        if (!$kegiatan) {
            return redirect()->route('user.daftar-volunteer')->with('error', 'Kegiatan tidak ditemukan.');
        }

        $rekomendasi = Kegiatan::where('id_kegiatan', '!=', $id_kegiatan)
        //  ->latest() // Urutkan berdasarkan yang terbaru
         ->take(3) 
         ->get();
        
        return view('user.layout.detail-kegiatan', compact('kegiatan', 'rekomendasi'));
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

    public function showEditSkillPage($id)
    {
        $user = User::find($id);
        return view('user.layout.edit-skill', compact('user'));
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
        $user->deskripsi=$request->deskripsi;

        if ($request->hasFile('cv')) {
            if ($user->cv) {
                $oldCv = storage_path('app/public/cv/' . $user->cv);
                if (File::exists($oldCv)) {
                    File::delete($oldCv);
                }
            }

            $extension = $request->file('cv')->getClientOriginalExtension();
            $newName = $request->nama_user.'-'.'cv'.'-'.now()->timestamp.'.'.$extension;
            $request->file('cv')->storeAs('cv', $newName);
            
            // Update field 'cv' di tabel users
            $user->cv = $request['cv'] = $newName;
            $user->save();
        }

        $user->save();

        return view('user.layout.profile', compact('user'))->with('success', 'User berhasil diupdate.');
    }
    
    public function editFotoProfileAction(Request $request, $id)
    {
        {
            $request->validate([
                'cropped_image' => 'required',
            ]);
    
            $user = User::find($id);
    
            // Menghapus gambar lama
            if ($user->foto_profile) {
                $oldImage = storage_path('app/public/foto-profile/' . $user->foto_profile);
                if (File::exists($oldImage)) {
                    File::delete($oldImage);
                }
            }
    
            // Mengubah base64 menjadi file
            $cropped_image = $request->input('cropped_image');
            $image = Image::make($cropped_image);
            $newName = $user->nama_user . '-' . now()->timestamp . '.png';
            $path = 'foto-profile/' . $newName;
    
            Storage::disk('public')->put($path, (string) $image->encode());
    
            // Simpan path gambar ke database
            $user->foto_profile = $newName;
            $user->save();
    
            return redirect()->back()->with('success', 'Foto User berhasil diupdate.');
        }

        return redirect()->back()->with('error', 'Gagal mengupload foto.');

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

    public function addSkillAction(Request $request, $id)
    {
        // Temukan user
        $user = User::findOrFail($id);

        // Temukan atau buat skill baru
        $skill = Skill::firstOrCreate(['nama_skill' => $request->input('nama_skill')]);

        // Hubungkan skill dengan user
        $user->skills()->attach($skill->id_skill);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Kemampuan berhasil ditambahkan.');
    }

    public function removeSkill($id, $id_skill)
    {
        // Temukan user
        $user = User::findOrFail($id);

        // Hapus hubungan skill dengan user
        $user->skills()->detach($id_skill);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Kemampuan berhasil dihapus.');
    }

    //All About Kegiatan
    public function showDetailKegiatanPage($id, $id_kegiatan)
    {
        $user = User::findOrFail($id);
        $kegiatan = Kegiatan::with(['kategori'])->find($id_kegiatan);
        if (!$kegiatan) {
            return redirect()->route('user.daftar-volunteer')->with('error', 'Kegiatan tidak ditemukan.');
        }
       
         $rekomendasi = Kegiatan::where('id_kegiatan', '!=', $id_kegiatan)
        //  ->latest() // Urutkan berdasarkan yang terbaru
         ->take(3) 
         ->get();
 
        return view('user.layout.detail-kegiatan', compact('kegiatan', 'user', 'rekomendasi'));
    }

    
    //All Abour Pendaftaran
    public function addPendaftaranAction(Request $request, $id, $id_kegiatan)
    {
        $user = User::findOrFail($id);
        $kegiatan = Kegiatan::findOrFail($id_kegiatan);
        // Cek apakah user sudah mendaftar ke kegiatan ini sebelumnya
        $existingPendaftaran = Pendaftar::where('id_user', $user->id)
                                         ->where('id_kegiatan', $kegiatan->id_kegiatan)
                                         ->exists();
        if ($existingPendaftaran) {
            return redirect()->back()->with('error', 'Anda sudah mendaftar kegiatan ini.');
        }
        
        $user = User::findOrFail($id);
        $kegiatan = Kegiatan::findOrFail($id_kegiatan);
        $pendaftar = new Pendaftar;
        $pendaftar->motivasi = $request->motivasi;
        $pendaftar->status_pendaftaran = 'Dalam Review';
        $pendaftar->id_user= $user->id;
        $pendaftar->id_kegiatan = $kegiatan->id_kegiatan;
        
        if ($request->hasFile('cv')) {

            if ($user->cv) {
                $oldCv = storage_path('app/public/cv/' . $user->cv);
                if (File::exists($oldCv)) {
                    File::delete($oldCv);
                }
            }

            $extension = $request->file('cv')->getClientOriginalExtension();
            $newName = $request->nama_user.'-'.'cv'.'-'.now()->timestamp.'.'.$extension;
            $request->file('cv')->storeAs('cv', $newName);
            
            // Update field 'cv' di tabel users
            $user->cv = $request['cv'] = $newName;
            $user->save();
        }

        $pendaftar->save();

        return redirect()->back()->with('success', 'Pendaftaran Berhasil');
    }
}
