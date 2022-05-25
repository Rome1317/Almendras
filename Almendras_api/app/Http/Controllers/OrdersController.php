<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\User;
use App\Models\Order;
use App\Models\ArticleOrder;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        session_start();
        
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "almendras_api_system";

        # Get articles saved by user
        $con = mysqli_connect($servername,$username,$password,$dbname);
        if (!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
        
        $email = $_SESSION['email'];
        
        $queryOrders = mysqli_query($con, "SELECT * FROM orders WHERE created_by='$email'");

        if($queryOrders)
            $orders =array();
            while ($fila = mysqli_fetch_object($queryOrders)){
                $orders[] = $fila; 
            }
            #$articles = json_encode($articles);

        $queryUser = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");

        if($queryUser)
            $user =array();
            $user[] = mysqli_fetch_object($queryUser); 
        
        $countries = Country::all();
        
        return view('account',compact('user','orders','countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createOrder()
    {

        $data = Order::all();
        $order_code = 1;
        foreach($data as $d){
            $order_code = $order_code + 1;
        }
    

        $order = new Order();
        $order->created_by = "rome_gs@hotmail.com"; # User email
        $order->save();

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "almendras_api_system";

        # Get articles saved by user
        $con = mysqli_connect($servername,$username,$password,$dbname);
        if (!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
        
        $email = "rome_gs@hotmail.com";

        $queryArticles = mysqli_query($con, "SELECT * FROM articles WHERE code IN ( SELECT article FROM favorites WHERE saved_by = '$email')");

        if($queryArticles)
            $articles =array();
            while ($fila = mysqli_fetch_object($queryArticles)){
                $articles[] = $fila; 
            }
            #$articles = json_encode($articles);

            foreach($articles as $a){
                $article_order = new ArticleOrder();
                $article_order->article = $a->code;
                $article_order->order = $order_code; #Order Code
                $article_order->save();
                
            }
        
        $queryOrders = mysqli_query($con, "SELECT * FROM orders WHERE created_by='$email'");

        if($queryOrders)
            $orders =array();
            while ($fila = mysqli_fetch_object($queryOrders)){
                $orders[] = $fila; 
            }
            #$articles = json_encode($articles);

        
        echo "<script type='text/javascript'>alert('New order added successfully');</script>";

        return redirect()->to('/account',compact('orders'));
        
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

    }
}
