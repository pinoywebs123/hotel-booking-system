@extends('template.staff')

@section('sidebar')
<li class="active"><a href="{{route('index')}}"><span class="glyphicon glyphicon-home"></span>Bar Code Check</a></li>
<li><a href="{{route('staff')}}"><span class="glyphicon glyphicon-home"></span>Standard Room</a></li>
<li ><a href="{{route('deluxe')}}"><span class="glyphicon glyphicon-home"></span>Deluxe Room</a></li>
<li><a href="{{route('suite')}}"><span class="glyphicon glyphicon-home"></span>Suite Room</a></li>


@endsection
@section('content-title')
<h2>Request Reservation</h2>
@endsection
@section('content')
<div class="col-md-12 well">
	<h1 class="text-center">QR CODE SCANNER</h1>
	<div class="col-md-4 col-md-offset-4">
		<form>
			<div class="form-group">
				<input type="password" name="barcode" class="form-control" autofocus="">
			</div>
			<button class="btn btn-success btn-block">Verify</button>
		</form>
	</div>
</div>


@endsection