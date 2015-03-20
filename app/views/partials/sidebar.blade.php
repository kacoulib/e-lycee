<!-- aside -->
@section('sidebar')

	<aside>
		<div id='aussi'>
			<p>A lire aussi</p>
			@if(isset($posts))
			<ul>
				@foreach($posts as $post)
					{{'<li><a href="'.url("single/".$post->id).'">'.$post->title.'</a></li>'}}
				@endforeach
			</ul>
				@endif

		</div>
		<div id='tweeter'>
			<ul>
				<p>les derniers tweet</p>
				<li><a class="twitter-timeline" href="https://twitter.com/coulibalykromos" data-widget-id="565535160683479040">Tweets de @coulibalykromos</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>
			</ul>
		</div>
	</aside>
@stop