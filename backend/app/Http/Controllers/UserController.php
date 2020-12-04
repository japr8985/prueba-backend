<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestUser;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    public function store(RequestUser $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->save();

        return response()->json($user);
    }

    public function show(User $user)
    {
        return response()->json($user);
    }

    public function update(RequestUser $request, User $user)
    {
        $user->fill($request->all());
        $user->save();

        return response()->json($user);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json($user);
    }
}
