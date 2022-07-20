<html>

<head>
	<title>Data Barang</title>
	<link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css ">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>

<body>
	<h1>Data Barang</h1>


	<?php 
	$template = array('table_open' => '<table border="1" align="center" id="myTable">'); 
	$this->table->set_template($template); 
	$this->table->set_heading("Nama","Stok","Harga","Aksi"); 
	
	foreach($barang->result() as $r){ 
		$edit = '<a href="'.site_url("Barang/update/".$r->id_barang).'">edit</a>'; 
		$hapus = '<a href="'.site_url("Barang/hapus/".$r->id_barang).'">hapus</a>';
		$this->table->add_row($r->nama_barang,$r->stok_barang,$r->harga_per_pcs, $edit." ".$hapus); 
 } 
 echo $this->table->generate(); 
 ?>
	<script>
		$(document).ready(function () {
			$('#myTable').DataTable();
		});
	</script>
    <form action="<?php echo site_url('Barang/tambah'); ?>">
    <input type="submit" value="Tambah" />
</form>
</body>

</html>