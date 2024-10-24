<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deskripsi extends Model
{
    use HasFactory;
    protected $table = 'deskripsi';
    protected $fillable = [
        'nama',
        'npsn',
        'alamat',
        'desa',
        'kecamatan',
        'kota',
        'provinsi',
        'negara',
        'status',
        'bentuk',
    ];
}
