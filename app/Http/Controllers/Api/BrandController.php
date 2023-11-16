<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Resources\BrandResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Api\Controller;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    public function index() {
        $brand = Brand::all();

        return new BrandResource(true, 'Show Data Brand', $brand);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama_brand' => 'required',
            'logo' => 'required|image|mimes:jepg,png,jpg,svg|max:4096',
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $image = $request->file('logo');
        $image->storeAs('public/logo', $image->hashName());

        $brand = Brand::create([
            'nama_brand' => $request->nama_brand,
            'logo' => $image->hashName(),
            'create_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        return new BrandResource(true, 'Insert Data Brand Success', $brand);
    }

    public function show(Brand $brand) {
        return new BrandResource(true, 'Get Data', $brand);
    }

    public function update(Request $request, Brand $brand) {
        $validator = Validator::make($request->all(), [
            'nama_brand' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $image->storeAs('public/logo', $image->hashName());

            Storage::delete('public/logo/'.$brand->logo);

            $brand->update([
                'nama_brand' => $request->nama_brand,
                'logo' => $image->hashName(),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        } else {
            $brand->update([
                'nama_brand' => $request->nama_brand,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        };


        return new BrandResource(true, 'Insert Data Brand Success', $brand);
    }

    public function destroy(Brand $brand) {
        Storage::delete('public/logo/'.$brand->logo);
        $brand->delete();

        return new BrandResource(true, 'Success Deleting Data', $brand);
    }
}
