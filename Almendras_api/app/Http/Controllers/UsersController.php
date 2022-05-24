<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        $countries = Country::all();
        return view('login',compact('countries'));
    }

    public function getAllUsers(){
        return User::all(); // Ejemplo
    }

    public function createUser(Request $request){

        $this->validate(request(),[
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'ISO3' => 'required'
        ]);

        $user = new User();
        $user->fill($request->all());
        $user->role_id = 2; # Role ID as user
        $user->save();

        auth()->login($user);

        echo "<script type='text/javascript'>alert('New user added successfully');</script>";

        return redirect()->to('/login');
    }

}
