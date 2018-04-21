  @extends('layout')
  @section('title','List Category')
  @section('content')
        <h2>List Category</h2>
        <ul>
        @foreach($todos as $todo)
        <li>{{$todo}}</li>
        @endforeach
        </ul>

        <a href="/category/create">Create New Todo</a>
            
        @endsection()
