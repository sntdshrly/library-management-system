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
   //ambil data nrp dari parameter
   $id_rak = ISSET($_GET['id_rak']) ? $_GET['id_rak']:'';
   //select data dari tabel Mhsw berdasarkan nrp
   $sql="SELECT * FROM tbRak WHERE id_rak='$id_rak'";
   
   $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
   $data=sqlsrv_fetch_array($query);

  ?>
  <table >
   <form method="POST" >
	
    <tr>
     <td>Id Rak</td>
     <td><input type="text" name="id_rak" id="id_rak" value="<?php echo $data['id_rak'] ?>"></td>
    </tr>
    <tr>
	
	<tr>
     <td>Nama Rak</td>
     <td><input type="text" name="nama_rak" id="nama_rak" value="<?php echo $data['nama_rak'] ?>"></td>
    </tr>
    <tr>
	
     <td></td>
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
    //data nrp berasal dari select berdasarkan id
    $id_rak=$data['id_rak'];

    //data dari form
	//$Nama = isset($data['nama_mhsw']) ? $data['nama_mhsw'] : '';
	//$Alamat = isset($data['Alamat']) ? $_POST['Alamat'] : '';
	//$Email = isset($data['Email']) ? $_POST['Email'] : '';
	//$Telepon = isset($data['Telepon']) ? $_POST['Telepon'] : '';
	//$Prodi = isset($data['Prodi']) ? $_POST['Prodi'] : '';
	
    $id_rak=$_POST['id_rak'];
    $nama_rak=$_POST['nama_rak'];

    $sql="UPDATE tbRak
	SET nama_rak='$nama_rak'
	WHERE id_rak='$id_rak'";
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