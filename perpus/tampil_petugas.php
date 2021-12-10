<!DOCTYPE html>
<html>
<head>
 <title>Maranatha e-Library</title>
</head>
<body>
 <div align="center">
  <h3>Maranatha e-Library<br>The only thing that you absolutely have to know, is the location of the library</h3>
  <a href="index.php?page=tambah_petugas">Tambah Data</a><br>
  <table border="1" width="1000px">
   <thead>
    <tr>
     <th>No</th>
     <th>Id Petugas</th>
     <th>Nama</th>
     <th>Telepon</th>
     <th>Alamat</th>
     <th>Gaji Bulanan</th>
     <th>Tanggal Masuk</th>
     <th>Bonus</th>
     <th>Aksi</th>
    </tr>
   </thead>
   <tbody>
 
    <?php
     // panggil file koneksi
     include "config.php";
     $sql="SELECT * FROM tbPetugas";
     $no=1;
     //eksekusi query menampilkan data dari tabel petugas
     $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());;
     //mengembalikan data row menjadi array dan looping data menggunakan while
	 
     while ($data=sqlsrv_fetch_array($query)) {
    ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['id_petugas']; ?></td>
      <td><?php echo $data['nama_petugas']; ?></td>
      <td><?php echo $data['tlp_petugas']; ?></td>
      <td><?php echo $data['alamat_petugas']; ?></td>
      <td><?php echo $data['gaji_bulanan']; ?></td>
      <td><?php echo date_format($data['tgl_masuk'],"d/m/Y"); ?></td>
      <td><?php echo $data['bonus']; ?></td>

      <td>
       <a href="index.php?page=edit_petugas&id_petugas=<?php echo $data['id_petugas']; ?>">Edit</a> |
       <a href="hapus_petugas.php?id_petugas=<?php echo $data['id_petugas']; ?>"  onClick="javascript: return confirm('Apakah anda yakin?');">Hapus</a> 
      </td>
     </tr>
    <?php } ?>
   </tbody>
  </table>
 </div>
</body>
</html>