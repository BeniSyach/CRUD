<?php
include "koneksi.php";
$sql="insert into kabupaten values('$_POST[kode_provinsi]','$_POST[kode_kab]','$_POST[nama_kab]')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:crudkab.php');
}
?>