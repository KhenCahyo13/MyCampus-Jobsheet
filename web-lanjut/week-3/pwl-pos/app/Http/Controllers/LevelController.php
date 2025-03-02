<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index() {
        $levels = DB::select('SELECT * FROM levels');

        return view('pages.level.index', compact('levels'));
    }

    public function store() {
        $operation = DB::insert('INSERT INTO levels(level_code, level_name) VALUES (?, ?)', [
            fake()->unique()->numerify('###'),
            fake()->name
        ]);

        if (!$operation) {
            return 'Failed to insert data!';
        }

        return 'Successufully insert data!';
    }

    public function update(string $id) {
        $operation = DB::update('UPDATE levels SET level_name = ? WHERE level_id = ?', ['Customer', $id]);

        if (!$operation) {
            return 'Failed to update data!';
        }

        return 'Successufully update data!';
    }

    public function delete(string $id) {
        $operation = DB::delete('DELETE FROM levels WHERE level_id = ?', [$id]);

        if (!$operation) {
            return 'Failed to delete data!';
        }

        return 'Successufully delete data!';
    }
}
