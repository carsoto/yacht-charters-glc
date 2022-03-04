@extends('adminlte::page')

@section('title', 'Reports')

@section('content_header')
    <!--<h1>Listado de usuarios</h1>-->
@stop

@section('content')
<!--<div class="card">
    <div class="card-header">
        <h1>REPORTS</h1>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                
                   
            </div>
        </div>
    </div>
</div>-->
<reports-component/>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop