<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'kriteria';
    protected $primaryKey = 'id_kriteria';
    protected $fillable = [
        'nama_kriteria',
        'list_kriteria'
    ];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'id_kegiatan');
    }
}
