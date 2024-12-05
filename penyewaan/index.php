<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>MOVIE RENTAL</title>
	<style>
		table,
		th,
		td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;
		}
	</style>
</head>

<body>
	<ul>
		<li ><a href="../penyewaan/index.php">Data penyewaan</a></li>
		<li><a href="../pelanggan/index.php">Data Pelanggan</a></li>
	</ul>
	<h2>Data penyewaan</h2>

	<?php if (isset($_SESSION['notifikasi'])): ?>
		<p><?= $_SESSION['notifikasi']; ?></p>
		<?php unset($_SESSION['notifikasi']); ?>
	<?php endif; ?>

	<table>
		<thead>
			<tr align="center">
				<th>#</th>
				<th>Nama Pelanggan</th>
				<th>Nama Film</th>
				<th>Tanggal Sewa</th>
				<th>Harga Sewa</th>

				<th><a href="tambah_penyewaan.php">Tambah</a></th>
			</tr>
		</thead>

		<tbody>
			<?php
			$no = 1;
			$query = $db->query(query: "SELECT * FROM penyewaan");
			while ($penyewa = $query->fetch_assoc()) {
			?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $penyewa['nama_pelanggan'] ?></td>
					<td><?php echo $penyewa['nama_film'] ?></td>
					<td><?php echo date(
							"d-m-y",
							strtotime($penyewa['tanggal_sewa'])
						); ?>
					</td>
					<td><?php echo $penyewa['harga_sewa'] ?></td>
					<td align="center">

						<a href="edit_penyewaan.php?id=<?php echo $penyewa['id'] ?>">Edit</a>
						<a onclick="return confirm('anda yakin ingin menghapus data film?')" href="hapus_penyewaan.php?id=<?php echo $penyewa['id'] ?>">Hapus</a>

					</td>
				</tr>
			<?php
			} ?>
		</tbody>
	</table>
	<p>total: <?php echo mysqli_num_rows($query) ?></p>
</body>

</html>