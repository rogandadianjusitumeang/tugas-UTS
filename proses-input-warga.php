<?php

$nik=$_POST['nik'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$tgl_lahir=$_POST['tgl_lahir'];
$tempat_lahir=$_POST['tempat_lahir'];
$gol_darah=$_POST['gol_darah'];
$jlh_keluarga=$_POST['jlh_keluarga'];

include "koneksi.php";

$simpan=$koneksi->query("insert into warga(nik,nama,jenis_kelamin,agama,tgl_lahir,tempat_lahir,gol_darah,jlh_keluarga)
				values ('$nik', '$nama', '$jenis_kelamin', '$agama','$tgl_lahir', '$tempat_lahir', '$gol_darah', '$jlh_keluarga')");

if ($simpan==true){

	header("location:tampil-warga.php?pesan=inputBerhasil");
} else{
	echo "Error";
}


?>
