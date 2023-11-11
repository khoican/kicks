<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $fillable = [
        'category_id',
        'brand_id',
        'nama_produk',
        'deskripsi',
        'gambar_1',
        'gambar_2',
        'gambar_3',
        'gambar_4',
        'harga_beli',
        'harga_normal',
        'harga_jual'
    ];

    public function category() {
        return $this->hasOne(Category::class);
    }

    public function brands() {
        return $this->hasOne(Brand::class);
    }
}
