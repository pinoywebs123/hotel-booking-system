@extends('template.staff')

@section('sidebar')
<li><a href="{{route('index')}}"><span class="glyphicon glyphicon-home"></span>Bar Code Check</a></li>
<li><a href="{{route('staff')}}"><span class="glyphicon glyphicon-home"></span>Standard Room</a></li>
<li ><a href="{{route('deluxe')}}"><span class="glyphicon glyphicon-home"></span>Deluxe Room</a></li>
<li  class="active"><a href="{{route('suite')}}"><span class="glyphicon glyphicon-home"></span>Suite Room</a></li>


@endsection
@section('content-title')
<h2>Request Reservation</h2>
@endsection
@section('content')


<div class="col-md-12 well">
	<h3 class="text-center">Suite Room</h3>
	<table class="table">
		<thead>
			<tr>
				<th>Check In</th>
				<th>Check Out</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Room</th>
				<th>Operations</th>
				<th>Status</th>
				<th>Time</th>
			</tr>
		</thead>
		<tbody>
			@if($reserves->count())
				@foreach($reserves as $reserve)
					@if($reserve->type == 3)
						<tr>
							<td>{{$reserve->checkin}}</td>
							<td>{{$reserve->checkout}}</td>
							<td>{{$reserve->customer->lname}}</td>
							<td>{{$reserve->customer->fname}}</td>
							<td>{{$reserve->rooms}}</td>
							<td>
								<a href="#" class="btn btn-success btn-xs">Paid</a>
								<a href="#" class="btn btn-warning btn-xs">Available</a>
								<a href="#" class="btn btn-danger btn-xs">Notify</a>
							</td>
							<td>
								@if($reserve->status == 0)
									Pending
								@else
									Paid
								@endif
							</td>
							<td>{{$reserve->created_at->diffForHumans()}}</td>
						</tr>
					@endif
				@endforeach
			@endif
		</tbody>
	</table>
</div>
@endsection