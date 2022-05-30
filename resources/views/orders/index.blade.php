@extends('dashboard')
@section('content')
<table id='examples' class="table table-bordered table-striped dataTable" style="width:100%;" role="grid" area-describedby="example5_info">
    @if (session('ordersuccess'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </svg>&nbsp;&nbsp;
        <div><strong>{{ session('ordersuccess') }}</strong></div>
    </div><br>
@endif
    <thead>
        <tr allign="center">
            <th>ID</th>
            <th>USER</th>
            <th>PRODUCT</th>
            <th>SECRET_CODE</th>
            <th>PRICE</th>
            <th>TAX</th>
            <th>DELIVERY_CHARGES</th>
            <th>QUANTITY</th>
            <th>STATUS</th>
            <th>TOTAL</th>
            <th>TRACKING_NO</th>
            <th>ACTIONS</th>


        </tr>
    </thead>
    <li><a href="{{route('orders.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add order</a></li>

    <tbody>
        @foreach ($order as $order)
        <tr allign="center">
            <td>{{$order->id}}</td>
            <td>{{@$order->user->name }}</td>
            <td>{{@$order->products->name }}</td>
            <td>{{$order->secret_code}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->tax}}</td>
            <td>{{$order->delivery_charges}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->status}}</td>
            <td>{{$order->total}}</td>
            <td>{{$order->tracking_no}}</td>
            <td>
              <a href="{{route('orders.edit',$order->id)}}" > <button type="button" class="btn btn-success">edit</button></a>
              <a href="{{route('orders.delete',$order->id)}}"> <button type="button" class="btn btn-danger">delete</button></a>
             </td>

        @endforeach
       @endsection
