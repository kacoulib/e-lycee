
<div class="col-xs-12">
    <div class="text-center">
        <ul class="pagination">
            <li>{{$links}}</li>
        </ul>
    </div>
</div>
<div>


    <div class="panel panel-info">
        @if(isset($trash) || isset($notTrash))

        {{Form::open(['url'=>'admin/post/status'])}}

        <div class="panel-body">
            {{Form::select('status', array('publish' => 'publish','delete'=>'delete','unpublish'=>'unpublish'), null, array('class' => 'form-control', 'id' => 'action','placeholder'=>'Number'))}}
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>{{Form::checkbox('',null,null,['class'=>'action','id'=>'checkedAll'])}}</th>
                    <th>blog.see</th>
                    <th>Status</th>
                    <th>title</th>
                    <th>date de création</th>
                    <th>date de mise à jour</th>
                    <th>author</th>
                    <th>cathegories</th>
                    <th>tags</th>
                </tr>
            </thead>
            <tbody>
                @if(Request::is('admin/articles'))
                    @foreach($notTrash as $post)

                        @if($post->status == 'unpublish')
                            <tr class="danger">
                        @else
                            <tr class="success">
                        @endif

                        <td>{{Form::checkbox('posts[]',$post->id,null,['class'=>'action'])}}</td>
                        <td><a href="{{url('single/'.$post->id)}} " target="_blank"><span
                                        class='glyphicon glyphicon-eye-open'></span></a></td>
                        <td>{{($post->status !== 'publish')?'<span class="btn btn-warning">'.$post->status.'</span>' : $post->status }}</td>
                        <td><a href="{{url('admin/post/'.$post->id.'/edit')}}"><span
                                        class='glyphicon glyphicon-edit'></span> {{$post->title}}</a></td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                        <td>{{ ($post->user)? $post->user->username : 'anonymous' }}</td>
                        <td>{{ ($post->category)? $post->category->title : 'no category title' }}</td>
                        <td>{{ ($post->trash)? $post->trash : '' }}</td>
                    </tr>
                    @endforeach
                @else
                    @foreach($trash as $post)
                        @if($post->status == 'unpublish')
                            <tr class="danger">
                        @else
                            <tr class="success">
                                @endif

                                <td>{{Form::checkbox('posts[]',$post->id,null,['class'=>'action'])}}</td>
                                <td><a href="{{url('single/'.$post->id)}} " target="_blank"><span
                                                class='glyphicon glyphicon-eye-open'></span></a></td>
                                <td>{{($post->status !== 'publish')?'<span class="btn btn-warning">'.$post->status.'</span>' : $post->status }}</td>
                                <td><a href="{{url('admin/post/'.$post->id.'/edit')}}"><span
                                                class='glyphicon glyphicon-edit'></span> {{$post->title}}</a></td>
                                <td>{{$post->created_at}}</td>
                                <td>{{$post->updated_at}}</td>
                                <td>{{ ($post->user)? $post->user->username : 'anonymous' }}</td>
                                <td>{{ ($post->category)? $post->category->title : 'no category title' }}</td>
                                <td>{{ ($post->trash)? $post->trash : '' }}</td>
                            </tr>
                            @endforeach
                @endif


            </tbody>
        </table>
            <div class="panel-heading">
                {{Form::submit('Validé', array('class' => 'btn btn-success', 'id'=>'envoi'))}}
            </div>
        {{Form::close()}}

        @else
        <p>desoller il n'y a pas de poste</p>
        @endif
    </div>

    <div class="text-center">
        <ul class="pagination">
            <li>{{$links}}</li>
        </ul>

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
