<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index() {
        $users = User::with('level')->get();

        return response()->json([
            'success' => true,
            'message' => 'Get users success.',
            'data' => $users
        ], 200);
    }

    public function show($id) {
        $user = User::with('level')->find($id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get user success.',
            'data' => $user
        ], 200);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Create user failed. Please check again your data.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();
        $user = User::create($data);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Create user failed. Please try again.'
            ], 500);
        }
        
        return response()->json([
            'success' => true,
            'message' => 'Create user success.',
            'data' => $user
        ], 201);
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Update user failed. Please check again your data.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found.'
            ], 404);
        }

        $user->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update user success.',
            'data' => $user
        ], 200);
    }

    public function destroy($id) {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found.'
            ], 404);
        }

        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete user success.'
        ], 200);
    }

    private function rules(): array
    {
        return [
            'username' => 'required|string|max:20|unique:users,username',
            'name' => 'required|string|max:100',
            'level_id' => 'required|exists:levels,level_id',
            'password' => 'required|string|min:8',
        ];
    }
}
