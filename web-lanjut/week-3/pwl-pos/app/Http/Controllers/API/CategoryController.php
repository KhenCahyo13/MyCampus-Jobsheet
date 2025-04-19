<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();

        return response()->json([
            'success' => true,
            'message' => 'Get categories success.',
            'data' => $categories
        ], 200);
    }

    public function show($id) {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get category success.',
            'data' => $category
        ], 200);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Create category failed. Please check again your data.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();
        $category = Category::create($data);

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Create category failed. Please try again.'
            ], 500);
        }
        
        return response()->json([
            'success' => true,
            'message' => 'Create category success.',
            'data' => $category
        ], 201);
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Update category failed. Please check again your data.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found.'
            ], 404);
        }

        $category->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update category success.',
            'data' => $category
        ], 200);
    }

    public function destroy($id) {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found.'
            ], 404);
        }

        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete category success.'
        ], 200);
    }

    private function rules(): array
    {
        return [
            'category_code' => 'required|string|max:10|unique:categories,category_code',
            'category_name' => 'required|string|max:100',
        ];
    }
}
