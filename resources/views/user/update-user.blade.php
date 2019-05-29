@extends('layouts.main2')
@section('content')
<section class="row user-profile-update">
    <form class="form form-1 col-md-12" action="{{route('user.update.submit')}}" method="POST" enctype="multipart/form-data"> 

    	@if(Session::has('success'))
		<div class="col-md-12 t-center">
			<p class="success-message">{{Session::get('success')}}</p>
		</div>
		@endif

        <div class="row billing">
            <div class="col-md-12 col-sm-12 col-xs-12 t-center">
                <h1 class="heading1">Update Profile</h1>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
            	<label for="">First Name</label>
               <input type="text" name="first_name"  class="form-control"  value="{{$user->first_name}}"  >
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
            	<label for="">Last Name</label>
               <input type="text" name="last_name"  class="form-control" value="{{$user->last_name}}"  >
            </div>

            <div class="col-md-12 col-sm-6 col-xs-12">
            	<label for="">Email</label>
                <input type="email" name="email" class="form-control"  value="{{$user->email}}"  >
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
            	<label for="">Photo</label>
                <input type="file" name="avatar" class="form-control"  value=""  >
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
            	<label for="">Phone</label>
               <input type="number" name="phone" class="form-control"  value="{{$user->phone}}">
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
            	<label for="">Address</label>
               <input type="text" name="address" class="form-control" value="{{$user->address}}"  >
            </div>

            <div class="col-md-4 col-sm-4 col-xs-4">
            	<label for="">Area</label>
               <input type="text" name="area" class="form-control" value="{{$user->area}}">
            </div>

            <div class="col-md-4 col-sm-4 col-xs-4">
            	<label for="">City</label>
               <input type="text" name="city"  class="form-control" value="{{$user->city}}" >
            </div>

            <div class="col-md-4 col-sm-4 col-xs-4">
            	<label for="">Zip</label>
               <input type="text" name="zip" class="form-control" value="{{$user->zip}}" >
            </div>
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$user->id}}">
            <div class="col-md-12 col-sm-12 col-xs-12 t-center">
            	<button class="btn1" type="submit">Update Profile</button>
            </div>
        </div>

    </form>
</section>

@endsection