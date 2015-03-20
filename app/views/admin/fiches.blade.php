@extends('admin.layouts.master')

@section('content')
    <h1 class="page-header">Fiches</h1>

    <div class="col-xs-12">

        <div class="col-xs-8">
            {{Form::open(['url'=>'admin/creerFiches' , 'method'=>'POST' ])}}

            <div class="col-xs-12 text-center">

                <span>etape: 1/2</span>
            </div>

            <br/>

            <div class="col-xs-6">
                <strong>classe :</strong>

                {{Form::select('class_id', array('final_class' => 'final_class','first_class'=>'first_class'), null, array('class' => 'form-control', 'id' => 'classe'))}}
            </div>

            <div class="col-xs-6">
                <strong>nb choix :</strong>

                {{Form::number('nb_questions', 1, array('class' => 'form-control', 'id' => 'classe'))}}
            </div>

            <div class="col-xs-12">
                <br/>

                {{Form::text('title', null, array('class' => 'form-control','placeholder'=>'titre(*)'))}}
                <br/>
            </div>

            <div class="col-xs-12 text-right">

                {{Form::textarea('content', null, array('class' => 'form-control','placeholder'=>'redaction de la question(*)'))}}
                <br/>

            </div>
            <div class="col-xs-12">
                {{Form::submit('Create', array('class' => 'btn btn-success'))}}
            </div>

            {{$errors->has('email')? $errors->first('email'):''}}
            {{Form::close()}}

        </div>
    </div>

@stop
