@extends('admin.layouts.master')

@section('content')
    <h1 class="page-header">Commentaires</h1>

    <div class="col-xs-12">
        <div class="text-center">
            @if(isset($links))
                <ul class="pagination">
                    <li>{{$links}}</li>
                </ul>
            @endif
        </div>
    </div>
    <div>

        <div class="panel panel-info">
            @if(isset($comments))

                {{Form::open(['url'=>'admin/post/commentsStatus'])}}

                <div class="panel-body">
                    {{Form::select('status', array('publish' => 'publish','delete'=>'delete','unpublish'=>'unpublish'), null, array('class' => 'form-control', 'id' => 'action','placeholder'=>'Number'))}}
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>{{Form::checkbox('',null,null,['class'=>'action','id'=>'checkedAll'])}}</th>
                        <th>blog.see</th>
                        <th>Status</th>
                        <th>author</th>
                        <th>title de l'article</th>
                        <th>contenu du commentaire</th>
                        <th>date d'ajout</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $comment)
                        @if($comment->status == 'unpublish')
                            <tr class="danger">
                        @else
                            <tr class="success">
                        @endif

                            <td>{{Form::checkbox('posts[]',$comment->post->id,null,['class'=>'action'])}}</td>
                            <td><a href="{{url('single/'.$comment->post->id)}} " target="_blank"><span
                                            class='glyphicon glyphicon-eye-open'></span></a></td>
                            <td>{{($comment->status !== 'publish')?'<span class="btn btn-warning">'.$comment->status.'</span>' : $comment->status }}</td>
                            <td>{{ ($comment->post->user)? $comment->post->user->username : 'anonymous' }}</td>
                            <td><a href="{{url('admin/post/'.$comment->post->id.'/edit')}}"><span
                                            class='glyphicon glyphicon-edit'></span> {{$comment->post->title}}</a></td>
                            <td>{{$comment->content}}</td>
                            <td>{{$comment->created_at}}</td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
                <div class="panel-heading">
                    {{Form::submit('Envoyer', array('class' => 'btn btn-success', 'id'=>'envoi'))}}
                </div>
                {{Form::close()}}

            @else
                <p>desoller il n'y a pas de commentaire</p>
            @endif
        </div>

        <div class="text-center">
            @if(isset($links))
                <ul class="pagination">
                    <li>{{$links}}</li>
                </ul>
            @endif
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.action').each(function () {
                this.checked = false;
            });

            $('#checkedAll').on('click', function () {
                if (this.checked == true) {
                    $('.action').each(function () {
                        this.checked = true;
                    });
                } else {
                    $('.action').each(function () {
                        this.checked = false;
                    });
                }
            });

            $('#envoi').on('click',function(e){

                if( $('#action option:selected').text() == 'delete' ){

                    var conf = confirm('été vous sur de vouloir suprimmer');
                    (conf == true)? '' : e.preventDefault() ;
                }

            });
        });
    </script>

@stop
