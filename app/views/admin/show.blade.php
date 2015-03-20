@extends('layouts.master')

@section('header')

	@include('admin.partials.header')

@stop

@section('content')
	<div class="col-xs-12">
		<div class="panel panel-info">
			<div>

				@if(!empty($post))
					<h2>{{$post->title}}</h2>
					<p>{{$post->content}}</p>

					@if(!empty($post->link_thumbnail))
						<div class="thumbnail">
							<img src="{{url('img/'.$post->link_thumbnail)}}" alt="{{$post->title}}" width="300"/>
						</div>

					@endif
					@if(!empty($post->user))
						<p>auteur : <a href="{{url('users/'.$post->user->id)}}">{{$post->user->username}}</a></p>
					@endif

					@if(isset($comments))
						comments : {{$comments->count()}}
						@foreach($comments as $comment)
							<li>{{$comment->username}}
								<br/>{{$comment->content}}
								<br/>
								<small>{{$comment->updated_at}}</small>
							</li>
						@endforeach
					@endif
				@endif
			</div>

			<div class="col-xs-8 ">
				{{($errors->has('email') ? '<p class="col-xs-8">'.$errors->first('email').'</p>' : '')}}
				{{($errors->has('username') ? '<p>'.$errors->first('username').'</p>' : '')}}
				</br>

				{{Form::open(['url'=>'comment'])}}
				<div class="col-xs-6">
					karim
					<br/>

				</div>

				<div class="col-xs-12 text-right">
					{{Form::textarea('content', null, array('class' => 'form-control'))}}
					<br/>
					{{Form::submit('Envoyer', array('class' => 'btn btn-success'))}}

					{{Form::hidden('post_id', $post->id)}}

				</div>

				{{$errors->has('email')? $errors->first('email'):''}}
				{{Form::close()}}
			</div>
		</div>

	</div>



@stop
