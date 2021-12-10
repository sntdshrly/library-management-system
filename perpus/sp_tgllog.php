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
     <td>Tanggal</td>
     <td><input type="date" name="tanggal" id="tanggal"></td>
    </tr>
	

	<td>
      <input type="submit" name="eksekusi" value="eksekusi">
     </td>
	 
	<br><br>
  <table border="1" width="700px">
   <thead>
    <tr>
     <th>No</th>
     <th>Id Log</th>
     <th>Nama Pengguna</th>
     <th>Tanggal</th>
     <th>Keterangan</th>
    </tr>
   </thead>
   <tbody>
   </form>
    <?php
     // panggil file koneksi
     include "config.php";
	 if (isset($_POST['eksekusi'])) {
	 $pKata = $_POST['tanggal'];
     $sql="EXEC [dbo].[SP_TglLog] '$pKata'";
     $no=1;
     //eksekusi query menampilkan data dari tabel Mhsw
     $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());;
     //mengembalikan data row menjadi array dan looping data menggunakan while
	
     while ($data=sqlsrv_fetch_array($query)) {
	 ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['id_log']; ?></td>
      <td><?php echo $data['nama_pengguna']; ?></td>
      <td><?php echo date_format($data['tanggal'],"d/m/Y"); ?></td>
      <td><?php echo $data['keterangan']; ?></td>
     </tr>
	  <?php }
	 }?>

   </tbody>
  </table>
 </div>
</body>
</html>