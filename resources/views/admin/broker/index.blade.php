@extends('adminlte::page')

@section('title', 'Brokers')

@section('content_header')
	<!--<h1> Listado de usuarios</h1>-->
@stop

@section('content')
	<div class="card">
		<div class="card-header">
			<h1>BROKERS <div class="float-right"><a class="dt_actions"><i class="fas fa-plus"></i></a></div>
			</h1>
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
								<table id="records_list" class="table-bordered table-hover table">
									<thead class="thead-theme-dark-red">
										<tr>
											<th>Full Name</th>
											<th>Email</th>
											<th>Company</th>
											<th>Phone</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($brokers as $key => $broker)
											<tr>
												<td>{{ $broker->full_name }}</td>
												<td>{{ $broker->email }}</td>
												<td>{{ $broker->company ? $broker->company : ' - ' }}</td>
												<td>
													@if ($broker->phone)
														<a href="https://api.whatsapp.com/send?phone={{ $broker->phone }}" target="_blank"><i
																class="fab fa-whatsapp"></i>
															{{ $broker->phone }} </a>
													@else
														-
													@endif
												</td>
												<td>
													<a type="button" class="dt_actions" data-bs-toggle="modal" data-bs-target="#brokerModal" href="#"
														title="Details"><i class="far fa-eye"></i></a>
													<a type="button" class="dt_actions" data-bs-toggle="modal" data-bs-target="#brokerModal" href="#"
														title="Edit"><i class="far fa-edit"></i></a>

													@if (Auth::user()->hasRole('administrator'))
														<a type="button" class="dt_actions" data-bs-toggle="modal" data-bs-target="#brokerModal" href="#"
															title="Delete"><i class="fas fa-trash"></i></a>
													@endif
												</td>
											</tr>
										@endforeach

									</tbody>
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
		<div id="brokerModal" class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
			tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">BROKER</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<example-component />

					</div>
					<!--<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																	<button type="button" class="btn btn-primary">Understood</button>
															</div>-->
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
	 $(function() {

	  var table = $('#records_list').DataTable({
	   'buttons': ['copy', 'excel', 'pdf', 'colvis'],
	   'paging': true,
	   'lengthChange': false,
	   'searching': true,
	   'ordering': true,
	   'info': true,
	   'autoWidth': false,
	   "scrollX": true,
	   /*"pageLength"  : 20,
	   "lengthMenu"  : [5, 10, 20, 50, 100]*/
	  });

	  table.buttons().container()
	   .appendTo('#records_list_wrapper .col-md-6:eq(0)');
	 })
	</script>
@stop
