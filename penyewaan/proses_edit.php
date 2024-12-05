	<?php
	session_start(); 
	include("../koneksi.php");

	if (isset($_POST['simpan'])) {
		$id = $_POST['id'];
		$nama_pelanggan = $_POST['nama_pelanggan'];
		$nama_film = $_POST['nama_film'];
		$tanggal_sewa = $_POST['tanggal_sewa'];
		$harga_sewa = $_POST['harga_sewa'];

		$sql = "UPDATE penyewaan SET
		nama_pelanggan='$nama_pelanggan',
		nama_film='$nama_film',
		tanggal_sewa='$tanggal_sewa',
		harga_sewa='$harga_sewa'
		WHERE id=$id";

			$query = mysqli_query($db, $sql);
			if ($query) {
			$_SESSION['notifikasi'] = "Data penyewaan berhasil diperbarui!";
		} else {
			$_SESSION['notifikasi'] = "Data penyewaan gagal diperbarui!";
		}

		header('Location: index.php');
	} else {
		die("Akses ditolak. . .");
	}
	?>	