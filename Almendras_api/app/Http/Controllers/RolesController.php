<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function getAllRoles(){
        $data = Role::all();
        return json_encode(['status'=> 'Success','data'=> $data,200]);
    }

    public function createRole(Request $request){
        $data = new Role();
        $data->fill($request->all());

        $data->save();

        return json_encode(['status'=> 'Success','data'=> $data,200]);
    }
}
