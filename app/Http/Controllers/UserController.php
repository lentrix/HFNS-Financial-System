<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('created_at', 'desc')->with('roles')->get();
        return inertia('User/Index', [
            'users' => $users
        ]);
    }

    public function create(){
        return inertia('User/Create', [
            'roles' => Role::all(),
            'permissions' => Permission::all(),

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
            'role' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']); // Hash the password

        unset($data['role']);
        $role = $request->role;

        $user = User::create($data);

        $user->assignRole($role);

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }

    public function edit(User $user){
        $roles = Role::all();
        $user->load('roles')->find($user->id);
        return inertia('User/Edit', [
            'user' => $user,
            'roles' => $roles,
            'currentRole' => $user->roles->first()->name,
        ]);
    }

    public function update(Request $request, User $user){
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string',
            'role' => 'required',
        ]);

        if (isset($data['password']) && $data['password'] !== null) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']); // Remove the "password" field from the data array
        }
        $role = $request->role;

        $user->update($data);

        $user->syncRoles([$data['role']]);

        $currentRole = $user->getRoleNames()->first();

        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user) {
        $user->delete();
        return back()->with('success', 'User deleted successfully.');
    }

}
