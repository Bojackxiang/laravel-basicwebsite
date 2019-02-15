@extends('layout.layout')

@section('content')
    
    {!! Form::open(array('url' => 'contact/submit')) !!}
        <div class="form-group">
            {{Form::label('username', 'username')}}
            {{Form::text('username', '', ['class'=>"form-control", 'placeholder'=>"enter your username"])}}
            {{-- name, value, [class, placeholder] --}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>"enter your email"])}}
        </div>
        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '', ['class'=>'form-control', 'placeholder'=>"enter your message"])}}
        </div>
        <div>
            {{Form::submit("Submit", ['class'=>'btn btn-primary'])}}
        </div>

    {!! Form::close() !!}
@endsection
    
