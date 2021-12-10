<?php
 // panggil file koneksi
 include "config.php";
 
 //ambil data id dari parameter
 $id_kategori=$_GET['id_kategori'];

 $sql="DELETE FROM tbKategori WHERE id_kategori='$id_kategori'";
 $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
 if ($query) {
  //redirect ke halaman index
  header("Location:index.php");
 }
 
?>