@extends('layouts.master')
@section('content')
<div class="col-xs-12">
    

    <div class="col-xs-8">
        {{Form::open(['url'=>'login'])}}
        <div class="col-xs-6">
            {{Form::text('last-name', Input::old('last-name'), array('class' => 'form-control','placeholder'=>'Nom'))}}
            <br />
        </div>

        <div class="col-xs-6">
            {{Form::text('first-name', Input::old('first-name'), array('class' => 'form-control','placeholder'=>'Prenom'))}}
            <br />
        </div>

        <div class="col-xs-12">
            {{Form::email('email', Input::old('email'), array('class' => 'form-control','placeholder'=>'votre email'))}}
            <br />
        </div>


        <div class="col-xs-6">
            {{Form::password('password', ['class' => 'form-control','placeholder'=>'Password'])}}
            <br />
        </div>

        <div class="col-xs-6">
            {{Form::password('password', ['class' => 'form-control','placeholder'=>'Password'])}}
            <br />
        </div>
        <div class="col-xs-6">
            @foreach($students as $student)
                {{Form::radio('class', $student->username,false,['placeholder'=>'Password'])}}
            @endforeach
        </div>
        <div class="col-xs-12 text-right">
            {{Form::submit('Envoyer', array('class' => 'btn btn-success'))}}

        </div>
        {{Form::close()}}

    </div>
</div>
@stop
