<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="favicon/ico" />

    <title>@yield('title')</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="{{asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
	<!-- iCheck -->
	<link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
	<!-- JQVMap -->
	<link rel="stylesheet" href="{{asset('backend/plugins/jqvmap/jqvmap.min.css')}}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}">
	<!-- summernote -->
	<link rel="stylesheet" href="{{asset('backend/plugins/summernote/summernote-bs4.min.css')}}">
	<!-- DataTables -->
	<link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
	<link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
	<!-- Select2 -->
	<link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/dist/css/select2.css')}}">
	<!-- Bootstrap Color Picker -->
	<link rel="stylesheet" href="{{asset('backend/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
	<!-- Bootstrap4 Duallistbox -->
	<link rel="stylesheet" href="{{asset('backend/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
	<!-- BS Stepper -->
	<link rel="stylesheet" href="{{asset('backend/plugins/bs-stepper/css/bs-stepper.min.css')}}">
	<!-- dropzonejs -->
	<link rel="stylesheet" href="{{asset('backend/plugins/dropzone/min/dropzone.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">

    @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<div class="sidebar">
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						
					</ul>
				</nav>
			</div>
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
				</div>
			</section>
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header bg-secondary" style="font-size: 1.75rem;font-weight: 500; line-height: 1.2; margin-bottom: 0.5rem;">
									Consumir API
								</div>
								<div class="card-body">
									<table id="example1" class="table table-bordered table-hover" style="width:100%">
										<thead>
											<tr>
												<th width="10px">ID</th>
												<th>Propietario</th>
												<th>Tipo Vehículo</th>
												<th>Marca</th>
												<th>Placa</th>
											</tr>
										</thead>
										<tbody>
											@foreach($vehiculosArray as $vehiculo)
												<tr>
													<td>{{ $vehiculo['id'] }}</td>
													<td>{{ $vehiculo['propietario'] }}</td>
													<td>{{ $vehiculo['tipovehiculo'] }}</td>
													<td>{{ $vehiculo['marca'] }}</td>
													<td>{{ $vehiculo['placa'] }}</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

    <!-- jQuery -->
	<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="{{asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<!-- ChartJS -->
	<script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
	<!-- Sparkline -->
	<script src="{{asset('backend/plugins/sparklines/sparkline.js')}}"></script>
	<!-- JQVMap -->
	<script src="{{asset('backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
	<script src="{{asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
	<!-- jQuery Knob Chart -->
	<script src="{{asset('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
	<!-- daterangepicker -->
	<script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script>
	<script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
	<!-- Summernote -->
	<script src="{{asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
	<!-- overlayScrollbars -->
	<script src="{{asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>
	<!-- AdminLTE for demo purposes 
	<script src="{{asset('backend/dist/js/demo.js')}}"></script>-->
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script>
	<!-- DataTables  & Plugins -->
	<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{asset('backend/plugins/jszip/jszip.min.js')}}"></script>
	<script src="{{asset('backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
	<script src="{{asset('backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
	<!-- Select2 -->
	<script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>	
	<!-- Bootstrap4 Duallistbox -->
	<script src="{{asset('backend/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
	<!-- InputMask -->
	<script src="{{asset('backend/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
	<!-- bootstrap color picker -->
	<script src="{{asset('backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
	<!-- Bootstrap Switch -->
	<script src="{{asset('backend/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
	<!-- BS-Stepper -->
	<script src="{{asset('backend/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
	<!-- dropzonejs -->
	<script src="{{asset('backend/plugins/dropzone/min/dropzone.min.js')}}"></script>
	<script src="{{asset('backend/dist/js/select2.js')}}"></script>
	
	<script src="{{asset('backend/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.js"></script>
    @stack('scripts')
</body>
</html>












