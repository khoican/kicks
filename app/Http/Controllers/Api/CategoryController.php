<?php

namespace App\Http\Controllers\Api;

use Validator;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    public function index() {
        $category = Category::all();

        return new CategoryResource(true, 'Success Show Data', $category);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $category = Category::create([
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return new CategoryResource(true, 'Post Data Success', $category);
    }

    public function show(Category $category) {
        return new CategoryResource(true, 'Get Data Success', $category);
    }

    public function update(Request $request, Category $category) {
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $category->update([
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return new CategoryResource(true, 'Update Data Success', $category);
    }

    public function destroy(Category $category) {
        $category->delete();

        return new CategoryResource(true, 'Delete Data Success', $category);
    }
}
