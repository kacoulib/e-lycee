@include('partials.header')
@include('partials.sidebar')


@if(Session::has('message'))

	<div id="showAlert" class="alert alert-warning alert-dismissible fade" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>{{Session::get('message')}}</strong>
	</div>
@endif

<section class="container content">
	<div class="row content">
		<div class="col-xs-8">
			@yield('content')
		</div>

		<div class="sidebar panel panel-success col-lg-4">

			@section('sidebar')

			@show
		</div>
	</div>
	<!-- row content -->
</section>

@include('partials.footer')