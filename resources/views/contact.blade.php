@extends('layouts.main')

@section('title')
Contact
@endsection


@section('content')


<section class="row contact" id="contact">

	<!-- Contact Page Left Section -->
	<div class="col-md-4 col-sm-4 col-xs-12 info">
		<img src="http://localhost:8000/img/logo.png" alt="">
		<p>Welcome to FOOD LOUNGE! At FOOD LOUNGE we are truly inspired by the essence of Indian cooking, from the exquisite aromas, to the vibrant colours and earthy flavours. We draw from all twenty-two regions of the beautiful nation, of India itself, varying from the Himalayas to the Indian Ocean and the Arabian Sea to the Bay of Bengal, bringing together true authentic, traditional Indian cuisine, to then re-create a gastronomic, mouth-watering and delicious experience of delicately prepared, freshly cooked Indian food, with a contemporary style.</p>
	</div>

	<!-- Contact Page Left Section Ends -->

	<!-- Contact Page Form Section -->
	<div class="col-md-8 col-sm-8 col-xs-12 contact-form">
		<form class="row form-3" action="{{route('contact.submit')}}" method="POST">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h1 class="header-1">Contact Us</h1>
			</div>
			
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

			<div class="col-md-6 col-sm-6 col-xs-12">
				<label for="">Name</label>
				<input type="text" class="form-control" name="name" required>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<label for="">Phone</label>
				<input type="tel" class="form-control" name="phone" required>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<label for="">Email</label>
				<input type="email" class="form-control" name="email" required>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<label for="">Message</label>
				<textarea name="message" class="form-control" id="" required></textarea>
			</div>
			{{csrf_field()}}
			<div class="col-md-12 col-sm-12 col-xs-12">
				<button class="btn1" type="submit">Leave a Message</button>
			</div>
		</form>
	</div>
	<!-- Contact Page Form Section Ends -->

</section>


@endsection
