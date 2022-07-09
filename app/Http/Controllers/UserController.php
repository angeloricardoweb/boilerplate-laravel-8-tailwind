<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('site.pages.users', compact('users'));
    }

    public function show($id)
    {
        return view('site.pages.user', ['id' => $id]);
    }
}
