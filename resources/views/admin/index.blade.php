@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <!--<h1>Listado de usuarios</h1>-->
@stop

@section('content')
<div class="card">
    
    <div class="card-header">
        <h1>ADMIN <div class="float-right"><a class="dt_actions"><i class="fas fa-plus"></i></a></div></h1>
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
                        <table id="records_list" class="table table-bordered table-hover">
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
                              <a type="button" class="dt_actions" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#" title="Detalles"><i class="far fa-eye"></i></a>
                              <a type="button" class="dt_actions" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#" title="Detalles"><i class="far fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                          <td>Trident</td>
                          <td>Internet
                            Explorer 5.0
                          </td>
                          <td>Win 95+</td>
                          <td>5</td>
                          <td>C</td>
                          <td>

                              <a class="dt_actions" data-toggle="modal" data-target="#staticBackdrop" href="#staticBackdrop" title="Detalles"><i class="far fa-eye"></i></a>
                              <a class="dt_actions" data-toggle="modal" data-target="#staticBackdrop" href="#staticBackdrop" title="Detalles"><i class="far fa-edit"></i></a>
                            </td>
                        </tr>
                        </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <hello-world/>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
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
   
    var table = $('#records_list').DataTable( {
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
        .appendTo( '#records_list_wrapper .col-md-6:eq(0)' );
  })
    </script>
@stop