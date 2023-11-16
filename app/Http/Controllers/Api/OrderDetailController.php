<?php

namespace App\Http\Controllers\Api;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\OrderDetailResource;

class OrderDetailController extends Controller
{
    public function index() {
        $order_detail = OrderDetail::all();

        return new OrderDetailResource(true, 'Get Data Success', $order_detail);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required',
            'produk_id' => 'required',
            'jumlah' => 'required',
            'keuntungan' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $order_detail = OrderDetail::create([
            'order_id' => $request->order_id,
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
            'keuntungan' => $request->keuntungan
        ]);

        return new OrderDetailResource(true, 'Post Data Success', $order_detail);
    }

    public function show(OrderDetail $order_detail) {
        return new OrderDetailResource(true, 'Get Data Success', $order_detail);
    }

    public function destroy(OrderDetail $order_detail) {
        $order_detail->delete();

        return new OrderDetailResource(true, 'Delete Data Success', $order_detail);
    }
}
