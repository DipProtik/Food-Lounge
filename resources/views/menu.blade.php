@extends('layouts.main')


@section('title')
Our Menu
@endsection

@section('content')




<!-- Menu Page Fixed Navigation -->
<section class="" id="menu-navigation">
	<ul>
		@foreach($categories as $category)
		<li><a href="#{{$category->category_id}}" onclick="$('#{{$category->category_id}}').animatescroll({padding:80});">{{$category->name}}</a></li>
		@endforeach
	</ul>
</section>
<!-- Menu Page Fixed Navigation Ends -->




<!-- Menu Page Dish Listing With Categories -->
<section class="row menu-wrapper">
		@if(Session::has('success'))
		<div class="col-md-12">
			<p class="success-message">{{Session::get('success')}}</p>
		</div>
		@endif
		
		@foreach($categories as $category)
		<div class="col-md-12 cat-block" id="{{$category->category_id}}">
			<div class="dish-header">
				<div class="mask"></div>
				<h2 class="heading1">{{$category->name}}</h2>
			</div>
			
			<ul>
				@foreach($category->dishes as $dish)
				<li>
					<div class="row dish-image">
							<img src="{{URL::to('img/dish/'.$dish->photo.'')}}" alt="">
					</div>
					<h1>{{$dish->name}}</h1>
					<h2>{{$dish->price}}<span class="taka">&#2547;</span></h2>
					<p>{{$dish->details}}</p>
	
					<button class="btn1 btn1-round cart addToCart" value="{{$dish->id}}">Add to cart</button>
				</li>
				@endforeach
			</ul>
		</div>
		@endforeach
</section>
<!-- Menu Page Dish Listing With Categories Ends -->


@endsection

@section('scripts')
<script src="{{URL::to('/js/dish.js')}}"></script>
<script>
	var token ='{{Session::token()}}';
   var postAddress ='{{route('addTocart')}}';
</script>
@endsection