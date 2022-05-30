@extends('dashboard')
@section('content')
<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title"> secret Form </h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Forms</li>
                            <li class="breadcrumb-item active" aria-current="page"> secret Form </li>
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
          <h4 class="box-title"> secret Form </h4>
          <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>
        </div>
        <form id="signupform" class="col-md-10 mx-auto" method="Post" action="{{route('orders.update',$order->id)}}">
            @csrf
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
                <form novalidate="">
                  <div class="row">
                    <div class="col-12">
                                               </div>
                        <div class="form-group">
                            <h5>User<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="user" name="user" class="form-control" placeholder=" user name" value="{{$order->user}}" >
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Product <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="product" name="product" class="form-control"placeholder="product name" value="{{$order->product}}" >
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Secret_code<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="secret_code" name="secret_code" class="form-control"placeholder="secret_code" value="{{$order->secret_code}}">
                            <div class="help-block"></div></div>
                        </div>

                        <div class="form-group">
                            <h5>Price<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="price" name="price" class="form-control" placeholder=" add price"  value="{{$order->price}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Tax<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="tax" name="tax" class="form-control" placeholder="tax" value="{{$order->tax}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Delivery_charges<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="delivery_charges" name="delivery_charges" class="form-control" placeholder=" add charges" value="{{$order->delivery_charges}}" >
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Quantity<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="quantity" name="quantity" class="form-control" placeholder=" quantity" value="{{$order->quantity}}" >
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Total<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="total" name="total" class="form-control" placeholder="total" value="{{$order->total}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5> <label for="status">Status</label><span class="text-danger">*</span></h5>
                            <div class="controls">
                            <select name="status"  select id="status"class="form-control" placeholder="status" value="{{$order->status}}">
                            <option value="" class="option colour">select status</option>
                        <option>ordered</option>
                        <option>cancle</option>
                            </select>
                    </div></div>
                        </div>
                        <div class="form-group">
                            <h5>Tracking_no<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="tracking_no" name="tracking_no" class="form-control" placeholder="tracking_no"  value="{{$order->tracking_no}}">
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
