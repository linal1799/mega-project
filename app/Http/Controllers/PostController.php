<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('posts.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $validation = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'status'=>'required',
            'featured'=>'required',

        ]);
        $post=new Post;
        $post->title=$request->title;
        $post->description=$request->description;
        $post->category_id=$request->category_id;
        $post->status=$request->status;
        $post->featured=$request->featured;

        if($request->hasFile('image')){
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time() . '.' . $extension;
            $file->move('posts_images/', $filename);
            $post->image= $filename;
        }
        $post->save();
        if ($post) {
            request()->session()->flash('postsuccess','successfully saved post detail!!');
        }

        return redirect()->route('posts.index');

}
    public function index()
    {
        $post=post::all();
        return view('posts.index',compact('post'));
    }
    public function edit($id,Request $request)
{
    $categories = Category::all();
    $post=post::find($id);
    return view('posts.edit',compact('post','categories'));
}
public function update($id,Request $request)
{
    $validation = $request->validate([
        'title'=>'required',
        'description'=>'required',
        'category_id'=>'required',
        'status'=>'required',
        'featured'=>'required',

    ]);
    $post=post::find($id);
    $post->title=$request->title;
    $post->description=$request->description;
    $post->category_id=$request->category_id;
    $post->status=$request->status;
    $post->featured=$request->featured;


    if($request->hasFile('image')){
        $file= $request->file('image');
        $extension= $file->getClientOriginalExtension();
        $filename= time() . '.' . $extension;
        $file->move('posts_images /', $filename);
        $post->image= $filename;
    }
    $post->save();
    if ($post) {
        request()->session()->flash('postsuccess','successfully update post detail!!');
    }

    return redirect()->route('posts.index');


}
public function delete($id,Request $request)
{
    $post=post::find($id);
    $post->delete();
    return redirect()->route('posts.index');


}
public function show($id){
    $post=post::find($id);
    $categories = Category::all();
    $status_categories = Category::where('status',1)->get();
    return view ('posts.show',compact('post','status_categories','categories'));

}
}
