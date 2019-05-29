@extends('layouts.main2')


@section('title')
Register
@endsection


@section('content')
<section class="row" id="signup-page">
    <div class="col-md-5 col-sm-12 col-xs-12 signup-left">
        <div class="content">
            <img src="{{URL::to('assets/img/logo2.png')}}" alt=""><br>
            <h1 class="heading1">Join Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis odit totam ad neque ut delectus incidunt, natus, minima voluptatum vero dolorum, odio magni est eveniet. Ex eum excepturi eveniet consectetur?</p>
        </div>
    </div>
    <div class="col-md-7 col-sm-12 col-xs-12 signup">
        <div class="row signup-form">
            <form action="{{ route('register') }}" method="POST" class="form-2">
                {{ csrf_field() }}

                <div class="col-md-6 col-sm-6 col-xs-12 {{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            {{ $errors->first('first_name') }}
                        </span>
                    @endif
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 {{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>

                     @if ($errors->has('last_name'))
                        <span class="help-block">
                            {{ $errors->first('last_name') }}
                        </span>
                    @endif
                </div>


                <div class="col-md-12 col-sm-12 col-xs-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                     @if ($errors->has('email'))
                        <span class="help-block">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <button class="btn1" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection