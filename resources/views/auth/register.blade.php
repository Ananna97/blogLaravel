@extends('main')

@section('title', '| Register')

@section('content')
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="display-4">Guest Register</h1>

            {!! Form::open() !!}

                {{ Form::label('name', "Name:") }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}

                {{ Form::label('email', 'Email:') }}
                {{ Form::email('email', null, ['class' => 'form-control']) }}

                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password', ['class' => 'form-control']) }}

                {{ Form::label('password_confirmation', 'Confirm Password:') }}
                {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
            
                {{ Form::submit('Register', ['id'=>"submitButton",'class' => 'btn btn-primary btn-block form-spacing-top']) }}

            {!! Form::close() !!}
        </div>
    </div>

@endsection