<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {
        $total_user= User::all()->count();
        $total_product= Product::all()->count();
        $total_order= Order::all()->count();
        $total_transaction= Transaction::all()->count();
    $users = User::all();
    $products=Product::all();
    return view('dash',compact('users','products','total_user','total_product','total_order','total_transaction'));
}
}

