<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use Auth;

class UserController extends Controller
{

    public function __construct()
   {
        $this->middleware('auth:web');
   }


   // --> Display User Profile
   public function index(){

   	$user = Auth::user();
    return view('user.profile',["user" => $user]);
   }


   // --> Display User Orders Page
   public function getOrders(){
    $orders = Auth::user()->orders;
    return view('user.orders',['orders' => $orders]);
   }


   // --> Display User Single Order View Page
   public function getSingleOrder($order_id){
    $order = Order::find($order_id);
    $cart_items = unserialize($order->cart);
    $information = unserialize($order->checkout_info);
    return view('user.orders-single',['order' =>$order,'cart_items' => $cart_items,'information' => $information]);
   }



   // --> Display User Profile Update Page
    public function viewUpdateUser(){
        $user = Auth::user();
        return view('user.update-user',['user'=>$user]);
    }
    

    // --> Update User Profile Information
    public function UpdateUser(Request $request){
        $user_id = $request->id;
        $user = User::find($user_id);
        $new_photo = $request->file('avatar');

        if(!empty($new_photo)){ //--> Avatar Field is Not Empty

            if(!empty($user->avatar)){
                $photo_path = public_path().'/assets/img/users/'.$user->avatar;
                unlink($photo_path);
            }
            
            $photo_name = uniqid().$new_photo->getClientOriginalName();
            $upload = $new_photo->move('assets/img/users/',$photo_name);
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->area = $request->area;
        $user->city = $request->city;
        $user->zip = $request->zip;
        if(!empty($new_photo)){ 
          $user->avatar = $photo_name;
        }
        $user->save();
        return redirect()->route('user.profile')->with('success','Profile Infomation updated Successfully');


    }

}
