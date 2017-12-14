<!DOCTYPE html>
<html>
<head>
	<title>
      @yield('title', 'Muradi PVC Onlnie')
    </title>

		<meta charset='utf-8'>

		<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
		<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Chosen Plugin -->
		<link href='/plugin/chosen/chosen.css' type='text/css' rel='stylesheet'>
		<script type="text/javascript" src='/plugin/chosen/chosen.jquery.js'></script>
		<link href="/css/store.css?v={{ $assetVersion }}" type='text/css' rel='stylesheet'>

		@stack('head')

</head>
<body>
	<div class='container'>

	<header class='row'>

			{{-- ToDo: Make it so active link in nav is highlighted --}}
			<nav>
					<ul>
							<li><a href='/home'>Home</a>
							<li><a href='/product'>Product</a>
							<li><a href='/aboutus'>About Us</a>
							<li><a href='/contact'>Contact</a>
					</ul>
			</nav>
	</header>
<div id='main' class ='row'>
		@yield('content')
</div>
	<footer class="text-center">
<div class="copyright text-center">&copy; {{ date('Y') }} MPVC Online</div>
<!-- Initialize Chosen plugin: -->
			 <script type="text/javascript"> $(".chosen-select").chosen({no_results_text: 'Oops, nothing found!', });</script>
	</footer>

@stack('body')
</div>
</body>
</html>
