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
    <td>Id Kategori</td>
    <td><input type="text" name="id_kategori" id="id_kategori"></td>
    </tr>
	
    <tr>
     <td>Nama Kategori</td>
     <td><input type="text" name="nama_kategori" id="nama_kategori"></td>
    </tr>
	
    <tr>
     <td>Id Rak</td>
     <td>
      <select name="FK_id_rak" id="FK_id_rak">
       <option disabled="" selected="">-Pilih-</option>
       <option value="R-00001">R-00001</option>
	   <option value="R-00002">R-00002</option>
	   <option value="R-00003">R-00003</option>
	   <option value="R-00004">R-00004</option>
	   <option value="R-00005">R-00005</option>
	   <option value="R-00006">R-00006</option>
	   <option value="R-00007">R-00007</option>
	   <option value="R-00008">R-00008</option>
	   <option value="R-00009">R-00009</option>
      </select>
     </td>
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
	$id_kategori=$_POST['id_kategori'];
    $nama_kategori=$_POST['nama_kategori'];
    $FK_id_rak=$_POST['FK_id_rak'];
		
    $sql="INSERT INTO tbKategori(id_kategori,nama_kategori,FK_id_rak)
	VALUES('$id_kategori','$nama_kategori','$FK_id_rak')";
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