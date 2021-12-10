<?php
 // panggil file koneksi
 include "config.php";
 
 //ambil data id dari parameter
 $id_penerbit=$_GET['id_penerbit'];

 $sql="DELETE FROM tbPenerbit WHERE id_penerbit='$id_penerbit'";
 $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
 if ($query) {
  //redirect ke halaman index
  header("Location:index.php");
 }
 
?>