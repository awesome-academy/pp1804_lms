<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(config('customs.paginate.number_of_user_page'));

        return view('backend.user.index', compact('users'));
    }

    public function create()
    {
        return view('backend.user.add');
    }

    public function store(UserRequest $request)
    {
        $inputs = $request->all();
        $user = User::create($inputs);

        return redirect()->route('admin.users.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('backend.user.edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $inputs = $request->all();
        $user->update($inputs);

        return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
        $user = User::destroy($id);

        return redirect()->route('admin.users.index');
    }
}
