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
		<table cellpadding="10" cellspacing="0" border="1">
			<tr>
	  			<td><h3>No</h3></td>
	  			<td><h3>Gambar</h3></td>
	  			<td><h3>Judul buku</h3></td>
	  			<td><h3>Pengarang</h3></td>
	  			<td><h3>Keterangan</h3></td>
	  			<td><h3>Harga</h3></td>
	  		</tr> 
	  		<?php $i = 1 ?>
	  		<?php foreach ($buku as $novel) : ?>
	  			<tr>
	  				<td><?= $i ?></td>
	  				<td><img src="assets/img/<?=$novel["Gambar"];?>"></td>
	  				<td><?= $novel ["Judul Buku"];?></td>
	  				<td><?= $novel ["Pengarang"];?></td>
	  				<td><?= $novel ["ket"];?></td>
	  				<td><?= $novel ["Harga"];?></td>
	  			</tr>
	  			<?php $i++ ?>
	  		<?php endforeach; ?>
	  	</table>
	  </div>
</body>
</html>