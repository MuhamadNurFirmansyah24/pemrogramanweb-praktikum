<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
		alert('Data Berhasil ditambahkan!');
		document.location.href = 'admin.php';
		</script>";
	}else{
		echo "<script>
		alert('Data Gagal ditambahkan!');
		document.location.href = 'admin.php';
		</script>";
	}
}

function tambah($data)
{
	$conn = koneksi();

	$JudulBuku = htmlspecialchars($data['Judul Buku']);
	$Pengarang = htmlspecialchars($data['Pengarang']);
	$ket = htmlspecialchars($data['ket']);
	$Harga = htmlspecialchars($data['Harga']);
	$Gambar = htmlspecialchars($data['Gambar']);

	$query = "INSERT INTO buku
	VALUES
	('','$judul Buku', '$Pengarang', '$ket', '$Harga', '$Harga')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<h3>Form Tambah Buku</h3>
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
				<label for="Gambar">Gambar :</label><br>
				<input type="text" name="Gambar" id="Gambar" required><br><br>
			</li>
			<li>
				<label for="Pengarang">Pengarang :</label><br>
				<input type="text" name="Pengarang" id="Pengarang" required><br><br>
			</li>
			<li>
				<label for="ket">ket :</label><br>
				<input type="text" name="ket" id="ket" required><br><br>
			</li>
			<li>
				<label for="Harga">Harga :</label><br>
				<input type="text" name="Harga" id="Harga" required><br><br>
			</li>
			<button type="sumbit" name="tambah">Tambah Data!</button>
			<button type="sumbit">
				<a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
			</button>
		</ul>
		

</body>
</html>