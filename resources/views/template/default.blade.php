<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome and Goodbye</title>
	<link rel="stylesheet" type="text/css" href="{{URL::to('/asset/css/bootstrap.min.css')}}">
	@yield('header')
	
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navs">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<img src="{{URL::to('/images/logo.jpg')}}" height="50px">
		</div>

		<div class="collapse navbar-collapse" id="navs">
			<ul class="nav navbar-nav">
				<li><a href="{{url('/')}}">Home</a></li>
			</ul>

			
		</div>
	</div>
</nav>

<div class="container-fluid">
<div class="row">
	@yield('content')
</div>

<div class="row" id="footer">
		<p class="text-center">All Right Reserved &copy; 2017</p>
</div>	
</div>
</body>
<script type="text/javascript" src="{{URL::to('/asset/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::to('/asset/js/bootstrap.min.js')}}"></script>
@yield('scripts')
</html>