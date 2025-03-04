<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::with('level')->get();

        return view('pages.user.index', compact('users'));
    }

    public function show(string $id) {
        $user = User::findOrFail($id);

        return view('pages.user.details', compact('user'));
    }

    public function storePage() {
        return view('pages.user.store');
    }

    public function updatePage(string $id) {
        $user = User::findOrFail($id);

        return view('pages.user.update', compact('user'));
    }

    public function store(Request $request) {
        $operation = User::create([
            'level_id' => $request->level_id,
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        if (!$operation) {
            return 'Failed to insert data!';
        }

        return redirect()->route('user.index');
    }

    public function update(Request $request, string $id) {
        $operation = User::where('user_id', $id)->update([
            'level_id' => $request->level_id,
            'name' => $request->name,
            'username' => $request->username,
        ]);

        if (!$operation) {
            return 'Failed to update data!';
        }

        return redirect()->route('user.index');
    }

    public function delete(string $id) {
        $operation = User::destroy('user_id', $id);

        if (!$operation) {
            return 'Failed to delete data!';
        }

        return 'Successufully delete data!';
    }
}
