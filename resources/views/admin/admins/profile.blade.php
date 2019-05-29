@extends('admin.layouts.main')
@section('content')
<section class="row" id="admin-profile">

	<div class="col-md-4 col-sm-4 col-xs-12 admin-thumb">
		@if(empty($admin->avatar))
         <img src="{{URL::to('img/admins/null.jpg')}}" alt="Admins Photo">
      @else
         <img src="{{URL::to('img/admins/'.$admin->avatar.)}}" alt="">
      @endif 
	</div>

	<div class="col-md-8 col-sm-8 col-xs-12 admin-details detailsDiv">
		@if(Session::has('success'))
		<div class="col-md-12 t-center">
			<p class="success-message">{{Session::get('success')}}</p>
		</div>
		@endif
		<ul>
			<li><p class="title">Name</p> <p>{{$admin->first_name}} {{$admin->last_name}}</p></li>
			<li><p class="title">Email</p> <p>{{$admin->email}}</p></li>
			<li><p class="title">Phone</p> <p>{{$admin->phone}}</p></li>
			@if($admin->role_id == 1)
			<li><p class="title">Admin Type</p> <p> Super Admin </p></li>
			@else
			<li><p class="title">Admin Type</p> <p> Regular Admin </p></li>
			@endif
			
		</ul>
	</div>
</section>
@endsection