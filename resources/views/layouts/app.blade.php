<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
	<head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>{{ config('app.name', 'Laravel') }}</title>
		<link rel="shortcut icon" href="{{ front_image('favicon.png') }}">
		<!-- Bootstrap Core CSS -->
		<link href="{{ front_css('bootstrap.css') }}" rel="stylesheet">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{ front_css('main.css') }}">
		<link href="{{ front_css('custom.css') }}" rel="stylesheet">
		<!-- Custom Fonts & Icons -->
		<link rel="stylesheet" href="{{ front_css('icomoon-social.css') }}">
		<link rel="stylesheet" href="{{ front_css('font-awesome.min.css') }}">
		<script src="{{ front_js('modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ route('home') }}"><img src="{{ front_image('logo 2.png') }}" alt="Basica"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="{{ isCurrentRoute('home')?'active':'' }}"><a href="{{ route('home') }}">Home</a></li>
						<li class="{{ isCurrentRoute('categories') || isCurrentRoute('category')?'active':'' }}"><a href="{{ route('categories') }}">Categories</a></li>
						<li class="{{ isCurrentRoute('products') || isCurrentRoute('product')?'active':'' }}"><a href="{{ route('products') }}">Products</a></li>
						<li class="{{ isCurrentRoute('about-us')?'active':'' }}"><a href="{{ route('about-us') }}">About Us</a></li>
						<li class="{{ isCurrentRoute('contact-us.index')?'active':'' }}"><a href="{{ route('contact-us.index') }}">Contact</a></li>
					</ul>
				</div>
			</div>
		</header><!--/header-->
		<div>
            @yield('content')
        </div>
		<!-- Footer -->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-footer col-md-4 col-xs-6">
						<h3>Contact Us</h3>
						<p class="contact-us-details">
							<b>Address:</b> Laxmi Narayan Indusries, Ambliya road, patrapasar, Dist-junagadh, Gujrat.<br/>
							<b>Phone:</b> <br/>
							<b>Fax:</b> <br/>
							<b>Email:</b> <a href="#"></a>
						</p>
					</div>				
					<div class="col-footer col-md-4 col-xs-6">
						<h3>Our Social Networks</h3>
						<!-- <p></p> -->
						<div>
							<img src="{{ front_image('icons/facebook.png') }}" width="32" alt="Facebook">
							<img src="{{ front_image('icons/twitter.png') }}" width="32" alt="Twitter">
							<img src="{{ front_image('icons/linkedin.png') }}" width="32" alt="LinkedIn">
							<img src="{{ front_image('icons/rss.png') }}" width="32" alt="RSS Feed">
						</div>
					</div>
					<div class="col-footer col-md-4 col-xs-6">
						<h3>About Our Company</h3>
						<p>Laxmi Narayan Industries manufacturing good and healthy food with super quality.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="footer-copyright">&copy; {{ date('Y') }} <a href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Javascripts -->
		<script src="{{ front_js('jquery-1.9.1.min.js') }}"></script>
		<script src="{{ front_js('bootstrap.min.js') }}"></script>
		<!-- Scrolling Nav JavaScript -->
		<script src="{{ front_js('jquery.easing.min.js') }}"></script>
		<script src="{{ front_js('scrolling-nav.js') }}"></script>		
	</body>
</html>
@yield('styles')
@yield('scripts')
