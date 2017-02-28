<!DOCTYPE html>
<html>
<head>
	<title>Welcome to La Planta Hotel</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="{{URL::to('/asset/css/bootstrap.min.css')}}">
  	<style type="text/css">
  		#site-header{
  			background: #003333;
  		}
  	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row" id="site-header">
		<h1 class="text-center"><img src="{{URL::to('/images/logo.jpg')}}"></h1>
	</div>
</div>
<div class="alert alert-warning">
	<p>NOTE: Your reservation is only valid for 24hours after submission. Please visit to our hotel and bring print copy of your details.</p>
</div>

<div class="container">
	<div class="col-lg-4">
		<h3>Customer Information</h3>
		<ul>
			<li>Last Name: {{$reservation->customer->lname}}</li>
			<li>First Name: {{$reservation->customer->fname}}</li>
			<li>Middle Name: {{$reservation->customer->mname}}</li>
			<li>Gender: {{$reservation->customer->gender}}</li>
			<li>Date of Birth: {{$reservation->customer->dob}}</li>
			<li>Address: {{$reservation->customer->address}}</li>
			<li>Contact: {{$reservation->customer->contact}}</li>
		</ul>
	</div>
	<div class="col-lg-4">
		<h3>Reservation Details</h3>
		<ul>
			<li>Room Number: {{$reservation->rooms}}</li>
			<li>Room Type: {{$reservation->room_type->type}}</li>
			<li>Check In: {{$reservation->checkin}}</li>
			<li>Check Out: {{$reservation->checkout}}</li>
			<li>Price: {{$reservation->room_type->price}} pesos</li>
		</ul>
	</div>
	<div class="col-lg-4">
		<h3>QR CODE</h3>
		<iframe src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{$reservation->barcode}}" height="160px" width="160px"></iframe>
		<h3><button class="btn btn-success" onclick="print()">Print</button></h3>
		
	</div>
</div>



</body>
<script type="text/javascript" src="{{URL::to('/asset/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::to('/asset/js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		function print() {
		    window.print();
		}
	});
</script>
</html>