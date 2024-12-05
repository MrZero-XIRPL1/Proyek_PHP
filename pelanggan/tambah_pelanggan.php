<!DOCTYPE html>
<html>

<head>
	<title>Data Pelanggan Film</title>
</head>
<body>
	<h3>Tambah Data Pelanggan</h3>
	<form action="proses_tambah.php" method="POST">
		<table border="0">
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
		</table>
		<button type="submit" name="simpan" class="btn btn-primary"> Simpan</button>
	</form>
</body>	
</html>