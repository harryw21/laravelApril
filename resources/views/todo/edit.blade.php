@extends('layout')
@section('title','Form todo')
@section('content')
    <h2>Form Edit Todo</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


{{ Form::model($todo,['url'=>'todo/'.$todo->id,'method'=>'put'])}}
@include('todo.form')
<br>
<br>
{{Form::submit('Update Todo')}}
<br>
{{link_to('/todo','Back')}}

{{ Form::close() }} 
@endsection()
