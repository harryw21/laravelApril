@extends('layout')
@section('title','Form todo')
@section('content')
    <h2>Form User</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {{Form::open(['url'=>'user'])}}

@include('user.form')
        


</table>

{{Form::Submit('Save User')}}
<br>
{{link_to('/todo','Back')}}


{{--</form>--}}

{{ Form::close() }} 
@endsection()
