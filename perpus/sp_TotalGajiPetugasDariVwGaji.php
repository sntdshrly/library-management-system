<!DOCTYPE html>
<html>
<head>
 <title>Maranatha e-Library</title>
</head>
<body>
 <div align="center">
  <h3>Maranatha e-Library<br>The only thing that you absolutely have to know, is the location of the library</h3>
  <br>
 	   <form method="POST" >
    <tr>
     <td>Id Petugas <b>(Atau Ketik 'ALL' untuk seluruh id)</b></td>
     <td><input type="text" name="id" id="id"></td>
    </tr>
	<br><br>
    <tr>
     <td>Tanggal Masuk </td>
     <td><input type="date" name="tgl" id="tgl"></td>
    </tr>

	<td>
      <input type="submit" name="eksekusi" value="eksekusi">
     </td>
	 
	<br><br>
  <table border="1" width="700px">
   <thead>
    <tr>
     <th>No</th>
     <th>Id Petugas</th>
     <th>Nama Petugas</th>
     <th>Gaji Bulanan</th>
     <th>Tgl Masuk</th>
     <th>Bonus</th>
    </tr>
   </thead>
   <tbody>
   </form>
    <?php
     // panggil file koneksi
     include "config.php";
	 if (isset($_POST['eksekusi'])) {
	 $pKata = $_POST['id'];
	 $pKata2 = $_POST['tgl'];
     $sql="EXEC [dbo].[SP_TotalGajiPetugasDariVwGaji] '$pKata', '$pKata2'";
     $no=1;
     //eksekusi query menampilkan data dari tabel Mhsw
     $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());;
     //mengembalikan data row menjadi array dan looping data menggunakan while
	
     while ($data=sqlsrv_fetch_array($query)) {
	 ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['id_petugas']; ?></td>
      <td><?php echo $data['nama_petugas']; ?></td>
      <td><?php echo $data['gaji_bulanan']; ?></td>
      <td><?php echo date_format($data['tgl_masuk'],"d/m/Y"); ?></td>
      <td><?php echo $data['bonus']; ?></td>
     </tr>
	  <?php }
	 }?>

   </tbody>
  </table>
 </div>
</body>
</html>