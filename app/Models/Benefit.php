<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'benefit';
    protected $primaryKey = 'id_benefit';
    protected $fillable = [
        'nama_benefit',
        'list_benefit'
    ];
}
