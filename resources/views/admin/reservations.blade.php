@extends('admin.layouts.main')
@section('content')


<section class="reserve-date" >
 	<form action="{{route('reservation.date.submit')}}" method="POST">
		<label for="resDate">Search by Date</label>
		<div class="input-group">
      	<input type="" class="form-control" name="date" id="resDate" value="12 march 2019" data-date-format="dd M yyyy">
			<div class="input-group-addon pad0"><button class="btn2" type="submit">Apply</button></div>
			{{csrf_field()}}
		</div>
 	</form>
</section>



<section class="row table-A table-row">
	<h1 class="header-1">All Reservations</h1>


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

	@if($reservations->count() > 0)
 	<table class="table">
		<thead>
		   <tr>
		      <th>No</th>
		      <th>Name</th>
		      <th>Phone</th>
				<th>Date</th>
				<th>NOP</th>
				<th>Time</th>
				<th>Status</th>
				<th>Manage</th>
		   </tr>
		</thead>
		<tbody class="table-hover">
			@foreach($reservations as $reservation)
		    <tr>
		      <td class="serial">#{{$reservation->id}}</td>
		      <td class="">{{$reservation->name}}</td>
		      <td class=""><strong>{{$reservation->phone}}</strong></td>
		      <td class="">{{$reservation->date}}</td>
		      <td class="">{{$reservation->num_of_person}}</td>
				<td class="">{{$reservation->time_slot}}</td>
				

				<td class="">
					<button type="button" name="button" class="btn-status {{$reservation->status == 0 ? 'pending' : 'processed'}}">
					{{$reservation->status == 0 ? 'Pending' : 'Confirmed'}}
				</button></td>
				
				<td>
		      	<a href="{{route('update.status.reservation',['id'=>$reservation->id])}}"><i title="{{$reservation->status == 0 ? 'Confirm Reservation' : 'Cancel Reservation'}}" class="fa {{$reservation->status == 0 ? 'fa-check' : 'fa-times'}}" aria-hidden="true"></i></a>
		      	<a href="{{route('delete.reservation',['id'=>$reservation->id])}}"><i title="Delete Reservation" class="fa fa-trash-o" aria-hidden="true" style="color:#af0202"></i></a>
		      </td>
		    </tr>
		   @endforeach
		</tbody>
	</table>
	{{$reservations ->links()}}

	@else
		<br><p class="info-message">There are No Reservations</p>
	@endif
</section>
@endsection