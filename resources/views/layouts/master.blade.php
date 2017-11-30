<!DOCTYPE html>
<html>
<head>
	<title>
      @yield('title', 'Muradi PVC Onlnie')
    </title>

		<meta charset='utf-8'>

		<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
		<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>

		@stack('head')

</head>
<body>
	<div clsss='container'>

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
<div id="copyright text-right">&copy; {{ date('Y') }} MPVC Online</div>

	</footer>

@stack('body')
</div>
</body>
</html>
