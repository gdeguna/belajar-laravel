<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $__env->yieldContent('title'); ?> </title>
</head>
<body>

	<header>
		<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</header>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3> <?php echo $__env->yieldContent('judul_halaman'); ?> </h3>


	<!-- bagian konten blog -->
	<?php echo $__env->yieldContent('konten'); ?>


	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; Guna Dharma. 2020 - 2111</p>
	</footer>

</body>
</html><?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/template.blade.php ENDPATH**/ ?>