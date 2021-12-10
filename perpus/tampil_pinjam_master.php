<!DOCTYPE html>
<html>
<head>
 <title>Maranatha e-Library</title>
</head>
<body>
 <div align="center">
  <h3>Maranatha e-Library<br>The only thing that you absolutely have to know, is the location of the library</h3>
  <a href="index.php?page=tambah_pinjam_master">Tambah Data</a><br></br>
  <table border="1" width="700px">
   <thead>
    <tr>
     <th>No</th>
     <th>Id Pinjam</th>
     <th>Tanggal Pinjam</th>
     <th>NRP</th>
     <th>Id Petugas</th>
	 <th>Aksi</th>
    </tr>
   </thead>
   <tbody>
 
    <?php
     // panggil file koneksi
     include "config.php";
     $sql="SELECT * FROM tbPinjam_master";
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
      <td><?php echo $data['FK_id_petugas']; ?></td>
      <td>
       <a href="index.php?page=edit_pinjam_master&id_pinjam=<?php echo $data['id_pinjam']; ?>">Edit</a> |
       <a href="hapus_pinjam_master.php?id_pinjam=<?php echo $data['id_pinjam']; ?>"  onClick="javascript: return confirm('Apakah anda yakin?');">Hapus</a> 
      </td>
     </tr>
    <?php } ?>
   </tbody>
  </table>
 </div>
</body>
</html>