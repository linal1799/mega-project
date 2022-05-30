@extends('dashboard')
@section('content')
<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title"> product Form </h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">products</li>
                            <li class="breadcrumb-item active" aria-current="page"> product Form </li>
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
          <h4 class="box-title"> product Form </h4>
        </div>
        <form id="signupform" class="col-md-10 mx-auto" method="Post" action="{{route('products.store')}}" enctype="multipart/form-data">
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
                            <h5>Name<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="name" name="name" class="form-control" placeholder=" enter name"  value="{{old('name')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Description <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="description" name="description" class="form-control"placeholder="enter description"  value="{{old('description')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Price <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="price"id="price" class="form-control" placeholder="price"  value="{{old('price')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Discount <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="discount" name="discount" class="form-control" placeholder="discount"  value="{{old('discount')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group mb-3">
                            <h5>Secret_id</h5>
                            <select name="secret_id"  id="secret-dd" class="form-control">
                                <option >Select secret</option>
                                @foreach ($secrets as $secret)
                                <option value="{{$secret->id}}">
                                    {{$secret->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h5>Status <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="status" name="status" class="form-control"placeholder="select status"  value="{{old('status')}}">
                            <div class="help-block"></div></div>
                        </div>

                    </div>

  <label for="myfile">Select a file:</label>
  <input type="file" id="myfile" name="image"><br><br>
  <input type="submit">

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
