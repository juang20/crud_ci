<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Tambah</title>
</head>
<body>
	<h3>Halaman Tambah Mahasiswa</h3>
	<form action="<?php echo site_url('home/fungsi_tambah') ?>" method="post">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit">Tambah Mahasiswa</button></td>
			</tr>
		</table>
	</form>

</body>
</html>