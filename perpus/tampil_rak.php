<!DOCTYPE html>
<html>
<head>
 <title>Maranatha e-Library</title>
</head>
<body>
 <div align="center">
  <h3>Maranatha e-Library<br>The only thing that you absolutely have to know, is the location of the library</h3>
  <a href="index.php?page=tambah_rak">Tambah Data</a><br>
  <table border="1" width="500px">
   <thead>
    <tr>
     <th>No</th>
     <th>Id Rak</th>
     <th>Nama Rak</th>
	 <th>Aksi</th>
    </tr>
   </thead>
   <tbody>
 
    <?php
     // panggil file koneksi
     include "config.php";
     $sql="SELECT * FROM tbRak";
     $no=1;
     //eksekusi query menampilkan data dari tabel Mhsw
     $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());;
     //mengembalikan data row menjadi array dan looping data menggunakan while
	 
     while ($data=sqlsrv_fetch_array($query)) {
    ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['id_rak']; ?></td>
      <td><?php echo $data['nama_rak']; ?></td>
      <td>
       <a href="index.php?page=edit_rak&id_rak=<?php echo $data['id_rak']; ?>">Edit</a> |
       <a href="hapus_rak.php?id_rak=<?php echo $data['id_rak']; ?>"  onClick="javascript: return confirm('Apakah anda yakin?');">Hapus</a> 
      </td>
     </tr>
    <?php } ?>
   </tbody>
  </table>
 </div>
</body>
</html>