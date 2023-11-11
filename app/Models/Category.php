<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = categories;

    protected $fillable = [
        'kategori',
        'deskirpsi'
    ];

    public function produk () {
        return $this->belongsTo(Produk::class);
    }
}
