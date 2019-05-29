@extends('layouts.main')


@section('title')
Your Cart
@endsection

@section('content')

<section class="row" id="cart">

    <!-- Cart Page Cart tems Table Section-->
	<div class="col-md-12 cart-wrapper">
		<h1 class="heading1">Your Cart</h1>
		<table class="table table-responsive">
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
    <!-- Cart Page Cart tems Table Section Ends-->
    

    <!-- Cart Page Cart Totals -->
	<div class="col-md-12 cart-tatals">

		<p class="total ">Total : <span class="cartTotal">{{$cartTotal}}</span><span class="taka">&#2547;</span></p><br>
		<a href="{{route('checkout.info')}}"><button class="btn1">Check Out Now</button></a>
	</div>
    <!-- Cart Page Cart Totals Ends-->

</section>


@endsection

@section('scripts')
<script src="{{URL::to('/js/dish.js')}}"></script>
<script>
   var token ='{{Session::token()}}';
   var updateCart ='{{route('updateCart')}}';
   var deleteFromCart ='{{route('deleteFromCart')}}';
</script>
@endsection