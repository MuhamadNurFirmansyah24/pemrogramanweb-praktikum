<?php
require 'functions.php';

if (isset($_GET['cari'])) {
	$keyword = $_GET['keyword'];
	$buku = query("SELECT * FROM buku WHERE
		Gambar LIKE '%keyword%' OR
		Judul Buku LIKE '%keyword%' OR
		Pengarang LIKE '%keyword%' OR
		ket LIKE '%keyword%' OR
		Harga LIKE '%keyword%' ");
} else {
$buku = query("SELECT * FROM Buku");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<div class="logout">
		<a href="logout.php">Logout</a>
		
	</div>
	<div class="add">
		<a href="tambah.php">Tambah Data</a>
		<form action="" method="get">
			<input type="text" name="keyword" autofocus>
			<button type="sumbit" name="cari">Cari</button>
		</form>
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
<?php if (empty($buku)) : ?>
	<tr>
		<td colspan="7">
			<h1>Data tidak ditemukan</h1>
		</td>
	</tr>
	<?php else : ?>
		<?php $i = 1; ?>
		<?php foreach ($buku as $buku) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<div class="update"><a href="ubah.php?id=<?= $buku['id'] ?>">Ubah</a></div>
					<div class="delete"><a href="hapus.php?id=<?= $buku['id'] ?>" onclick="return confirm('Hapus Data')">Hapus</a></div>
				</td>
				<td><img src="../assets/img/<?= $buku['Gambar']; ?>" alt=""</td>
				<td><?= $buku["Judul Buku"]; ?></td>
				<td><?= $buku["Pengarang"]; ?></td>
				<td><?= $buku["ket"]; ?></td>
				<td><?= $buku["Harga"]; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	<?php endif; ?>
	</table>

</body>
</html>