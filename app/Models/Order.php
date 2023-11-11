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
        'harga_beli',
        'harga_normal',
        'harga_jual',
    ];
}
