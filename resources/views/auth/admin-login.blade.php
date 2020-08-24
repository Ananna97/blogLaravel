@extends('main')

@section('title', '| Admin Login')

@section('content')
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="display-4">Admin Login</h1>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.login.submit') }}">
                            @csrf

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <label for="email">E-Mail Address:</label>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <label for="password">Password:</label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" style="margin-bottom:20px" id="submitButton" class="btn btn-primary btn-block" >
                                        Login
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a style="color:white" href="{{ route('admin.password.request') }}">
                                            Forgot My Password
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>

        </div>
    </div>

@endsection