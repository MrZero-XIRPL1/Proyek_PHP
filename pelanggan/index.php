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
	<h2>Data Pelanggan</h2> 

	<?php if (isset($_SESSION['notifikasi'])): ?>
		<p><?php echo $_SESSION['notifikasi']; ?></p>
	
		<?php unset($_SESSION['notifikasi']); ?> 
		<?php endif; ?>
	<table>
		<thead>
			<tr align="center">
				<th>#</th>
				<th>Nama Lengkap</th>
				<th>Email</th>
				<th><a href="tambah_pelanggan.php">Tambah Data</a></th>
			</tr>
		</thead>
		<tbody> <?php $no = 1;
			
				$query = $db->query("SELECT * FROM pelanggan");
				while ($pelangganA = $query->fetch_assoc()) {
					?>
					
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $pelangganA['nama'] ?></td>
					<td><?php echo $pelangganA['email'] ?></td>
					<td align="center">

						<a href="edit_pelanggan.php?pelanggan_id=<?php echo $pelangganA['pelanggan_id'] ?>">Edit</a>
						<a onclick="return confirm('Anda yakin ingin menghapus data?')" href="hapus_pelanggan.php?pelanggan_id=<?php echo $pelangganA['pelanggan_id'] ?>">Hapus</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>

</html>