<!DOCTYPE html>
<html lang="en">

<head>
	<title>Update Barang</title>
	<style>
		label {
			display: inline-block;
			width: 100px;
		}
	</style>
</head>

<body>
	<h1>Update Barang</h1>
	<form action="<?php echo site_url('Barang/prosesUpdate/'.$barang->id_barang);?>" method="post">
		<label>Nama Barang</label><input type="text" name="nama" value="<?php echo $barang->nama_barang; ?>"><br>
		<label>Stok Barang</label><input type="text" name="stok" value="<?php echo $barang->stok_barang; ?>"><br>
		<label>Harga</label><input type="text" name="harga" value=" <?php echo $barang->harga_per_pcs; ?>"><br>
		<input type="submit" value="Update">
	</form>
</body>