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
     <td>Tanggal Awal <b>(dengan format: yyyy-mm-dd)</b> </td>
     <td><input type="text" name="awal" id="awal"></td>
    </tr>
	<br><br>
    <tr>
     <td>Tanggal Akhir <b>(dengan format: yyyy-mm-dd)</b> </td>
     <td><input type="text" name="akhir" id="akhir"></td>
    </tr>

	<td>
      <input type="submit" name="eksekusi" value="eksekusi">
     </td>
	 
	<br><br>
  <table border="1" width="1000px">
   <thead>
    <tr>
     <th>No</th>
     <th>Id Pinjam</th>
     <th>Tgl Pinjam</th>
     <th>NRP</th>
     <th>Nama Mahasiswa</th>
     <th>Kode Buku</th>
     <th>Judul Buku</th>
     <th>Qty</th>
     <th>Tgl Pengembalian</th>
    </tr>
   </thead>
   <tbody>
   </form>
  
    <?php
     // panggil file koneksi
     include "config.php";
	 if (isset($_POST['eksekusi'])) {
	 $pKata = $_POST['awal'];
	 $pKata2 = $_POST['akhir'];
     $sql="EXEC [dbo].[SP_LihatPengembalian] '$pKata', '$pKata2'";
     $no=1;
     //eksekusi query menampilkan data dari tabel Mhsw
     $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());;
     //mengembalikan data row menjadi array dan looping data menggunakan while
	
     while ($data=sqlsrv_fetch_array($query)) {
	 ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['id_pinjam']; ?></td>
      <td><?php echo $data['tgl_pinjam']; ?></td>
      <td><?php echo $data['FKnrp']; ?></td>
      <td><?php echo $data['nama_mhsw']; ?></td>
      <td><?php echo $data['kode_buku']; ?></td>
      <td><?php echo $data['judul_buku']; ?></td>
      <td><?php echo $data['qty']; ?></td>
      <td><?php echo $data['tgl_pengembalian']; ?></td>
     </tr>
	  <?php }
	 }?>

   </tbody>
  </table>
 </div>
</body>
</html>