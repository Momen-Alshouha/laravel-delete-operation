@extends('post.layout')

@section('content')

    <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <hr class="my-4">
        <h2 class="display-5">Laravel CRUD - DELETE</h2><br>
    </div>

    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>            
        @endif

    </div>

    <div class="container fluid">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">post id</th>
                <th scope="col">post title</th>
                <th scope="col">post details</th>
                <th scope="col" >Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
             @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->detail}}</td>
                    <td>
                        <div class="row">
                            <div class="col-sm">
                                <form method="POST" action="{{route('posts.destroy', $post->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>
                            </div>
                          </div>                   
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
          
    </div>
@endsection