@extends('dashboard')
@section('content')

<li class="btn-group d-lg-inline-flex d-none">
    <div class="app-menu">
        <div class="search-bx mx-5">
            <form>
                <div class="input-group">
                  <input type="search" class="form-control"  placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="user_search">
                  <div class="input-group-append">
                    <button class="btn" type="submit" id="button-addon3"><i data-feather="search"></i></button>
                    <input class="btn btn-primary" type="reset" value="Reset">
                  </div>
                </div>
            </form>
        </div>
    </div>
</li>
</ul>
</div>
<table id='examples' class="table table-bordered table-striped dataTable" style="width:100%;" role="grid" area-describedby="example5_info">
    @if (session('usersuccess'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </svg>&nbsp;&nbsp;
        <div><strong>{{ session('usersuccess') }}</strong></div>
    </div><br>
@endif

    <thead>
        <tr allign="center">
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>MOBILE</th>
            <th>ADDRESS</th>
            <th>COUNTRY</th>
            <th>STATE</th>
            <th>CITY</th>
            <th>PIN_CODE</th>
            <th>ROLE ID</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <li><a href="{{route('users.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Users</a></li>

    <tbody>
        @php
            $i= 1;
        @endphp
        @foreach ($user as $user)
        <tr allign="center">
            {{-- <td>{{$user->id}}</td> --}}
            <td>{{$i++}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->mobile}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->country->name ?? 'N/A'}}</td>
            <td>{{@$user->state->name }}</td>
            <td>{{@$user->city->name}}</td>
            <td>{{$user->pin_code}}</td>
            <td>{{$user->role}}</td>
            <td>
              <a href="{{route('users.edit',$user->id)}}" > <button type="button" class="btn btn-success">edit</button></a>
              <a href="{{route('users.delete',$user->id)}}"> <button type="button" class="btn btn-danger">delete</button></a>
             </td>
        </tr>
        @endforeach

        @endsection


