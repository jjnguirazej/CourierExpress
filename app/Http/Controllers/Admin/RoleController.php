<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index', ['roles' => $roles]);
    }

    public function create()
    {
        return view('admin.role.create');
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('admin.role.edit', ['role' => $role]);
    }

    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return redirect()->back()->with('delete', 'Role Deleted Successfully');
    }
}
