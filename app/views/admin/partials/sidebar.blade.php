<div class=" col-sm-3 col-md-2 sidebar">
	<ul class=" nav nav-sidebar">
		{{Request::is('admin/dashboard')?'<li class="active"><a href="dashboard"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>':'<li><a href="'.url("/admin/dashboard").'"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>'}}
		{{Request::is('admin/fiches')?'<li class="active"><a href="fiches"><span class="glyphicon glyphicon-paperclip"></span> Fiches</a></li>':'<li><a href="'.url("/admin/fiches").'"><span class="glyphicon glyphicon-paperclip"></span> Fiches</a></li>'}}

		<li {{Request::is('admin/articles')?'class="active"':''}}>
			<a href="articles"><span class="glyphicon glyphicon-pushpin"></span> articles

			@if(isset($notTrash))
					<span class="label label-info">{{$notTrash->count()}}</span>
			@endif

			</a>
		</li>

		<li {{Request::is('admin/commentaires')?'class="active"':''}}>
			<a href="commentaires"><span class="glyphicon glyphicon-comment"></span> commentaires

			@if(isset($comments))
					<span class="label label-info">{{$comments->count()}}</span>
			@endif
			</a>
		</li>

		<li {{Request::is('admin/pages')?'class="active"':''}}>
			<a href="pages"><span class="glyphicon glyphicon-home"></span> pages

			@if(isset($pages))
					<span class="label label-info">{{$pages->count()}}</span>
			@endif
			</a>
		</li>

		<li {{Request::is('admin/eleves')?'class="active"':''}}>
			<a href="eleves"><span class="glyphicon students"></span> eleves

			@if(isset($eleves))
					<span class="label label-info">{{$eleves->count()}}</span>
			@endif
			</a>
		</li>

		<li {{Request::is('admin/trash')?'class="active"':''}}>
			<a href="trash"><span class="glyphicon glyphicon-trash"></span> Trash

			@if(isset($trash))
					<span class="label label-info">{{$trash->count()}}</span>
			@endif
			</a>
		</li>
</ul>
</div>