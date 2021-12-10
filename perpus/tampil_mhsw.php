<!DOCTYPE html>
<html>
<head>
 <title>Maranatha e-Library</title>
</head>
<body>
 <div align="center">
  <h3>Maranatha e-Library<br>The only thing that you absolutely have to know, is the location of the library</h3>
  <a href="index.php?page=tambah_mhsw">Tambah Data</a>
  <br><br>
 
  <table border="1" width="1000px">
   <thead>
    <tr>
     <th>No</th>
     <th>Nrp</th>
     <th>Nama</th>
     <th>Alamat</th>
     <th>Email</th>
     <th>Telepon</th>
     <th>Prodi</th>
     <th>Aksi</th>
    </tr>
	
   </thead>
   <tbody>
 
    <?php
     // panggil file koneksi
     include "config.php";
     $sql="SELECT * FROM tbMahasiswa";
     $no=1;
     //eksekusi query menampilkan data dari tabel Mhsw
     $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());;
     //mengembalikan data row menjadi array dan looping data menggunakan while
     while ($data=sqlsrv_fetch_array($query)) {
    ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['nrp']; ?></td>
      <td><?php echo $data['nama_mhsw']; ?></td>
      <td><?php echo $data['alamat_mhsw']; ?></td>
      <td><?php echo $data['email_mhsw']; ?></td>
      <td><?php echo $data['tlp_mhsw']; ?></td>
      <td><?php echo $data['prodi']; ?></td>
      <td>
       <a href="index.php?page=edit_mhsw&nrp=<?php echo $data['nrp']; ?>">Edit</a> |
       <a href="hapus_mhsw.php?nrp=<?php echo $data['nrp']; ?>"  onClick="javascript: return confirm('Apakah anda yakin?');">Hapus</a> 
      </td>
     </tr>
    <?php } ?>

   </tbody>
  </table>
 </div>
</body>
</html>