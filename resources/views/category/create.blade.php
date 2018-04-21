@extends('layout')
@section('title','Form todo')
@section('content')
    <h2>Form Todo</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {{Form::open(['url'=>'category'])}}
{{-- <form action="todo" method="POST"> --}}

{{Form::text('category',null,['placeholder'=>'Todo Title'])}}
<br>
<br>


{{Form::Submit('Save Todo')}}
<br>
{{link_to('/todo','Back')}}


{{--</form>--}}

{{ Form::close() }} 
@endsection()
