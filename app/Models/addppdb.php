<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addppdb extends Model
{
    use HasFactory;
    protected $table = 'addppdb';
    protected $fillable = ['ikon', 'title', 'description'];
}
