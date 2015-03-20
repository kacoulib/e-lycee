@extends('layouts.master')
@section('content')

	{{Form::open(['url'=>''])}}


	<div class="col-xs-6">
		{{Form::email('email', Input::old('email'), array('class' => 'form-control','placeholder'=>'Email (*)','required'=>'required'))}}
		<br/>
	</div>

	<div class="col-xs-6">
		{{Form::text('sujet', Input::old('sujet'), array('class' => 'form-control','placeholder'=>'sujet'))}}
		<br/>
	</div>

	<div class="col-xs-12 text-right">
		{{Form::textarea('message', null, array('class' => 'form-control'))}}
		<br/>
		{{Form::submit('Envoyer', array('class' => 'btn btn-success'))}}

	</div>

	{{$errors->has('email')? $errors->first('email'):''}}
	{{Form::close()}}

@stop
