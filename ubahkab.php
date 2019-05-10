<?php

	include "koneksi.php";

	//menampilkan data yang sudah tersimpan
	$kode_prov=$_POST["kode_provinsi"];
	$kode_kab=$_POST["kode_kab"];
	$nama_kab=$_POST["nama_kab"];

	//perintah mengubah data
	$sql="UPDATE kabupaten set nama_kab='$nama_kab' where kode_kab='$kode_kab'";
	$query=mysqli_query($conn,$sql);

	if($query){
		header('location:crudkab.php');
	}

?>