<?php
if (!isset($_GET['id'])) {
	header("location: ../index.php");
	exit;
}
require 'functions.php';
$id = $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="gambar">
			<img src="../assets/img/<?= $buku["Gambar"]; ?>" alt="">
		</div>
		<div class="Keterangan">
			<p><?= $buku ["Judul Buku"]; ?></p>
			<p><?= $buku ["Pengarang"]; ?></p>
			<p><?= $buku ["ket"]; ?></p>
			<p><?= $buku ["Harga"] ?></p>
		</div>
		<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
	</div>
</body>
</html>