<!DOCTYPE html>
<html>
<head>
	<title> @yield('title') </title>
</head>
<body>

	<header>
		@include('header')
	</header>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>


	<!-- bagian konten blog -->
	@yield('konten')


	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; Guna Dharma. 2020 - 2111</p>
	</footer>

</body>
</html>