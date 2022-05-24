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

    public function edit(){
        $user = User::find(Auth::user()->id);
        return view('System.User.profile', compact('user'));
    } 

    public function getAllUsers(){
        return User::all(); // Ejemplo
    }

    public function createUser(Request $request){
        $data = new User();
        $data->fill($request->all());

        $data->save();

        return json_encode(['status'=> 'Success','data'=> $data,200]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore($id)],
        ]);

        if($request->password){
            $request->validate([
                'password' => 'sometimes|confirmed|min:8',
            ]);

            $data = User::find($id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->save();

        }else{
            $data = User::find($id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->save();
        }
       
        
        flash('Changes saved successfully')->success();
        return redirect(route('acoount'));
    }


}
