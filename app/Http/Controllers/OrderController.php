<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        $users = User::all();
        $products = Product::all();
        return view('orders.create', compact('users','products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user'=>'required',
            'product'=>'required',
            'secret_code'=>'required',
            'price'=>'required',
            'tax'=>'required',
            'delivery_charges'=>'required',
            'quantity'=>'required',
            'total'=>'required',
            'status'=>'required',
            'tracking_no'=>'required',

        ]);

        $order=new order;
        $order->user_id=$request->user_id;
        $order->product_id=$request->product_id;
        $order->secret_code=$request->secret_code;
        $order->price=$request->price;
        $order->tax=$request->tax;
        $order->delivery_charges=$request->delivery_charges;
        $order->quantity=$request->quantity;
        $order->total=$request->total;
        $order->status=$request->status;
        $order->tracking_no=$request->tracking_no;
        $order->save();
        if ($order) {
            request()->session()->flash('ordersuccess','successfully saved order detail!!');
        }

        return redirect()->route('orders.index');

}
    public function index()
    {
    //  $order=order::all();
    $order=Order::with('user','products')->get();

    return view('orders.index',compact('order'));
    }
    public function edit($id,Request $request)
    {
        $order=order::find($id);
        return view('orders.edit',compact('order'));
    }
    public function update($id,Request $request)
    {
        $validated = $request->validate([
            'user'=>'required',
            'product'=>'required',
            'secret_code'=>'required',
            'price'=>'required',
            'tax'=>'required',
            'delivery_charges'=>'required',
            'quantity'=>'required',
            'total'=>'required',
            'status'=>'required',
            'tracking_no'=>'required',

        ]);
        $order=order::find($id);
        $order->user=$request->user;
        $order->product=$request->product;
        $order->secret_code=$request->secret_code;
        $order->price=$request->price;
        $order->tax=$request->tax;
        $order->delivery_charges=$request->delivery_charges;
        $order->quantity=$request->quantity;
        $order->total=$request->total;
        $order->status=$request->status;
        $order->tracking_no=$request->tracking_no;
        $order->save();
        if ($order) {
            request()->session()->flash('ordersuccess','successfully update order detail!!');
        }

        return redirect()->route('orders.index');


    }
    public function delete($id,Request $request)
    {
        $order=order::find($id);
        $order->delete();
        return redirect()->route('orders.index');


    }

}
