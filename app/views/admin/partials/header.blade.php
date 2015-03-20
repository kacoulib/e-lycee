<html>
<head>
	<meta charset="utf-8">
	<title>{{$title or "Blog laravel"}}</title>
	<link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}"/>

	<link rel="stylesheet" href="{{asset('dist/css/dashboard.css')}}"/>
	<script src="{{asset('dist/js/jquery-2.0.3.min.js')}}"></script>
	<script src="{{asset('dist/js/bootstrap.js')}}"></script>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="{{url('')}}" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>retour au site public</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="text-center"><a href="{{url('/logout')}}">
						@if(!empty($user->url_thumbnail))
							<img src='{{url("dist/img/users/".$user->url_thumbnail)}}' class="glyphicon glyphicon-off text-center" >
						@else
							<img src='{{url("dist/img/users/default.jpg")}}' class="glyphicon glyphicon-off text-center" >
						@endif
						hello
						{{$user->username or 'toto'}}</a>
				</li>
				<li class="text-center"><a href="{{url('/logout')}}"><span class="glyphicon glyphicon-off text-center"></span>Logout</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
