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
   $id_pinjam = ISSET($_GET['id_pinjam']) ? $_GET['id_pinjam']:'';
   //select data dari tabel Mhsw berdasarkan nrp
   $sql="SELECT * FROM tbPinjam_master WHERE id_pinjam='$id_pinjam'";
   
   $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
   $data=sqlsrv_fetch_array($query);

  ?>
  <table >
   <form method="POST" >
	
	
    <tr>
     <td>Id Pinjam</td>
     <td><input type="text" name="id_pinjam" id="id_pinjam" value="<?php echo $data['id_pinjam'] ?>"></td>
    </tr>
    <tr>
	
	<tr>
     <td>Tanggal Pinjam</td>
     <td><input type="date" name="tgl_pinjam" id="tgl_pinjam" value="<?php echo $data['tgl_pinjam'] ?>"></td>
    </tr>
    <tr>
	
	
	
    <tr>
     <td>Nrp</td>
     <td><input type="text" name="FKnrp" id="FKnrp" value="<?php echo $data['FKnrp'] ?>"></td>
    </tr>
    <tr>
	
    <tr>
     <td>Id Petugas</td>
     <td><input type="text" name="FK_id_petugas" id="FK_id_petugas" value="<?php echo $data['FK_id_petugas'] ?>"></td>
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
    $id_pinjam=$data['id_pinjam'];

    //data dari form
	//$Nama = isset($data['nama_mhsw']) ? $data['nama_mhsw'] : '';
	//$Alamat = isset($data['Alamat']) ? $_POST['Alamat'] : '';
	//$Email = isset($data['Email']) ? $_POST['Email'] : '';
	//$Telepon = isset($data['Telepon']) ? $_POST['Telepon'] : '';
	//$Prodi = isset($data['Prodi']) ? $_POST['Prodi'] : '';
	
    $id_pinjam=$_POST['id_pinjam'];
    $tgl_pinjam=$_POST['tgl_pinjam'];
	$FKnrp=$_POST['FKnrp'];
	$FK_id_petugas=$_POST['FK_id_petugas'];


    $sql="UPDATE tbPinjam_master
	SET tgl_pinjam='$tgl_pinjam',FKnrp='$FKnrp',FK_id_petugas='$FK_id_petugas'
	WHERE id_pinjam='$id_pinjam'";
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