<?php

include "koneksi.php";

$id=$_POST['nik'];
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$tgl_lahir=$_POST['tgl_lahir'];
$tempat_lahir=$_POST['tempat_lahir'];
$gol_darah=$_POST['gol_darah'];
$jlh_keluarga=$_POST['jlh_keluarga'];

$ubah=$koneksi->query("update warga set nik='$nik', nama='$nama', jenis_kelamin='$jenis_kelamin', agama='$agama' ,tgl_lahir='$tgl_lahir' ,tempat_lahir='$tempat_lahir', gol_darah='$gol_darah' jlh_keluarga='$jlh_keluarga'where nik='$id'");

if ($ubah==true){

	header("location:tampil-warga?pesan=editBerhasil");
}else{
	echo "Error";
}


?>