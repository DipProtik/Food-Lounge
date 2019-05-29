@extends('layouts.main2')


@section('title')
Checkout
@endsection


@section('content')
<section class="co-loading">
    <div class="circle"></div>
</section>
<section class="row" id="checkout">
	<div class="col-md-12 cart-wrapper">
        <h1 class="heading1">Your Cart</h1>
        <table class="table">
            <thead>
                <tr>
                    <th class="dish-name-head">Dish Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $cart)
                <tr>
                    <td class="dish-name-body">
                        <p>{{$cart->name}}</p>
                    </td>
                    <td>
                        <form class="qtyForm" method="POST">
                            <input class="qtyInput" type="number" name="quantity" value="{{$cart->qty}}" min="1">
                            <input type="hidden" class="dishId" value="{{$cart->rowId}}">
                        </form>
                    </td>
                    <td class="dishPrice">{{$cart->price}}</td>
                    <td class="dishTotalPrice">{{$cart->price * $cart->qty}}</td>
                    <td>
                        <i class="fa fa-times deleteDish" aria-hidden="true"></i>
                        <p class="dishRowId">{{$cart->rowId}}</p>
                    </td>

                </tr>
                @endforeach

            </tbody>
         </table>

    </div>

    <div class="col-md-12 cart-tatals">
        
        <p class="total ">Total : <span class="cartTotal">{{$cartTotal}}</span><span class="taka">&#2547;</span></p><br>
        <a href="{{route('checkout.info.update')}}"><button class="btn1">Update Checkout Information</button></a>
    </div>

	<div class="col-md-12 checkout">



		<div class="row payment-options">
			<button class="" id="option-bkash">Pay with BKash</button>
			<button class="" id="option-cod">Cash on Delivery</button>
		</div>


		<form action="{{route('checkout.bkash.submit')}}" class="row form-1" method="POST" id="form-bkash">
			<div class="col-md-12 col-sm-12 col-xs-12 ">
        		<h1 class="heading3">Pay with BKash account</h1>
                <p class="notice">To Use the Bkash payment method first you have to make the payment to <span>+8801710897146</span>.After that use your bkash number and transection ID to Complete the Checkout process</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" 
                name="bkash_number" class="form-control" value="{{$user->phone}}"  readonly="" required="">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="transection_id" class="form-control" placeholder="Bkash Transection id*" required="required">
            </div>
            {{csrf_field()}}
            <div class="col-md-12" >
               <button class="btn1 " type="submit" name="bkash_checkout">Checkout Now</button> 
            </div>
		</form>


		<form action="{{route('checkout.cod.submit')}}" class="row form-1" method="POST" id="form-cod">
			<div class="col-md-12 col-sm-12 col-xs-12 ">
        		<h1 class="heading3">Checkout with Cash on delivery</h1>
                <p class="notice">Please use a valid number so that we can confirm your order by using this number</p>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12" >
               <input type="text" name="number" class="form-control" placeholder="Phone Number" required="required"> 
            </div>
            {{csrf_field()}}
            <div class="col-md-12" >
               <button class="btn1" type="submit">Checkout Now</button> 
            </div>
		</form>
	</div>
</section>


@endsection
@section('scripts')
<script src="https://js.stripe.com/v2/"></script>
<script src="{{URL::to('/js/dish.js')}}"></script>
<script src="{{URL::to('/js/checkout.js')}}"></script>
<script>
   var token ='{{Session::token()}}';
   var updateCart ='{{route('updateCart')}}';
   var deleteFromCart ='{{route('deleteFromCart')}}';
</script>
@endsection