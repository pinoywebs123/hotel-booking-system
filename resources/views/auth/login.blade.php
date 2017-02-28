@extends('template.default')


@section('content')
<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h2>Log-In</h2>
		</div>
		<div class="panel-body">
			<form action="{{route('loginCheck')}}" method="POST">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="Enter Username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Enter Password">
				</div>
				<button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-lock"></i>Login</button>
				{{csrf_field()}}
			</form>
		</div>
	</div>
</div>
@endsection