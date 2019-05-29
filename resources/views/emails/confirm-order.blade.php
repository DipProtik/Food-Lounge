<style>




.invoice{
	font-family: 'Roboto', sans-serif;
	margin:0px auto;
	width:595px;
	height:auto;
	min-height:842px;
	padding:30px 30px 30px;
	background: #fff;
	!border: 1px solid #ccc;
	color: #000;
	text-align:center;
	box-shadow: 0px 0px 15px #ccc
}
.inv-header{
	text-align: center;
	width: 100%;
	border-bottom: 2px solid #05b171;
	height:200px;
}
.inv-header .invNo{
	color: #05b171;
	font-size:18px;
	font-weight: 700;
	margin: 0px;
}
.inv-header > p.date{
	margin: 2px 0px;
   font-size: 14px;
}
.inv-header .compInfo{
	float: left;
	width: 50%;
	height:auto;
	text-align: left;
	margin-top: 15px;
}
.compInfo h2{
	font-size:17px;
	font-weight:600;
	margin:0px;
	margin-bottom:10px;
	color: #05b171;
}
.compInfo p{
	font-size:14px;
   font-weight: 400;
   margin: 0px;
}
.inv-header .logo{
	float: right;
   text-align: right;
   width: 50%;
	padding-top:40px;
}
.inv-header .logo img{
	width: 90px;
	height: auto;
}

.customerInfo{
	width: 100%;
	text-align:left;
	height:150px;
	clear: both
}
.customerInfo .billing{
	width:50%;
	text-align: left;
	float: left;
}
.customerInfo .shipping{
	width:50%;
	text-align: right;
	float: right;
}
.customerInfo h2{
	font-size:15px;
   font-weight:800;
   margin-bottom: 8px;
   display: inline-block;
   padding:0px 0px 5px;
   border-bottom: 1px solid #ccc
}
.customerInfo p{
	font-size:15px;
	margin: 0px;
}
table{
   border:1px solid #ddd;
	box-shadow: none;
	width: 100%;
}
table thead{
    background: #111;
    color: #fff;
}
.invoice .items{
	position: relative;
	top:20px;
}

table>tbody>tr>td.name{
	max-width: 180px;
}
table>tbody>tr>td,
table>thead>tr>th{
	font-size: 14px;
	padding:8px 10px;
}


.invoice .totals{
	width: 100%;
	text-align: right;
	margin-top:65px;
	display: block;
}
.invoice .totals p{
	margin: 0px;
}
.invoice .totals .total{
    display: inline-block;
    position: relative;
    margin-top:5px;
    font-size:18px;
    font-weight:600;
    color: #000
}
.invoice .totals .total::before{
   position: absolute;
   content: "";
   top: -5px;
   right: 0px;
   height: 1px;
   background: #000063;
   width: 120%;
}
.invoice .totals p span{
    font-weight:500;
    color:#000;
    font-size:14px;
    padding-left: 2px;
}
.confirmMessage{
	text-align:left;
	padding: 30px 50px;
	margin: 40px 0px 20px;
}
.confirmMessage p{
	font-weight:500;
	font-family: Lato, 'sans-serif';
	margin:2px;
	padding:3px 0px;
}

</style>


<div class="confirmMessage">
	<p>Hello Mr <strong>{{$name}}</strong></p>
	<p>We are Glad to Confirm Your Order, We Look Forward to get More Orders From You. Dont Forget to let Us Know How do You Like Our Foods</p>
	<p><strong>Please Check Your Invoice Below</strong></p>
</div>
<div class="invoice">
	 <div class="inv-header">
		 <p class="invNo">#invoice {{$id}}</p>
		 <p class="date">{{$date}}</p>
		 <div class="compInfo">
			 	<h2>FOOD LOUNGE</h2>
				 <p>kumarpara Sylhet 3100</p>
				 <p>+8801710897146</p>
			<p>foodlounge.com</p>
		</div>
		<div class="logo">
			<img src="{{URL::to('img/logo-dash.png')}}" alt="">
		</div>
	 </div>

	 <div class="customerInfo">
		 <div class="billing">
			 <h2>Bill to</h2>
			 <p>{{$checkout_info['fname']}} {{$checkout_info['lname']}}</p>
			 <p>{{$checkout_info['address']}}</p>
			 <p>{{$checkout_info['city']}}</p>
			 <p>{{$checkout_info['postCode']}}</p>
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
			 	@foreach($cart_items as $cart)
				<tr>
					<td class="name" style="max-width: 180px;">{{$cart->name}}</td>
					<td>{{$cart->price}}<span class="taka">&#2547;</span></td>
					<td style="width: 20px;text-align:center">{{$cart->qty}}</td>
					<td>{{$cart->price * $cart->qty}}<span class="taka">&#2547;</span></td>
				</tr>	
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="totals">
		<!-- <p>Subtotal : <span>{{$total}}</span><span class="taka">&#2547;</span></p>
		<p>Due : <span>0</span><span class="taka">&#2547;</span></p> -->
		<p class="total ">Total : <span class="cartTotal">{{$total}}</span><span class="taka">&#2547;</span></p><br>
	</div>
 </div>