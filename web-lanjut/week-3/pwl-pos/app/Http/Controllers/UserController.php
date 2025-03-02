<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return view('pages.user.index', compact('users'));
    }

    public function store() {
        $operation = User::create([
            'level_id' => fake()->numberBetween(1, 3),
            'name' => fake()->name(),
            'username' => fake()->unique()->userName,
            'password' => bcrypt('123456'),
        ]);

        if (!$operation) {
            return 'Failed to insert data!';
        }

        return 'Successufully insert data!';
    }

    public function update(string $id) {
        $operation = User::where('user_id', $id)->update(['name' => fake()->name()]);

        if (!$operation) {
            return 'Failed to update data!';
        }

        return 'Successufully update data!';
    }

    public function delete(string $id) {
        $operation = User::destroy('user_id', $id);

        if (!$operation) {
            return 'Failed to delete data!';
        }

        return 'Successufully delete data!';
    }
}
