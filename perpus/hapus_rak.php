<?php
 // panggil file koneksi
 include "config.php";
 
 //ambil data id dari parameter
 $id_rak=$_GET['id_rak'];

 $sql="DELETE FROM tbRak WHERE id_rak='$id_rak'";
 $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
 if ($query) {
  //redirect ke halaman index
  header("Location:index.php");
 }
 
?>