@extends('layout')
@section('title','Form todo')
@section('content')
    <h2>Form Todo</h2>

@include('share.validation_error')

    {{Form::open(['url'=>'todo'])}}
@include('todo.form')
<br>
{{Form::Submit('Save Todo')}}
<br>
{{link_to('/todo','Back')}}


{{--</form>--}}

{{ Form::close() }} 
@endsection()
