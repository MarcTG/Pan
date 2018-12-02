

<!-- Mirrored from g-axon.com/mouldifi4.3/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Oct 2017 06:27:17 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>Panaderia</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='{{ asset('images/favicon.ico') }}' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="{{ asset('css/entypo.css') }}" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="{{ asset('css/mouldifi-core.css') }}" rel="stylesheet">
<!-- /mouldifi core stylesheet -->
<!-- Mouldifi core stylesheet -->
<link href="css/mouldifi-core.css" rel="stylesheet">
<link href="{{ asset('css/mouldifi-forms.css') }}" rel="stylesheet">
<link href="{{asset('css/mouldifi-forms.css')}}" rel="stylesheet">
<link href="{{asset('css/plugins/datatables/jquery.dataTables.css')}}" rel="stylesheet">
<link href="{{asset('js/plugins/datatables/extensions/Buttons/css/buttons.dataTables.css')}}" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

<!--[if lte IE 8]>
	<script src="js/plugins/flot/excanvas.min.js"></script>
<![endif]-->
</head>
<body>

<!-- Page container -->
<div class="page-container">

	<!-- Page Sidebar -->
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header" style="padding: 10px 10px;">
			
		  <div class="site-logo" ><a href=""><img src="{{asset('images/delipanlogo.png')}}" alt="Mouldifi" title="Mouldifi"></a></div>
		  
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		
			<ul id="side-nav" class="main-menu navbar-collapse collapse">
				<li class="has-sub active"><a href="#"><span class="title">Usuarios</span></a>
					<ul class="nav">
						@can('view.users')
							<li class="active"><a href="{{Route('view.users')}}"><span class="title">Usuarios</span></a></li>	
						@endcan
						@can('roles.view')
							<li class="active"><a href="{{Route('roles.view')}}"><span class="title">Cargos</span></a></li>	
						@endcan

						@can('bitacora')
						<li class="active"><a href="{{Route('bitacora')}}"><span class="title">Bitacora</span></a></li>
						@endcan
						
						
	
					</ul>
				</li>
				<li class="has-sub active"><a href="#"><span class="title">Compras</span></a>
					<ul class="nav">
							@can('view.materiaprimas')
								
								<li class="active"><a href="{{Route('view.materia_primas')}}"><span class="title">Materia Prima</span></a></li>	
							@endcan
							@can('view.proveedors')
								<li class="active"><a href="{{Route('view.proveedors')}}"><span class="title">Proveedores</span></a></li>
							@endcan
						
	
					</ul>
				</li>
				<li class="has-sub active"><a href="#"><span class="title">Ventas</span></a>
					<ul class="nav">
						
							<li class="active"><a href="#"><span class="title">Venta de Productos</span></a></li>
							<li class="active"><a href="#"><span class="title">Pedidos</span></a></li>
							<li class="active"><a href="{{Route('index.cliente')}}"><span class="title">Clientes</span></a></li>
							<li class="active"><a href="#"><span class="title">Facturas</span></a></li>

							<li class="active"><a href="{{Route('index.productos')}}"><span class="title">Productos</span></a></li>
	
					</ul>
				</li>
				<li class="has-sub active"><a href="#"><span class="title">Inventario</span></a>
					<ul class="nav">
						@can('view.medidas')
						<li class="active"><a href="{{Route('view.medidas')}}"><span class="title">Medidas de Unidad</span></a></li>		
						@endcan

						@can('index.comprobante')
							<li class="active"><a href="{{Route('index.comprobante')}}"><span class="title">Comprobantes</span></a></li>	
						@endcan
						
						<li class="active"><a href="{{Route('index.inventario')}}"><span class="title">Inventario</span></a></li>
						<li class="active"><a href="{{Route('index.receta')}}"><span class="title">Recetas</span></a></li>	
					</ul>
				</li>
			</ul>
		
		
		
		
		<!-- /main navigation -->		
  </div>
  <!-- /page sidebar -->
  
  <!-- Main container -->
  <div class="main-container ">
  
		<!-- Main header -->
		<div class="main-header row bg-secondary">
			<div class="col-sm-3">
					<h3>{{ auth()->user()->nombre}}</h3>
			</div>

		  <div class="col-sm-3 col-xs-7 pull-right">
		  
			<!-- User info -->
			
			  
				<!-- User action menu -->
				
				<form action="{{ route('logout')}}" method="POST">
						@csrf
						<button type="submit" class="btn btn-danger">Cerrar session</button>
				</form>
				
				<!-- /user action menu -->
				
			  
	
			<!-- /user info -->
			
		  </div>
		  
		  <div class="col-sm-6 col-xs-5">
			
		  </div>
		</div>
		<!-- /main header -->
		
		<!-- Main content -->
		<div class="main-content">
			
            @if (session()->has('flash'))
                <div class="alert alert-info">{{ session('flash') }}</div>
            @endif
            @yield('content')
	    </div>
	    <!-- /main content -->
	  
  </div>
  <!-- /main container -->
  
</div>
<script src="http://code.jquery.com/jquery.js"></script>
<!-- /page container -->
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/plugins/metismenu/jquery.metisMenu.js')}}"></script>
<script src="{{ asset('js/plugins/blockui-master/jquery-ui.js')}}"></script>
<script src="{{ asset('js/plugins/blockui-master/jquery.blockUI.js')}}"></script>
<script src="{{ asset('js/functions.js')}}"></script>


<script src="{{ asset('js/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('js/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('js/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{ asset('js/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{ asset('js/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{ asset('js/plugins/datatables/extensions/Buttons/js/buttons.html5.js')}}"></script>
<script src="{{ asset('js/plugins/datatables/extensions/Buttons/js/buttons.colVis.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<!--Load JQuery-->
<script src="https://code.jquery.com/jquery-3.3.1.js">  </script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">  </script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js">  </script>
<script src=" https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script> 
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js">  </script>
<!--Float Charts-->
<script src="{{ asset('js/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.selection.min.js')}}"></script>        
<script src="{{ asset('js/plugins/flot/jquery.flot.pie.min.js')}}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.time.min.js')}}"></script>
<script src="{{ asset('js/functions.js')}}"></script>

<!--ChartJs-->
<script src="js/plugins/chartjs/Chart.min.js"></script>


 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
var row = 1;
$(function() {
  $('#AddPerson').click(function(e) {
    e.preventDefault();
    var template = $('#template')
      .clone()                        // CLONE THE TEMPLATE
      .attr('id', 'row' + (row++))    // MAKE THE ID UNIQUE
      .appendTo($('#myTable tbody'))  // APPEND TO THE TABLE
      .show();                        // SHOW IT
  });
});
</script>
<script>
		$(document).ready(function() {
    $('.dataTables-example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: [':visible :not(:last-child)']
                }
            },
            'colvis'
        ]
        
    } );
} );
	</script>

</body>

<!-- Mirrored from g-axon.com/mouldifi4.3/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Oct 2017 06:28:22 GMT -->
</html>
