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
    <td>Kode Buku</td>
    <td><input type="text" name="kode_buku" id="kode_buku"></td>
    </tr>
	
    <tr>
     <td>Judul Buku</td>
     <td><input type="text" name="judul_buku" id="judul_buku"></td>
    </tr>
	
	<tr>
     <td>Nama Pengarang</td>
     <td><input type="text" name="nama_pengarang" id="nama_pengarang"></td>
    </tr>
	
	<tr>
     <td>Tahun Terbit</td>
     <td><input type="text" name="tahun_terbit" id="tahun_terbit"></td>
    </tr>
	
	<tr>
     <td>Harga Buku</td>
     <td><input type="text" name="harga_buku" id="harga_buku"></td>
    </tr>
	
	<tr>
     <td>Id Kategori</td>
     <td>
      <select name="FK_id_kategori" id="FK_id_penerbit">
       <option disabled="" selected="">-Pilih-</option>
       <option value="K1-00001">K1-00001</option>
	   <option value="K1-00002">K1-00002</option>
	   <option value="K1-00003">K1-00003</option>
	   <option value="K1-00004">K1-00004</option>
	   <option value="K2-00001">K2-00001</option>
	   <option value="K2-00002">K2-00002</option>
	   <option value="K2-00003">K2-00003</option>
	   <option value="K2-00004">K2-00004</option>
	   <option value="K4-00001">K4-00001</option>
	   <option value="K4-00002">K4-00002</option>
	   <option value="K4-00003">K4-00003</option>
	   <option value="K4-00004">K4-00004</option>
	   <option value="K4-00005">K4-00005</option>
	   <option value="K4-00006">K4-00006</option>
	   <option value="K4-00007">K4-00007</option>
	   <option value="K4-00008">K4-00008</option>
	   <option value="K5-00001">K5-00001</option>
	   <option value="K5-00002">K5-00002</option>
	   <option value="K5-00003">K5-00003</option>
	   <option value="K6-00001">K6-00001</option>
	   <option value="K6-00002">K6-00002</option>
	   <option value="K6-00003">K6-00003</option>
	   <option value="K6-00004">K6-00004</option>
	   <option value="K6-00005">K6-00005</option>
	   <option value="K6-00006">K6-00006</option>
	   <option value="K7-00001">K7-00001</option>
	   <option value="K7-00002">K7-00002</option>
	   <option value="K7-00003">K7-00003</option>
	   <option value="K7-00004">K7-00004</option>
	   <option value="K8-00001">K8-00001</option>
	   <option value="K8-00002">K8-00002</option>
	   <option value="K8-00003">K8-00003</option>
	   <option value="K8-00004">K8-00004</option>
	   <option value="K8-00005">K8-00005</option>
	   <option value="K9-00001">K9-00001</option>
	   <option value="K9-00002">K9-00002</option>
      </select>
     </td>
    </tr>
	
    <tr>
     <td>Id Penerbit</td>
     <td>
      <select name="FK_id_penerbit" id="FK_id_penerbit">
       <option disabled="" selected="">-Pilih-</option>
       <option value="PT-00001">PT-00001</option>
	   <option value="PT-00002">PT-00002</option>
	   <option value="PT-00003">PT-00003</option>
	   <option value="PT-00004">PT-00004</option>
	   <option value="PT-00005">PT-00005</option>
	   <option value="PT-00006">PT-00006</option>
	   <option value="PT-00007">PT-00007</option>
	   <option value="PT-00008">PT-00008</option>
	   <option value="PT-00009">PT-00009</option>
	   <option value="PT-00010">PT-00010</option>
      </select>
     </td>
    </tr>
	
	
	<tr>
     <td>Stok</td>
     <td><input type="text" name="stok" id="stok"></td>
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
	$kode_buku=$_POST['kode_buku'];
    $judul_buku=$_POST['judul_buku'];
	$nama_pengarang=$_POST['nama_pengarang'];
	$tahun_terbit=$_POST['tahun_terbit'];
	$harga_buku=$_POST['harga_buku'];
    $FK_id_kategori=$_POST['FK_id_kategori'];
	$FK_id_penerbit=$_POST['FK_id_penerbit'];
	$stok=$_POST['stok'];
		
    $sql="INSERT INTO tbBuku(kode_buku,judul_buku,nama_pengarang,tahun_terbit,harga_buku,FK_id_kategori,FK_id_penerbit,stok)
	VALUES('$kode_buku','$judul_buku','$nama_pengarang','$tahun_terbit','$harga_buku','$FK_id_kategori','$FK_id_penerbit','$stok')";
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