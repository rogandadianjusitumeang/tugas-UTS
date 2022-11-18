<!DOCTYPE html>
<html>
<head>
	<title>Data warga</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">	
		<h1>Data warga</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){

?>
		<div class="alert alert-success">
			Penyimpanan Berhasil!
		</div>
	<?php

}

?>

<?php

if(@$_GET['pesan']=="hapusBerhasil"){

?>
		<div class="alert alert-success">
			Data Berhasil Dihapus!
		</div>
	<?php

}

?>




		<table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
			<thead>
				<tr>
					<td>nik</td><td>nama</td><td>jenis_kelamin</td><td>agama</td><td>tgl_lahir</td><td>tempat_lahir</td><td>gol_darah</td><td>jlh_keluarga</td>
					<th>
						<a href="input-warga.php">
							<button class="btn-info glyphicon glyphicon-plus"></button>
						</a>
				</tr>
			</thead>
			<tbody>
			<?php

	include "koneksi.php";
	$sql=$koneksi->query("select * from warga order by NIK ASC");

	while($row= $sql->fetch_assoc()){
	?>

	<tr>
		<td><?php echo $row['nik']?></td>
		<td><?php echo $row['nama']?></td>
		<td><?php echo $row['jenis_kelamin']?></td>
		<td><?php echo $row['agama']?></td>
		<td><?php echo $row['tgl_lahir']?></td>
		<td><?php echo $row['tempat_lahir']?></td>
		<td><?php echo $row['gol_darah']?></td>
		<td><?php echo $row['jlh_keluarga']?></td>
		
	<td>

		<a href="edit-warga.php?id=<?php echo $row['nik']?>">
			<button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
		</a>
		<a href="hapus-warga.php?id=<?php echo $row['nik']?>" onclick="return confirm('anda yakin menghapus data?')">
			<button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
		</td>
	</tr>

<?php
	}
	?>
</tbody>
</table>
</div>
</div>
</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/plugins/datatable/jquery.dataTables.js"></script>
<script src="bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>
</body>
</html>
</body>
</html>