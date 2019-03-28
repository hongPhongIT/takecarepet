@extends('layouts.app')

@section('content')
<div class="mr-auto w-100">
    <div class="container-login100 d-flex justify-content-center p-2 bg-primary">
        <div class="wrap-login100 p-4   ">
            <form method="POST" action="{{ route('register') }}" class="w-100 flex-sb flex-w">
            @csrf
                <span class="login100-form-title d-block text-primary text-center">
                    Register
                </span>

                <div class="row">
                    <div class="col-md-6">
                        <div class="pt-2">
                            <span class="">
                                Email
                            </span>
                        </div>
                        <div class="form-check">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pt-2">
                            <span class="">
                                Phone Number
                            </span>
                        </div>
                        <div class="form-check">
                             <input id="phone" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
                            @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="pt-2">
                            <span class="">
                                Username
                            </span>
                        </div>
                        <div class="form-check">
                            <input id="user_name" type="text" class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" name="user_name" value="{{ old('user_name') }}" required autofocus>
                            @if ($errors->has('user_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('user_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pt-2">
                            <span class="">
                                City
                            </span>
                        </div>
                        <div class="form-check">
                            <select id="city" type="string" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>
                                <option value="Da Nang">Da Nang</option>
                            </select>
                            @if ($errors->has('city'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="pt-2">
                            <span class="">
                                Password
                            </span>
                        </div>
        
                        <div class="form-check">
                            <input id="password" type="password" class=" form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pt-2">
                            <span class="">
                                District
                            </span>
                        </div>
                        <div class="form-check">
                            <select id="district" type="string" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" value="{{ old('district') }}" required autofocus>
                                <option value="Da Nang">Da Nang</option>
                            </select>
                            @if ($errors->has('district'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('district') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="pt-2">
                            <span class="">
                                Confirm Password
                            </span>
                        </div>
        
                        <div class="form-check">
                            <input id="password_confirmation" type="password" class=" form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                            @if ($errors->has('password_confirmation'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pt-2">
                            <span class="">
                                Street
                            </span>
                        </div>
                        <div class="form-check">
                            <select id="street" type="string" class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" value="{{ old('street') }}" required autofocus>
                                <option value="Da Nang">Da Nang</option>
                            </select>
                            @if ($errors->has('street'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('street') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pt-2">
                            <span class="">
                                Home Number
                            </span>
                        </div>
                        <div class="form-check">
                            <input id="home" type="string" class="form-control{{ $errors->has('home') ? ' is-invalid' : '' }}" name="home" value="{{ old('home') }}" required autofocus>
                            @if ($errors->has('home'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('home') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>  

                <div class="w-100 d-flex mt-2">
                    <button type="submit" class="w-100 d-flex p-2 justify-content-center btn btn-primary">
                    {{ __('Register') }}
                    </button>
                </div>

                <div class="w-100 pt-3 pb-1 ">
                    <span>
                        Register with
                    </span>
                </div>
            <a href="#" class="btn-face mb-2">
                    <img src="{{asset('image/icons/facebook.png')}}" alt="FACEBOOK">
                    Facebook
                </a>

                <a href="#" class="btn-google mb-2">
                    <img src="{{asset('image/icons/google.png')}}" alt="GOOGLE">
                    Google
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
