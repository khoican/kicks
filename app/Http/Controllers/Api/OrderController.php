<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Resources\OrderResource;
use App\Http\Controllers\Api\Controller;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index() {
        $order = Order::all();

        return new OrderResource(true, 'Get Data Success', $order);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'email' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'pengiriman' => 'required',
            'status' => 'required',
            'ongkir' => 'required',
            'harga_produk' => 'required',
            'total' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $order = Order::create([
            'user_id' => $request->user_id,
            'email' => $request->email,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'pengiriman' => $request->pengiriman,
            'status' => $request->status,
            'ongkir' => $request->ongkir,
            'harga_produk' => $request->harga_produk,
            'total' => $request->total,
        ]);

        return new OrderResource(true, 'Post Data Success', $order);
    }

    public function show(Order $order) {
        return new OrderResource(true, 'Get Data Success', $order);
    }

    public function update(Request $request, Order $order) {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'email' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'pengiriman' => 'required',
            'status' => 'required',
            'ongkir' => 'required',
            'harga_produk' => 'required',
            'total' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $order->update([
            'user_id' => $request->user_id,
            'email' => $request->email,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'pengiriman' => $request->pengiriman,
            'status' => $request->status,
            'ongkir' => $request->ongkir,
            'harga_produk' => $request->harga_produk,
            'total' => $request->total,
        ]);

        return new OrderResource(true, 'Update Data Success', $order);
    }

    public function destroy (Order $order) {
        $order->delete();

        return new OrderResource(true, 'Delete Data Success', $order);
    }
}
