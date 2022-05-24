<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles_forms',compact('roles'));
    }

    public function getAllRoles(){
        $data = Role::all();
        return json_encode(['status'=> 'Success','data'=> $data,200]);
    }

    public function createRole(Request $request){
        $data = new Role();
        $data->fill($request->all());

        $data->save();

        echo "<script type='text/javascript'>alert('New role added successfully');</script>";

        return redirect()->to('/roles_management');

    }

    public function edit($id){
        flash('Role saved successfully')->success();

        $role = Role::find($id);
        return view('roles_forms', compact('role'));

    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->name;
        $role->description = $request->description;
        $role->save();
       
        flash('Role saved successfully')->success();
        return redirect(route('/roles_management'));
    }
}
