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
   $id_kategori = ISSET($_GET['id_kategori']) ? $_GET['id_kategori']:'';
   //select data dari tabel Mhsw berdasarkan nrp
   $sql="SELECT * FROM tbKategori WHERE id_kategori='$id_kategori'";
   
   $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
   $data=sqlsrv_fetch_array($query);

   
  ?>
  <table >
   <form method="POST" >
	
	
    <tr>
     <td>Id Kategori</td>
     <td><input type="text" name="id_kategori" id="id_kategori" value="<?php echo $data['id_kategori'] ?>"></td>
    </tr>
    <tr>
	
	<tr>
     <td>Nama Kategori</td>
     <td><input type="text" name="nama_kategori" id="nama_kategori" value="<?php echo $data['nama_kategori'] ?>"></td>
    </tr>
    <tr>

	
     <td>Id Rak</td>
     <td>
      <select name="FK_id_rak" id="FK_id_rak">
       <option disabled="" selected="">-Pilih-</option>
       <!-- cek apakah data dari database sama dengan value option, jika sama maka tambah atribute selected -->
       <option <?php if($data['FK_id_rak']=="R-00001") echo "selected"; ?> value="R-00001">R-00001</option>
       <option <?php if($data['FK_id_rak']=="R-00002") echo "selected"; ?> value="R-00001">R-00002</option>
       <option <?php if($data['FK_id_rak']=="R-00003") echo "selected"; ?> value="R-00001">R-00003</option>
       <option <?php if($data['FK_id_rak']=="R-00004") echo "selected"; ?> value="R-00001">R-00004</option>
       <option <?php if($data['FK_id_rak']=="R-00005") echo "selected"; ?> value="R-00001">R-00005</option>
       <option <?php if($data['FK_id_rak']=="R-00006") echo "selected"; ?> value="R-00001">R-00006</option>
       <option <?php if($data['FK_id_rak']=="R-00007") echo "selected"; ?> value="R-00001">R-00007</option>
       <option <?php if($data['FK_id_rak']=="R-00008") echo "selected"; ?> value="R-00001">R-00008</option>
       <option <?php if($data['FK_id_rak']=="R-00009") echo "selected"; ?> value="R-00001">R-00009</option>
      </select>
     </td>
    </tr>
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
    $id_kategori=$data['id_kategori'];

    //data dari form
	//$Nama = isset($data['nama_mhsw']) ? $data['nama_mhsw'] : '';
	//$Alamat = isset($data['Alamat']) ? $_POST['Alamat'] : '';
	//$Email = isset($data['Email']) ? $_POST['Email'] : '';
	//$Telepon = isset($data['Telepon']) ? $_POST['Telepon'] : '';
	//$Prodi = isset($data['Prodi']) ? $_POST['Prodi'] : '';
	
    $id_kategori=$_POST['id_kategori'];
    $nama_kategori=$_POST['nama_kategori'];
    $FK_id_rak=$_POST['FK_id_rak'];


    $sql="UPDATE tbKategori
	SET nama_kategori='$nama_kategori', FK_id_rak='$FK_id_rak'
	WHERE id_kategori='$id_kategori'";
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