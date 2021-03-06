<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
		@section('header')		
			{{HTML::style(asset('assets/style.min.css'))}}
			@yield('css')
		@show

	</head>
	<body>
		<!--[if lt IE 8]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<!-- Add your site or application content here -->
		@if($mode_header == true)
			@include('include/header')	
		@endif
		<div class="main-wrapper">
		@if($mode == 'normal')
			<div class="container">
				<div class="row">
					@yield('body')
				</div>
			</div>			
		@elseif($mode == 'extended')
			@yield('body')
		@endif
		</div>
		@if($mode_footer == true)
			@include('include/footer')
		@endif
		{{HTML::script(asset('assets/script.min.js'))}}
		@yield('js')
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='//www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-XXXXX-X');ga('send','pageview');
		</script>
	</body>
</html>