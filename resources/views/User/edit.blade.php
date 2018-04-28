@extends('layout')
@section('title','Form User')
@section('content')
    <h2>Form Edit User</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


{{ Form::model($user,['url'=>'user/'.$user->id,'class'=>'form-horizontal','method'=>'put'])}}
@include('user.form')
<br>
<br>
{{Form::submit('Update User')}}
<br>
{{link_to('/user','Back')}}

{{ Form::close() }} 
@endsection()
