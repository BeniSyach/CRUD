<?php
include "koneksi.php";
$sql="insert into kecamatan values('$_POST[kode_kab]','$_POST[kode_kec]','$_POST[nama_kec]')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:crudkec.php');
}
?>