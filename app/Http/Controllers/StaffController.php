<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Reservation;
class StaffController extends Controller
{
    public function index(){
      return view('staff.index');
    }
    public function main(){
    	$reserves = Reservation::all();
    	return view('staff.main', compact('reserves'));
    }
    public function deluxe(){
    	$reserves = Reservation::all();
    	return view('staff.deluxe', compact('reserves'));
    }
    public function suite(){
    	$reserves = Reservation::all();
    	return view('staff.suite', compact('reserves'));
    }
   
   	public function logout(){
   		Auth::logout();
   		return redirect('/');
   	}
}
