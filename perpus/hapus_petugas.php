<?php
 // panggil file koneksi
 include "config.php";
 
 //ambil data id dari parameter
 $id_petugas=$_GET['id_petugas'];

 $sql="DELETE FROM tbPetugas WHERE id_petugas='$id_petugas'";
 $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
 if ($query) {
  //redirect ke halaman index
  header("Location:index.php");
 }
 
?>