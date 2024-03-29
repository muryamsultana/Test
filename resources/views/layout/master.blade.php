<!DOCTYPE html>
<html>
	<head>
		<title>
			@section('title')
			Laravel 4 - Tutorial
			@show
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- CSS are placed here -->
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/bootstrap-responsive.css') }}
		
		<style>
		@section('styles')
			body {
				padding-top: 60px;
			}
		@show
		</style>
	</head>

	<body>
		<!-- Navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>

					<a class="brand" href="#">Laravel</a>

					<!-- Everything you want hidden at 940px or less, place within here -->
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a href="{{{ URL::to('') }}}">Home</a></li>
							<li><a href="{{{ URL::to('secret') }}}">Secret</a></li>
						</ul>
					</div>
					
					<div class="nav pull-right">
						<ul class="nav">
							@if ( Auth::guest() )
								<li>{{ HTML::link('login', 'Login') }}</li>
							@else
								<li>{{ HTML::link('logout', 'Logout') }}</li>
							@endif
						</ul>
					</div>
				</div>
			</div>
		</div> 
		
		<!-- Container -->
		<div class="container">

			<!-- Success-Messages -->
			@if ($message = Session::get('success'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4>Success</h4>
					{{{ $message }}}
				</div>
			@endif

			<!-- Content -->
			@yield('content')

		</div>

		<!-- Scripts are placed here -->
		{{ HTML::script('js/jquery.v1.8.3.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}

	</body>
</html>
