<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            'email' => ['required','email'],
            'password' => 'required',
            'ISO3' => 'required'
        ]);

        $user = new User();
        $user->fill($request->all());
        $user->role_id = 2; # Role ID as user
        $user->password = Hash::make($request->password);  #Hash password
        $user->save();

        auth()->login($user);

        echo "<script type='text/javascript'>alert('New user added successfully');</script>";

        return redirect()->to('/login');
    }

    
    public function loginUser(Request $request){
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);;


        $user = User::where('email',$request->email)->first();

        if(Hash::check(request('password'),$user->getAuthPassword())){
            $token = $user->createToken(time())->plainTextToken;
            $user = Auth::user();
            $articles = Article::all();
            return view('main',compact('user','articles'));
        }

        echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
        return redirect()->back();

        /* 
        #Cookies
        if(Auth::attempt($credentials,true)){
            $user = Auth::user();
            return view('main',compact('user'));
        }

        echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
        return redirect()->back();
        */
    
    }

    public function logoutUser(){

        auth()->user()->currentAccessToken()->delete();

        /*
        # Cookies logout
        auth()->logout();

        return redirect()->to('/login');
        */
    
    }


}
