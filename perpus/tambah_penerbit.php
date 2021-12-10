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
     <td>Id Penerbit</td>
    <td><input type="text" name="Id" id="Id"></td>
    </tr>
	
    <tr>
     <td>Nama</td>
     <td><input type="text" name="Nama" id="Nama"></td>
    </tr>

	<tr>
     <td>Alamat</td>
     <td><textarea rows="3" name="Alamat" id="Alamat"></textarea></td>
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
	  $Id=$_POST['Id'];
    $Nama=$_POST['Nama'];
    $Alamat=$_POST['Alamat'];

		
    $sql="INSERT INTO tbPenerbit(id_penerbit,nama_penerbit,alamat_penerbit)
	VALUES('$Id','$Nama','$Alamat')";
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