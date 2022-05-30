<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use App\Models\Welcome;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::where('status',1)->paginate(2);

    $categories = Category::all();
    $featured_posts = Post::where('featured',1)->get();
    $status_posts = Post::when(request('category_id'),function($q){
        $q->where('category_id',request('category_id'));
    })->where('status',1)->paginate(2);
    $status_categories = Category::where('status',1)->get();

    return view('welcome',compact('categories','posts','featured_posts','status_posts','status_categories'));


}
}
