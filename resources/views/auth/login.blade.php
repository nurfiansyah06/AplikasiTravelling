@extends('layouts.log-lay')

@section('content')
<main class="login-container">
    <div class="container">
        <div class="row page-login d-flex align-items-center">
            <div class="section-left col-12 col-md-6">
                <h1 class="mb-4">We explore the new <br> life much better</h1>
                <img src="{{ url('frontend/images/Group 6.png') }}" 
                alt=""
                class="w-75 d-none d-sm-flex">
            </div>
            <div class="section-right col-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ url('frontend/images/logo.png') }}"
                             alt=""
                             class="w-50 mb-4">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"" id="exampleInputPassword1">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-login btn-block">
                            Sign In
                        </button>
                        <p class="text-center mt-4">
                            @if(Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                Lupa Password
                            </a>
                            @endif
                        </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection