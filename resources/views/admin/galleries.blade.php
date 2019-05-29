@extends('admin.layouts.main')
@section('content')

<div class="row">
	<button class="btn1" id="addPhoto" >Add New Photo</button>
</div>
<section class="row galleries-photo admin-galleries-photo">

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

	@foreach($photos as $photo)
	<div class="col-md-3 col-sm-4 col-xs-6 photo">
		<img src="{{URL::to('img/photos/'.$photo->name.'')}}" alt="">
		<p class="caption">{{$photo->caption}}</p>
		

		<div class="admin-edit">
			<a href="{{route('delete.photo',['id'=>$photo->id])}}"><i title="Delete Photo" class="fa fa-times" aria-hidden="true" id="fafa"></i></a>
		</div>

	
	</div>
	@endforeach

	


	<!-- The Form for Adding Gallery photo -->
		<div class="form-3-wrapper" id="add-photo-form">
			
			<form class="row form-3" enctype="multipart/form-data" method="POST" action="{{route('add.new.photo')}}">
				<img src="../img/nav-close.png" id="close-cat-form" class="close-form" alt="">
				<h2>Add New Photo</h2>
				<label>Photo</label>
				<input type="file" name="photo" class="form-control" placeholder="Category Name" required="">
				<label>Caption</label>
				<input type="text" name="caption" class="form-control" placeholder="Category Name" required="">
				{{csrf_field()}}
				<div class="col-md-12 text-center">
					<button class="btn1 text-left">Submit</button>
				</div>
			</form>

		</div>
	<!-- The Form for Adding Gallery photo -->



</section>

@endsection
