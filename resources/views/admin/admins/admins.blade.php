@extends('admin.layouts.main')
@section('content')
<section class="row users" id="admins">
   @if(Session::has('success'))
      <div class="col-md-12">
         <p class="success-message">{{Session::get('success')}}</p>
      </div>
   @endif


   <h1 class="header-1">All Admins</h1>
   <ul class="customer-list">


      @foreach($admins as $admin)

      <li>
         <div class="cs-photo">
            @if(empty($admin->avatar))
               <img src="{{URL::to('img/admins/null.jpg')}}" alt="Admins Photo">
            @else
               <img src="{{URL::to('img/admins/'.$admin->avatar.'')}}" alt="Admins Photo">
            @endif   

         </div>
         <div class="cs-content">
            <h3>{{$admin->first_name}} {{$admin->last_name}}</h3>
            <p>{{$admin->email}}</p>
         </div>
         <div class="admin-edit">
    
            <a href="{{route('delete.admin',['admin_id'=>$admin->id])}}"><i title="Delete Admin" class="fa fa-times deleteMember" aria-hidden="true" style="background:#b50505"></i></a>
         </div>
      </li>
      @endforeach
   </ul>
   {{$admins->links()}}
 </section>
@endsection