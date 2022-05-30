@extends('dashboard')
@section('content')
<li class="btn-group d-lg-inline-flex d-none">
    <div class="app-menu">
        <div class="search-bx mx-5">
            <form>
                <div class="input-group">
                  <input type="search" class="form-control"  placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="post_search">
                  <div class="input-group-append">
                    <button class="btn" type="submit" id="button-addon3"><i data-feather="search"></i></button>
                    <input class="btn btn-primary" type="reset" value="Reset">
                  </div>
                </div>
            </form>
        </div>
    </div>
</li>
<table id='examples' class="table table-bordered table-striped dataTable" style="width:100%;" role="grid" area-describedby="example5_info">
    @if (session('postsuccess'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </svg>&nbsp;&nbsp;
        <div><strong>{{ session('postsuccess') }}</strong></div>
    </div><br>
@endif
    <thead>
        <tr allign="center">
            <th>ID</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th>CATEGORY_ID</th>
            <th>Status</th>
            <th>FEATURED</th>
            <th>IMAGE</th>
            <th>ACTIONS</th>

        </tr>
    </thead>
    <li><a href="{{route('posts.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add post</a></li>

    <tbody>
        @foreach ($post as $post)
        <tr allign="center">
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{!!$post->description!!}</td>
            <td>{{@$post->category->name }}</td>
            <td>
                {{ $post->status == 1 ? 'Active' : 'Inactive'}}


            </td>
            <td>{{$post->featured == 1 ? 'Yes' : 'No'}}</td>

            <td>
                @if ($post->image == 'NULL')
                <img src="{{'post.png'}}" width="50" class="ronded">
                @else
                 <img src="{{asset('posts_images/'.$post->image)}}" width="50" class="rounded">
                @endif
            </td>
            <td>
              <a href="{{route('posts.edit',$post->id)}}" > <button type="button" class="btn btn-success">edit</button></a>
              <a href="{{route('posts.delete',$post->id)}}"> <button type="button" class="btn btn-danger">delete</button></a>
             </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


