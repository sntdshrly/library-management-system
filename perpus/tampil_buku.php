<!DOCTYPE html>
<html>
<head>
 <title>Maranatha e-Library</title>
</head>
<body>
 <div align="center">
  <h3>Maranatha e-Library<br>The only thing that you absolutely have to know, is the location of the library</h3>
  <a href="index.php?page=tambah_buku">Tambah Data</a><br>
  <table border="1" width="1000px">
   <thead>
    <tr>
     <th>No</th>
     <th>Kode Buku</th>
     <th>Judul Buku</th>
     <th>Nama Pengarang</th>
     <th>Tahun Terbit</th>
     <th>Harga Buku</th>
     <th>Id Kategori</th>
     <th>Id Penerbit</th>
     <th>Stok</th>
     <th>Aksi</th>
    </tr>
   </thead>
   <tbody>
 
    <?php
     // panggil file koneksi
     include "config.php";
     $sql="SELECT * FROM tbBuku";
     $no=1;
     //eksekusi query menampilkan data dari tabel Mhsw
     $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());;
     //mengembalikan data row menjadi array dan looping data menggunakan while
     
     while ($data=sqlsrv_fetch_array($query)) {
    ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['kode_buku']; ?></td>
      <td><?php echo $data['judul_buku']; ?></td>
      <td><?php echo $data['nama_pengarang']; ?></td>
      <td><?php echo $data['tahun_terbit']; ?></td>
      <td><?php echo $data['harga_buku']; ?></td>
      <td><?php echo $data['FK_id_kategori']; ?></td>
      <td><?php echo $data['FK_id_penerbit']; ?></td>
      <td><?php echo $data['stok']; ?></td>
      <td>
       <a href="index.php?page=edit_buku&kode_buku=<?php echo $data['kode_buku']; ?>">Edit</a> |
       <a href="hapus_buku.php?kode_buku=<?php echo $data['kode_buku']; ?>"  onClick="javascript: return confirm('Apakah anda yakin?');">Hapus</a> 
      </td>
     </tr>
    <?php } ?>
   </tbody>
  </table>
 </div>
</body>
</html>