<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showingName(string | int $id, string $name) {
        $data = [
            'id' => $id,
            'name' => $name
        ];

        return view('user.profile', compact($data));
    }
}
