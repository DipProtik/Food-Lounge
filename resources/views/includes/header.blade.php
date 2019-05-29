<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>Company | @yield('title')</title>


		<!-- Bootstrap -->
		
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- Icons -->
		<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>

		<!--Google Fonts -->

		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,800|Roboto:300,400,600,800" rel="stylesheet">

		<link href="{{URL::to('css/datepicker.min.css')}}" rel="stylesheet" />
		<link href="{{URL::to('css/elements.css')}}" rel="stylesheet" />
		<link href="{{URL::to('css/simpleLightbox.min.css')}}" rel="stylesheet" />
		<link href="{{URL::to('css/style.css')}}" rel="stylesheet" />
		<link href="{{URL::to('css/responsive.css')}}" rel="stylesheet" />

	
	</head>

	<body>
			<div class="container-fluid" id="topbar">
					<div class="col-md-12 webstatus"><i class="fa fa-phone"></i> 01258745878  <p style="display:inline-block;margin-left:30px">Website is <span class="{{$websiestatus->status == 'open' ? 'open' : 'closed'}}">{{$websiestatus->status}}</span> today (10am - 11pm)</p></div>
			</div>