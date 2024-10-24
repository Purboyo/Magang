<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listppdb extends Model
{
    use HasFactory;
    protected $table = 'listppdb';
    protected $fillable = [
        'list',
    ];
}
