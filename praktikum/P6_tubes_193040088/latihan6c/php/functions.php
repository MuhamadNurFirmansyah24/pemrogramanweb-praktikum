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
function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM Buku WHERE id = $id");

	return mysqli_affected_rows($conn);
}
?>