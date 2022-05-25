<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{

    public function index()
    {

        session_start();

        $articles = Article::all();
        $countries = Country::all();

        try {
            $value = $_SESSION['email'];
            if ($value !=""){
                return view('main',compact('articles')); 
            }
            else{
                return view('login',compact('countries'));
            }
        } catch (\Throwable $th) {
            //throw $th;
            return view('login',compact('countries'));
        }

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
            session_start();
            #$token = $user->createToken(time())->plainTextToken;
            $user = Auth::user();
            $articles = Article::all();

            $email = $_POST['email'];
            $password = $_POST['password'];


            $_SESSION['email'] = $request->email; 
            // Get session values.
	        #$value = $_SESSION['email'];

            return redirect()->to('/main');

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

        #auth()->user()->currentAccessToken()->delete();

        session_start();

        // Destruir todas las variables de sesión.
        $_SESSION = array();

        // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
        // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Finalmente, destruir la sesión.
        session_destroy();

        return redirect()->to('/login');

        /*
        # Cookies logout
        auth()->logout();

        return redirect()->to('/login');
        */
    
    }


}
