<?php 
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

	mysqli_select_db($conn, "tubes_193040088") or die("Database salah!");

	$result = mysqli_query($conn, "SELECT * FROM buku");
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
	</body>
	  		<tr>
	  			<td><h3>No</h3></td>
	  			<td><h3>Gambar</h3></td>
	  			<td><h3>Judul buku</h3></td>
	  			<td><h3>Pengarang</h3></td>
	  			<td><h3>Keterangan</h3></td>
	  			<td><h3>Harga</h3></td>
	  		</tr> 
	  		<?php $i = 1 ?>
	  		<?php while($row = mysqli_fetch_assoc($result)) : ?>
	  			<tr>
	  				<td><?= $i ?></td>
	  				<td><img src="assets/img/<?=$row["Gambar"];?>"></td>
	  				<td><?= $row ["Judul Buku"];?></td>
	  				<td><?= $row ["Pengarang"];?></td>
	  				<td><?= $row ["ket"];?></td>
	  				<td><?= $row ["Harga"];?></td>
	  			</tr>
	  			<?php $i++ ?>
	  		<?php endwhile; ?>
	  	</table>
	  </div>
</body>
</html>