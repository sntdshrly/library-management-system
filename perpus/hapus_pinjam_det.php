<?php
 // panggil file koneksi
 include "config.php";
 
 //ambil data id dari parameter
 $seq=$_GET['seq'];

 $sql="DELETE FROM tbPinjam_det WHERE seq='$seq'";
 $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
 if ($query) {
  //redirect ke halaman index
  header("Location:index.php");
 }
 
?>