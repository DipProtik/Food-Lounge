@extends('layouts.main')

@section('title')
Gallery
@endsection


@section('content')


<!-- Gallery Page Photos Section -->
<section class="row galleries-photo lightbox">
	@foreach($galleries as $gallery)
	<a class="col-md-3 col-sm-4 col-xs-6 photo" href="{{URL::to("/img/photos/$gallery->name")}}" title="{{$gallery->caption}}">
		<div class="img">
			<img src="{{URL::to("/img/photos/$gallery->name")}}" alt="Gallery Photo">
		</div>
	</a>
	@endforeach
</section>
<!-- Gallery Page Photos Section Ends -->

@endsection