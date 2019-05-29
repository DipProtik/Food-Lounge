@extends('admin.layouts.main')
@section('content')


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




<section class="row admin-home-section">
	<h1 class="header-1">Most Loved Dish</h1><button class="btn1 addLovedDish" style="margin-left:20px;">Add New Dish to the List</button>
	<ul>
		@if($loved_dish->count()>0)
			@foreach($loved_dish as $dish)
			<li>
				<img src="{{URL::to('/img/photos/'.$dish->photo.'')}}" alt="">
				<h3>{{$dish->name}}</h3>
				<div class="admin-edit">
					<a href="{{route('remove.lovedDish',['dish_id'=>$dish->id])}}"><i title="Remove from this List" class="fa fa-times" aria-hidden="true" style="background:#b50505"></i></a>
				</div>
			</li>
			@endforeach
		@else
			<p>There are No Dish Available for this Category</p>
		@endif

	</ul>

	

	<div class="form-3-wrapper" id="add-loved-dish-form">
		
		

		<form class="row form-3 left" method="POST" action="{{route('add.to.lovedDish')}}">
			<img src="{{asset('img/nav-close.png')}}"  class="close-form" alt="">
			<h2>Add Dish to Most Loved Dish</h2>
			<div class="col-md-12">
				<label for="name">Select The Dish</label>
				<select name="dish_id" class="form-control">
					<option value="">Select A Dish</option>
					@foreach($dishes as $dish)
					<option value="{{$dish->id}}">{{$dish->name}}</option>
					@endforeach
				</select>
			</div>
			{{csrf_field()}}
			<div class="col-md-12 text-center">
				<button class="btn1 text-left">Add to the list</button>
			</div>
		</form>
	</div>
</section>






<section class="row admin-home-section" id="admin-chef-special">
	<h1 class="header-1">Chef Special Dish</h1> <button class="btn1 addChefDish" style="margin-left:20px">Add New Dish to the List</button>
	<ul>
		@if($chef_dishes->count()>0)
			@foreach($chef_dishes as $dish)
			<li>
				<img src="{{URL::to('/img/photos/'.$dish->photo.'')}}" alt="">
				<h3>{{$dish->name}}</h3>

				<div class="admin-edit">
					<a href="{{route('remove.chefSpecial',['dish_id' => $dish->id])}}"><i title="Remove from this List" class="fa fa-times" aria-hidden="true" style="background:#b50505"></i></a>
				</div>
			</li>
			@endforeach
		@else
			<p>There are No Dish Available for this Category</p>
		@endif
	</ul>


	

	<div class="form-3-wrapper" id="add-chef-dish-form">
		

		

		<form class="row form-3 left" method="POST" action="{{route('add.to.chefspecial')}}">
			<img src="../img/nav-close.png"  class="close-form" alt=""> 	
			<h2>Add Dish to Chef Special</h2>
			<div class="col-md-12">
				<label for="name">Select The Dish</label>
				<select name="dish_id" class="form-control">
					<option value="">Select A Dish</option>
					@foreach($dishes as $dish)
					<option value="{{$dish->id}}">{{$dish->name}}</option>
					@endforeach
				</select>
			</div>
			{{csrf_field()}}
			<div class="col-md-12 text-center">
				<button class="btn1 text-left" type="submit">Add to the list</button>
			</div>
		</form>
	</div>
</section>
@endsection

