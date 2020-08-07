@extends('main')

@section('title', '| Login')

@section('content')
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="display-4">Guest Login</h1>

            {!! Form::open() !!}

                {{ Form::label('email', 'Email:') }}
                {{ Form::email('email', null, ['class' => 'form-control']) }}

                {{ Form::label('password', "Password:") }}
                {{ Form::password('password', ['class' => 'form-control']) }}
                
                <br>
                
                {{ Form::submit('Login', ['id'=>"submitButton", 'class' => 'btn btn-primary btn-block']) }}

                <br>

                <p><a  style="color:white" href="{{ url('password/request') }}">Forgot My Password</a>


            {!! Form::close() !!}
        </div>
    </div>

@endsection