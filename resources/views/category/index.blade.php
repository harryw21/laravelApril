  @extends('layout')
  @section('title','List Category')
  @section('content')
        <h2>List Category</h2>
        <ul>
        @foreach($categories as $category)
        <li>{{$category->name}}</li>
        @endforeach
        </ul>

        
        <a href="/category/create" class="btn btn-danger btn-sm">Create New Category</a>
            
        @endsection()
