<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getAllUsers(){
        return User::all(); // Ejemplo
    }

    public function createUser(Request $request){
        $data = new User();
        
    }
}
