<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Reservation;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function standard_room(){
    	return 'standard';
    }
    public function suite_room(){
    	return 'suite';
    }
    public function deluxe_room(){
    	return 'deluxe';
    }
    public function book(){
    	return view('customer.book');
    }
    public function request(Request $request){
        $this->validate($request, [
            'checkin'=> 'required',
            'lname'=> 'required',
            'fname'=> 'required',
            'mname'=> 'required',
            'checkout'=> 'required',
            'contact'=> 'required',
            'gender'=> 'required',
            'room'=> 'required',
            'type'=> 'required',
            'email'=> 'required',
            'address'=> 'required',
            'dob'=> 'required'
        ]);

        $user = new Customer;
       $user->lname = $request['lname'];
       $user->fname = $request['fname'];
       $user->mname = $request['mname'];
       $user->gender = $request['gender'];
       $user->dob = $request['dob'];
       $user->address = $request['address'];
       $user->contact = $request['contact'];
       $user->email = $request['email'];
       $user->save();

        $id = $user->id;
       $find = Customer::find($id);
       $reserve = new Reservation;
       $reserve->flag = rand(123456789,98754321);
       $reserve->rooms = $request['room'];
       $reserve->type = $request['type'];
       $reserve->checkin = $request['checkin'];
       $reserve->checkout = $request['checkout'];
       $reserve->barcode = rand(123456789,98754321);
       $reserve->status = false;
       $find->reservation()->save($reserve);


       $data = array('title'=> 'Thank you for booking La PLanta Bais City.',
              'content'=> 'Dear customers thank you for having us. please click the link below for you qr code '.route('reservation',['customer_id'=> $reserve->customer_id, 'flag'=> $reserve->flag]),
              'email'=> $request['email'],
              'name'=> $request['lname']. ''. $request['fname']. ''. $request['mname']

              );

       Mail::send('auth.email', $data, function($message) use ($data){
        $message->to($data['email'])->subject('Hi'.$data['name']);
       });

       return redirect()->route('reservation', ['customer_id'=> $reserve->customer_id, 'flag'=> $reserve->flag]);
        
    }
    public function reservation($customer_id, $flag){
      $reservation = Reservation::where('customer_id', $customer_id)->where('flag', $flag)->first();
      return view('customer.reservation', compact('reservation'));
    }
   
}
