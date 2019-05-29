@extends('admin.layouts.main')
@section('content')

<section class="row" id="messages">


	@if(Session::has('error'))
		<div class="col-md-12">
			<p class="error-message">{{Session::get('error')}}</p>
		</div>
	@endif
	

	<div class="names">
		<ul>
			@foreach($messages as $message)
			<li class="message-header" data-id="{{$message->id}}">
				<a href="{{route('contact.delete',['id'=>$message->id])}}" class="deleteMessage"><i class="fa fa-times"></i></a>
				<h3>{{$message->name}}</h3>
				<p>{{$message->created_at->format('d M Y')}}</p>
			</li>
			@endforeach
		</ul>
	</div>


	<div class="message" id="DisplayMessage">

		@if($messages->count() > 0)
		<p class="m-name">{{$first_message->name}}</p>
		<p class="m-email">{{$first_message->email}}</p>
		<p class="m-date">{{$first_message->created_at->format('d M Y')}}</p>
		<hr>
		<p class="mail-text">{{$first_message->message}}</p>
		<a href="mailto:{{$first_message->email}}" class="mail-link"><button class="btn1">Reply <span class="m-btn-name">{{$first_message->name}}</span></button></a>
		@else
			<p class="m-name">No Message in Inbox</p>
		@endif

	</div>
</section>
@endsection

@section('scripts')
<script>
	var messageURL = '{{route('admin.messages.show')}}';
	var token = '{{Session::token()}}';
</script>
@endsection