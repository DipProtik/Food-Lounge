<?php

namespace App\Http\Controllers;
use Nexmo\Laravel\Facade\Nexmo;

use Illuminate\Http\Request;
use App\DishCategory;
use App\Dish;
use App\Gallery;
use App\Contact;
use App\Reservation;



class HomeController extends Controller
{
    // --> Display Home Page with Sliders & Chef Special Dish and Most Loved Dish and Dish Category Navigation
    public function index()
    {

     

        $loved_dish = Dish::where('most_loved','1')
                ->orderBy('id','desc')
                ->get();

        $chef_dishes = Dish::where('chef_special','1')
                ->orderBy('id','desc')
                ->get();

        return view('home',['chef_dishes'=>$chef_dishes,'loved_dish'=>$loved_dish]);
    }
      
      // --> Display Menu Page with DIsh categories and All the Dishes for Each Category
    public function getMenu()
    {
        $categories = DishCategory::all();
        return view('menu',['categories' => $categories]);
    }



    // --> Display Reservation page
    public function getReservation()
    {
        return view('reservation');
    }




    // --> Making A Reservation For Table Booking
    public function postReservation(Request $request)
    { 
        $reservation = Reservation::where('date',$request->date)
            ->where('phone',$request->phone)
            ->where('time_slot',$request->time)
            ->first();

        if(!empty($reservation)){

            $message = "You already Have A Reservation at $request->date for $request->time";
            return redirect()->back()->with("error",$message);
        }
        else{
           $reservations = Reservation::where('date',$request->date)
           ->where('time_slot',$request->time)
           ->get();
           $totalPerson = 0;
           foreach ($reservations as $reservation) {
               $totalPerson += $reservation->num_of_person;
           }
           $totalPersonAvailable = $totalPerson + $request->person;
           if($totalPersonAvailable>20){
                $message = "Booking is not Available for $request->time at $request->date";
                return redirect()->back()->with("error",$message);
           }else{
                $reservation = new Reservation();
                $reservation->name = $request->name;
                $reservation->phone = $request->phone;
                $reservation->date = $request->date;
                $reservation->num_of_person = $request->person;
                $reservation->time_slot = $request->time;
                $reservation->verificarionCode= str_random(5);
                $reservation->save();

                $res_id = $reservation->id;
                $code = $reservation->verificarionCode;
                Nexmo::message()->send([
                    'to'   => '+88'.$reservation->phone.'',
                    'from' => '+8801940374834',
                    'text' => $code
                ]);
                
                return redirect()->route('reservation.confirm', [$res_id]);
           }
           
        }
    }

    public function confirmReservation($res_id){
        $reservation = Reservation::find($res_id);
        return view('reservation_confirm',['reservation' => $reservation]);
    }

    public function confirmReservationSubmit(Request $request){
        $res_id = $request->res_id;
        $code = $request->code;
        $reservation = Reservation::find($res_id);
        if($reservation->verificarionCode == $code){
            $reservation->status = "1";
            $reservation->save();
            $message = "Booking is Confirmed for $reservation->time_slot at $reservation->date";
            return redirect()->route('reservation')->with("success",$message);
        }else{
            $message = "Your Code was not correct. Please try again with correct code";
            return redirect()->back()->with("error",$message);
        }
        //$reservation->
    }





    // --> Display Gallery page with Photos
    public function getGalleries()
    {
        $galleries = Gallery::orderBy('id','desc')->get();
        return view('galleries',['galleries' => $galleries]);
    }

 
    // --> Display Contact page Website Details
    public function getContact()
    {
        
        return view('contact');
    }



    // --> Saving User Contact Message to Database
    public function postContact(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('success','Your message was sent Successfully');
    }

    
    
    
}
