<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jiro PHP E-Commerce Framework</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Andrew McLagan">
	<meta name="description" content="Jiro - The PHP E-Commerce framework for web artisans.">
	<meta name="keywords" content="jiro, e-commerce, cart, laravel, php, framework, web, andrew mclagan">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lte IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/assets/css/laravel.css">
</head>
<body class="@yield('body-class', 'docs') language-php">

	<span class="overlay"></span>

	<nav class="main">
		<div class="container">
			<a href="/" class="brand">
				<img alt="Jiro PHP e-commerce framework" src="/assets/img/jiro-logo-small.png" height="30">
			</a>
			
			<div class="responsive-sidebar-nav">
				<a href="#" class="toggle-slide menu-link btn">&#9776;</a>
			</div>

			@if (Request::is('docs*') && isset($currentVersion))
				@include('partials.switcher')
			@endif

			<ul class="main-nav">
				@include('partials.main-nav')
			</ul>
		</div>
	</nav>

	@yield('content')

	<footer class="main">
		<ul>
			@include('partials.main-nav')
		</ul>
		<p><a href="http://github.com/jiro-commerce">Jiro</a> is for the community by the community. Copyleft <span class="copyleft">&xcirc;<span>&#8835;</span></span> <a href="https://github.com/andrewmclagan">Andrew McLagan</a>.</p>
		<p><a href="http://laravel.com">Laravel</a> is a trademark of Taylor Otwell. Copyright <span class="copyright">&copy;</span> <a href="https://github.com/taylorotwell">Taylor Otwell</a>.</p>
		<p class="less-significant"><a href="http://jackmcdade.com">Design by Jack McDade</a></p>
	</footer>
	<script src="/assets/js/laravel.js"></script>
</body>
</html>
