<?php
 // panggil file koneksi
 include "config.php";
 
 //ambil data id dari parameter
 $kode_buku=$_GET['kode_buku'];

 $sql="DELETE FROM tbBuku WHERE kode_buku='$kode_buku'";
 $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
 if ($query) {
  //redirect ke halaman index
  header("Location:index.php");
 }
 
?>