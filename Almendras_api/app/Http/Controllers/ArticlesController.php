<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session_start();
        $email = $_SESSION['email'];
        $user = User::where('email',$email)->first();


        if($user->role_id != 1){
            echo "<script type='text/javascript'>alert('You don't have access');</script>";
            return redirect()->back();
        }


        $articles = Article::all();
        return view('articles_forms',compact('articles'));
    }

    public function getAllArticles(){
        $data = Article::all();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createArticle(Request $request)
    {
        session_start();
    
        $this->validate(request(),[
            'name'  => 'required',
            'description'  => 'required',
            'price'  => 'required',
            'stock'  => 'required',
            'image' => 'required'
        ]);

        $img = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],"../public/assets/images/$img");

        $article = new Article();
        $article->fill($request->all());
        $article->image = "assets/images/$img";
        $article->created_by = $_SESSION['email']; # User email
        $article->save();

        echo "<script type='text/javascript'>alert('New article added successfully');</script>";
        return redirect()->to('/main');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editArticle($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
