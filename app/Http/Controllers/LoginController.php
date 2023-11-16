<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 402);
        }

        $credentials = $request->only('email','password');

        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'massage' => 'Email atau Password Salah'
            ], 401);
        }

        return response()->json([
            'success'=> true,
            'user' => auth()->guard('api')->user(),
            'token'=> $token
        ], 200);
    }
}
