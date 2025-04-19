<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'username' => 'required|max:20|unique:users,username',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Register failed. Please check again your data.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        $data['level_id'] = 3; // staff
        $user = User::create($data);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Register failed. Please try again.'
            ], 500);
        }

        return response()->json([
            'success' => true,
            'message' => 'Register success.',
            'data' => $user
        ], 201);
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Login failed. Please check again your data.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();
        $user = User::where('username', $data['username'])->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Login failed. Username or password is incorrect.'
            ], 401);
        }

        if (!password_verify($data['password'], $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Login failed. Username or password is incorrect.'
            ], 401);
        }

        $token = auth()->attempt($data);

        return response()->json([
            'success' => true,
            'message' => 'Login success.',
            'data' => $user,
            'metadata' => [
                'accesstoken' => $token,
            ]
        ], 200);
    }

    public function logout() {
        auth()->logout();

        return response()->json([
            'success' => true,
            'message' => 'Logout success.'
        ], 200);
    }
}
