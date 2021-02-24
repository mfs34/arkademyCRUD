<!DOCTYPE html>
<html>
<head>
	<title>Tambah data</title>
</head>
<body>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama produk</td>
				<td><input type="text" name="nama_produk"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="number" name="jumlah"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>