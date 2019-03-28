@extends('layouts.app')

@section('content')

<div class="mr-auto w-100">
    <div class="container-login100 d-flex justify-content-center p-2 bg-primary">
        <div class="wrap-login100 p-5">
            <form method="POST" action="{{ route('login') }}" class="w-100 flex-sb flex-w">
            @csrf
                <span class="login100-form-title d-block pb-4 text-primary text-center">
                    Sign In With
                </span>

                <a href="#" class="btn-face mb-2">
                    <img src="{{asset('image/icons/facebook.png')}}" alt="FACEBOOK">
                    Facebook
                </a>

                <a href="#" class="btn-google mb-2">
                    <img src="{{asset('image/icons/google.png')}}" alt="GOOGLE">
                    Google
                </a>
                
                <div class="pt-2">
                    <span class="txt1">
                        Email
                    </span>
                </div>
                <div class="form-check">
                    <input id="email" type="email" class="p-2 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" id="invalid-email"  role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="pt-2">
                    <span class="txt1">
                        Password
                    </span>
                </div>

                <div class="form-check">
                    <input id="password" type="password" class=" p-2 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" id="invalid-password" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="w-100 d-flex mt-2">
                    <button type="submit" id="submit" class="w-100 d-flex p-2 justify-content-center btn btn-primary">
                    {{ __('Sign in') }}
                    </button>
                </div>

                <div class="w-100 text-center pt-3">
                    <span>
                        Not a member?
                    </span>
                    <a href="{{ route('register') }}">
                        {{ __('Sign up now') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
