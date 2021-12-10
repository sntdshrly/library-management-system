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
   $nrp = ISSET($_GET['nrp']) ? $_GET['nrp']:'';
   //select data dari tabel Mhsw berdasarkan nrp
   $sql="SELECT * FROM tbMahasiswa WHERE nrp='$nrp'";
   
   $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
   $data=sqlsrv_fetch_array($query);

   
  ?>
  <table >
   <form method="POST" >
	
	
    <tr>
     <td>Nama</td>
     <td><input type="text" name="nama_mhsw" id="nama_mhsw" value="<?php echo $data['nama_mhsw'] ?>"></td>
    </tr>
    <tr>
	
	<tr>
     <td>Alamat</td>
     <td><textarea rows="3" name="alamat_mhsw" id="alamat_mhsw" ><?php echo $data['alamat_mhsw']; ?></textarea></td>
    </tr>
    <tr>
	
	<tr>
     <td>Email</td>
     <td><input type="text" name="email_mhsw" id="email_mhsw" value="<?php echo $data['email_mhsw'] ?>"></td>
    </tr>
    <tr>
	
	<tr>
     <td>Telepon</td>
     <td><input type="text" name="tlp_mhsw" id="tlp_mhsw" value="<?php echo $data['tlp_mhsw'] ?>"></td>
    </tr>
    <tr>
	
     <td>Prodi</td>
     <td>
      <select name="prodi" id="prodi">
       <option disabled="" selected="">-Pilih-</option>
       <!-- cek apakah data dari database sama dengan value option, jika sama maka tambah atribute selected -->
       <option <?php if($data['prodi']=="Teknik Informatika") echo "selected"; ?> value="Teknik Informatika">Teknik Informatika</option>
       <option <?php if($data['prodi']=="Teknik Industri") echo "selected"; ?> value="Teknik Industri">Teknik Industri</option>
       <option <?php if($data['prodi']=="Teknik Elektro") echo "selected"; ?> value="Teknik Elektro">Teknik Elektro</option>
       <option <?php if($data['prodi']=="Kedokteran") echo "selected"; ?> value="Kedokteran">Kedokteran</option>
       <option <?php if($data['prodi']=="Sistem Komputer") echo "selected"; ?> value="Sistem Komputer">Sistem Komputer</option>
       <option <?php if($data['prodi']=="Psikologi") echo "selected"; ?> value="Psikologi">Psikologi</option>
       <option <?php if($data['prodi']=="Sastra China") echo "selected"; ?> value="Sastra China">Sastra China</option>
       <option <?php if($data['prodi']=="Sastra Jepang") echo "selected"; ?> value="Sastra Jepang">Sastra Jepang</option>
       <option <?php if($data['prodi']=="Sastra Inggris") echo "selected"; ?> value="Sastra Inggris">Sastra Inggris</option>
       <option <?php if($data['prodi']=="Akuntansi") echo "selected"; ?> value="Akuntansi">Akuntansi</option>
       <option <?php if($data['prodi']=="Seni Rupa Murni") echo "selected"; ?> value="Seni Rupa Murni">Seni Rupa Murni</option>
       <option <?php if($data['prodi']=="Desain Interior") echo "selected"; ?> value="Desain Interior">Desain Interior</option>
       <option <?php if($data['prodi']=="Arsitektur") echo "selected"; ?> value="Arsitektur">Arsitektur</option>
       <option <?php if($data['prodi']=="Hukum") echo "selected"; ?> value="Hukum">Hukum</option>
       <option <?php if($data['prodi']=="Manajemen") echo "selected"; ?> value="Manajemen">Manajemen</option>
       <option <?php if($data['prodi']=="Kedokteran Gigi") echo "selected"; ?> value="Kedokteran Gigi">Kedokteran Gigi</option>
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
    $nrp=$data['nrp'];

    //data dari form
	//$Nama = isset($data['nama_mhsw']) ? $data['nama_mhsw'] : '';
	//$Alamat = isset($data['Alamat']) ? $_POST['Alamat'] : '';
	//$Email = isset($data['Email']) ? $_POST['Email'] : '';
	//$Telepon = isset($data['Telepon']) ? $_POST['Telepon'] : '';
	//$Prodi = isset($data['Prodi']) ? $_POST['Prodi'] : '';
	
    $nama_mhsw=$_POST['nama_mhsw'];
    $alamat_mhsw=$_POST['alamat_mhsw'];
    $email_mhsw=$_POST['email_mhsw'];
    $tlp_mhsw=$_POST['tlp_mhsw'];
	$prodi=$_POST['prodi'];


    $sql="UPDATE tbMahasiswa
	SET nama_mhsw='$nama_mhsw', alamat_mhsw='$alamat_mhsw', email_mhsw='$email_mhsw', tlp_mhsw='$tlp_mhsw', prodi='$prodi'
	WHERE nrp='$nrp'";
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