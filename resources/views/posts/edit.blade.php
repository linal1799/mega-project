@extends('dashboard')
@section('content')
<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">Form Validation</h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Forms</li>
                            <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
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
          <h4 class="box-title">Form Validation</h4>
          <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>
        </div>
        <form id="signupform" class="col-md-10 mx-auto" method="Post" action="{{route('posts.update',$post->id)}}">
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
                            <h5>Title<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="title" name="title" class="form-control" placeholder="title" value="{{$post->title}}">
                            <div class="help-block"></div></div>
                        </div>
                        {{-- @dd($post->description); --}}
                        <div class="form-group">
                            <label><strong>Description :</strong></label>
                            <textarea class="ckeditor form-control" name="description" value="{{$post->description}}"> {{$post->description}}</textarea>
                        </div>
                        {{-- <div class="form-group">
                            <h5>Description <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="description" name="description" class="form-control"placeholder="enter description"  value="{{$post->description}}">
                            <div class="help-block"></div></div>
                        </div> --}}
                        <div class="form-group mb-3">
                            <h5>Category_id</h5>
                            <select name="category_id"  id="category-dd" class="form-control"  placeholder="category_id"  value="{{old('category_id')}}">
                                <option >Select category</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                    {{$category->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Status">status </label>
                                <select name="status" select id="status"  class="form-control"   placeholder="status"  value="{{old('status')}}">
                                    <option value="" class="option_color">Select status</option>
                                    <option value="1" {{ $post->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0"  {{ $post->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                                </div>
                        <div class="form-group">
                            <h5> <label for="status">Featured</label><span class="text-danger">*</span></h5>
                            <div class="controls">
                            <select name="featured"  select id="featured"class="form-control" placeholder="featured"  value="{{old('featured')}}">
                            <option value="" class="option colour">select </option>
                        <option value="1" {{ $post->featured == 1 ? 'selected' : '' }}>yes</option>
                        <option value="0" {{ $post->featured == 0 ? 'selected' : '' }}>no</option>
                            </select>
                    </div></div>
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
  <script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
  @endsection
