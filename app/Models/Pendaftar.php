<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'data_pendaftar';
    protected $primaryKey = 'id_pendaftar';
    protected $fillable = [
        'motivasi',
        'status_pendaftaran',
        'tgl_pendaftaran'
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($model) {
    //         $model->tgl_pendaftaran = now();
    //     });

    //     static::updating(function ($pendaftar) {
    //         // Kosongkan event ini jika tgl_pendaftaran tidak boleh diubah saat update
    //     });
    // }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'id_kegiatan');
    }

}