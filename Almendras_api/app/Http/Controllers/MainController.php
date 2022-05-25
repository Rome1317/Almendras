<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class MainController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('main',compact('articles'));
    }
}
