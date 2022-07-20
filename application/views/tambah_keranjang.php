<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Keranjang</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>

<body>
    <h1>Tambah Keranjang</h1>
    <form action="<?php echo site_url('Keranjang/prosesTambah'); ?>" method="post">
        <label>Nama Barang</label><input type="text" name="nama"><br>
        <label>Jumlah Barang</label><input type="text" name="jumlah"><br>
        <label>Harga</label><input type="text" name="harga"><br>
        <label>Total item</label><input type="text" name="item"><br>
        <label>Total Harga</label><input type="text" name="total"><br>
        <input type="submit" value="Tambah">
    </form>
</body>

</html>