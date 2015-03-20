@extends('admin.layouts.master')

@section('content')
	<h1 class="page-header">Editer l'articles: <i>{{$post->title}}</i></h1>

	<div class="col-xs-12">

		<div class="col-xs-8">
			{{Form::open(['url'=>'admin/post/'.$post->id , 'method'=>'PUT', 'files' => true ])}}
			<div class="col-xs-6">
				{{Form::text('title', $post->title, array('class' => 'form-control','placeholder'=>'titre'))}}
				<br/>
			</div>

			<div class="col-xs-12 text-right">
				{{Form::textarea('content', $post->content, array('class' => 'form-control','placeholder'=>'contenu', 'value'=> $post->contenu))}}
				<br/>

			</div>
			<div class="col-xs-12 text-right">

				<div class="form-group">
					@if($post->link_thumbnail == 'no image')

						{{Form::label('thumbnail', 'thumbnail')}}
						{{Form::file('thumbnail', ['class'=>'btn'])}}

						{{$errors->has('thumbnail')? '<p>'.$errors->first('thumbnail').'</p>':''}}

					@else
						<h2>{{trans('blog.deleteimage')}}</h2>
						<img src="{{url('img/'.$post->link_thumbnail)}}" alt="{{$post->tile}}" width="90"/>

						{{Form::hidden('deletethumbnail', $post->link_thumbnail)}}
						{{Form::file('thumbnail', ['class'=>'btn'])}}

						{{$errors->has('thumbnail')? '<p>'.$errors->first('thumbnail').'</p>':''}}

					@endif
				</div>

			</div>


			<div class="col-xs-12">
				<strong>blog_status :</strong>

            <span class='btn btn-success'>
                {{Form::label('publish', 'publish')}}
	            {{ ($post->status == 'publish')? Form::radio('status', 'publish',true,['id'=> 'publish']) : Form::radio('status', 'publish', null, ['id'=> 'publish'])}}
            </span>

            <span class='btn btn-warning'>
                {{Form::label('unpublish', 'unpublish')}}
	            {{ ($post->status == 'unpublish')? Form::radio('status', 'unpublish',true,['id'=> 'unpublish']) : Form::radio('status', 'unpublish', null, ['id'=> 'unpublish'])}}
            </span>


			</div>

			<div class="col-xs-12">

				{{Form::submit('Update', array('class' => 'btn btn-success'))}}

			</div>

			{{$errors->has('email')? $errors->first('email'):''}}
			{{Form::close()}}


		</div>
	</div>
@stop
