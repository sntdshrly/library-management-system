<!DOCTYPE html>
<html>
<head>
 <title>Maranatha e-Library</title>
</head>
<body>
 <div align="center">
  <h3>Maranatha e-Library<br>The only thing that you absolutely have to know, is the location of the library</h3>
  <a href="index.php?page=tambah_pinjam_det">Tambah Data</a><br></br>
  <table border="1" width="700px">
   <thead>
    <tr>
     <th>No</th>
     <th>Seq</th>
     <th>Id Pinjam</th>
     <th>Qty</th>
     <th>Tanggal Pengembalian</th>
     <th>Denda</th>
	 <th>FKkode_buku</th>
	 <th>Aksi</th>
    </tr>
   </thead>
   <tbody>
 
    <?php
     // panggil file koneksi
     include "config.php";
     $sql="SELECT * FROM tbPinjam_det";
     $no=1;
     //eksekusi query menampilkan data dari tabel Mhsw
     $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());;
     //mengembalikan data row menjadi array dan looping data menggunakan while
     while ($data=sqlsrv_fetch_array($query)) {

    ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['seq']; ?></td>
      <td><?php echo $data['FK_id_pinjam']; ?></td>
      <td><?php echo $data['qty']; ?></td>
      <td><?php echo $data['tgl_pengembalian']; ?></td>
	  <td><?php echo $data['denda']; ?></td>
      <td><?php echo $data['FKkode_buku']; ?></td>
      <td>
       <a href="index.php?page=edit_pinjam_det&seq=<?php echo $data['seq']; ?>">Edit</a> |
       <a href="hapus_pinjam_det.php?seq=<?php echo $data['seq']; ?>"  onClick="javascript: return confirm('Apakah anda yakin?');">Hapus</a> 
      </td>
     </tr>
    <?php } ?>
   </tbody>
  </table>
 </div>
</body>
</html>