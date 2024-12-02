<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Menambahkan kolom yang dapat diisi secara massal
    protected $fillable = ['title', 'content'];
}