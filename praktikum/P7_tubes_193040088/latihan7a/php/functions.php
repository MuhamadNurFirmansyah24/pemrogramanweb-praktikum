<?php
function koneksi() {
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
	mysqli_select_db($conn, "tubes_193040088") or die("Database salah!");

	return $conn;
}
function query($sql){
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
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
	('','$judul Buku', '$Pengarang', '$ket', '$Harga', '$Gambar')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

	return mysqli_affected_rows($conn);
}
function ubah($data)
{
	global $conn;
	$id = $data['id'];
	$JudulBuku = htmlspecialchars($data['Judul Buku']);
	$Pengarang = htmlspecialchars($data['Pengarang']);
	$ket = htmlspecialchars($data['ket']);
	$Harga = htmlspecialchars($data['Harga']);
	$Gambar = htmlspecialchars($data['Gambar']);

	$queryubah = "UPDATE buku
					SET
					Judul Buku = '$JudulBuku'
					Pengarang = '$Pengarang'
					ket = '$ket'
					Harga = '$Harga'
					Gambar = '$Harga'
				WHERE id = '$id' ";
	mysqli_query($conn, $queryubah);

	return mysqli_affected_rows($conn);
}
?>