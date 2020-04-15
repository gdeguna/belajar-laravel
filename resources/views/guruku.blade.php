<!DOCTYPE html>
<html>
<head>
	<title>View Guru</title>
</head>
<body>

	<h1>Ini adalah view guru</h1>
	<h4>selamat datang</h4>

	<p>Nama : {{$nama}} </p>
	<p>Mata Pelajaran</p>
	<ul>
 
		@foreach($matkul as $m)
 
		<li>{{ $m }}</li>
 
		@endforeach
		
	</ul>

</body>
</html>