<?php

namespace App\Http\Controllers;
use App\Models\secret;
use Illuminate\Http\Request;

class SecretController extends Controller
{
    public function create()
    {
        return view('secrets.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'slug'=>'required',
        ]);
        $secret=new secret;
        $secret->name=$request->name;
        $secret->slug=$request->slug;
        $secret->save();
        if ($secret) {
            request()->session()->flash('secretsuccess','successfully saved secret detail!!');
        }

        return redirect()->route('secrets.index');

}
    public function index()
    {
     $secret=secret::all();
    return view('secrets.index',compact('secret'));
    }
    public function edit($id,Request $request)
    {
        $secret=secret::find($id);
        return view('secrets.edit',compact('secret'));
    }
    public function update($id,Request $request)
    {

        $secret=secret::find($id);
        $secret->name=$request->name;
        $secret->slug=$request->slug;
        $secret->save();
        if ($secret) {
            request()->session()->flash('secretsuccess','successfully update secret detail!!');
        }

        return redirect()->route('secrets.index');


    }
    public function delete($id,Request $request)
    {
        $secret=secret::find($id);
        $secret->delete();
        return redirect()->route('secrets.index');


    }

}
