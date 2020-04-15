<!DOCTYPE html>
<html>
<head>
	<title>View Guru</title>
</head>
<body>

	<h1>Ini adalah view guru</h1>
	<h4>selamat datang</h4>

	<p>Nama : <?php echo e($nama); ?> </p>
	<p>Mata Pelajaran</p>
	<ul>
 
		<?php $__currentLoopData = $matkul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
		<li><?php echo e($m); ?></li>
 
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
	</ul>

</body>
</html><?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/guruku.blade.php ENDPATH**/ ?>