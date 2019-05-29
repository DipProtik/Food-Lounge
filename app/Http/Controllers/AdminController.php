<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Order;
use App\User;
use App\Gallery;
use App\DishCategory;
use App\Dish;
use App\Contact;
use App\Reservation;
use App\WebsiteStatus;
use Mail;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    



    // --> Display Admin Dashboard
    public function index()
    {


        $allPendingOrders = Order::where('status','0')->get();
        $SuccessfullOrders = Order::where('status','1')->get();
        $TodaysOrders = Order::whereDate('created_at', DB::raw('CURDATE()'))
                ->where('status','1')
                ->get();

        
        $todaysPaymentsNumber = $TodaysOrders->count();
        $TodaysEarnings=0;
        $totalEarning =0;


        $pendingOrders = $allPendingOrders->count();
        $successfullOrderToday = $TodaysOrders->count();
        $successfullOrdersOverall =$SuccessfullOrders->count();

        foreach ($TodaysOrders as $today ) {
            $TodaysEarnings += $today->total;
        }
        foreach ($SuccessfullOrders as $order ) {
            $totalEarning += $order->total;
        }


        $dishes = Dish::all();
        $dishCategory = DishCategory::all();
        $todaysDate = date('d M Y');
     
        $allReservationsPending = Reservation::where('status','0')->get();
        $reservationsPending = $allReservationsPending->count();
        $totalDish = $dishes->count();
        $totalCategory = $dishCategory->count();
  
        $status = WebsiteStatus::first();
        $admin = Auth::user();
        return view('admin.dashboard',
            ["admin" => $admin,
            'todaysPaymentsNumber'=>$todaysPaymentsNumber,
            'TodaysEarnings'=>$TodaysEarnings,
            'totalEarning'=>$totalEarning,
            'pendingOrders'=>$pendingOrders,
            'successfullOrderToday'=>$successfullOrderToday,
            'successfullOrdersOverall'=>$successfullOrdersOverall,
            'reservationsPending'=>$reservationsPending,
            'totalDish'=>$totalDish,
            'totalCategory'=>$totalCategory,
            'status' => $status]);
    }


    public function websiteStatus(Request $request){
        $status = WebsiteStatus::first();
        $status -> status = $request->status;
        $status->save();
        return redirect()->back();
    }



    // --> Display Admin Register Page

    public function register(){

        $role = Auth::user()->role_id;
        if($role == "1"){
            return view('admin.register');
        }
        else{
            return redirect()->route('admin.dashboard');
        } 
    }



    // --> Adding New Admin with FORM Request 
    public function postRegister(Request $request){

        $photo = $request->file('photo');

        if(!empty($photo)){
            $photo_name = uniqid().$photo->getClientOriginalName();
            $upload = $photo->move('img/admins/',$photo_name);
        }else{
            $photo_name = '';
        }
        
        $admin = new Admin();
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->avatar = $photo_name;
        $admin->role_id = $request->role_id;
        $admin->phone = $request->phone;
        $admin->save();

        return redirect()->route('admin.admins')->with('success',$admin->first_name." is added as new Admin");
        
    }


    // --> Display Logged-in Admin Profile
    public function getAdmin()
    {
        $admin = Auth::user();
        return view('admin.profile',['admin' => $admin]);
    }


    // --> Display Logged-in Admin Profile Update Page
    public function viewUpdateUser()
    {
        $admin = Auth::user();
        return view('admin.admins.update-profile',['admin' => $admin]);
    }


    // --> Update Logged in Admin information
    public function UpdateAdmin(Request $request){


        $admin = Auth::user();

        $new_photo = $request->file('photo');

        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
      
        if(!empty($new_photo)){

            if(!empty($admin->avatar)){
                $photo_path = public_path().'/img/admins/'.$admin->avatar; 
                unlink($photo_path);    
            }
            
            $photo_name = uniqid().$new_photo->getClientOriginalName();
            $upload = $new_photo->move('img/admins/',$photo_name);
            $admin->avatar = $photo_name;
        }

        $admin->save();
        return redirect()->route('admin.profile')->with('success','Profile Infomation updated Successfully');
    }



    // --> Display All Admins Page
    public function getAllAdmins(){

        $role = Auth::user()->role_id;
        if($role == "1"){
            $admins = Admin::paginate(5);
            return view('admin.admins.admins',['admins'=>$admins]);
        }
        else{
            return redirect()->route('admin.dashboard');
        } 
    }



    // --> Deleting an Admin
    public function deleteAdmin($admin_id){   
        $admin = Auth::user();
        if($admin->role_id == "1"){
            $admin = Admin::find($admin_id);
            $admin_name = $admin->first_name;
            $admin->delete();
            return redirect()->back()->with('success', $admin_name.' is deleted from Admins');
        }
        else{
            return redirect()->route('admin.dashboard');
        } 
    }



    // --> Display Admin Home Page with  Dishes
    public function getHome(){
        $chef_dishes = Dish::where('chef_special','1')->get();
        $loved_dish = Dish::where('most_loved','1')->get();
        $dishes = Dish::all();
        return view('admin.home',['chef_dishes'=>$chef_dishes,'loved_dish'=>$loved_dish,'dishes'=>$dishes]);
    }


    // --> Add Dish to Chef Special  
    public function addChefSpecial(Request $request){
        if(!empty($request->dish_id)){
            $dish = Dish::find($request->dish_id);
             if($dish->chef_special == '0'){
            $dish->chef_special = '1';
            $dish->save();
            $name = $dish->name;
             return redirect()->back()->with('success', $name.' Added to chef special Dishes');}

             $name = $dish->name;
            return redirect()->back()->with('error',$name. 'is already selected');

           
        }
         return redirect()->back()->with('error', 'No dish was selected');
        
    }



    // --> Add Dish to Most Loved Dish List
    public function addLovedDish(Request $request){
        if(!empty($request->dish_id)){
            $dish = Dish::find($request->dish_id);
            if($dish->most_loved == '0'){
            $dish->most_loved = '1';
            $dish->save();
            $name = $dish->name;
             return redirect()->back()->with('success', $name.' Added to Most Loved Dishes');}

            $name = $dish->name;
            return redirect()->back()->with('error',$name. ' is already selected');
         
           

        
        
}
                 return redirect()->back()->with('error', 'No dish was selected');
        
              
        }

       
    


    // --> Remove Dish From Chef Special List
    public function removeChefSpecial($dish_id){
        $dish = Dish::find($dish_id);
        $dish->chef_special = '0';
        $dish->save();
        $name = $dish->name;
        return redirect()->back()->with('success', $name.' Removed from Chef Special Dishes'); 
    }


    // --> Remove Dish From Most Loved List
    public function removeLovedDish($dish_id){
        $dish = Dish::find($dish_id);
        $dish->most_loved = '0';
        $dish->save();
        $name = $dish->name;
        return redirect()->back()->with('success', $name.' Removed from Most Loved Dishes'); 
    }



    




    public function getCustomers(){
        $customers = User::paginate(5);
        return view('admin.customers',['customers' => $customers]);
    }

    public function getSingleCustomer($id){
        $customer = User::find($id);
        return view('admin.customer-profile',['customer'=>$customer]);
    }

    public function deleteCustomer($id){
        $customer = User::find($id);
        if(!empty($customer->avatar)){
            $photo_path = public_path().'/assets/img/users/'.$customer->avatar; 
            unlink($photo_path);    
        }
        foreach($customer->orders as $order){
           $order->delete();
        };
        $customer->delete();
        return redirect()->route('admin.customers')->with('success','Customer Deleted Successfully');
    }



    
    public function getGalleries(){
        $photos = Gallery::all();
        return view('admin.galleries',['photos'=>$photos]);
    }

    public function addNewPhoto(Request $request){

        $photo = $request->file('photo');
        $photo_name = uniqid().$photo->getClientOriginalName();

        if(!empty($photo)){

            $upload = $photo->move('img/photos/',$photo_name);

            $gallery = new Gallery();
            $gallery->name = $photo_name;
            $gallery->caption = $request->caption;
            $gallery->save();

            return redirect()->back()->with('success','New Photo Uploaded successfully');   
        }
        return redirect()->back()->with('error','There was some Error uploading the Photo. Please Try again later');    
    }

    public function deletePhoto($id){

        $photo = Gallery::find($id);

        $photo_path = public_path().'/img/photos/'.$photo->name; 
        
        unlink($photo_path);

        $photo->delete();
        return redirect()->back()->with('error','Photo Deleted Successfully');    
    }

  
    



    
    




    
    public function getDish(){

        $dishCategory = DishCategory::all();
        $dishes = Dish::paginate(10);
        return view('admin.dish',['dishCategory'=>$dishCategory,'dishes'=>$dishes]);
    }


    public function addNewDishCategory(Request $request){

        $category = new DishCategory();
        $category->name = $request->name;
        $category->category_id = strtok($request->name,' ');
        $category->save();

        return redirect()->back()->with('success',$category->name.' Added to Dish Categories'); 
    }


    public function deleteDishCategory($id){

        $category = DishCategory::find($id);

        $category_name = $category->name;

        foreach($category->dishes as $dish){
           $dish->delete();
        };

        $category->delete();

        return redirect()->back()->with('success', $category_name.' Deleted From Dish Categories with All the associated dishes');
    }

    public function editDishCategory(Request $request){
        $id = $request->id;
        $category = DishCategory::find($id);
        $name = $category->name;
        return response()->json(['name'=>$name]);
    }



    public function UpdateDishCategory(Request $request){
        $id = $request->id;
        $category = DishCategory::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('success',$category->name.' Updated');
    }






    public function addNewDish(Request $request){

        $photo = $request->file('photo');
        $dish = new Dish();
        $dish->name = $request->name;
        $dish->price = $request->price;
        $dish->details = $request->details;

        $dish->dish_category_id = $request->category;
        if(!empty($photo)){
            $photo_name = uniqid().$photo->getClientOriginalName();
            $photo->move('img/dish/',$photo_name);
            $dish->photo = $photo_name;
        }

        $dish->save();

        $dish_name = $request->name;

        return redirect()->back()->with('success',$dish_name.' is added to Dish Collection'); 

    }



    public function viewDishDetails(Request $request){
        $id = $request->id;
        $dish = Dish::find($id);
        $name = $dish->name;
        $details = $dish->details;
        $price = $dish->price;
        $category = $dish->dish_category->name;
        $photo = $dish->photo;

        return response()->json(['name'=>$name,'details'=>$details,'price'=>$price,'category'=>$category,'photo'=>$photo]);
    }


    public function editDish(Request $request){
        $id = $request->id;
        $dish = Dish::find($id);

        $name = $dish->name;
        $details = $dish->details;
        $price = $dish->price;

        return response()->json(['name'=>$name,'details'=>$details,'price'=>$price]);
    }

   
   
    public function editDishSubmit(Request $request){
        
        $id = $request->dish_id;
        $dish = Dish::find($id);

        $dish_name = $dish->name;

        $new_photo = $request->file('photo');

        if(!empty($new_photo)){

            $photo_name = uniqid().$new_photo->getClientOriginalName();
            $photo_path = public_path().'/img/dish/'.$dish->photo; 
            unlink($photo_path);
            $new_photo->move('img/dish/',$photo_name);
            $dish->photo = $photo_name;
        }

        $dish->name = $request->name;
        $dish->price = $request->price;
        $dish->details = $request->details;

        if(!empty($request->category)){
            $dish->dish_category_id = $request->category;
        }

        $dish->save();

        return redirect()->back()->with('success',$dish_name.' Updated');
    }

    public function deleteDish($id){
       
        $dish = Dish::find($id);
        $dish_name = $dish->name;
        
        $photo_path = public_path().'/img/dish/'.$dish->photo; 
        unlink($photo_path);
            
        $dish->delete();

        return redirect()->back()->with('success',$dish_name.' Deleted From Dish Collection');
    }








    public function getOrders(){

        $orders = Order::orderBy('id','desc')->paginate(5);
        return view('admin.orders',['orders'=>$orders]);
    }



    
    public function updateOrderStatus($order_id){

        $order = Order::find($order_id);

        $checkout_info = unserialize($order->checkout_info);
        $cart_items = unserialize($order->cart);


        if($order->status == 0){

            $order->status = 1;
            $order->save();

            $message = 'Order #'.$order->id.' by is Confirmed';

            $name =  $checkout_info['fname'].' '.$checkout_info['lname'];
            $email = $checkout_info['email'];
            $total = $order->total;
            $qty = $order->qty;
            $id = $order->id;
            $date = $order->created_at->format('d M Y');

            $data= array(
                "name" => $name,
                "email" => $email,
                "checkout_info" => $checkout_info,
                'cart_items' =>$cart_items,
                'total' => $total,
                'qty' =>  $qty,
                'id' => $id,
                'date' => $date
            );


            Mail::send('emails.confirm-order',$data,function($m) use ($data) {
                $m->to($data['email']);
                $m->from('foodlounge@gmail.com');
                $m->subject('Order Confirmation');
            });

            return redirect()->back()->with('success',$message);

        }else{

            $order->status = 0; 
            $order->save();
            $message = 'Order #'.$order->id.' is Canceled';
            return redirect()->back()->with('error',$message);
        }
        
    }
    public function sendInvoice($order_id){

        $order = Order::find($order_id);

        $checkout_info = unserialize($order->checkout_info);
        $cart_items = unserialize($order->cart);

        $name = $checkout_info['fname'].' '.$checkout_info['lname'];
        $email = $checkout_info['email'];
        $total = $order->total;
        $qty = $order->qty;
        $id = $order->id;
        $date = $order->created_at->format('d M Y');

        $data=array(
            "name" => $name,
            "email" => $email,
            "checkout_info" => $checkout_info,
            'cart_items' =>$cart_items,
            'total' => $total,
            'qty' =>  $qty,
            'id' => $id,
            'date' => $date
        );

        Mail::send('emails.confirm-order',$data,function($m) use ($data) {
            $m->to($data['email']);
            $m->from('foodlounge@gmail.com');
            $m->subject('Order Confirmation');
        });
        
        return redirect()->back()->with('success','Invoice Sent to Customer successfully'); 
    }


    public function deleteOrder($order_id){
        $order = Order::find($order_id);
        $order->delete();
        $message = 'Order #'.$order->id.' by '.$order->user->first_name.' is Deleted';
        return redirect()->back()->with('error',$message);
    }
    





    public function getReservations(){

        $reservations = Reservation::orderBy('id','desc')->paginate(10);
        return view('admin.reservations',['reservations'=>$reservations]);
    } 



    public function getReservationsbyDate(Request $request){
        $date = $request->date;

        $reservations = Reservation::where('date',$date)->orderBy('id','desc')->get();
        return view('admin.reservationsbydate',['reservations'=>$reservations,'date'=>$date]);
    }

     public function getordersbyDate(Request $request){
        $date = $request->date;
        //dd($date);
        $orders = order::where('created_at','LIKE', '%'.$date.'%')->orderBy('id','desc')->get();
        //dd($orders);
        return view('admin.ordersbydate',['orders'=>$orders,'created_at'=>$date]);
    }




    public function updateReservation($id){
        $reservation = Reservation::find($id);

        if($reservation->status == 0){
            $reservation->status = 1;
            $reservation->save();
            return redirect()->back()->with("success","Reservation Confirmed");    
        }

        $reservation->status = 0;
        $reservation->save();
        return redirect()->back()->with("success","Reservation Canceled");
    }


    public function deleteReservation($id){
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect()->back()->with("error","Reservation Deleted");
    }
    



 
    public function viewInvoice($id){
        $order = Order::find($id);
        $order->cart = unserialize($order->cart);
        $checkout_info = unserialize($order->checkout_info);
        return view('admin.invoices.invoice-view',['order'=>$order,'checkout_info' => $checkout_info]);
    }




    public function getMessages(){
        $numOfMessage = Contact::count();
        $messages = Contact::orderBy('id','desc')->get();
        $first_message = Contact::orderBy('id','desc')->first();
        Session::put('numOfMessage',$numOfMessage);
        return view('admin.messages',['messages' => $messages,'first_message'=>$first_message,'numOfMessage' => $numOfMessage]);
    }
    
    public function showMessage(Request $request){
        $id = $request->id;
        $message = Contact::find($id);
        $name=$message->name;
        $email=$message->email;
        $date=$message->created_at->format('d M Y');
        $message=$message->message;
        
        return response()->json(['name'=>$name,'email'=>$email,'message'=>$message,'date'=>$date]);
    }
    public function deleteMessages($id){
        $message = Contact::find($id);
        // $msg = "Message by $message->name is Deleted";
        $message->delete();
        return redirect()->route('admin.messages')->with("error","Message by $message->name is Deleted");
    }
    

}
