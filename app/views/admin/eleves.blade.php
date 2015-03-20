@extends('admin.layouts.master')

@section('content')
    <h1 class="page-header">Eleves</h1>


    <div class="col-xs-6 panel panel-info">
        <ul>
            @if(isset($first_class))
                @foreach($first_class as $role)

                    <p class="text-center"><strong>Classe</strong> : {{$role->role_name}}</p>
                    <li>{{$role->user->username}}</li>
                @endforeach
            @endif
        </ul>
    </div>


    <div class="col-xs-6 panel panel-info">
        <ul>
            @if(isset($final_class))
                @foreach($final_class as $role)

                    <p class="text-center"><strong>Classe</strong> : {{$role->role_name}}</p>
                    <li>{{$role->user->username}}</li>
                @endforeach
            @endif
        </ul>
    </div>

@stop
