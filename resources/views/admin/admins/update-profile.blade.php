@extends('admin.layouts.main')
@section('content')
<section class="row admin-profile-update">

    <form class="form form-1 col-md-12" action="{{route('admin.profile.update.submit')}}" method="POST" enctype="multipart/form-data"> 

        <div class="row billing">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1 class="header-1">Update Profile</h1>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
            	<label for="">First Name</label>
               <input type="text" name="first_name"  class="form-control"  value="{{$admin->first_name}}"  >
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
            	<label for="">Last Name</label>
               <input type="text" name="last_name"  class="form-control" value="{{$admin->last_name}}"  >
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
            	<label for="">Email</label>
                <input type="email" name="email" class="form-control"  value="{{$admin->email}}"  >
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
            	<label for="">Photo</label>
                <input type="file" name="photo" class="form-control">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
            	<label for="">Phone</label>
               <input type="phone" name="phone" class="form-control"  value="{{$admin->phone}}"  >
            </div>

            
            
            {{csrf_field()}}
            <div class="col-md-12 col-sm-12 col-xs-12 ">
            	<button class="btn1" type="submit">Update Profile</button>
            </div>
        </div>

    </form>
</section>

@endsection