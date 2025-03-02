<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index() {
        $categories = DB::table('categories')->get();

        return view('pages.category.index', compact('categories'));
    }

    public function store() {
        $operation = DB::table('categories')->insert([
            'category_code' => fake()->unique()->numerify('###'),
            'category_name' => fake()->name()
        ]);

        if (!$operation) {
            return 'Failed to insert data!';
        }

        return 'Successufully insert data!';
    }

    public function update(string $id) {
        $operation = DB::table('categories')
            ->where('category_id', $id)
            ->update(['category_name' => 'Updated Category']);

        if (!$operation) {
            return 'Failed to update data!';
        }

        return 'Successufully update data!';
    }

    public function delete(string $id) {
        $operation = DB::table('categories')
            ->where('category_id', $id)
            ->delete();

        if (!$operation) {
            return 'Failed to delete data!';
        }

        return 'Successufully delete data!';
    }
}
