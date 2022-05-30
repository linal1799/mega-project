@extends('dashboard')
@section('content')
<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title"> post Form </h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">posts</li>
                            <li class="breadcrumb-item active" aria-current="page"> post Form </li>
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
          <h4 class="box-title"> post Form </h4>
        </div>
        <form id="signupform" class="col-md-10 mx-auto" method="Post" action="{{route('posts.store')}}" enctype="multipart/form-data">
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
                            <h5>Title<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="title" name="title" class="form-control" placeholder=" title "  value="{{old('title')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <label><strong>Description :</strong></label>
                            <textarea class="ckeditor form-control" name="description"></textarea>
                        </div>
                        {{-- <div class="form-group">
                            <h5>Description <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="description" name="description" class="form-control"placeholder="enter description"  value="{{old('description')}}">
                            <div class="help-block"></div></div>
                        </div> --}}
                        <div class="form-group mb-3">
                            <h5>Category_id</h5>
                            <select name="category_id"  id="category-dd" class="form-control">
                                <option >Select category</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">
                                    {{$category->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Status">status </label>
                                <select name="status" select id="status"  class="form-control" >
                                    <option value="" class="option_color">Select status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                </div>
                        <div class="form-group">
                            <h5> <label for="status">Featured</label><span class="text-danger">*</span></h5>
                            <div class="controls">
                            <select name="featured"  select id="featured"class="form-control" >
                            <option value="" class="option colour">select </option>
                        <option value="1">yes</option>
                        <option value="0">no</option>
                            </select>
                    </div></div>
                    </div>
                    <label for="myfile">Select a file:</label>
                    <input type="file" id="myfile" name="image"><br><br>
                    <input type="submit">
                    {{-- <div class="text-xs-right">
                        <button type="submit" class="btn btn-info">add new post</button>
                    </div> --}}
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
    <script type="text/javascript">
        $(document).ready(function() {
           $('.ckeditor').ckeditor();
        });
    </script>
  </div>
  @endsection
