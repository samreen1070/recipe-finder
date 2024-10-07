<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


class RoleController extends Controller
{
    public function create()
    {
        return view('admin.roles.create');
    }

    public function index()
    {
        $roles = Role::with("permissions")->get();
        return view('admin.roles.index', compact('roles'));
    }


    public function store(Request $request )
    {
        $role=new Role;
        $role->name=$request->name;
        $role->guard_name = 'web';
        $role->save();

        $role->givePermissionTo($request->permission_id);
        return redirect()->route("roles.index");
    }
    public function delete($id)
    {
        $role=Role::find($id);
        $role->delete();
        return redirect()->route('roles.index');

    }

    public function edit($id)
    {
        $role=Role::find($id);
        return view('admin.roles.update',compact('role'));
    }

    public function update(Request $request,$id)
    {
        $role=Role::find($id);
        $role->name=$request->name;
        $role->guard_name = 'web';
        $role->save();
        return redirect()->route('roles.index');


    }





}
