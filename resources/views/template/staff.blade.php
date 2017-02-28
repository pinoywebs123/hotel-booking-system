<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome to La Planta Staff Panel</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="{{URL::to('/asset/css/bootstrap.min.css')}}">

  	<style type="text/css">
  		#side{
  				background: #003333;
  				color: #fff;
  				height:100vh;
  				
  				
  		}
  		.media{
  			padding: 20px 20px;
  		}
  		#side-content{
  			background: #258e87;

  		}
  		#content{
  			background: #fff;
        overflow-x: hidden;

  		}
  		#wrapper{
  			margin-top: 4%;
  		}
  		.nav-stacked li a {
  			color: #fff;

  		}
  		.nav-stacked li a i{
  			padding: 4px 4px;
  			margin-right: 10px;
  		}
  		.navbar{
  			background: #003333;
  			border: 2px solid #003333;
  		}
  		#navs ul li a{
  			color: #fff;
  		}

  		.dropdown-menu li a{
  			color: #258e87 !important;
  		}
  		.navbar-brand{
  			color: #fff !important;
  		}
  		i{
  			font-size: 20px;
  		}
  		.glyphicon-ok-circle{
  			color: green;
  			margin-right: 4px;
  		}
  		#dash-header{
  			padding: 30px 30px;
  		}
  		.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
		    color: #fff;
		    background-color: #258e87;
		}
		.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
	    color: #555;
	    background-color: #258e87;
		}
		.nav>li>a:focus, .nav>li>a:hover {
		    text-decoration: none;
		    background-color: #258e87;
		}
  	</style>
    @yield('styles')
</head>
<body>
@include('template.navbar')

<div class="container-fluid" id="wrapper">
	<div class="row">
		<div class="col-lg-2" id="side">
			<div class="row">
				<div class="media">
					<div class="media-heading">
						<center>
							<img src="https://www.gravatar.com/avatar/{{md5('tae')}}?d=mm" alt="Profile" height="120px" width="120px">
						</center>
						<p>Name: {{Auth::user()->l_name}}, {{Auth::user()->f_name}} {{Auth::user()->m_name}}</p>
						
					</div>
					<div class="media-body">
						
					</div>
				</div>
				<ul class="nav nav-pills nav-stacked">
				  @yield('sidebar')
				</ul>
			</div>
		</div>
		<div class="col-lg-10" id="side-content">
			<div class="row" id="dash-header">
				@yield('content-title')
			</div>
			<div class="row" id="content">
					@yield('content')
			</div>
		</div>

		</div>
</div>
</body>
<script type="text/javascript" src="{{URL::to('/asset/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::to('/asset/js/bootstrap.min.js')}}"></script>
@yield('scripts')
</html>