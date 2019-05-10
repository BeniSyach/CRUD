<?php
include "koneksi.php";
	
 $kode_prov=$_POST["kode_provinsi"];
$nama_prov=$_POST["nama_provinsi"];

if($kode_provinsi == ""){
	header("location:crudprov.php?nama=kosong");
}

$sql="insert into provinsi values('$kode_prov','$nama_prov')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:crudprov.php');
}
?>