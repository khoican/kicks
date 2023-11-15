<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'firstname',
        'lastname',
        'alamat',
        'no_telp',
        'pengiriman',
        'ongkir',
        'harga_produk',
        'total',
        'created_at'
    ];

    public function order_detail() {
        return $this->belongsTo(OrderDetail::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }
}
