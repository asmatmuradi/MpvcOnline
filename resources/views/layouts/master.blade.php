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
	<header>

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

	<section id='main'>
		@yield('content')
	</section>

	<footer class="text-center">

		&copy; {{ date('Y') }}
	</footer>

@stack('body')

</body>
</html>
