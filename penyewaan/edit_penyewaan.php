<?php
include("../koneksi.php");
$id= $_GET['id'];
$query = $db->query("SELECT * FROM penyewaan WHERE id = '$id'");
$penyewa = $query->fetch_assoc();
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Edit Data Pennyewaan</title>
</head>

<body>
	<h3>Edit Data Penyewaan</h3>
	<form action="proses_edit.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $penyewa['id']; ?>">
		<table border="0">
			<tr>
				<td>Judul Film</td>
				<td> 
					<input type="text" name="nama_pelanggan"
						value="<?php echo $penyewa['nama_pelanggan']; ?>" required>
				</td>
			</tr>
			<tr>
				<td>Nama Film</td>
				<td> 
					<input type="text" name="nama_film" 
						value="<?php echo $penyewa['nama_film']; ?>"> 
				</td>
			</tr>
			<tr>
				<td>Tanggal Sewa</td>
				<td> 
					<input type="date" name="tanggal_sewa"
						value="<?php echo $penyewa['tanggal_sewa']; ?>" style="width: 97%"> 
				</td>
			</tr>
			<tr>
				<td>Harga Sewa</td>
				<td> 
					<input type="int" name="harga_sewa"
						value="<?php echo $penyewa['harga_sewa']; ?>" style="width: 96%"> 
				</td>
			</tr>
		</table> 
		<button type="submit" name="simpan" class="btn">Simpan</button>
	</form>
</body>
</html>
