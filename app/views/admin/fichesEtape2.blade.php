@extends('admin.layouts.master')

@section('content')
    <h1 class="page-header">Fiches</h1>

    <div class="col-xs-12">
        <div class="col-xs-8">
            {{Form::open(['url'=>'admin/fichesEtape' , 'method'=>'POST' ])}}


            @if(isset($posts['nb_questions']))
                <div class="col-xs-12 text-center">

                    <span>etape: 2/2</span>
                </div>

                @for($i = 0; $i < $posts['nb_questions']; $i++)
                    <br/>

                    <div class="col-xs-6">

                        <strong>choix {{$i+1}}</strong>
                    </div>

                    <div class="col-xs-12 text-right">

                        {{Form::textarea('content_'.$i, null, array('class' => 'form-control','placeholder'=>'contenu(*)'))}}
                        <br/>

                    </div>

                    <div class="col-xs-6">
                        {{Form::label('reponse_'.$i,'oui', null, array('class' => 'form-control'))}}
                        {{Form::radio('reponse_'.$i,'oui', true)}}

                        {{Form::label('reponse_'.$i,'non', null, array('class' => 'form-control'))}}
                        {{Form::radio('reponse_'.$i,'non', null)}}
                    </div>
                    <br/>

                @endfor
            @endif

            <div class="col-xs-12">
                {{Form::submit('Create', array('class' => 'btn btn-success'))}}
            </div>
            {{Form::hidden('nb',$posts['nb_questions'])}}
            {{Form::hidden('posts_id',$posts['id'])}}

            {{Form::close()}}

        </div>
    </div>

@stop
