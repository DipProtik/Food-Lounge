@extends('layouts.main2')
@section('content')
<section class="row" id="cart">
    <div class="col-md-12 cart-wrapper">
        <h1 class="heading1">Order</h1>
        
        <table class="table">
            <thead>
                <tr>
                    <th class="dish-name-head">Dish Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart_items as $cart)
                <tr>
                    <td class="dish-name-body">
                        <p>{{$cart->name}}</p>
                    </td>
                    <td>
                        {{$cart->qty}}
                    </td>
                    <td class="dishPrice">{{$cart->price}}<span class="taka">&#2547;</span></td>
                    <td class="dishTotalPrice">{{$cart->price * $cart->qty}}<span class="taka">&#2547;</span></td>
                </tr>
                @endforeach

            </tbody>
         </table>
    </div>
    <div class="col-md-12 cart-tatals">
        
       
        <p class="total ">Total : <span class="cartTotal">{{$order->total}}</span><span class="taka">&#2547;</span></p><br>
    </div>
    <div class="col-md-12 order-details">
        <ul>
            <li>
                <h2>Payment Information</h2>
                <p><span>Date : </span> {{$order->created_at->format('d M Y')}}</p>
                <p><span>Type : </span>{{$order->payment_type}}</p>
                <p><span>Number : </span> {{$order->payment_number}}</p>
            </li>
            <li>
               <h2>Billing</h2>
                <p>{{$information['fname'].' '.$information['lname']}}</p>
                <p>{{$information['email']}}</p>
                <p>{{$information['phone']}}</p>
                <p>{{$information['address']}},{{$information['city'].', '.$information['postCode']}}</p>
            </li>
        </ul>
        </div>
</section>
@endsection