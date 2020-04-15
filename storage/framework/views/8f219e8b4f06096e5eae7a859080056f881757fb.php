<!DOCTYPE html>
<html>
<head>
	<title>Mengambil data dari Inputan</title>
</head>
<body>

	<form action="/formulir/proses" method="post">

		<?php echo csrf_field(); ?>
      	Nama :
		<input type="text" name="nama"> <br/>
		Alamat :
		<input type="text" name="alamat"> <br/>
		<input type="submit" value="Simpan">
	</form>

</body>
</html><?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/formulir.blade.php ENDPATH**/ ?>