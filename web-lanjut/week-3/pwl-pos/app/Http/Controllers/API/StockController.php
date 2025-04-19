<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StockController extends Controller
{
    public function index() {
        $stocks = Stock::with('item')->get();

        return response()->json([
            'success' => true,
            'message' => 'Get stocks success.',
            'data' => $stocks
        ], 200);
    }

    public function show($id) {
        $stock = Stock::with('item')->find($id);

        if (!$stock) {
            return response()->json([
                'success' => false,
                'message' => 'Stock not found.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get stock success.',
            'data' => $stock
        ], 200);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Create stock failed. Please check again your data.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();
        $data['user_id'] = auth()->user()->user_id;
        $stock = Stock::create($data);

        if (!$stock) {
            return response()->json([
                'success' => false,
                'message' => 'Create stock failed. Please try again.'
            ], 500);
        }
        
        return response()->json([
            'success' => true,
            'message' => 'Create stock success.',
            'data' => $stock
        ], 201);
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Update stock failed. Please check again your data.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();
        $data['user_id'] = auth()->user()->user_id;
        $stock = Stock::find($id);

        if (!$stock) {
            return response()->json([
                'success' => false,
                'message' => 'Stock not found.'
            ], 404);
        }

        $stock->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Update stock success.',
            'data' => $stock
        ], 200);
    }

    public function destroy($id) {
        $stock = Stock::find($id);

        if (!$stock) {
            return response()->json([
                'success' => false,
                'message' => 'Stock not found.'
            ], 404);
        }

        $stock->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete stock success.'
        ], 200);
    }

    private function rules(): array
    {
        return [
            'item_id' => 'required|exists:items,item_id',
            'stock_qty' => 'required|numeric',
        ];
    }
}
