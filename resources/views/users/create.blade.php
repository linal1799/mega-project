@extends('dashboard')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title"> Users Form </h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">users</li>
                            <li class="breadcrumb-item active" aria-current="page">Form Users</li>
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
          <h4 class="box-title">Form Users</h4>
        </div>
        <form id="signupform" class="col-md-10 mx-auto" method="Post" action="{{route('users.store')}}">
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
                                <input type="text" id="name" name="name" class="form-control" placeholder="name"  value="{{old('name')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Email <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="email" name="email" class="form-control"placeholder="enter email"  value="{{old('email')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Password <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="password"id="email" class="form-control" placeholder="password" value="{{old('password')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Mobile <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="mobile" name="mobile" class="form-control" placeholder="mobile" value="{{old('mobile')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Address<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="address" name="address" class="form-control"placeholder="address" value="{{old('address')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group mb-3">
                            <h5>Country</h5>
                            <select name="country_id"  id="country-dd" class="form-control">
                                <option >Select Country</option>
                                @foreach ($countries as $data)
                                <option value="{{$data->id}}">
                                    {{$data->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <h5>State</h5>
                            <select name="state_id" id="state-dd" class="form-control" >
                                <option>select states</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h5>City</h5>
                            <select name="city_id" id="city-dd" class="form-control">
                                <option>select city</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h5>Pin_code <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text"id="pin_code" name="pin_code" class="form-control"  placeholder="pin_code here"  value="{{old('pin_code')}}">
                            <div class="help-block"></div></div>
                        </div>
                        <div class="form-group">
                            <h5>Role <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="role" name="role" class="form-control"  placeholder="select role"  value="{{old('role')}}">
                            <div class="help-block"></div></div>
                        </div>

                    </div>
                    <div class="text-xs-right">
                        <button type="submit" class="btn btn-info">Submit</button>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#country-dd').on('change', function () {
                var idCountry = this.value;
                $("#state-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-states')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state-dd').html('<option value="">Select State</option>');
                        $.each(result.states, function (key, value) {
                            $("#state-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#city-dd').html('<option value="">Select City</option>');
                    }
                });
            });
            $('#state-dd').on('change', function () {
                var idState = this.value;
                $("#city-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-cities')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#city-dd').html('<option value="">Select City</option>');
                        $.each(res.cities, function (key, value) {
                            $("#city-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
