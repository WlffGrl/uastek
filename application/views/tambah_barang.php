<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Barang</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>

<body>
    <h1>Tambah Barang</h1>
    <form action="<?php echo site_url('Barang/prosesTambah'); ?>" method="post">
        <label>Nama Barang</label><input type="text" name="nama"><br>
        <label>Stok Barang</label><input type="text" name="stok"><br>
        <label>Harga</label><input type="text" name="harga"><br>
        <input type="submit" value="Tambah">
    </form>
</body>

</html>