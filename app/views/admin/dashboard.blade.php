@extends('admin.layouts.master')

@section('content')
    <h1 class="page-header">Dashboard</h1>
    <div class="panel-group col-sm-6" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Gestion des fiches
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Gestion des articles
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    <ul>
                        @foreach($posts as $post)
                            <li><a href="" target="_blank">{{$post->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Gestion des éléves
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    @foreach($first_class as $student)
                        <h5><stong>{{$student->role_name}}
                            :
                            </stong>
                            </stong> {{$first_class->count()}}</h5>
                        </h5>
                    @endforeach

                    @foreach($final_class as $student)
                        <h5>  <stong>{{$student->role_name}}
                            :
                            </stong> {{$final_class->count()}}</h5>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="panel-group col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Statistique
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <p><span class="glyphicon glyphicon-comment"></span><span> {{$comments->count()}}</span> Commentaire(s)</p>
                    <p><span class="glyphicon glyphicon-paperclip"></span><span> {{$questions->count()}}</span> Fichies publier</p>
                    <p><span class="glyphicon glyphicon-pushpin"></span><span> {{$postsAll->count()}}</span> Article(s)</p>
                    <p><span class="glyphicon students"></span><span> {{$students->count()}}</span> Eleves(s)</p>
                </div>
            </div>
        </div>
    </div>

@stop
