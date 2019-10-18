<!doctype html>
<html lang="en" dir="ltr">
  <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="{{ asset('themes/backend/assets/images/brand/favicon.ico') }}" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/backend/assets/images/brand/favicon.ico') }}" />

		<!-- Title -->
		<title>Admin Panel</title>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="{{ asset('themes/backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

        <!--Font Awesome-->
		<link href="{{ asset('themes/backend/assets/plugins/fontawesome-free/css/all.css') }}" rel="stylesheet">

		<!-- Custom scroll bar css-->
		<link href="{{ asset('themes/backend/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="{{ asset('themes/backend/assets/css/dashboard.css') }}" rel="stylesheet" />

		<!---Font icons-->
		<link href="{{ asset('themes/backend/assets/plugins/iconfonts/plugin.css') }}" rel="stylesheet" />

	</head>
	<body class="login-img custom-bg">

		<!-- Global Loader-->
		<div id="global-loader"><img src="{{ asset('themes/backend/assets/images/loader.svg') }}" alt="loader"></div>

		<div class="page">
			<div class="custompage">
				<div class="custom-content  mt-0">
					<div class="row">
						<form action="/eficor/administrator/login" method="post" enctype="multipart/form-data">
						<div class="col d-block mx-auto">
							<div class="row">
								<div class="col-md-12">
										@if($errors->any())
											<div class="alert alert-danger">
											<ul>
											@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
											@endforeach
											</ul>
											</div>
										@endif	
										@if(Session::has('flash_message_error'))
							                <div class="alert alert-danger">{{ Session::get('flash_message_error') }}</div>
							            @endif
							            @if(Session::has('flash_message'))
							                 <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
							            @endif            								
									<h3 class="text-center">EFICOR Admin Panel</h3>
									<p>Please Enter the Email address registered on your account</p>
									<div class="form-group">
										<label class="form-label text-left" for="exampleInputEmail1">Email address</label>
										<input type="email" class="form-control" name="eficor_email" id="eficor_email"  placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="inputPassword3" class="text-left form-label">Password</label>
										<input type="password" class="form-control" id="eficor_password" name="eficor_password" placeholder="Password">
									</div>
									{{ csrf_field() }}
									<div class="text-left">
										<button type="submit" class="btn btn-primary">Login</button>
									</div>
								</div>
							</div>
						</div>

					</form>

					</div>

				</div>
			</div>
		</div>

		<!-- Dashboard js -->
		<script src="{{ asset('themes/backend/assets/js/vendors/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('themes/backend/assets/js/vendors/jquery.sparkline.min.js') }}"></script>
		<script src="{{ asset('themes/backend/assets/js/vendors/selectize.min.js') }}"></script>
		<script src="{{ asset('themes/backend/assets/js/vendors/jquery.tablesorter.min.js') }}"></script>
		<script src="{{ asset('themes/backend/assets/js/vendors/circle-progress.min.js') }}"></script>
		<script src="{{ asset('themes/backend/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

		<!--Bootstrap.min js-->
		<script src="{{ asset('themes/backend/assets/plugins/bootstrap/popper.min.js') }}"></script>
		<script src="{{ asset('themes/backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!-- Custom scroll bar Js-->
		<script src="{{ asset('themes/backend/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

		<!-- peitychart -->
		<script src="{{ asset('themes/backend/assets/plugins/peitychart/jquery.peity.min.js') }}"></script>

		<!--Counters -->
		<script src="{{ asset('themes/backend/assets/plugins/counters/counterup.min.js') }}"></script>
		<script src="{{ asset('themes/backend/assets/plugins/counters/waypoints.min.js') }}"></script>

		<!-- Custom js -->
		<script src="{{ asset('themes/backend/assets/js/custom.js') }}"></script>

	</body>
</html>
