<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href="../css/app.css">

<head>

	<title>Laravel</title>
	<script src="/test.js"></script>

</head>

<body>
	<div class="container">
		<?php foreach ($posts as $post) : ?>
			<h3><?= $post->title ?></h3>
			<?= $post->body ?>
	
		<?php endforeach; ?>
	</div>
</body>

</html>