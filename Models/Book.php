<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'id','nama_mobil','brand_mobil','warna_mobil','tipe_mobil','harga_mobil'
    ];
}
