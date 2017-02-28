<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Reservation;

Route::get('/', function(){
	return view('main'); 
});

Route::get('/standard-room', [
		'as'=> 'standard_room',
		'uses'=> 'CustomerController@standard_room'

]);
Route::get('/deluxe-room', [
		'as'=> 'deluxe_room',
		'uses'=> 'CustomerController@deluxe_room'

]);
Route::get('/suite-room', [
		'as'=> 'suite_room',
		'uses'=> 'CustomerController@suite_room'

]);	
Route::get('/book', [
		'as'=> 'book',
		'uses'=> 'CustomerController@book'
]);

Route::post('/book/request', [
		'as'=> 'request',
		'uses'=> 'CustomerController@request'
]);
Route::get('/login', [
		'as'=> 'login',
		'uses'=> 'AuthController@login'

]);
Route::post('/loginCheck', [
		'as'=> 'loginCheck',
		'uses'=> 'AuthController@loginCheck'
]);
Route::get('/staff-standard', [
		'as'=> 'staff',
		'uses'=> 'StaffController@main'
]);	
Route::get('/staff', [
		'as'=> 'index',
		'uses'=> 'StaffController@index'
]);
Route::get('/staff-deluxe', [
	'as'=> 'deluxe',
	'uses'=> 'StaffController@deluxe'
]);
Route::get('/staff-suite', [
	'as'=> 'suite',
	'uses'=> 'StaffController@suite'
]);
Route::get('/logout', [
		'as'=> 'logout',
		'uses'=> 'StaffController@logout'
]);	
Route::post('checkdata', function(\Illuminate\Http\Request $request){
	$checkdata = Reservation::where('rooms', $request['room'])->where('type', $request['type'])->where('checkin', $request['checkin']);
	if($checkdata->count() == 1){
		return response()->json(true);
	}else{
		return response()->json(false);
	}
})->name('checkdata');

Route::get('/reservation/{customer_id}/{flag}',[
	'as'=> 'reservation',
	'uses'=> 'CustomerController@reservation'
]);
