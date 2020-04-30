<?php
require 'php/functions.php';

$buku = query("SELECT * FROM buku") 
 ?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<title>Document</title>
	</head>
	<body>
	<div class="container">
		<?php foreach ($buku as $novel) : ?> 
			<p class="nama">
				<a href="php/detail.php?id=<?= $novel['id'] ?>"><?= $novel["Judul Buku"] ?></a>
			</p>
	  		<?php endforeach; ?>
	  </div>
</body>
</html>