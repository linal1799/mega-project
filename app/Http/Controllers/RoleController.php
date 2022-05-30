<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create()
    {
        return view('roles.create');
    }
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name'=>'required',
            'slug'=>'required',
        ]);
        $role=new Role;
        $role->name=$request->name;
        $role->slug=$request->slug;
        $role->save();
        if ($role) {
            request()->session()->flash('rolesuccess','successfully saved role detail!!');
        }

        return redirect()->route('roles.index');

}
public function index()
{

 $role=role::all();
return view('roles.index',compact('role'));
}
public function edit($id,Request $request)
{
    $role=role::find($id);
    return view('roles.edit',compact('role'));
}
public function update($id,Request $request)
{
    $role=role::find($id);
    $role->name=$request->name;
    $role->slug=$request->slug;
    $role->save();
    if ($role) {
        request()->session()->flash('rolesuccess','successfully update role detail!!');
    }

    return redirect()->route('roles.index');


}
public function delete($id,Request $request)
{
    $role=role::find($id);
    $role->delete();
    return redirect()->route('roles.index');


}
}
