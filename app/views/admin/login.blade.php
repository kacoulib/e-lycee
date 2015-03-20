@extends('layouts.master')
@section('content')
<div class="col-xs-12">

    <div class="col-xs-8">
        {{Form::open(['url'=>'admin/dashboard' , 'method'=>'POST'])}}
        <div class="col-xs-6">
            {{Form::text('username', Input::old('username'), array('class' => 'form-control','placeholder'=>'login'))}}
            <br />
        </div>

        <div class="col-xs-6">
            {{Form::password('password', ['class' => 'form-control','placeholder'=>'Password'])}}
            <br />
        </div>

        <div class="col-xs-6">
            {{Form::checkbox('token', 'oui', true)}}
            <br />
        </div>
        
        <div class="col-xs-12 text-right">
            {{Form::submit('Envoyer', array('class' => 'btn btn-success'))}}

        </div>
        {{Form::close()}}
        {{'<a href="'.url('inscription').'">inscription</a>'}}

    </div>
</div>
@stop
