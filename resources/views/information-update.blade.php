@extends('layouts.main2')

@section('title')
Update Checkout Information
@endsection


@section('content')
<section class="row checkout-info">

    <form class="form form-1 col-md-12" action="{{route('checkout.info.submit')}}" method="POST"> 

        <div class="row billing info-block">
            <div class="col-md-12 col-sm-12 col-xs-12 t-center">
                <h1 class="heading1">Billing Information</h1>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="fname"  class="form-control" placeholder="First Name*" value="{{$checkout_info['fname']}}" required >
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="lname"  class="form-control" placeholder="Last name*" value="{{$checkout_info['lname']}} " required >
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="email" name="email" class="form-control" placeholder="Email*" value="{{$checkout_info['email']}} " required >
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" name="phone" class="form-control" placeholder="Phone*" value="$checkout_info['phone']" required >
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <input type="text" name="address" class="form-control" placeholder="Address*" value="{{$checkout_info['address']}} " required >
            </div>


            <div class="col-md-6 col-sm-6 col-xs-6">
                <input type="text" name="city"  class="form-control" placeholder="City*" value="Sylhet" required>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-6">
                <input type="text" name="postCode" class="form-control" value="{{$checkout_info['postCode']}}" placeholder="POST Code" required >
            </div>



            
            {{csrf_field()}}
            <div class="col-md-12 col-sm-12 col-xs-12 t-center">
                <button class="btn1" type="submit" value="submit">Checkout</button>
            </div>
        </div>
    </form>
</section>
@endsection