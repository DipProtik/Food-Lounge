@extends('admin.layouts.main')
@section('content')

<section class="row orders" id="od-pending">
	<section class="reserve-date" style="margin-bottom: 50px;margin-left: 0px">
 	<form action="{{route('order.date.submit')}}" method="POST">
		<label for="resDate">Search by Date</label>
		<div class="input-group">
      	<input type="" class="form-control" name="date" id="resDate" value="12 march 2019" data-date-format="yyyy-mm-dd">
			<div class="input-group-addon pad0"><button class="btn2" type="submit">Apply</button></div>
			{{csrf_field()}}
		</div>
 	</form>
</section>
 	<h1 class="header-1">All Orders</h1>

 	@if($orders->count()>0)
		@if(Session::has('success'))
			<div class="col-md-12">
				<p class="success-message">{{Session::get('success')}}</p>
			</div>
		@endif
		@if(Session::has('error'))
			<div class="col-md-12">
				<p class="error-message">{{Session::get('error')}}</p>
			</div>
		@endif

		

		<table class="table table-responsive">
		  <thead>
		    <tr>
		      <th>Date</th>
		      <th>Name</th>
		      <th>Payment Type</th>
				  <th>Number</th>
				  <th>Qty</th>
				  <th>Total</th>
		      <th>Status</th>
		      <th>Manage</th>
		    </tr>
		  </thead>
		  <tbody class="table-hover">

			@foreach($orders as $order)
				
				<tr>
		      <td class="serial">{{$order->created_at->format('d M Y')}}</td>
		      <td >{{$order->user->first_name.' '.$order->user->last_name}}</td>
		      <td>{{$order->payment_type}}</td>
		      <td>{{$order->payment_number}}</td>
		      <td>{{$order->qty}}</td>
			  <td>{{$order->total}}<span class="taka">&#2547;</span></td>
					

				<td>
					<button type="button" name="button" class="btn-status {{$order->status == 0 ? 'pending' : 'processed'}}">
							{{$order->status == 0 ? 'Pending' : 'Processed'}}
				</button></td>

		      <td>
		      	<a href="{{route('invoice.view',['id'=>$order->id])}}"><i title="View Order" class="fa fa fa-eye" aria-hidden="true"></i></a>	
		      	<a href="{{route('update-order-status',['order_id' => $order->id])}}"><i title="{{$order->status == 0 ? 'Confirm Order' : 'Cancel Order'}}" class="fa {{$order->status == 0 ? 'fa-check' : 'fa-times'}}" aria-hidden="true"></i></a>
		      	<a href="{{route('delete.order',['order_id' => $order->id])}}"><i title="Delete Order" class="fa fa-trash-o" aria-hidden="true" style="color:#af0202"></i></a>
		      </td>

		    </tr>
		   @endforeach


		  </tbody>
		</table>
		{{$orders->links()}}
	@else
		<br><p class="info-message">There are No Orders Available</p>
	@endif
 	
 	
</section>
@endsection