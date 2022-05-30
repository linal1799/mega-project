<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Secret;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $secrets = Secret::all();
        return view('products.create', compact('secrets'));
    }
    public function store(Request $request)
    {

        $validation = $request->validate([
             'name'=>'required',
             'description'=>'required',
             'price'=>'required',
             'discount'=>'required',
             'secret_id'=>'required',
             'status'=>'required',
        ]);
        $product=new product;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount=$request->discount;
        $product->secret_id=$request->secret_id;
        $product->status=$request->status;

        if($request->hasFile('image')){
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time() . '.' . $extension;
            $file->move('products_images/', $filename);
            $product->image= $filename;
        }
        $product->save();
        if ($product) {
            request()->session()->flash('productsuccess','successfully saved product detail!!');
        }

        return redirect()->route('products.index');

    }


    public function index(Request $request)
    {
        $product_name = $request->input('product_search');

    //  $product=product::all();
    $product=Product::with('secret')->where('name', 'LIKE', '%' . $product_name . '%')
    ->orWhere('description', 'LIKE', '%' . $product_name . '%')
    ->orWhere('price', 'LIKE', '%' . $product_name . '%')
    ->orWhere('discount', 'LIKE', '%' . $product_name . '%')
    ->orWhere('secret_id', 'LIKE', '%' . $product_name . '%')
    ->orWhere('status', 'LIKE', '%' . $product_name . '%')

    ->get();

    return view('products.index',compact('product'));
    }

    public function edit($id,Request $request)
    {
        $product=product::find($id);
        return view('products.edit',compact('product'));
    }
    public function update($id,Request $request)
    {
        $validation = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'secret_id'=>'required',
            'status'=>'required',
       ]);

        $product=product::find($id);
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount=$request->discount;
        $product->secret_id=$request->secret_id;
        $product->status=$request->status;
        if($request->hasFile('image')){
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time() . '.' . $extension;
            $file->move('products_images/', $filename);
            $product->image= $filename;
        }
        $product->save();
        if ($product) {
            request()->session()->flash('productsuccess','successfully update product detail!!');
        }

        return redirect()->route('products.index');


    }
    public function delete($id,Request $request)
    {
        $product=product::find($id);
        $product->delete();
        return redirect()->route('products.index');

    }


}
