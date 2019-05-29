@extends('admin.layouts.main')
@section('content')
<section class="row view-invoice">
	<div class=" col-md-12 col-sm-12 col-xs-12 inv-options">
	<button class="btn1" onclick="printDiv('invoice')">Print the Invoice</button>
		<a href="{{route('send.invoice',['order_id' => $order->id])}}"><button class="btn1">Send Customer</button></a>
	</div>
	
	@if(Session::has('success'))
		<div class="col-md-12" style="text-align: center;">
			<p class="success-message">{{Session::get('success')}}</p>
		</div>
	@endif
	<div class=" col-md-12 col-sm-12 col-xs-12 ">
		<div class="invoice" id="invoice">
		 <div class="inv-header">
			 <p class="invNo">#invoice {{$order->id}}</p>
			 <p class="date">{{$order->created_at->format('d M Y')}}</p>
			 <div class="compInfo">
				 <h2>FOOD LOUNGE</h2>
				 <p>kumarpara Sylhet 3100</p>
				 <p>+8801710897146</p>
				 <p>mail@foodlounge.com</p>
			 </div>
			 <div class="logo">
				 <img src="{{URL::to('img/logo-dash.png')}}" alt="">
			 </div>
		 </div>

		 <div class="customerInfo">
			 <div class="billing">
				<h2>Billing</h2>
				<p>{{$checkout_info['fname'].' '.$checkout_info['lname']}}</p>
				<p>{{$checkout_info['email']}}</p>
				<p>{{$checkout_info['phone']}}</p>
				<p>{{$checkout_info['address']}}</p>
				<p>{{$checkout_info['city'].', '.$checkout_info['postCode']}}</p>
			 </div>
		 </div>
		 <div class="items">
			<table class="table">
				 <thead>
					  <tr>
							<th>Name</th>
							<th>Unit price</th>
							<th>Qty</th>
							<th>Total</th>
					  </tr>
				 </thead>
				 <tbody>
				 	@foreach($order->cart as $cart)
					<tr>
						<td class="name">{{$cart->name}}</td>
						<td>{{$cart->price}}<span class="taka">&#2547;</span></td>
						<td class="qty">{{$cart->qty}}</td>
						<td>{{$cart->price * $cart->qty}}<span class="taka">&#2547;</span></td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
		<div class="totals">
			
			<p class="total ">Total : <span class="cartTotal">{{$order->total}}</span><span class="taka">&#2547;</span></p><br>
		</div>
	 </div>
	</div>
	
</section>
@endsection