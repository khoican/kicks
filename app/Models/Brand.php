<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = brands;

    protected $fillable = [
        'nama_brand',
        'logo'
    ];

    public function produk () {
        return $this->belongsTo(Produk::class);
    }
}
