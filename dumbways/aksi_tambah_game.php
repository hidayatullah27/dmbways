<?php
include "koneksi.php";

//get variabel yg dikirimkan dari form

$game_id	= $_POST['game_id'];
$image		= $_POST['image'];

//get variabel file upload
$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$direktori   = "gambar/$nama_file";

if (!empty($lokasi_file)) {
	if (move_uploaded_file($lokasi_file,$direktori)) {
				
		$query_tambah	= $mysqli->query("INSERT INTO berita VALUES ('', '$image', NOW(), '$nama_file')");
	
		header("Location: index.php");
	} else {
		$query_tambah	= $mysqli->query("INSERT INTO berita VALUES ('', '$image', NOW(), '-')");
	
		header("Location: index.php");
	}
} else {
	$query_tambah	= $mysqli->query("INSERT INTO berita VALUES ('', '$image, NOW(), '-')");
	
	header("Location: index.php");
}
?>