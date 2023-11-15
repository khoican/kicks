<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'produk_id',
        'jumlah',
        'keuntungan',
        'created_at'
    ];

    public function order() {
        return $this->hasOne(Order::class);
    }

    public function produk() {
        return $this->hasOne(Produk::class);
    }
}
