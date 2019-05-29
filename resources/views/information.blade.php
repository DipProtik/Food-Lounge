@extends('layouts.main2')


@section('title')
Checkout Information
@endsection


@section('content')
<section class="row checkout-info">

    <form class="form form-1 col-md-12 col-sm-12 col-xs-12" action="{{route('checkout.info.submit')}}" method="POST"> 
 
        <div class="row billing info-block">
            <div class="col-md-12 col-sm-12 col-xs-12 t-center">
                <h1 class="heading1">Billing Information</h1>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="fname" value="{{$user->first_name}}"  class="form-control" placeholder="First Name*" value="" required >
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="lname" value="{{$user->last_name}}"  class="form-control" placeholder="Last name*" value="" required >
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Email*" value="" required >
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" name="phone" value="{{$user->phone}}" class="form-control" placeholder="Phone*" value="" required pattern="[0-9] {11}">
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <input type="text" name="address" value="{{$user->address}}" class="form-control" placeholder="Address*" required >
            </div>

            <div class="col-md-6 col-sm-6 col-xs-6">
                <input type="text" name="city" value="Sylhet"  class="form-control" value="" readonly="">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-6">
                <input type="text" name="postCode" value="{{$user->zip}}" class="form-control" value="" placeholder="POST Code">
            </div>
            {{csrf_field()}}
            <div class="col-md-12 col-sm-12 col-xs-12 t-center">
                <button class="btn1" type="submit" value="submit">Checkout</button>
            </div>
        </div>
           
    </form>
</section>
@endsection