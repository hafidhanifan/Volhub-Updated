<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    protected $fillable = [
        'id_kategori',
        'id_kriteria',
        'id_benefit',
        'nama_kegiatan',
        'lokasi_kegiatan',
        'lama_kegiatan',
        'sistem_kegiatan',
        'deskripsi',
        'tgl_penutupan',
        'tgl_kegiatan',
        'gambar'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function benefit()
    {
        return $this->belongsTo(Benefit::class, 'id_benefit');
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria');
    }
}
