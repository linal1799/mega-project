<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $data['countries'] = Country::get(["name", "id"]);
        return view('users.create', $data);

    }
    public function fetchState(Request $request)
    {
        $data['states'] = State::where("country_id",$request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)->get(["name", "id"]);
        return response()->json($data);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'mobile'=>'required',
            'address'=>'required',
            'country_id'=>'required',
            'state_id'=>'required',
            'city_id'=>'required',
            'pin_code'=>'required',
            'role'=>'required',

        ]);

        $product=new user;
        $product->name=$request->name;
        $product->email=$request->email;
        $product->password=$request->password;
        $product->mobile=$request->mobile;
        $product->address=$request->address;
        $product->country_id=$request->country_id;
        $product->state_id=$request->state_id;
        $product->city_id=$request->city_id;
        $product->pin_code=$request->pin_code;
        $product->role=$request->role;
        $product->save();
        if ($product) {
            request()->session()->flash('usersuccess','successfully saved user detail!!');
        }
        return redirect()->route('users.index');

}

    public function index(Request $request)
{
    $user_name = $request->input('user_search');
 $user=User::with(['country','state','city'])->where('name', 'LIKE', '%' . $user_name . '%')
 ->orWhere('email', 'LIKE', '%' . $user_name . '%')
 ->orWhere('password', 'LIKE', '%' . $user_name . '%')
 ->orWhere('mobile', 'LIKE', '%' . $user_name . '%')
 ->orWhere('address', 'LIKE', '%' . $user_name . '%')
//  ->orWhere('country_id', 'LIKE', '%' . $user_name . '%')
//  ->orWhere('state_id', 'LIKE', '%' . $user_name . '%')
//  ->orWhere('city_id', 'LIKE', '%' . $user_name . '%')
 ->orWhere('pin_code', 'LIKE', '%' . $user_name . '%')
 ->orWhere('role', 'LIKE', '%' . $user_name . '%')

 ->get();
//  dd($user);
return view('users.index',compact('user'));
}
public function edit($id,Request $request)
{
    $user=User::find($id);
    $data['countries']=Country::get(["name","id"]);
    $data["states"]=State::get(["name","id"]);
    $data["city"]=City::get(["name","id"]);
    return view('users.edit',$data ,compact('user'));
}
  public function update($id,Request $request)

{
    $validated = $request->validate([
        'name'=>'required',
        'email'=>'required',
        'password'=>'required',
        'mobile'=>'required',
        'address'=>'required',
        'country_id'=>'required',
        'state_id'=>'required',
        'city_id'=>'required',
        'pin_code'=>'required',
        'role'=>'required',

    ]);

    $product=User::find($id);
    $product->name=$request->name;
    $product->email=$request->email;
    $product->password=$request->password;
    $product->mobile=$request->mobile;
    $product->address=$request->address;
    $product->country_id=$request->country_id;
    $product->state_id=$request->state_id;
    $product->city_id=$request->city_id;
    $product->pin_code=$request->pin_code;
    $product->role=$request->role;
    $product->save();
    if ($product) {
        request()->session()->flash('usersuccess','successfully update user detail!!');
    }

    return redirect()->route('users.index');


}
public function delete($id,Request $request)
{
    $user=User::find($id);
    $user->delete();
    return redirect()->route('users.index');

}

}
