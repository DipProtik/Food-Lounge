@extends('layouts.main2')
@section('content')
 <section class="row" id="user-profile">
   <div class="col-md-12 col-sm-12 col-xs-12 admin-cover">
   </div>
   <div class="col-md-12 col-sm-12 col-xs-12 admin-thumb">
      <div class="inner">
         @if(!empty(Auth::user()->avatar))
         <img src="{{URL::to('assets/img/users/'.$user->avatar.'')}}" alt="">
         @else
         <img src="{{URL::to('assets/img/users/null.jpg')}}" alt="">
         @endif
      </div>
   </div>
   
   <div class="col-md-12 col-sm-12 col-xs-12 admin-details detailsDiv">
      @if(Session::has('success'))
      <div class="col-md-12">
         <p class="success-message">{{Session::get('success')}}</p>
      </div>
      @endif
      <h2>Basic Information</h2>
      <ul>
         <li><p class="title">First Name</p> <p><strong>{{$user->first_name}}</strong></p></li>
         <li><p class="title">Last Name</p> <p><strong>{{$user->last_name}}</strong></p></li>
         <li><p class="title">Email</p> <p>{{$user->email}}</p></li>
         <li><p class="title">Phone</p> <p>{{$user->phone}}</p></li>
      </ul>

      <h2>Address</h2>
      <ul>
         <li><p class="title">Address</p> <p>{{$user->address}}</p></li>
         <li><p class="title">Area</p> <p>{{$user->area}}</p></li>
         <li><p class="title">City</p> <p>{{$user->city}}</p></li>
         <li><p class="title">Zip</p> <p>{{$user->zip}}</p></li>
      </ul>

      <a href="{{route('user.update')}}"><button class="btn1">Update Profile</button></a>
   </div>
 </section>
@endsection



