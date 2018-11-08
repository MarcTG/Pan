

<!-- Mirrored from g-axon.com/mouldifi4.3/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Oct 2017 06:27:17 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>Mouldifi | Dashboard</title>
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

<link href="{{ asset('css/mouldifi-forms.css') }}" rel="stylesheet">

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
		<header class="site-header">
		  <div class="site-logo"><a href="index.html"><img src="images/logo.png" alt="Mouldifi" title="Mouldifi"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			<li class="has-sub active "><a href="#"><i class="icon-gauge"></i><span class="title">Usuarios</span></a>
				<ul class="nav">
					@can('view.users')
						<li class="active"><a href="{{Route('view.users')}}"><span class="title">Usuarios</span></a></li>	
					@endcan
          @can('index.rol')
						<li><a href="{{Route('roles.view')}}"><span class="title">Cargos</span></a></li>	
					@endcan
					

				</ul>
			</li>
		</ul>
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			<li class="has-sub active "><a href="#"><i class="icon-gauge"></i><span class="title">Usuarios</span></a>
				<ul class="nav">
					
					

				</ul>
			</li>
		</ul>
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
				<li class="has-sub active "><a href="#"><i class="icon-gauge"></i><span class="title">Usuarios</span></a>
					<ul class="nav">
						
						
	
					</ul>
				</li>
			</ul>
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
				<li class="has-sub active "><a href="#"><i class="icon-gauge"></i><span class="title">Inventario</span></a>
					<ul class="nav">
						@can('view.medidas')
						<li class="active"><a href="{{Route('view.medidas')}}"><span class="title">Medidas de Unidad</span></a></li>		
						@endcan
						
						@can('view.materia_primas')
						<li class="active"><a href="{{Route('view.materia_primas')}}"><span class="title">Materia Prima</span></a></li>	
						@endcan

						@can('view.proveedors')
						<li class="active"><a href="{{Route('view.proveedors')}}"><span class="title">Proveedores</span></a></li>
						@endcan
						
						
						
						@can('index.comprobante')
							<li class="active"><a href="{{Route('index.comprobante')}}"><span class="title">Comprobantes</span></a></li>	
						@endcan
						
					</ul>
				</li>
			</ul>
		<!-- /main navigation -->		
  </div>
  <!-- /page sidebar -->
  
  <!-- Main container -->
  <div class="main-container gray-bg">
  
		<!-- Main header -->
		<div class="main-header row">
		  <div class="col-sm-6 col-xs-7 pull-right">
		  
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
<!-- /page container -->

<!--Load JQuery-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metismenu/jquery.metisMenu.js"></script>
<script src="js/plugins/blockui-master/jquery-ui.js"></script>
<script src="js/plugins/blockui-master/jquery.blockUI.js"></script>
<!--Float Charts-->
<script src="js/plugins/flot/jquery.flot.min.js"></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="js/plugins/flot/jquery.flot.selection.min.js"></script>        
<script src="js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="js/plugins/flot/jquery.flot.time.min.js"></script>
<script src="js/functions.js"></script>

<!--ChartJs-->
<script src="js/plugins/chartjs/Chart.min.js"></script>

<script src="http://code.jquery.com/jquery.js"></script>
 
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

</body>

<!-- Mirrored from g-axon.com/mouldifi4.3/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Oct 2017 06:28:22 GMT -->
</html>
