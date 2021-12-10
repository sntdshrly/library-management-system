<!DOCTYPE html>
<html>
<head>
 <title>Maranatha e-Library</title>
</head>
<body>
 <div align="center">
  <h3>Maranatha e-Library<br>The only thing that you absolutely have to know, is the location of the library</h3>
  <?php
   // panggil file koneksi
  include "config.php";
  ?>
  <table >
   <form method="POST" >

	<tr>
    <td>Seq</td>
    <td><input type="text" name="seq" id="seq"></td>
    </tr>	
	
	<tr>
    <td>Id Pinjam</td>
    <td><input type="text" name="FK_id_pinjam" id="FK_id_pinjam"></td>
    </tr>
	
	<tr>
    <td>Qty</td>
    <td><input type="text" name="qty" id="qty"></td>
    </tr>
	
	
    <tr>
    <td>Tanggal Pengembalian</td>
    <td><input type="date" name="tgl_pengembalian" id="tgl_pengembalian"></td>
    </tr>
	

	<tr>
    <td>Denda</td>
    <td><input type="text" name="denda" id="denda"></td>
    </tr>
	
	<tr>
    <td>Kode Buku</td>
    <td><input type="text" name="FKKode_buku" id="FKKode_buku"></td>
    </tr>
	
    <tr>
     <td></td>
     <td>
      <input type="submit" name="simpan" value="Simpan">
      <a href="index.php">Kembali</a>
     </td>
    </tr>
   </form>
  </table>
  <?php
   //eksekusi simpan data
   if (isset($_POST['simpan'])) {
    # code...
    $seq=$_POST['seq'];
	$FK_id_pinjam=$_POST['FK_id_pinjam'];
    $qty=$_POST['qty'];
	if(EMPTY($_POST['tgl_pengembalian'])){
		$tgl_pengembalian = NULL;
	}
	else {
		$tgl_pengembalian = $_POST['tgl_pengembalian'];
	}

	
	$denda=$_POST['denda'];
	$FKKode_buku=$_POST['FKKode_buku'];

    $sql="INSERT INTO tbPinjam_det(seq,FK_id_pinjam,qty,tgl_pengembalian,denda,FKKode_buku)
	VALUES('$seq','$FK_id_pinjam','$qty','$tgl_pengembalian','$denda','$FKKode_buku')";
    $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
    if ($query) {
     //redirect ke halaman index
     header("Location:index.php");
    }
   }
  ?>
 </div>
</body>
</html>