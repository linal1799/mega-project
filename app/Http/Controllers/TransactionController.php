<?php

namespace App\Http\Controllers;
use App\Models\transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create()
    {
        return view('transactions.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id'=>'required',
            'mode'=>'required',
            'type'=>'required',

        ]);

        $transaction=new transaction;
        $transaction->order_id=$request->order_id;
        $transaction->mode=$request->mode;
        $transaction->type=$request->type;
        $transaction->save();
        if ($transaction) {
            request()->session()->flash('transactionsuccess','successfully saved transaction detail!!');
        }

        return redirect()->route('transactions.index');

    }
    public function index()
{
 $transaction=transaction::all();
return view('transactions.index',compact('transaction'));
}
public function edit($id,Request $request)
{
    $transaction=transaction::find($id);
    return view('transactions.edit',compact('transaction'));
}
public function update($id,Request $request)
{
    $transaction=transaction::find($id);
    $transaction->order_id=$request->order_id;
    $transaction->mode=$request->mode;
    $transaction->type=$request->type;
    $transaction->save();
    if ($transaction) {
        request()->session()->flash('transactionsuccess','successfully update transaction detail!!');
    }

    return redirect()->route('transactions.index');


}
public function delete($id,Request $request)
{
    $transaction=transaction::find($id);
    $transaction->delete();
    return redirect()->route('transactions.index');

}


}
