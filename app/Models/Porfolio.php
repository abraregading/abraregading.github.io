<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porfolio extends Model
{
    use HasFactory;
    protected $table = 'porfolio';
    protected $fillable = ['kategori_id','judul','gambar'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
