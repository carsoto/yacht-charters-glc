@extends('adminlte::page')

@section('title', 'Reports')

@section('content_header')
    <!--<h1>Listado de usuarios</h1>-->
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h1>CLIENT <div class="float-right text-xl"><a class="dt_actions"><i class="fas fa-plus"></i></a></div></h1>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
              <div class="box">
                <div class="box-header pb-2">
                  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table id="example2" class="table table-bordered table-hover">
                    <thead class="thead-theme-dark-red">
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td>X</td>
                      <td>
                          <a class="dt_actions" href="#" title="Detalles"><i class="far fa-eye"></i></a>
                          <a class="dt_actions" href="#" title="Editar"><i class="far fa-edit"></i></a>
                          <a class="dt_actions" href="#" title="Eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                      <th>Actions</th>
                    </tr>
                    </tfoot>
                  </table>
                    </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        </div>
    </div>
</div>

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