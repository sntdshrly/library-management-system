<?php
 // panggil file koneksi
 include "config.php";
 
 //ambil data id dari parameter
 $nrp=$_GET['nrp'];

 $sql="DELETE FROM tbMahasiswa WHERE nrp='$nrp'";
 $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
 if ($query) {
  //redirect ke halaman index
  header("Location:index.php");
 }
 
?>