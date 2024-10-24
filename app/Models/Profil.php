<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'profil';
    protected $fillable = [
        'id',               
        'judul',
        'subjudul',
        'sejarahsingkat',
        'list1',
        'list2',
        'list3',
        'penutup',
    ];
}
