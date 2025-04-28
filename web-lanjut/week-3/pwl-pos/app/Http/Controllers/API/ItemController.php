<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    public function index() {
        $items = Item::with('category')->get();

        return response()->json([
            'success' => true,
            'message' => 'Get items success.',
            'data' => $items
        ], 200);
    }

    public function show($id) {
        $item = Item::with('category')->find($id);

        if (!$item) {
            return response()->json([
                'success' => false,
                'message' => 'Item not found.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get item success.',
            'data' => $item
        ], 200);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Create item failed. Please check again your data.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();
        if ($request->file('image') !== null) {
            $filePath = $request->file('image')->store('item-images', 'public');
            $data['image'] = $filePath;   
        }
        $item = Item::create($data);

        if (!$item) {
            return response()->json([
                'success' => false,
                'message' => 'Create item failed. Please try again.'
            ], 500);
        }
        
        return response()->json([
            'success' => true,
            'message' => 'Create item success.',
            'data' => $item
        ], 201);
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Update item failed. Please check again your data.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();
        if ($request->file('image') !== null) {
            $filePath = $request->file('image')->store('item-images', 'public');
            $data['image'] = $filePath;   
        }
        $item = Item::find($id);

        if (!$item) {
            return response()->json([
                'success' => false,
                'message' => 'Item not found.'
            ], 404);
        }

        $item->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update item success.',
            'data' => $item
        ], 200);
    }

    public function destroy($id) {
        $item = Item::find($id);

        if (!$item) {
            return response()->json([
                'success' => false,
                'message' => 'Item not found.'
            ], 404);
        }

        $item->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete item success.'
        ], 200);
    }

    private function rules(): array
    {
        return [
            'category_id' => 'required|exists:categories,category_id',
            'item_code' => 'required|string|max:10|unique:items,item_code',
            'item_name' => 'required|string|max:100',
            'item_buy_price' => 'required|numeric',
            'item_sell_price' => 'required|numeric',
            'image' => 'required|mimes:jpeg,png,jpg|max:2048'
        ];
    }
}
