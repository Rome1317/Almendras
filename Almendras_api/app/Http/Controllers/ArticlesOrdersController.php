<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleOrder;

class ArticlesOrdersController extends Controller
{
    public function createArticleOrder($order)
    {

        $article_order = new ArticleOrder();
        $article_order->article ="";
        $article_order->order = ""; # User email
        $order->save();
        
        echo "<script type='text/javascript'>alert('New article added successfully');</script>";
    }
}
