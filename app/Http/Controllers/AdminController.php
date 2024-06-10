<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Kriteria;
use App\Models\Kategori;
use App\Models\Kegiatan;
use App\Models\Admin;
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
        $kriteria->list_kriteria = $request->list_kriteria;
        $kriteria->save();

        return redirect('/admin/kriteria');
    }

    public function editKriteriaAction(Request $request, $id)
    {
        $kriteria = Kriteria::find($id);
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->list_kriteria = $request->list_kriteria;
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
        $benefit->list_benefit = $request->list_benefit;
        $benefit->save();

        return redirect('/admin/benefit');
    }

    public function editBenefitAction(Request $request, $id)
    {
        $benefit = Benefit::find($id);
        $benefit->nama_benefit = $request->nama_benefit;
        $benefit->list_benefit = $request->list_benefit;
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


    // All About Kegiatan
    public function showKegiatanPage()
    {
        $kegiatan = Kegiatan::all();
        return view('admin.layout.kegiatan', compact('kegiatan'));
    }

    public function showAddKegiatanPage()
    {
        $kategori = Kategori::all();
        $benefit = Benefit::all();
        $kriteria = Kriteria::all();
        $sistemKegiatan = ['offline', 'online'];
        return view('admin.layout.add-kegiatan', compact('kategori','benefit','kriteria', 'sistemKegiatan'));
    }

    public function showDetailKegiatanPage($id)
    {
        $kegiatan = Kegiatan::with(['kategori', 'kriteria', 'benefit'])->find($id);
        if (!$kegiatan) {
            return redirect()->route('admin.kegiatan')->with('error', 'Kegiatan tidak ditemukan.');
        } 
        return view('admin.layout.detail-kegiatan', compact('kegiatan'));
    }

    public function showEditKegiatanPage($id)
    {
        $kegiatan = Kegiatan::with(['kategori', 'kriteria', 'benefit'])->find($id);
        $kategori = Kategori::all();
        $benefit = Benefit::all();
        $kriteria = Kriteria::all();
        $sistemKegiatan = ['offline', 'online'];
        return view('admin.layout.edit-kegiatan', compact('kegiatan', 'kategori','benefit','kriteria', 'sistemKegiatan'));
    }

    public function addKegiatanAction(Request $request)
    {
        $kegiatan = new Kegiatan;
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->id_kategori = $request->kategori;
        $kegiatan->lokasi_kegiatan = $request->lokasi_kegiatan;
        $kegiatan->lama_kegiatan = $request->lama_kegiatan;
        $kegiatan->sistem_kegiatan = $request->sistem_kegiatan;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->tgl_penutupan = $request->tgl_penutupan;
        $kegiatan->tgl_kegiatan = $request->tgl_kegiatan;
        $kegiatan->gambar=$request->gambar;

        $kegiatan->id_kriteria = $request->kriteria;
        $kegiatan->id_benefit = $request->nama_benefit;
        $kegiatan->save();

        return redirect('/admin/kegiatan');
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
        $kegiatan->gambar=$request->gambar;

        $kegiatan->id_kriteria = $request->kriteria;
        $kegiatan->id_benefit = $request->nama_benefit;
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

    // All About Setting
    public function showSettingPage()
    {
        $setting = Admin::all();
        return view('admin.layout.setting', compact('setting'));
    }

    public function editSettingAction(Request $request, $id)
    {
        $setting = Admin::find($id);
        $setting->username = $request->username;
        $setting->password = $request->password;
        $setting->save();

        return redirect()->route('admin.edit-setting-page', ['id' => $id])->with('success', 'Setting Admin berhasil diupdate.');
    }
    
}
