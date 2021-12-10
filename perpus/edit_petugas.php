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
   //ambil data id_petugas dari parameter
   $id_petugas = ISSET($_GET['id_petugas']) ? $_GET['id_petugas']:'';
   //select data dari tabel Petugas berdasarkan id_petugas
   $sql="SELECT * FROM tbPetugas WHERE id_petugas='$id_petugas'";
   
   $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
   $data=sqlsrv_fetch_array($query);

   
  ?>
  <table >
   <form method="POST" >
	
	
    <tr>
     <td>Nama</td>
     <td><input type="text" name="nama_petugas" id="nama_petugas" value="<?php echo $data['nama_petugas'] ?>"></td>
    </tr>

	<tr>
     <td>Telepon</td>
     <td><input type="text" name="tlp_petugas" id="tlp_petugas" value="<?php echo $data['tlp_petugas'] ?>"></td>
    </tr>

    <tr>
     <td>Alamat</td>
     <td><textarea rows="3" name="alamat_petugas" id="alamat_petugas" ><?php echo $data['alamat_petugas']; ?></textarea></td>
    </tr>
	
	<tr>
     <td>Gaji Bulanan</td>
     <td><input type="text" name="gaji_bulanan" id="gaji_bulanan" value="<?php echo $data['gaji_bulanan'] ?>"></td>
    </tr>

  <tr>
     <td>Tanggal Masuk</td>
     <td><input type="date" name="tgl_masuk" id="tgl_masuk" value="<?php echo date_format($data['tgl_masuk'],"d/m/Y"); ?>"></td>
    </tr>
	
  <tr>
     <td>Bonus</td>
     <td><input type="text" name="bonus" id="bonus" value="<?php echo $data['bonus'] ?>"></td>
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
    //data id_petugas berasal dari select berdasarkan id
    $id_petugas=$data['id_petugas'];

    //data dari form
	
    $nama_petugas=$_POST['nama_petugas'];
    $tlp_petugas=$_POST['tlp_petugas'];
    $alamat_petugas=$_POST['alamat_petugas'];
    $gaji_bulanan=$_POST['gaji_bulanan'];
	$tgl_masuk=$_POST['tgl_masuk'];
    $bonus=$_POST['bonus'];



    $sql="UPDATE tbPetugas
	SET nama_petugas='$nama_petugas', tlp_petugas='$tlp_petugas', alamat_petugas='$alamat_petugas', gaji_bulanan='$gaji_bulanan', 
  tgl_masuk='$tgl_masuk', bonus='$bonus'
	WHERE id_petugas='$id_petugas'";
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