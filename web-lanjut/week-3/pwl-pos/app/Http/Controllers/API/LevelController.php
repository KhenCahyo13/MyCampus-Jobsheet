<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LevelController extends Controller
{
    public function index() {
        $levels = Level::all();

        return response()->json([
            'success' => true,
            'message' => 'Get levels success.',
            'data' => $levels
        ], 200);
    }

    public function show($id) {
        $level = Level::find($id);

        if (!$level) {
            return response()->json([
                'success' => false,
                'message' => 'Level not found.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get level success.',
            'data' => $level
        ], 200);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Create level failed. Please check again your data.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();
        $level = Level::create($data);

        if (!$level) {
            return response()->json([
                'success' => false,
                'message' => 'Create level failed. Please try again.'
            ], 500);
        }
        
        return response()->json([
            'success' => true,
            'message' => 'Create level success.',
            'data' => $level
        ], 201);
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Update level failed. Please check again your data.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();
        $level = Level::find($id);

        if (!$level) {
            return response()->json([
                'success' => false,
                'message' => 'Level not found.'
            ], 404);
        }

        $level->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update level success.',
            'data' => $level
        ], 200);
    }

    public function destroy($id) {
        $level = Level::find($id);

        if (!$level) {
            return response()->json([
                'success' => false,
                'message' => 'Level not found.'
            ], 404);
        }

        $level->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete level success.'
        ], 200);
    }

    private function rules(): array
    {
        return [
            'level_code' => 'required|string|max:10|unique:levels,level_code',
            'level_name' => 'required|string|max:100',
        ];
    }
}
