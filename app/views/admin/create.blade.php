@extends('admin.layouts.master')

@section('content')
	<h1>Creation d'un article</h1>
	<div class="col-xs-12">

		<div class="col-xs-8">
			{{Form::open(['url'=>'admin/post' , 'method'=>'POST' ])}}
			<div class="col-xs-6">
				{{Form::text('title', null, array('class' => 'form-control','placeholder'=>'titre'))}}
				<br/>
			</div>

			<div class="col-xs-12 text-right">
				{{Form::textarea('content', null, array('class' => 'form-control','placeholder'=>'contenu'))}}
				<br/>

			</div>

			<div class="col-xs-12 text-right">
				{{ FORM::file('thumbnail') }}
				<br/>

			</div>


			<div class="col-xs-12">
				<strong>blog_status :</strong>

            <span class='btn btn-success'>
                {{Form::label('publish', 'publish')}}
	            {{Form::radio('status','publish',null,['id'=>'publish'])}}
                </span>
            <span class='btn btn-warning'>
                {{Form::label('unpublish', 'unpublish')}}
	            {{Form::radio('status', 'unpublish',true,['id'=>'unpublish'])}}
                </span>
			</div>

			<div class="col-xs-12">
				{{Form::submit('Create', array('class' => 'btn btn-success'))}}
			</div>

			{{$errors->has('email')? $errors->first('email'):''}}
			{{Form::close()}}

		</div>
	</div>
@stop
