<nav class="navbar navbar-default navbar-fixed-top">
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
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><i class="pe-7s-bell"></i></a></li>
				<li><a href="#"><i class="pe-7s-chat"></i></a></li>
				<li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					<i class="glyphicon glyphicon-user"></i> <span class="caret"></span>
					</a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Setting</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="{{route('logout')}}">Logout</a></li>
			          </ul>
				</li>
			</ul>
		</div>
	</div>
</nav>