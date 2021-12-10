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
    <td>Nrp</td>
    <td><input type="text" name="nrp" id="nrp"></td>
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
     <td>Email</td>
     <td><input type="text" name="Email" id="Email"></td>
    </tr>
	
	<tr>
     <td>Telepon</td>
     <td><input type="text" name="Telepon" id="Telepon"></td>
    </tr>
	
    <tr>
     <td>Prodi</td>
     <td>
      <select name="Prodi" id="Prodi">
       <option disabled="" selected="">-Pilih-</option>
       <option value="Teknik Informatika">Teknik Informatika</option>
       <option value="Manajemen Informatika">Teknik Industri</option>
       <option value="Teknik Sipil">Teknik Sipil</option>
	   <option value="Teknik Elektro">Teknik Elektro</option>
	   <option value="Kedokteran">Kedokteran</option>
	   <option value="Sistem Komputer">Sistem Komputer</option>
	   <option value="Psikologi">Psikologi</option>
	   <option value="Sastra China">Sastra China</option>
	   <option value="Sastra Jepang">Sastra Jepang</option>
	   <option value="Sastra Inggris">Sastra Inggris</option>
	   <option value="Akuntansi">Akuntansi</option>
	   <option value="Seni Rupa Murni">Seni Rupa Murni</option>
	   <option value="Desain Interior">Desain Interior</option>
	   <option value="Arsitektur">Arsitektur</option>
	   <option value="Hukum">Hukum</option>
	   <option value="Manajemen">Manajemen</option>
	   <option value="Kedokteran Gigi">Kedokteran Gigi</option>
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
	$nrp=$_POST['nrp'];
    $Nama=$_POST['Nama'];
    $Alamat=$_POST['Alamat'];
    $Email=$_POST['Email'];
    $Telepon=$_POST['Telepon'];
	$Prodi=$_POST['Prodi'];
		
    $sql="INSERT INTO tbMahasiswa(nrp,nama_mhsw,alamat_mhsw,email_mhsw,tlp_mhsw,prodi)
	VALUES('$nrp','$Nama','$Alamat','$Email','$Telepon','$Prodi')";
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