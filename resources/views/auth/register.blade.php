@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <b><h3 class="card-title">{{ __('Register') }}</h3></b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __(' First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" placeholder="first name" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first(' firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
    <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                <div class="col-md-6">
                            <input id="lastname" type="text" placeholder="last name" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>
                        @if ($errors->has('lastname'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lastname') }}
                     </strong>
                 </span>
            @endif
        </div>
   </div>

<div class="form-group row">
          <label for="adress" class="col-md-4 col-form-label text-md-right">{{ __('Adress') }}</label>
                <div class="col-md-6">
                            <input id="adress" type="text" placeholder="adress" class="form-control{{ $errors->has('adress') ? ' is-invalid' : '' }}" name="adress" value="{{ old('adress') }}" required autofocus>
                        @if ($errors->has('adress'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('adress') }}
                     </strong>
                 </span>
            @endif
        </div>
   </div>

<div class="form-group row">
          <label for="adress" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                <div class="col-md-6">
                            <input id="Phonenumber" type="text" placeholder="Phone number" class="form-control{{ $errors->has('Phonenumber') ? ' is-invalid' : '' }}" name="Phonenumber" value="{{ old('Phonenumber') }}" required autofocus>
                        @if ($errors->has('Phonenumber'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('Phonenumber') }}
                     </strong>
                 </span>
            @endif
        </div>
   </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="password"class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="confirm password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
