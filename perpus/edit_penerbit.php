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
   //ambil data id_penerbit dari parameter
   $id_penerbit = ISSET($_GET['id_penerbit']) ? $_GET['id_penerbit']:'';
   //select data dari tabel Penerbit berdasarkan id_penerbit
   $sql="SELECT * FROM tbPenerbit WHERE id_penerbit='$id_penerbit'";
   
   $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
   $data=sqlsrv_fetch_array($query);

   
  ?>
  <table >
   <form method="POST" >
	
	
    <tr>
     <td>Nama</td>
     <td><input type="text" name="nama_penerbit" id="nama_penerbit" value="<?php echo $data['nama_penerbit'] ?>"></td>
    </tr>

    <tr>
     <td>Alamat</td>
     <td><textarea rows="3" name="alamat_penerbit" id="alamat_penerbit" ><?php echo $data['alamat_penerbit']; ?></textarea></td>
    </tr>

    <tr>
     <td>
      <input type="submit" name="edit" value="edit">
      <a href="index.php">Kembali</a>
     </td>
    </tr>
   </form>
  </table>
  <?php
   //eksekusi simpan data
   if (isset($_POST['edit'])) {
    # code...
    //data id_penerbit berasal dari select berdasarkan id
    $id_penerbit=$data['id_penerbit'];

    //data dari form
	
    $nama_penerbit=$_POST['nama_penerbit'];
    $alamat_penerbit=$_POST['alamat_penerbit'];



    $sql="UPDATE tbPenerbit
	SET nama_penerbit='$nama_penerbit', alamat_penerbit='$alamat_penerbit'
	WHERE id_penerbit='$id_penerbit'";
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