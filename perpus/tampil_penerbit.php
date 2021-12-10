<!DOCTYPE html>
<html>
<head>
 <title>Maranatha e-Library</title>
</head>
<body>
 <div align="center">
  <h3>Maranatha e-Library<br>The only thing that you absolutely have to know, is the location of the library</h3>
  <a href="index.php?page=tambah_penerbit">Tambah Data</a><br>
  <table border="1" width="800px">
   <thead>
    <tr>
     <th>No</th>
     <th>Id Penerbit</th>
     <th>Nama</th>
     <th>Alamat</th>
     <th>Aksi</th>

   </thead>
   <tbody>
 
    <?php
     // panggil file koneksi
     include "config.php";
     $sql="SELECT * FROM tbPenerbit";
     $no=1;
     //eksekusi query menampilkan data dari tabel petugas
     $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());;
     //mengembalikan data row menjadi array dan looping data menggunakan while
	 
     while ($data=sqlsrv_fetch_array($query)) {
    ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['id_penerbit']; ?></td>
      <td><?php echo $data['nama_penerbit']; ?></td>
      <td><?php echo $data['alamat_penerbit']; ?></td>

      <td>
       <a href="index.php?page=edit_penerbit&id_penerbit=<?php echo $data['id_penerbit']; ?>">Edit</a> |
       <a href="hapus_penerbit.php?id_penerbit=<?php echo $data['id_penerbit']; ?>"  onClick="javascript: return confirm('Apakah anda yakin?');">Hapus</a> 
      </td>
     </tr>
    <?php } ?>
   </tbody>
  </table>
 </div>
</body>
</html>