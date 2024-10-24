<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class p5ra extends Model
{
    use HasFactory;
    protected $table = 'p5ra';
    protected $fillable = ['id', 'judul', 'deskripsi', 'gambar'];
}
