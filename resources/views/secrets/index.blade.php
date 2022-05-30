@extends('dashboard')
@section('content')
<table id='examples' class="table table-bordered table-striped dataTable" style="width:100%;" role="grid" area-describedby="example5_info">
    @if (session('secretsuccess'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </svg>&nbsp;&nbsp;
        <div><strong>{{ session('secretsuccess') }}</strong></div>
    </div><br>
@endif
    <thead>
        <tr allign="center">
            <th>ID</th>
            <th>NAME</th>
            <th>Slug</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <li><a href="{{route('secrets.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add secret</a></li>

    <tbody>
        @foreach ($secret as $secret)
        <tr allign="center">
            <td>{{$secret->id}}></td>
            <td>{{$secret->name}}</td>
            <td>{{$secret->slug}}</td>
            <td>
              <a href="{{route('secrets.edit',$secret->id)}}" > <button type="button" class="btn btn-success">edit</button></a>
              <a href="{{route('secrets.delete',$secret->id)}}"> <button type="button" class="btn btn-danger">delete</button></a>
             </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


