<!doctype HTML>
<html>
<head>
	<title>Menampilkan hasil inputan form</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
			<div class="row">
				<div class="col-md-12">
				<form action="proses-input-warga.php" method="post">

				  <div class="form-group">
				  	<label for="nik">nik</label>
				  	<input type="number"
				  	 name="nik" class="form-control" placeholder="Isikan Nik">
				  </div>
				 <div class="form-group">
				  	<label for="nama">nama</label>
				  	<input type="text" name="nama" class="form-control" placeholder="Isikan nama ">
				  </div>
				  <div class="form-group">
				  	<label for="jenis_kelamin">jenis_kelamin</label>
				  	<select name="jenis_kelamin" class="form-control">
				  		<option value="Laki-laki">laki-laki</option>
				  		<option value="Perempuan">perempuan</option>
				  	</select>
				  </div>
				  <div class="form-group">
				  	<label for="agama">agama</label>
				  	<select name="agama" class="form-control">
				  		<option value="Islam">ISLAM</option>
				  		<option value="Kristen">KRISTEN</option>
				  		<option value="Hindu">HINDU</option>
				  		<option value="Budha">BUDHA</option>
				  		<option value="Konghuchu">KONGHUCHU</option>
				  	</select>
				  <div class="form-group">
				  	<label for="tgl_lahir">tgl_Lahir</label>
				  	<input type="date" name="tgl_lahir" class="form-control" placeholder="Isikan tgl_lahir">
				  </div>
				  <div class="form-group">
				  	<label for="tempat_lahir">tempat_lahir</label>
				  	<input type="text" name="tempat_lahir" class="form-control" placeholder="Isikan tempat_lahir ">
				  </div>
				  <div class="form-group">
				  	<label for="gol_darah">Golongan Darah</label>
				  	<select name="gol_darah" class="form-control">
				  		<option value="o">O</option>
				  		<option value="a">A</option>
				  		<option value="b">B</option>
				  		<option value="ab">AB</option>
				  	</select>
				  </div>
				   
				 <div class="form-group">
				  	<label for="jlh_keluarga">jlh_keluarga</label>
				  	<textarea name="jlh_keluarga" class="form-control" placeholder="jlh_keluarga"></textarea>
				  </div>

				  <input type="submit" name="Kirim" value="Simpan" class="btn btn-info">
				  <input type="reset" name="Batal" value="Hapus" class="btn btn-danger">
				</form>
			</div>
		</div>
	</div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>