<!DOCTYPE html>
<html lang="en">

<head>
	<title>Update Keranjang</title>
	<style>
		label {
			display: inline-block;
			width: 100px;
		}
	</style>
</head>

<body>
	<h1>Update Keranjang</h1>
	<form action="<?php echo site_url('Keranjang/prosesUpdate/'.$keranjang->id_keranjang);?>" method="post">
        <label>Nama Barang</label><input type="text" name="nama" value="<?php echo $keranjang->nama_barang; ?>"><br>
        <label>Jumlah Barang</label><input type="text" name="jumlah" value="<?php echo $keranjang->jum_barang; ?>"><br>
        <label>Harga</label><input type="text" name="harga" value="<?php echo $keranjang->harga_per_pcs; ?>"><br>
        <label>Total item</label><input type="text" name="item" value="<?php echo $keranjang->total_item; ?>"><br>
        <label>Total Harga</label><input type="text" name="total" value="<?php echo $keranjang->total_bayar; ?>"><br>
		<input type="submit" value="Update">
	</form>
</body>