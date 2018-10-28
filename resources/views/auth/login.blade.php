
           

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from g-axon.com/mouldifi4.3/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Oct 2017 06:31:16 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>Mouldifi | Login</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="css/mouldifi-core.css" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<link href="css/mouldifi-forms.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->


</head>
<body class="login-page">
<div class="login-container">
	<div class="login-branding">
		<a href="index.html"><img src="images/logo.png" alt="Mouldifi" title="Mouldifi"></a>
	</div>
	<div class="login-content">
		<h2><strong>Welcome</strong>, please login</h2>
        <form method="post" action="{{ route('login') }}" enctype="multipart/form-data">
            {{ csrf_field() }}                        
			<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                <input  name="name"  placeholder="Ingresa tu username" value="{{ old('name') }}" class="form-control">
                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
            </div>                      
			<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                <input type="password" name="password"  placeholder="Ingresa tu contraseña" class="form-control">
                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
            </div>
			
			<div class="form-group">
				<button class="btn btn-primary btn-block">Login</button>
			</div>                        
		</form>
	</div>
</div>
<!--Load JQuery-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

<!-- Mirrored from g-axon.com/mouldifi4.3/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Oct 2017 06:31:16 GMT -->
</html>