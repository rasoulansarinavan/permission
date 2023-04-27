<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::all()
        ]);
    }

    public function update(User $user, Request $request)
    {

//        $user->revokePermissionTo($user->permissions);

//        $user->givePermissionTo($request->get('permissions'));


        $user->syncPermissions($request->get('permissions'));

        return redirect('/users');
    }

    public
    function edit(User $user)
    {
        return view('users.edit', ['user' => $user, 'permissions' => Permission::all()]);
    }
}
