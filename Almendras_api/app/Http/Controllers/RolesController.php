<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        session_start();
        $email = $_SESSION['email'];
        $user = User::where('email',$email)->first();


        if($user->role_id != 1){
            echo "<script type='text/javascript'>alert('You don't have access');</script>";
            return redirect()->back();
        }


        $roles = Role::all();
        return view('roles_forms',compact('roles','user'));
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

    public function editRole($id){

        $role = Role::find($id);

        return view('edit_role', compact('role'));

    }

    public function updateRole(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->name;
        $role->description = $request->description;
        $role->save();

        return redirect()->to('/roles_management');
    }
}
