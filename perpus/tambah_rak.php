<!DOCTYPE html>
<html>
<head>
 <title>Maranatha e-Library</title>
</head>
<body>
 <div align="center">
  <h3>Maranatha e-Library<br>The only thing that you absolutely have to know, is the location of the library</h3>
  <?php
   // panggil file koneksi
  include "config.php";
  ?>
  <table >
   <form method="POST" >
   
    <tr>
    <td>Id Rak</td>
    <td><input type="text" name="id_rak" id="id_rak"></td>
    </tr>
	
    <tr>
     <td>Nama Rak</td>
     <td><input type="text" name="nama_rak" id="nama_rak"></td>
    </tr>
	
    <tr>
     <td></td>
     <td>
      <input type="submit" name="simpan" value="Simpan">
      <a href="index.php">Kembali</a>
     </td>
    </tr>
   </form>
  </table>
  <?php
   //eksekusi simpan data
   if (isset($_POST['simpan'])) {
    # code...
	$id_rak=$_POST['id_rak'];
    $nama_rak=$_POST['nama_rak'];
		
    $sql="INSERT INTO tbRak(id_rak,nama_rak)
	VALUES('$id_rak','$nama_rak')";
    $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
    if ($query) {
     //redirect ke halaman index
     header("Location:index.php");
    }
   }
  ?>
 </div>
</body>
</html>