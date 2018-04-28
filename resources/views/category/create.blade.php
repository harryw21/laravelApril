@extends('layout')
@section('title','Form todo')
@section('content')
    <h2>Form Category</h2>

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

{{Form::text('category',null,['placeholder'=>'Category'])}}
<br>
<br>


{{Form::Submit('Save Category')}}
<br>
{{link_to('/todo','Back')}}


{{--</form>--}}

{{ Form::close() }} 
@endsection()
