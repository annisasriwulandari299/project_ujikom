<?php

namespace App\Http\Controllers\Api;
use Auth;
use validator;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        if (! Auth::attempt($request->only('email', 'password'))) {
            return responese()->json([
                'message'=> 'Unauthorized',
            ], 401);
        }
        $user = User::where('email', $request->email)->firstOrFail();
        $token = $uer->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message'     => 'Login Succes',
            'acces_token' => $token,
            'token_type'  => 'Bearer',
        ], 200);
    
    }
    public function resgister(Request $request)
    {
        // validasi
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return response()->json([
            'message' => 'Register Success',
            'data' => $user,
        ], 201);
       
    }
    public function logout()
    {
        Auth::user()->tokens()->delete();
        return response()->json([
            'message' => 'Logout Success'
        ]);

    }
}

