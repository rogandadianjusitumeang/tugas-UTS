<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from warga where nik='$id'");

if($hapus==true){

	header("location:tampil-warga.php?pesan=hapusBerhasil");

} else{
	echo"Error";
}

?>