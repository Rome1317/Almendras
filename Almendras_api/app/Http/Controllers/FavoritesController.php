<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Article;

class FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # Get articles saved by user
        $con = mysqli_connect("localhost","root","root","almendras_api_system");
        if (!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
        
        $email = "rome_gs@hotmail.com";

        $query = mysqli_query($con, "SELECT * FROM articles WHERE code IN ( SELECT article FROM favorites WHERE saved_by = '$email')");


        if($query)
            $articles = mysqli_fetch_object($query);
            $articles = array($articles);
            #$articles = json_encode($articles);

            $total = 0;
            foreach($articles as $a){
                $total = $total + $a->price;
            }

            return view('shopping_cart',compact('articles','total'));

        echo "<script type='text/javascript'>alert('Something went wrong');</script>";

        #return view('shopping_cart',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createFavorite($article)
    {
        $favorite = new Favorite();
        $favorite->article = $article;
        $favorite->saved_by = "rome_gs@hotmail.com"; # User email
        $favorite->save();

        echo "<script type='text/javascript'>alert('New article added to cart successfully');</script>";
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
    public function edit($id)
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
