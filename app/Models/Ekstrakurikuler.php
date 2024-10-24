<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    use HasFactory;
    protected $table = 'esktrakurikuler';
    protected $fillable = [
        'nama',
        'sub_nama',
        'konten',
        'image',
    ];
}
