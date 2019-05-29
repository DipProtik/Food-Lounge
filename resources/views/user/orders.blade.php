@extends('layouts.main2')
@section('content')
 <section class="row center" id="user-orders">
   @if($orders->count()==0)
      <p class="info-message" style="margin-top:100px;">You Do not Have Any Orders</p>
   @else
   <h1 class="heading1">Your Orders</h1>
   <table class="table table-responsive">
     <thead>
       <tr>
         <th>Order no</th>
         <th>Date</th>
         <th>Qty</th>
         <th>Total</th>
         <th>Payment Type</th>
         <th>Payment Number</th>
         <th>Status</th>
         <th>View</th>
       </tr>
     </thead>
     <tbody class="table-hover">
      @foreach($orders as $order)
         <tr>
            <td class="serial">#{{$order->id}}</td>
            <td >{{\Carbon\Carbon::parse($order->created_at)->format('d M Y')}}</td>
            <td>{{$order->qty}}</td>
            <td>{{$order->total}}<span class="taka">&#2547;</span></td>
            <td><strong>{{$order->payment_type}}</strong></td>
            <td>
               @if($order->payment_type == 'Bkash')
                 {{$order->payment_number}} 
               @else
                {{$order->payment_number}} 
               @endif
            </td>
            <td>
            @if($order->status == 0)
               <button class="btn btn-danger btn-sm">pending</button>
            @else
               <button class="btn btn-success btn-sm">Complete</button>
            @endif

            </td>
            <td>
               <a href="{{route('user-single-order',['order_id' => $order->id])}}"><button class="btn btn-primary btn-sm">View</button></a>
            </td>
         </tr>
      @endforeach
      
     </tbody>
   </table>
   @endif
 </section>
@endsection