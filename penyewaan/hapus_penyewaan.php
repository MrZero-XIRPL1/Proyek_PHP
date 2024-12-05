	<?php
	session_start();
	include("../koneksi.php");

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$sql = "DELETE FROM penyewaan WHERE id=$id";
		$query = mysqli_query($db, $sql);

		if ($query) {
			$_SESSION['notifikasi'] = "Data film berhasil dihapus!";
		} else {
			$_SESSION['notifikasi'] = "Data film gagal dihapus!";
		}

		header('location: index.php');
	} else {
		die("Akses ditolak. . .");
	}