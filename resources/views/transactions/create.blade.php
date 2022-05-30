@extends('dashboard')
@section('content')
<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title"> transaction Form </h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">transactions</li>
                            <li class="breadcrumb-item active" aria-current="page"> transaction Form </li>
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
          <h4 class="box-title"> transaction Form </h4>
        </div>
        <form id="signupform" class="col-md-10 mx-auto" method="Post" action="{{route('transactions.store')}}">
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
                        <div class="form-group">
                            <h5>Order_ID<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="order_id" name="order_id" class="form-control" placeholder=" order_id"  value="{{old('order_id')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Mode <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="mode" name="mode" class="form-control"placeholder="mode"  value="{{old('mode')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Type <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="type" name="type" class="form-control"placeholder="type"  value="{{old('type')}}">
                            <div class="help-block"></div></div>
                        </div>
                    </div>
                    <div class="text-xs-right">
                        <button type="submit" class="btn btn-info">add new transaction</button>
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
