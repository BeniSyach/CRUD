<!doctype html>
<html lang="en">
 <head>
  <title>Data kecamatan</title>
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
  <form method="post" action="tambahkec.php">
	<table>
	<tr>
		<td>Kode kabupaten</td>
		<td>:</td>
		<td><select name="kode_kab">
			<?php
			include "koneksi.php";
			$sql="select * from kabupaten";
			$query=mysqli_query($conn,$sql);
			while($data=mysqli_fetch_array($query)){
			echo "<option value='$data[1]'>$data[2]</option>";
			}
			?>
		</select></td>
	</tr>
	<tr>
		<td>Kode kecamatan</td>
		<td>:</td>
		<td><input type="text" name="kode_kec"></td>
	</tr>
	<tr>
		<td>Nama kecamatan</td>
		<td>:</td>
		<td><input type="text" name="nama_kec"></td>
	</tr>
	<tr>
		<td><input type="reset" value="Batal"></td>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
	</table>
  </form>
  <strong>Data kecamatan</strong>
  <table border="1">
  <tr>
	<td>Kode kabupaten</td>
	<td>Kode kecamatan</td>
	<td>Nama kecamatan</td>
	<td>Aksi</td>
  </tr>
  <?php
  include "koneksi.php";
 $sql="select * from kecamatan";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td>$data[0]</td>";
	echo"<td>$data[1]</td>";
	echo"<td>$data[2]</td>";
	echo"<td><a href=./editkec.php?id=$data[0]>Edit</a>|<a href=./hapuskec.php?id=$data[1]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
 </body>
</html>
