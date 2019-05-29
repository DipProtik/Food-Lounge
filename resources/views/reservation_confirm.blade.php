@extends('layouts.main')


@section('title')
Reservation
@endsection

@section('content')


<!-- Reservation Page Full -->
<section class="row" id="reserve">

	<!-- Reservation Page Left Section -->
	<div class="col-md-12 col-sm-12 col-xs-12 reserve-text">
		<div class="mask"></div>
		<h1 class="heading1">
			Confirm Your <br>Reservation
      </h1>
      
	</div>
	<!-- Reservation Page Left Section Ends -->


	<!-- Reservation Page Form Section -->
	<div class="col-md-12 col-sm-12 col-xs-12 reserve-form">
		<div class="row reserve-form-wrapper">
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

			<!-- Reservation Form-->
         <form action="{{route('reservation.confirm.submit')}}" method="POST" class="form">
            <div class="col-md-12">
            <p style="font-size:16px; margin-top:30px;">Thank You for Your reservation <strong>{{$reservation['name']}}</strong></p>
            <p>We have sent a code to your phone. Please use the code to confirm your reservation</p>
            </div>
				<div class="col-md-12">
					<label for="dob">Verification Code</label>
               <input type="text" class="form-control" name="code" placeholder="place your code" required>
               <input type="hidden" value="{{$reservation['id']}}" name="res_id">
				</div>
				{{csrf_field()}}
				<div class="col-md-12">
					<button type="submit">Confirm Reservation</button>
				</div>
			</form><!-- Reservation Form Ends-->

		</div>
	</div>
	<!-- Reservation Page Form Section Ends -->

</section>

@endsection