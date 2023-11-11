<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori', 
        'deskirpsi'
    ];

    public function produks() {
        return $this->hasMany(Produk::class);
    }
}
