@extends('admin.layouts.main')
@section('content')
 <section class="row admin-cs-profile" id="user-profile">
   <div class="col-md-4 col-sm-4 col-xs-12 admin-thumb">
      <div class="inner">
         @if(!empty($customer->avatar))
         <img src="{{URL::to('assets/img/users/'.$customer->avatar.'')}}" alt="">
         @else
         <img src="{{URL::to('assets/img/users/null.jpg')}}" alt="">
         @endif
         
      </div>
   </div>
   
   <div class="col-md-8 col-sm-8 col-xs-12 admin-details detailsDiv">
      <h2>Basic Information</h2>
      <ul>
         <li><p class="title">First Name</p> <p><strong>{{$customer->first_name}}</strong></p></li>
         <li><p class="title">Last Name</p> <p><strong>{{$customer->last_name}}</strong></p></li>
         <li><p class="title">Email</p> <p>{{$customer->email}}</p></li>
         <li><p class="title">Phone</p> <p>{{$customer->phone}}</p></li>
      </ul>

      <h2>Address</h2>
      <ul>
         <li><p class="title">Address</p> <p>{{$customer->address}}</p></li>
         <li><p class="title">Area</p> <p>{{$customer->area}}</p></li>
         <li><p class="title">City</p> <p>{{$customer->city}}</p></li>
         <li><p class="title">Zip</p> <p>{{$customer->zip}}</p></li>
      </ul>
   </div>
 </section>
@endsection