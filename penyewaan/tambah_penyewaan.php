<!DOCTYPE HTML>
<html>
<head>
	<title>MOVIE RENTAL</title>
</head>

<body>
	<h3>Tambah Data Film</h3>
	<form action="proses_tambah.php" method="POST">
		<table border="0">
			<tr>
				<td>Nama Pelanggan</td>
				<td><input type="text" name="nama_pelanggan" required></td>
			</tr>
			</tr>
			<tr>
				<td>Nama Film</td>
				<td><input type="text" name="nama_film" required></td>
			</tr>
			<tr>
				<td>Tanggal Sewa</td>
				<td><input type="date" name="tanggal_sewa" style="width: 97%" required></td>
			</tr>
			<tr>
				<td>Harga Sewa</td>
				<td><input type="text" name="harga_sewa" style="width: 96%" required></td>
			</tr>
		</table>
		<button type="submit" name="simpan" class="btn" required>Simpan</button>
	</form>
</body>
</html>