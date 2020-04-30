<?php
require 'functions.php';

$buku = query("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<div class="add">
		<a href="tambah.php">Tambah Data</a>
	</div>
	<table border="1" cellpadding="13" cellspacing="0">
		<tr>
			<th>#</th>
			<th>opsi</th>
			<th>Gambar</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>ket</th>
			<th>Harga</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($buku as $buku) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href=""><button>Ubah</button></a>
					<a href=""><button>Hapus</button></a>
					<a href="hapus.php?id=<? $buku['id'] ?>" onclick="return confirm('Hapus Data??')">Hapus</a>
				</td>
				<td><img src="../assets/img/<?= $buku['Gambar']; ?>" alt=""</td>
				<td><?= $buku['Judul Buku']; ?></td>
				<td><?= $buku['Pengarang']; ?></td>
				<td><?= $buku['ket']; ?></td>
				<td><?= $buku['Harga']; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	</table>

</body>
</html>