<?php
require 'functions.php';

$id = $_GET['id'];
$buku = query("SELECT * FROM Buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
		alert('Data Berhasil diubah!');
		document.location.href = 'admin.php';
		</script>";
	}else {
		echo "<script>
		alert('Data Gagal diubah!');
		document.location.href = 'admin.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<h3>Form Ubah Buku</h3>
	<form action="" method="post">
		<ul>
			<li>
				<label for="Judul Buku">Judul Buku :</label><br>
				<select name="Judul Buku" id="Judul Buku" required>
					<option value="">------------- Judul Buku --------------</option>
					<option value="Dilan">Dilan</option>
					<option value="Dilan">Hujan</option>
					<option value="Dilan">Bumi</option>
				</select> 
			</li>
			<br>
			<li>
				<input type="hidden" name="id" id="id" value="<?= $buku['id']; ?>">
				<label for="Gambar">Gambar :</label><br>
				<input type="text" name="Gambar" id="Gambar" required value="<?= $buku['Gambar']; ?>"><br><br>
			</li>
			<li>
				<label for="Pengarang">Pengarang :</label><br>
				<input type="text" name="Pengarang" id="Pengarang" required value="<?= $buku['Pengarang']; ?>"><br><br>
			</li>
			<li>
				<label for="ket">ket :</label><br>
				<input type="text" name="ket" id="ket" required value="<?= $buku['ket']; ?>"><br><br>
			</li>
			<li>
				<label for="Harga">Harga :</label><br>
				<input type="text" name="Harga" id="Harga" required value="<?= $buku['Harga']; ?>"><br><br>
			</li>
			<button type="sumbit" name="ubah">Ubah Data!</button>
			<button type="sumbit">
				<a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
			</button>
		</ul>
		

</body>
</html>
