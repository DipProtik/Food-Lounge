@extends('admin.layouts.main')
@section('content')
<section class="row users" id="customer">
	<h1 class="header-1">Our Customers</h1>
	@if(Session::has('success'))
	<div class="col-md-12">
		<p class="success-message">{{Session::get('success')}}</p>
	</div>
	@endif
	<ul class="customer-list">
		@foreach($customers as $customer)
		<li>
			<div class="cs-photo">
				@if(empty($customer->avatar))
					<img src="{{URL::to('assets/img/users/null.jpg')}}" alt="">
				@else
					<img src="{{URL::to('assets/img/users/'.$customer->avatar.'')}}" alt="">
				@endif	
			</div>
			<div class="cs-content">
				<h3>{{$customer->first_name}}{{$customer->last_name}}</h3>
				<p>{{$customer->email}}</p>
			</div>
			<div class="admin-edit">
				<a href="{{route('view.customer',['id'=>$customer->id])}}"><i title="View Profile" class="fa fa-eye" aria-hidden="true"></i>
				<a href="{{route('delete.customer',['id'=>$customer->id])}}"><i title="Delete Customer" class="fa fa-times" aria-hidden="true" style="background:#b50505"></i></a>
			</div>
		</li>
		@endforeach
	</ul>
	{{$customers->links()}}
	
</section>
@endsection