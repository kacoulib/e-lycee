<html>
<head>
	<meta charset="utf-8">
	<title>{{$title or "Blog laravel"}}</title>
	<link rel="icon" type="image/png" href="{{asset('dist/img/icons/favicon.png')}}"/>
	<link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}"/>
	<link rel="stylesheet" href="{{asset('dist/css/myStyle.css')}}"/>
	<script src="{{asset('dist/js/jquery-2.0.3.min.js')}}"></script>
</head>
<body>
<div class="container navigation">
	<div class="row navigation">
		<nav class="headbackground navbar navbar-default navbar-fixed-top nbHeight" role="navigation">

			<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fkarim.coulibaly.129&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21"
			        scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;"
			        allowTransparency="true"></iframe>

			<div class="navbar-collapse collapse navbar-right">
				@if(Auth::check())
					<div class="input-prepend">
						<div class="btn-group">
							<button class="btn dropdown-toggle" data-toggle="dropdown">
								<span class="glyphicon glyphicon-align-justify"></span>
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu nav navbar-nav">
								<li class="text-center"><a href="{{url('admin/dashboard')}}"><span
												class="glyphicon glyphicon-folder-open"></span>tableau de bord</a>
								</li>
								<li class="text-center"><a href="{{url('/logout')}}"><span
												class="glyphicon glyphicon-off text-center"></span>Logout</a>
								</li>
							</ul>
						</div>
					</div>
				@else
					<ul class="nav navbar-nav">
						<li></li>
						<a href="{{url('/login')}}"><span
									class="glyphicon glyphicon-user"></span>connectez-vous</a></li>
					</ul>

				@endif

			</div>
			<div class="container-fluid bgHeigt">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
					        data-target=".bs-example-js-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					{{Request::is('/')? '<a href="'.url('/').'" class="navbar-brand active">HOME</a>' : '<a href="'.url('/').'" class="navbar-brand">Home</a>'}}

				</div>
				<div class="collapse navbar-collapse bs-example-js-navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							@if(Request::is('isd-mali/*'))

								<a href="{{url('isd-mali/presentation')}}" id="drop1" href="#"
								   class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
								   role="button" aria-expanded="false">
									Isd-Mali
									<span class="caret"></span>
								</a>
							@else
								<a href="{{url('isd-mali/presentation')}}" id="drop1" href="#" class="dropdown-toggle"
								   data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
									Isd-Mali
									<span class="caret"></span>
								</a>
							@endif
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
								<li role="presentation"><a role="menuitem" tabindex="-1"
								                           href="{{url('isd-mali/presentation')}}">Presentation</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1"
								                           href="{{url('isd-mali/information-pratique')}}">Information
										pratique</a></li>
							</ul>
						</li>
						@if(Auth::guest())

							<li class="dropdown">
								@if(Request::is('inscription') || Request::is('inscription/*'))

									<a href="{{url('inscription')}}" id="drop1" href="#" class="dropdown-toggle active"
									   aria-haspopup="true" role="button" aria-expanded="false">
										Inscription
										<span class="caret"></span>
									</a>
								@else
									<a href="{{url('inscription')}}" id="drop1" href="#" class="dropdown-toggle"
									   aria-haspopup="true" role="button" aria-expanded="false">
										Inscription
										<span class="caret"></span>
									</a>
								@endif
								<ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
									<li role="presentation"><a role="menuitem" tabindex="-1"
									                           href="{{url('inscription')}}">Bulletin d'inscription</a>
									</li>
								</ul>
							</li>
						@endif
						<li class="dropdown">
							@if(Request::is('formation') || Request::is('formation/*'))

								<a href="{{url('formation')}}" id="drop1" href="#" class="dropdown-toggle active"
								   aria-haspopup="true" role="button" aria-expanded="false">
									Formation
									<span class="caret"></span>
								</a>
							@else
								<a href="{{url('formation')}}" id="drop1" href="#" class="dropdown-toggle"
								   aria-haspopup="true" role="button" aria-expanded="false">
									Formation
									<span class="caret"></span>
								</a>
							@endif
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="{{url('formation/licences')}}">Licences</a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="drop2">

										<li role="presentation"><a role="menuitem" tabindex="-1"
										                           href="{{url('formation/licences')}}">Licences</a>
										</li>
									</ul>
								</li>
								<li role="presentation"><a role="menuitem" tabindex="-1"
								                           href="{{url('formation/masters')}}">Masters</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1"
								                           href="{{url('formation/doctorat')}}">Doctorat</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1"
								                           href="{{url('formation/formation-continues')}}">Formation
										continues</a></li>
							</ul>
						</li>
						<li class="dropdown">

							@if(Request::is('Vie-de-l-ecole') || Request::is('Vie-de-l-ecole/*'))

								<a href="{{url('Vie-de-l-ecole')}}" id="drop1" href="#" class="dropdown-toggle active"
								   aria-haspopup="true" role="button" aria-expanded="false">
									Vie de l'école
									<span class="caret"></span>
								</a>
							@else
								<a href="{{url('Vie-de-l-ecole')}}" id="drop1" href="#" class="dropdown-toggle"
								   aria-haspopup="true" role="button" aria-expanded="false">
									Vie de l'école
									<span class="caret"></span>
								</a>
							@endif
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
								<li role="presentation"><a role="menuitem" tabindex="-1"
								                           href="{{url('Vie-de-l-ecole/enseignants')}}">Enseignants</a>
								</li>
								<li role="presentation"><a role="menuitem" tabindex="-1"
								                           href="{{url('Vie-de-l-ecole/vie-etudiant')}}">Vie
										etudiant</a></li>
							</ul>
						</li>
						<li class="dropdown">
							@if(Request::is('recherche') || Request::is('recherche/*'))

								<a href="{{url('recherche')}}" id="drop1" href="#" class="dropdown-toggle active"
								   aria-haspopup="true" role="button" aria-expanded="false">
									Recherche
									<span class="caret"></span>
								</a>
							@else
								<a href="{{url('recherche')}}" id="drop1" href="#" class="dropdown-toggle"
								   aria-haspopup="true" role="button" aria-expanded="false">
									Recherche
									<span class="caret"></span>
								</a>
							@endif

							<ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
								<li role="presentation"><a role="menuitem" tabindex="-1"
								                           href="{{url('recherche/sciences-de-l-homme-et-de-la-societe')}}">Sciences
										de l’homme et de la société</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1"
								                           href="{{url('recherche/creation-artistique-images-et-langages')}}">Création
										artistique, images et langages</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1"
								                           href="{{url('recherche/gouvernance-et-citoyennete-droit-et-sciences')}}">Gouvernance
										et citoyenneté « Droit et Sciences</a></li>
							</ul>

						</li>

					</ul>
					{{Request::is('partenariat')? '<a href="'.url('/partenariat').'" class="navbar-brand active">Partenariat</a>' : '<a href="'.url('/partenariat').'" class="navbar-brand">Partenariat</a>'}}

				</div>
			</div>
			<!-- /.nav-collapse -->
		</nav>

	</div>

	<!-- row navigation -->
</div>

<!-- container navigation -->
