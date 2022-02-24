@extends('adminlte::page')

@section('title', 'Reports')

@section('content_header')
    <!--<h1>Listado de usuarios</h1>-->
@stop

@section('content')

<create-broker-component></create-broker-component>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    $(function () {
   
    var table = $('#example2').DataTable( {
        'buttons': [ 'copy', 'excel', 'pdf', 'colvis' ],
        'paging'      : true,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
        "scrollX"     : true
    } );
 
    table.buttons().container()
        .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
  })
    </script>
@stop