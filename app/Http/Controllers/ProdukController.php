<?php

namespace App\Http\Controllers;

use Validator;
use Carbon\Carbon;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Resources\ProdukResource;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index() {
        $produk = Produk::all();

        return new ProdukResource(true, "Get Data Success", $produk);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'brand_id' => 'required',
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'gambar_1' => 'required|image|mimes:jepg,png,jpg,svg|max:4096',
            'gambar_2' => 'required|image|mimes:jepg,png,jpg,svg|max:4096',
            'gambar_3' => 'required|image|mimes:jepg,png,jpg,svg|max:4096',
            'gambar_4' => 'required|image|mimes:jepg,png,jpg,svg|max:4096',
            'harga_beli' => 'required',
            'harga_normal' => 'required',
            'harga_jual' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $image_1 = $request->file('gambar_1');
        $image_1->storeAs('public/product', $image_1->hashName());

        $image_2 = $request->file('gambar_2');
        $image_2->storeAs('public/product', $image_2->hashName());

        $image_3 = $request->file('gambar_3');
        $image_3->storeAs('public/product', $image_3->hashName());

        $image_4 = $request->file('gambar_4');
        $image_4->storeAs('public/product', $image_4->hashName());


        $produk = Produk::create([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'gambar_1' => $image_1->hashName(),
            'gambar_2' => $image_2->hashName(),
            'gambar_3' => $image_3->hashName(),
            'gambar_4' => $image_4->hashName(),
            'harga_beli' => $request->harga_beli,
            'harga_normal' => $request->harga_normal,
            'harga_jual' => $request->harga_jual,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        return new ProdukResource(true, 'Post Data Success', $produk);
    }

    public function show(Produk $produk) {
        return new ProdukResource(true, 'Get Data Success', $produk);
    }

    public function update(Request $request, Produk $produk) {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'brand_id' => 'required',
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'gambar_1' => 'required|image|mimes:jepg,png,jpg,svg|max:4096',
            'gambar_2' => 'required|image|mimes:jepg,png,jpg,svg|max:4096',
            'gambar_3' => 'required|image|mimes:jepg,png,jpg,svg|max:4096',
            'gambar_4' => 'required|image|mimes:jepg,png,jpg,svg|max:4096',
            'harga_beli' => 'required',
            'harga_normal' => 'required',
            'harga_jual' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('gambar_1')) {
            $image_1 = $request->file('gambar_1');
            $image_1->storeAs('public/product', $image_1->hashName());

            Storage::delete('public/product/'.$produk->gambar_1);

            $produk->update([
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'nama_produk' => $request->nama_produk,
                'deskripsi' => $request->deskripsi,
                'gambar_1' => $image_1->hashName(),
                'harga_beli' => $request->harga_beli,
                'harga_normal' => $request->harga_normal,
                'harga_jual' => $request->harga_jual,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        } else if ($request->hasFile('gambar_2')) {
            $image_2 = $request->file('gambar_2');
            $image_2->storeAs('public/product', $image_2->hashName());

            Storage::delete('public/product/'.$produk->gambar_2);

            $produk->update([
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'nama_produk' => $request->nama_produk,
                'deskripsi' => $request->deskripsi,
                'gambar_2' => $image_2->hashName(),
                'harga_beli' => $request->harga_beli,
                'harga_normal' => $request->harga_normal,
                'harga_jual' => $request->harga_jual,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

        } else if ($request->hasFile('gambar_3')) {
            $image_3 = $request->file('gambar_3');
            $image_3->storeAs('public/product', $image_3->hashName());

            Storage::delete('public/product/'.$produk->gambar_3);

            $produk->update([
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'nama_produk' => $request->nama_produk,
                'deskripsi' => $request->deskripsi,
                'gambar_3' => $image_3->hashName(),
                'harga_beli' => $request->harga_beli,
                'harga_normal' => $request->harga_normal,
                'harga_jual' => $request->harga_jual,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

        } else if ($request->hasFile('gambar_4')) {
            $image_4 = $request->file('gambar_4');
            $image_4->storeAs('public/product', $image_4->hashName());

            Storage::delete('public/product/'.$produk->gambar_4);

            $produk->update([
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'nama_produk' => $request->nama_produk,
                'deskripsi' => $request->deskripsi,
                'gambar_4' => $image_4->hashName(),
                'harga_beli' => $request->harga_beli,
                'harga_normal' => $request->harga_normal,
                'harga_jual' => $request->harga_jual,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

        } else {
            $produk->update([
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'nama_produk' => $request->nama_produk,
                'deskripsi' => $request->deskripsi,
                'harga_beli' => $request->harga_beli,
                'harga_normal' => $request->harga_normal,
                'harga_jual' => $request->harga_jual,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }

        return new ProdukResource(true, 'Post Data Success', $produk);
    }

    public function destroy(Produk $produk) {
        Storage::delete('public/product/'.$produk->gambar_1);
        Storage::delete('public/product/'.$produk->gambar_2);
        Storage::delete('public/product/'.$produk->gambar_3);
        Storage::delete('public/product/'.$produk->gambar_4);

        $produk->delete();

        return new ProdukResource(true, 'Delete Data Success', $produk);
    }
}
