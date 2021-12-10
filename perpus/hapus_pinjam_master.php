<?php
 // panggil file koneksi
 include "config.php";
 
 //ambil data id dari parameter
 $id_pinjam=$_GET['id_pinjam'];

 $sql="DELETE FROM tbPinjam_master WHERE id_pinjam='$id_pinjam'";
 $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
 if ($query) {
  //redirect ke halaman index
  header("Location:index.php");
 }
 
?>