@include('admin.partials.header')


@if(Session::has('message'))
	<div id="showAlert" class="alert alert-warning alert-dismissible fade" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>{{Session::get('message')}}</strong>
	</div>
@endif


<div class="container-fluid">
	<div class="row">
		@include('admin.partials.sidebar')

		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

			@yield('content')

		</div>
	</div>
</div>
<script>

</script>