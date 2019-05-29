@extends('layouts.main2')
@section('content')

<section class="row reset-div">
    <div class="col-md-4 col-md-offset-4">
        
        <form class="form form-1 row" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            @if (session('status'))
            <div class="row">
                <p class="success-message">{{ session('status') }}</p>
            </div>
            @endif
            <div class="col-md-12">
                <img src="{{URL::to('assets/img/logo-bold.png')}}" class="logo" alt="">
            </div>
            <div class="col-md-12">
                <h1 class="header-1">Send Password Reset Link</h1>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="col-md-12">
                    <label for="email"E-Mail Address>E-Mail Address</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn1">
                    Send Password Reset Link
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
