<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use Session;
use \Cart as Cart;
use \Cache;
use App\Order;
use App\Invoice;
use Auth;

class DishController extends Controller
{

  public function __construct(){

    $this->middleware('auth:web',['only' => ['checkoutInfo','postCheckoutInfo','getChecout','postCheckout']]);
  
  }

   public function addTocart(Request $request){
        $dishId = $request['dishId'];
        $dish = Dish::find($dishId);       //cart is a built-in package
        Cart::add([
            'id' => $dish->id,
            'name' => $dish->name,
            'details' => $dish->details,
            'qty' =>1,
            'price' => $dish->price,
            'options' => ['photo' => $dish->photo],
        ]);
        $cartQty = Cart::count();
        Session::put('cartQty',$cartQty);
        return response()->json(['cartQty' => $cartQty]);
    }



    public function updateCart(Request $request){

        $dishId = $request['dishId'];
        $dishQty = $request['dishQty'];
        Cart::update($dishId , ['qty' => $dishQty]);
        $cartQty = Cart::count();
        $cartTotal= Cart::subtotal();
        Session::put('cartQty',$cartQty);
        return response()->json(['cartQty' => $cartQty,'cartTotal'=>$cartTotal]);
    } 

    public function deleteFromCart(Request $request){

        $dishId = $request['dishId'];
        Cart::remove($dishId);
        $cartQty = Cart::count();
        $cartTotal= Cart::subtotal();
        Session::put('cartQty',$cartQty);
        return response()->json(['cartQty' => $cartQty,'cartTotal'=>$cartTotal]);
    }




    public function getCart()
    {   
        
    	  $cart= Cart::content();
        $cartTotal= Cart::subtotal(0, '.', '');
        $cartQty= Cart::count();
        if($cartQty <= 0){
            return redirect()->route('menu');
        }
        return view('cart',['cartItems'=>$cart,'cartTotal'=> $cartTotal]);
    }


   public function checkoutInfo(){

      $user = Auth::user();
      if(Session::has('checkout_info')){
        return redirect()->route('checkout');
      }

      return view('information',['user' => $user]);
   


   }


   public function postCheckoutInfo(Request $request){	


   	$checkout_info= ([
	       'fname' => $request['fname'],
	       'lname' => $request['lname'],
         'email' => $request['email'],
	       'phone' => $request['phone'],
	       'address'=> $request['address'],
	       'city' => $request['city'],
	       'postCode' =>$request['postCode'],

   	]);

   	Session::put('checkout_info',$checkout_info);

   	return redirect()->route('checkout');
   }

   public function UpdatecheckoutInfo(){  

      if(Session::has('checkout_info')){
         
        $checkout_info = Session::get('checkout_info');
        return view('information-update',['checkout_info' =>$checkout_info]);
      }

      return redirect()->route('checkout.info');
   }





   public function getChecout()
    {
   
    	if(!Session::has('checkout_info')){
   		return redirect()->route('checkout.info');
     }
     //dd(Session::get('checkout_info'));
 	    $cart= Cart::content();
      $cartTotal= Cart::subtotal();
      $cartQty= Cart::count();
      if($cartQty <=0){
         return redirect()->route('menu');
      }
      $user = Auth::user();
      
     return view('checkout',['cartItems'=>$cart,'cartTotal'=> $cartTotal,'user'=>$user]);
  }




  public function checkoutWithBkash(Request $request){

    $cart = Cart::content();
    $qty = Cart::count();
    $total = Cart::subtotal(0, '.', '');
    $checkout_info = Session::get('checkout_info');

    //dd($checkout_info);

    $order = new Order();
    $order->user_id = Auth::user()->id;
    $order->cart = serialize($cart);
    $order->checkout_info = serialize($checkout_info);
    $order->qty = $qty;
    $order->total = $total;
    $order->payment_type = "Bkash";
    $order->payment_id = $request->transection_id;
    $order->payment_number = $request->bkash_number;
    $order->save();

    Cart::destroy();
    Session::forget('cartQty');
    Session::forget('checkout_info');
    Cache::flush();

    return redirect()->route('menu')->with('success','Thank you for your Order. We will call you to confirm the order. have a nice meal');
  }

  
  public function checkoutWithCOD(Request $request){
    $cart = Cart::content();
    $qty = Cart::count();
    $total = Cart::subtotal(0, '.', '');
    $checkout_info = Session::get('checkout_info');
    $user = Auth::user();

    $order = new Order();
    $order->user_id = Auth::user()->id;
    $order->cart = serialize($cart);
    $order->checkout_info = serialize($checkout_info);
    $order->qty = $qty;
    $order->total = $total;
    $order->payment_type = "COD";
    $order->payment_id = '';
    $order->payment_number = $request->number;
    $order->save();

    Cart::destroy();
    Session::forget('cartQty');
    Session::forget('checkout_info');
    Cache::flush();

    return redirect()->route('menu')->with('success','Thank you for your Order. We will call you to confirm the order. have a nice meal');
  }
}
