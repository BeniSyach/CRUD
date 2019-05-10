<!doctype html>
<html lang="en">
 <head>
  <title>crud provinsi</title>
  <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		   		alert("Masukkan data berupa angka!!!")
		   		return false;
		   } else {
		   		return true;
		   }
		}
	</script>
 </head>
<body>
	<body>
   
  <form method="post" action="tambahprov.php">
	<table>
	<tr>
		<td>Kode Provinsi</td>
		<td>:</td>
		<td><input type="text" name="kode_provinsi"></td>
	</tr>
	<tr>
		<td>Nama Provinsi</td>
		<td>:</td>
		<td><input type="text" name="nama_provinsi"></td>
	</tr>
	<tr>
		<td><input type="reset" value="Batal"></td>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
	</table>
  </form>
  <strong>Data Provinsi</strong>
  <table border="1">
  <tr>
	<td>Kode Provinsi</td>
	<td>Nama Provinsi</td>
	<td>Aksi</td>
  </tr>
  <?php
  include "koneksi.php";
  $sql="select * from Provinsi";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td>$data[0]</td>";
	echo"<td>$data[1]</td>";
	echo"<td><a href=./editprov.php?id=$data[0]>Edit</a>|<a href=./hapusprov.php?id=$data[0]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
 </body>
</html>