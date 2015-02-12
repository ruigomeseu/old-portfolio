<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rui Gomes - Portfolio</title>
	<!-- mobile meta tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS Stylesheets -->
	<link rel="stylesheet" type="text/css" href="/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="/css/base.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">

	<!-- jQuery scripts -->
	<script type="text/javascript" src="/js/modernizr.js"></script>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png">
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-9458830-39', 'auto');
		ga('send', 'pageview');

	</script>
</head>
<body>
	<!-- preloader -->
	<div class="loading">
		<img class="loading-gif" src="{{ URL::asset('images/preloader2.gif') }}" alt="Loading...">
	</div>
	<!-- navigation -->
	<div class="w-nav navbar" data-collapse="medium" data-animation="default" data-duration="400" data-contain="1">
		<div class="social-div">
			<a class="w-inline-block social fa fa-twitter fa-2x" href="{{ Config::get('social.twitter') }}"></a>
			<a class="w-inline-block social fa fa-github fa-2x" href="{{ Config::get('social.github') }}"></a>
			<a class="w-inline-block social fa fa-linkedin fa-2x" href="{{ Config::get('social.linkedin') }}"></a>
		</div>
		<div class="w-container container-nav">
			<a class="w-nav-brand brand" href="#home"><!-- here is the logo -->
				<img class="logo" src="{{ URL::asset('images/logo.png') }}" width="180" alt="logo.png">
			</a>
			<!-- nav tag -->
			<nav class="w-nav-menu nav" role="navigation">
				<a class="w-nav-link nav-link" href="#home">Home</a>
				<a class="w-nav-link nav-link" href="#about">About</a>
				<a class="w-nav-link nav-link" href="#service">Services</a>
				<a class="w-nav-link nav-link" href="#portfolio">Portfolio</a>
				<a class="w-nav-link nav-link" href="#contact">Contact</a>
			</nav>
			<div class="w-nav-button menu-button">
				<div class="w-icon-nav-menu"></div>
			</div>
		</div>
	</div><!-- end navigation -->

	@yield('content')

	<!-- FOOTER -->
	<footer class="section">
		<div class="footer" id="footer">
			<div class="w-container">
				<div class="social-div in-footer">
					<a class="w-inline-block social fa fa-linkedin fa-2x" href="{{ Config::get('social.linkedin') }}"></a>
					<a class="w-inline-block social fa fa-twitter fa-2x" href="{{ Config::get('social.twitter') }}"></a>
					<a class="w-inline-block social fa fa-github fa-2x" href="{{ Config::get('social.github') }}"></a>
				</div>
				<div class="footer_copyright">&copy; {{ date('Y') }} Rui Gomes</div>
			</div>
		</div>
	</footer><!-- end footer -->
	<!-- JQUERY SCRIPTS -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script type="text/javascript" src="/js/woozy.js"></script>
	<script type="text/javascript" src="/js/jquery.countTo.js"></script>
	<script type="text/javascript" src="/js/form.js"></script>
	<!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
	<script>
		$(document).scroll(function () { "use strict";
			var y = $(this).scrollTop();
			if (y >= 300) {
				$('.dot-container').fadeIn();
			} else {
				$('.dot-container').fadeOut();
			}
		});
	</script>
	<script>
		$(window).load(function () { "use strict";
			$('.loading').fadeOut();
		});
	</script>

</body>
</html>