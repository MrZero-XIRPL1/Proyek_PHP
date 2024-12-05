<?php
session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
	$nama_pelanggan = $_POST['nama_pelanggan'];
	$nama_film = $_POST['nama_film'];
	$tanggal_sewa = $_POST['tanggal_sewa'];
	$harga_sewa = $_POST['harga_sewa'];

	$sql = "INSERT INTO penyewaan 
		(nama_pelanggan, nama_film, tanggal_sewa,harga_sewa) VALUES
		('$nama_pelanggan','$nama_film','$tanggal_sewa','$harga_sewa')";
		
	$query = mysqli_query($db, $sql);

	if ($query) {
		$_SESSION['notifikasi'] = "Data penyewaan berhasil ditambahkan";
	} else {
		$_SESSION['notifikasi'] = "Data penyewaan gagal diperbarui!";
	}

	header('Location: index.php');
	 } else {
	die("Akses ditolak...");
	}
