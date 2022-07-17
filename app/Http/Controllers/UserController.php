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
        if (!$user = User::find($id)) {
            return back();
        } else {
            return view('site.pages.user', compact('user'));
        }
    }

    public function create()
    {
        return view('site.pages.user-create');
    }

    public function store(Request $request)
    {

        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        User::create($data);

        return redirect()->route('users.index');
    }
}
