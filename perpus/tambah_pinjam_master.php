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
    <td>Id Pinjam</td>
    <td><input type="text" name="id_pinjam" id="id_pinjam"></td>
    </tr>
	
	<tr>
    <td>Tanggal Pinjam</td>
    <td><input type="date" name="tgl_pinjam" id="tgl_pinjam"></td>
    </tr>
	
	<tr>
    <td>NRP</td>
    <td><input type="text" name="FKnrp" id="FKnrp"></td>
    </tr>

		
	<tr>
    <td>Id Petugas</td>
    <td><input type="text" name="FK_id_petugas" id="FK_id_petugas"></td>
    </tr>

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
	$id_pinjam=$_POST['id_pinjam'];
    $tgl_pinjam=$_POST['tgl_pinjam'];
	$FKnrp=$_POST['FKnrp'];
	$FK_id_petugas=$_POST['FK_id_petugas'];
		
    $sql="INSERT INTO tbPinjam_master(id_pinjam,tgl_pinjam,FKnrp,FK_id_petugas)
	VALUES('$id_pinjam','$tgl_pinjam','$FKnrp','$FK_id_petugas')";
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