@extends('admin.layouts.master')

@section('content')
    <div class="col-xs-10">

        <h1 class="page-header">Articles</h1>
    </div>
    <div class="col-xs-2">
        <a href="{{url('admin/post/create')}}" class="btn btn-info">ajouter</a>
    </div>

    @include('admin.partials.articleTrash')

@stop
