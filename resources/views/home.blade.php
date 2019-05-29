@extends('layouts.main')

@section('title')
Restaurant & Take away
@endsection
@section('content')

<section class="row " id="header">
	<div class="mask"></div>
	<div class="content">
		 <img src="http://localhost:8000/img/logo.png" alt=""><br>
		 <h1>Welcome to Food Lounge</h1><br>
		 <p>Best Food Place in Town.</p>
		 <a href="{{route('menu')}}"><button class="btn1">Order Now</button></a>
	</div>
</section>

<!-- About Page Header Section -->
<section class="container">
	<div class="row about-header">
			<h1 class="heading1">We are Food Lounge</h1>
			<p>Welcome to FOOD LOUNGE! At FOOD LOUNGE we are truly inspired by the essence of Indian cooking, from the exquisite aromas, to the vibrant colours and earthy flavours. We draw from all twenty-two regions of the beautiful nation, of India itself, varying from the Himalayas to the Indian Ocean and the Arabian Sea to the Bay of Bengal, bringing together true authentic, traditional Indian cuisine, to then re-create a gastronomic, mouth-watering and delicious experience of delicately prepared, freshly cooked Indian food, with a contemporary style.</p>
			<a href="{{route('reservation')}}"><button class="btn1">Make Reservation</button></a>
	</div>
	
</section>
<!-- About Page Header Section Ends -->



<!-- Homapage Most Loved Dish -->
@if($loved_dish->count()>0)
<section class="container home-dish loved-dish">
	<div class="row">
		<div class="col-md-5 col-sm-4 col-xs-12 dish-heading" style="background-image: url({{URL::to('img/favdish.jpg')}}"></div>
		<div class="col-md-7 col-sm-8 col-xs-12">
				<ul>
					<h1>Most Loved Dish</h1>
					@foreach($loved_dish as $dish)
					<li class="dish-block">
						<div class="row dish-image">
							<img src="{{URL::to('img/dish/'.$dish->photo.'')}}" alt="">
						</div>
						<div class="content">
							<h2>{{$dish->name}}</h2>
							<p>{{$dish->price}}<span class="taka">&#2547;</span></p>	
						</div>
						<button class="btn1 btn1-round addToCart" value="{{$dish->id}}">Add to cart</button>
						
					</li>
					@endforeach
				</ul>
		</div>
	</div>
	
	
</section>
@endif

<!-- Homapage Most Loved Dish Ends -->



<!-- Homapage Chef Special Dish -->
@if($chef_dishes->count()>0)
<section class="container home-dish chef-dish">
	<div class="col-md-5 col-sm-4 col-xs-12 dish-heading" style="background-image: url(http://localhost:8000/img/chefdish.jpg">
	</div> 
	<div class="col-md-7 col-sm-8 col-xs-12">
			<ul>
				<h1>Chef Special Dish</h1>	
				@foreach($chef_dishes as $dish)
				<li class="dish-block">
					<div class="row dish-image">
						<img src="{{URL::to('img/dish/'.$dish->photo.'')}}" alt="">
					</div>
					<div class="content">
						<h2>{{$dish->name}}</h2>
						<p>{{$dish->price}}<span class="taka">&#2547;</span></p>	
					</div>
					<button class="btn1 btn1-round addToCart" value="{{$dish->id}}">Add to cart</button>
					
				</li>
				@endforeach
			</ul>
	</div>
</section>
@endif
<!-- Homapage Chef Special Dish Ends -->







@endsection



@section('scripts')
<script src="{{URL::to('js/dish.js')}}"></script>
<script>
   var token ='{{Session::token()}}';
   var postAddress ='{{route('addTocart')}}';
</script>
@endsection
