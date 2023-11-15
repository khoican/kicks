<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'firstname',
        'lastname',
        'alamat',
        'no_telp',
        'pengiriman',
        'ongkir',
        'harga_produk',
        'total',
    ];

    public function order_detail() {
        return $this->belongsTo(OrderDetail::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }
}
