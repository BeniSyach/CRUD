<?php
include "koneksi.php";
$id=$_GET["id"];
$sql="select * from kecamatan";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <title>Edit kecamatan</title>
 </head>
 <body>
  <form method="post" action="ubahkec.php" >
	<table>
		<tr>
			<td>Kode kabupaten</td>
			<td>:</td>
			<td><input type="text" name="kode_kab" value="<?php echo $data[0]; ?>"></td>
		</tr>
		
		<tr>
			<td>Kode Kecamatan</td>
			<td>:</td>
			<td><input type="text" name="kode_kec" value="<?php echo $data[1]; ?>"></td>
		</tr>

		<tr>
			<td>Nama kecamatan</td>
			<td>:</td>
			<td><input type="text" name="nama_kec" value="<?php echo $data[2]; ?>"></td>
		</tr>
		<tr>
			<td><input type="reset" value="Batal"></td>
			<td></td>
			<td><input type="submit" value="Update"></td>
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
	echo"<td><a href=./editkec.php?id=$data[0]>Edit</a>|<a href=./hapuskec.php?id=$data[0]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
  </body>
  </html>