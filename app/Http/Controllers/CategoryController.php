<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name'=>'required',
            'status'=>'required',
        ]);
        $category=new Category;
        $category->name=$request->name;
        $category->status=$request->status;
        $category->save();
        if ($category) {
            request()->session()->flash('categorysuccess','successfully saved category detail!!');
        }

        return redirect()->route('categories.index');

}
public function index()
{

 $category=category::all();
return view('categories.index',compact('category'));
}
public function edit($id,Request $request)
{
    $category=Category::find($id);
    return view('categories.edit',compact('category'));
}
public function update($id,Request $request)
{
    $category=Category::find($id);
    $category->name=$request->name;
    $category->status=$request->status;
    $category->save();
    if ($category) {
        request()->session()->flash('categorysuccess','successfully update category detail!!');
    }

    return redirect()->route('categories.index');


}
public function delete($id,Request $request)
{
    $category=Category::find($id);
    $category->delete();
    return redirect()->route('categories.index');


}
}
