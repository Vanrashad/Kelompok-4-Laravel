<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

    // Mengizinkan kolom ini diisi melalui form
    protected $fillable = ['judul', 'konten']; 
}