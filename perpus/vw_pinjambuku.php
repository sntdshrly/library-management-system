<!DOCTYPE html>
<html>
<head>
 <title>Maranatha e-Library</title>
</head>
<body>
 <div align="center">
  <h3>Maranatha e-Library<br>The only thing that you absolutely have to know, is the location of the library</h3>
  <br><br>
 
  <table border="1" width="600px">
   <thead>
    <tr>
     <th>No</th>
     <th>Nrp</th>
     <th>Nama</th>
     <th>Kali Pinjam</th>
    </tr>
	
   </thead>
   <tbody>
 
    <?php
     // panggil file koneksi
     include "config.php";

     $sql="SELECT * FROM vwMhs_Paling_Sering_Pinjam_Buku";
     $no=1;
     //eksekusi query menampilkan data dari tabel Mhsw
     $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());;
     //mengembalikan data row menjadi array dan looping data menggunakan while
	
     while ($data=sqlsrv_fetch_array($query)) {
    ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['nrp']; ?></td>
      <td><?php echo $data['NAMA']; ?></td>
      <td><?php echo $data['Kali Pinjam']; ?></td>
     </tr>
	  <?php }
	 ?>

   </tbody>
  </table>
 </div>
</body>
</html>