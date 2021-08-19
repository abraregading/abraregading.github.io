<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porpolio extends Model
{
    use HasFactory;
    protected $table = 'porpolio';
    protected $fillable = ['kategori_id','judul','isi1','isi2','isi3','gambar'];
}
