<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
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

    public function store(StoreUpdateUserFormRequest $request)
    {

        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        User::create($data);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if (!$user = User::find($id)) {
            return back();
        } else {
            return view('site.pages.user-edit', compact('user'));
        }
    }

    public function update(Request $request, $id)
    {
        if (!$user = User::find($id)) {
            return back();
        } else {
            $data = $request->only('email', 'name');
            if ($request->password) {
                $data['password'] = bcrypt($request->password);
            }
            $user->update($data);

            return redirect()->route('users.index');
        }
    }
}
