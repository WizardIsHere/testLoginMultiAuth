<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function Index() {
        $users = User::all();
        return view('admin.users.index', compact('users'));

    // $users = User::with('avatar')->get();
    // return view('users.index', ['users' => $users]);

    }
}
