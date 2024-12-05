<?php
include("../koneksi.php");
$pelanggan_id= $_GET['pelanggan_id'];
$query = $db->query("SELECT * FROM pelanggan WHERE pelanggan_id = '$pelanggan_id'");
$pelangganA = $query->fetch_assoc();
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Edit Data Pelanggan Film</title>
</head>

<body>
	<h3>Edit Data Pelanggan</h3>
	<form action="proses_edit.php" method="POST">
		<input type="hidden" name="pelanggan_id" value="<?php echo $pelangganA['pelanggan_id']; ?>">
		<table border="0">
			<tr>
				<td>Nama Lengkap</td>
				<td> 
					<input type="text" name="nama"
						value="<?php echo $pelangganA['nama']; ?>" required>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td> 
					<input type="email" name="email" 
				value="<?php echo $pelangganA['email']; ?>"> 
			</td>
			</tr>
		</table> 
		<button type="submit" name="simpan">Simpan</button>
	</form>
</body>
</html>