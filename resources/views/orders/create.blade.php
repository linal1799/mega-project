@extends('dashboard')
@section('content')
<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title"> order Form </h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">orders</li>
                            <li class="breadcrumb-item active" aria-current="page"> order Form </li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <!-- Main content -->
    <section class="content">

     <!-- Basic Forms -->
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title"> order Form </h4>
        </div>
        <form id="signupform" class="col-md-10 mx-auto" method="Post" action="{{route('orders.store')}}">
            @csrf
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error )
                        <li>{{$error}}</li>

                        @endforeach
                    </ul>
                </div>
                @endif

                <form novalidate="">
                  <div class="row">
                    <div class="col-12">
                    </div>
                             <div class="form-group mb-3">
                              <h5>User</h5>
                              <select name="user"  id="user-dd" class="form-control">
                               <option >Select User</option>
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                           </select>
                        </div>
                        <div class="form-group mb-3">
                            <h5>Product</h5>
                            <select name="product"  id="product-dd" class="form-control">
                                <option >Select Product</option>
                                @foreach ($products as $product)
                                <option value="{{$product->id}}">
                                    {{$product->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h5>Secret_code <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="secret_code" name="secret_code" class="form-control"placeholder="secret_code"  value="{{old('secret_code')}}">
                            <div class="help-block"></div></div>
                        </div>

                        <div class="form-group">
                            <h5>Price<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="price" name="price" class="form-control" placeholder=" add price"  value="{{old('price')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Tax<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="tax" name="tax" class="form-control" placeholder="tax"  value="{{old('tax')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Delivery_charges<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="delivery_charges" name="delivery_charges" class="form-control" placeholder=" add charges"   value="{{old('delivery_charges')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Quantity<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="quantity" name="quantity" class="form-control" placeholder=" quantity"  value="{{old('quantity')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Total<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="total" name="total" class="form-control" placeholder="total"  value="{{old('total')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5> <label for="status">Status</label><span class="text-danger">*</span></h5>
                            <div class="controls">
                            <select name="status"  select id="status"class="form-control" placeholder="status"  value="{{old('status')}}">
                            <option value="" class="option colour">select status</option>
                        <option>ordered</option>
                        <option>cancle</option>
                            </select>
                    </div></div>
                        </div>
                        <div class="form-group">
                            <h5>Tracking_no<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="number" id="tracking_no" name="tracking_no" class="form-control" placeholder="tracking_no"  value="{{old('tracking_no')}}" >
                            <div class="help-block"></div></div>
                        </div>
                    <div class="text-xs-right">
                        <button type="submit" class="btn btn-info">add new orders</button>
                    </div>
                </form>

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  @endsection
