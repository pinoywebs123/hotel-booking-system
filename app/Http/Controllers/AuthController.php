<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
    	return view('auth.login');
    }
    public function loginCheck(Request $request){
    	$this->validate($request, [
    		'username'=> 'required|max:12',
    		'password' => 'required|max:12'
    	]);

    	if(Auth::attempt(['username'=> $request->input('username'), 'password'=> $request->input('password')])){
    		return redirect()->intended('/staff');
    		
    	}
    	return 'failed to login';
    	
    }
}
