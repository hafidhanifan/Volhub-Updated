<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Kriteria;
use App\Models\Skill;
use App\Models\Kategori;
use App\Models\Kegiatan;
use App\Models\Admin;
use App\Models\Pendaftar;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // All About Kategori
    public function showKategoriPage()
    {   
        $kategori = Kategori::all();
        return view('admin.layout.kategori', compact('kategori'));
    }

    public function showAddKategoriPage()
    {
        return view('admin.layout.add-kategori');
    }

    public function showEditKategoriPage($id)
    {
        $kategori = Kategori::find($id);
        return view('admin.layout.edit-kategori', compact('kategori'));
    }
    
    public function addKategoriAction(Request $request)
    {
        $kategori = new Kategori;
        $kategori->nama_kategori = $request->kategori;
        $kategori->save();

        return redirect('/admin/kategori');
    }

    public function editKategoriAction(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->kategori;
        $kategori->save();

        return redirect()->route('admin.kategori', ['id' => $id])->with('success', 'Kategori berhasil diupdate.');
    }

    public function deleteKategoriAction($id)
    {
        $kategori = Kategori::find($id);

        if ($kategori) {
            $kategori->delete();
            return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil dihapus.');
        } else {
            return redirect()->route('admin.kategori')->with('error', 'Kategori tidak ditemukan.');
        }
    }

    // All About Kriteria
    public function showKriteriaPage()
    {   
        $kriteria = Kriteria::all();
        return view('admin.layout.kriteria', compact('kriteria'));
    }

    public function showAddKriteriaPage()
    {
        return view('admin.layout.add-kriteria');
    }

    public function showEditKriteriaPage($id)
    {
        $kriteria = Kriteria::find($id);
        return view('admin.layout.edit-kriteria', compact('kriteria'));
    }

    public function addKriteriaAction(Request $request)
    {
        $kriteria = new Kriteria;
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->save();

        return redirect('/admin/kriteria');
    }

    public function editKriteriaAction(Request $request, $id)
    {
        $kriteria = Kriteria::find($id);
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->save();

        return redirect()->route('admin.kriteria', ['id' => $id])->with('success', 'Kriteria berhasil diupdate.');
    }

    public function deleteKriteriaAction($id)
    {
        $kriteria = Kriteria::find($id);

        if ($kriteria) {
            $kriteria->delete();
            return back()->with('success', 'Kriteria berhasil dihapus.');
        } else {
            return back()->with('error', 'Kriteria tidak ditemukan');
        }
    }

    // All About Benefit
    public function showBenefitPage()
    {   
        $benefit = Benefit::all();
        return view('admin.layout.benefit', compact('benefit'));
    }

    public function showAddBenefitPage()
    {
        return view('admin.layout.add-benefit');
    }

    public function showEditBenefitPage($id)
    {
        $benefit = Benefit::find($id);
        return view('admin.layout.edit-benefit', compact('benefit'));
    }

    public function addBenefitAction(Request $request)
    {
        $benefit = new Benefit;
        $benefit->nama_benefit = $request->nama_benefit;
        $benefit->save();

        return redirect('/admin/benefit');
    }

    public function editBenefitAction(Request $request, $id)
    {
        $benefit = Benefit::find($id);
        $benefit->nama_benefit = $request->nama_benefit;
        $benefit->save();

        return redirect()->route('admin.benefit', ['id' => $id])->with('success', 'Benefit berhasil diupdate.');
    }

    public function deleteBenefitAction($id)
    {
        $benefit = Benefit::find($id);

        if ($benefit) {
            $benefit->delete();
            return back()->with('success', 'Benefit berhasil dihapus.');
        } else {
            return back()->with('error', 'Benefit tidak ditemukan');
        }
    }

    //All About SkillS
    public function showSkillPage()
    {   
        $skill = Skill::all();
        return view('admin.layout.skill', compact('skill'));
    }

    public function showAddSkillPage()
    {
        return view('admin.layout.add-skill');
    }

    public function showEditSkillPage($id)
    {
        $skill = Skill::find($id);
        return view('admin.layout.edit-skill', compact('skill'));
    }
    
    public function addSkillAction(Request $request)
    {
        $skill = new Skill;
        $skill->nama_skill = $request->nama_skill;
        $skill->save();

        return redirect('/admin/skill');
    }

    public function editSkillAction(Request $request, $id)
    {
        $skill = Skill::find($id);
        $skill->nama_skill = $request->nama_skill;
        $skill->save();

        return redirect()->route('admin.skill', ['id' => $id])->with('success', 'Kategori berhasil diupdate.');
    }

    public function deleteSkillAction($id)
    {
        $skill = Skill::find($id);

        if ($skill) {
            $skill->delete();
            return redirect()->route('admin.skill')->with('success', 'Skill berhasil dihapus.');
        } else {
            return redirect()->route('admin.skill')->with('error', 'Skill tidak ditemukan.');
        }
    }


    // All About Kegiatan
    public function showKegiatanPage()
    {
        $kegiatan = Kegiatan::all();
        return view('admin.layout.kegiatan', compact('kegiatan'));
    }

    public function showAddKegiatanPage()
    {
        $kategori = Kategori::all();
        $sistemKegiatan = ['offline', 'online'];
        return view('admin.layout.add-kegiatan', compact('kategori', 'sistemKegiatan'));
    }

    public function showDetailKegiatanPage($id)
    {
        $kegiatan = Kegiatan::with(['kategori'])->find($id);
        if (!$kegiatan) {
            return redirect()->route('admin.kegiatan')->with('error', 'Kegiatan tidak ditemukan.');
        } 
        return view('admin.layout.detail-kegiatan', compact('kegiatan'));
    }

    public function showEditKegiatanPage($id)
    {
        $kegiatan = Kegiatan::with(['kategori'])->find($id);
        $kategori = Kategori::all();
        $sistemKegiatan = ['offline', 'online'];
        return view('admin.layout.edit-kegiatan', compact('kegiatan', 'kategori', 'sistemKegiatan'));
    }

    public function addKegiatanAction(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);

        $kegiatan = new Kegiatan;

        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->id_kategori = $request->kategori;
        $kegiatan->lokasi_kegiatan = $request->lokasi_kegiatan;
        $kegiatan->lama_kegiatan = $request->lama_kegiatan;
        $kegiatan->sistem_kegiatan = $request->sistem_kegiatan;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->tgl_penutupan = $request->tgl_penutupan;
        $kegiatan->tgl_kegiatan = $request->tgl_kegiatan;

        $extension = $request->file('gambar')->getClientOriginalExtension();
        $newName = $request->nama_kegiatan.'-'.now()->timestamp.'.'.$extension;
        $request->file('gambar')->storeAs('gambar', $newName);
        
        $kegiatan->gambar = $request['gambar'] = $newName;
        $kegiatan->save();

        return redirect('/admin/kegiatan')->with('success', 'Kegiatan berhasil ditambahkan.');
    }
    

    public function editKegiatanAction(Request $request, $id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->id_kategori = $request->kategori;
        $kegiatan->lokasi_kegiatan = $request->lokasi_kegiatan;
        $kegiatan->lama_kegiatan = $request->lama_kegiatan;
        $kegiatan->sistem_kegiatan = $request->sistem_kegiatan;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->tgl_penutupan = $request->tgl_penutupan;
        $kegiatan->tgl_kegiatan = $request->tgl_kegiatan;

        if ($request->hasFile('gambar')) {
            if ($kegiatan->gambar) {
                $oldImage = storage_path('app/public/gambar/' . $kegiatan->gambar);
                if (File::exists($oldImage)) {
                    File::delete($oldImage);
                }
            }

            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName = $request->nama_kegiatan.'-'.now()->timestamp.'.'.$extension;
            $request->file('gambar')->storeAs('gambar', $newName);
            
            $kegiatan->gambar = $request['gambar'] = $newName;
    }
        $kegiatan->save();

        return view('admin.layout.detail-kegiatan', compact('kegiatan'))->with('success', 'Kegiatan berhasil diupdate.');
    }

    public function deleteKegiatanAction($id)
    {
        $kegiatan = Kegiatan::find($id);

        if ($kegiatan) {
            $kegiatan->delete();
            return back()->with('success', 'Kegiatan berhasil dihapus.');
        } else {
            return back()->with('error', 'Kegiatan tidak ditemukan');
        }
    }

    // All About Kegiatan Benefit
    public function showAddBenefitKegiatanPage($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('admin.layout.add-kegiatan-benefit', compact('kegiatan'));
    }

    public function addBenefitKegiatanAction(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        $benefit = Benefit::firstOrCreate(['nama_benefit' => $request->input('nama_benefit')]);

        $kegiatan->benefits()->attach($benefit->id_benefit);

        return redirect()->back()->with('success', 'Benefit berhasil ditambahkan.');
    }

    public function removeBenefit($id, $id_benefit)
    {
        
        $kegiatan = Kegiatan::findOrFail($id);

        $kegiatan->benefits()->detach($id_benefit);

        return redirect()->back()->with('success', 'Benefit berhasil dihapus.');
    }

    // All About Kegiatan Kriteria
    public function showAddKriteriaKegiatanPage($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('admin.layout.add-kegiatan-kriteria', compact('kegiatan'));
    }

    public function addKriteriaKegiatanAction(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        $kriteria = Kriteria::firstOrCreate(['nama_kriteria' => $request->input('nama_kriteria')]);

        $kegiatan->kriterias()->attach($kriteria->id_kriteria);

        return redirect()->back()->with('success', 'Kriteria berhasil ditambahkan.');
    }

    public function removeKriteria($id, $id_kriteria)
    {
        
        $kegiatan = Kegiatan::findOrFail($id);

        $kegiatan->kriterias()->detach($id_kriteria);

        return redirect()->back()->with('success', 'Kriteria berhasil dihapus.');
    }

    //All about Pendaftar
    public function showPendaftarPage()
    {
        $pendaftar = Pendaftar::all();
        return view('admin.layout.pendaftar', compact('pendaftar'));
    }

    public function showDetailPendaftarPage($id)
    {
        $pendaftar = Pendaftar::with(['user'])->find($id);
        if (!$pendaftar) {
            return redirect()->route('admin.pendaftar')->with('error', 'Pendaftar tidak ditemukan.');
        } 
        return view('admin.layout.detail-pendaftar', compact('pendaftar'));
    }

    public function updateStatus(Request $request, $id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->status_pendaftaran = $request->status_pendaftaran;
        // $data = $request->except('tgl_pendaftaran');
        // $pendaftar->fill($data);
        $pendaftar->save();

        return redirect()->back()->with('success', 'Status pendaftaran berhasil diperbarui.');
    }

    //All About User
    public function showUserPage()
    {
        $user = User::all();
        return view('admin.layout.user', compact('user'));
    }

    public function showDetailUserPage($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('admin.user')->with('error', 'User tidak ditemukan.');
        } 
        return view('admin.layout.detail-user', compact('user'));
    }

    // All About Setting
    public function showSettingPage()
    {
        $setting = Admin::all();
        return view('admin.layout.setting', compact('setting'));
    }

    public function showEditSettingPage($id)
    {
        $setting = Admin::find($id);
        return view('admin.layout.edit-setting', compact('setting'));
    }

    public function editSettingAction(Request $request, $id)
    {
        $setting = Admin::find($id);
        $setting->username = $request->username;
        $setting->password = $request->password;
        if ($request->filled('password')) {
            // Enkripsi password
            $setting->password = Hash::make($request->password);
        }
        $setting->save();

        return redirect()->route('admin.setting', ['id' => $id])->with('success', 'Setting Admin berhasil diupdate.');
    }
    
}
