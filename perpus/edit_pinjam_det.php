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
   //ambil data id_petugas dari parameter
   $seq = ISSET($_GET['seq']) ? $_GET['seq']:'';
   //select data dari tabel Petugas berdasarkan id_petugas
   $sql="SELECT * FROM tbPinjam_det WHERE seq='$seq'";
   
   $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
   $data=sqlsrv_fetch_array($query);

   
  ?>
  <table >
   <form method="POST" >
	
	
	<tr>
     <td>Seq</td>
     <td><input type="text" name="seq" id="seq" value="<?php echo $data['seq'] ?>"></td>
    </tr>
	
    <tr>
     <td>Id Pinjam</td>
     <td><input type="text" name="FK_id_pinjam" id="FK_id_pinjam" value="<?php echo $data['FK_id_pinjam'] ?>"></td>
    </tr>

    <tr>
     <td>Qty</td>
     <td><input type="text" name="qty" id="qty" value="<?php echo $data['qty']; ?>"></td>
    </tr>
	

	<tr>
     <td>Tanggal Pengembalian</td>
     <td><input type="date" name="tgl_pengembalian" id="tgl_pengembalian" value="<?php if(EMPTY($data['tgl_pengembalian'])){$tgl_pengembalian = NULL;}
		else {echo date_format($data['tgl_pengembalian'],"d/m/Y");} ?>"></td>
    </tr>
	
	<tr>
     <td>Denda</td>
     <td><input type="text" name="denda" id="denda" value="<?php echo $data['denda'] ?>"></td>
    </tr>

	
  <tr>
     <td>Kode Buku</td>
     <td><input type="text" name="FKkode_buku" id="FKkode_buku" value="<?php echo $data['FKkode_buku'] ?>"></td>
    </tr>
  <tr>
     <td>
      <input type="submit" name="edit" value="edit">
      <a href="index.php">Kembali</a>
     </td>
    </tr>
   </form>
  </table>
  <?php
   //eksekusi simpan data
   if (isset($_POST['edit'])) {
    # code...
    //data id_petugas berasal dari select berdasarkan id
    $seq=$data['seq'];

    //data dari form
	
    $FK_id_pinjam=$_POST['FK_id_pinjam'];
    $qty=$_POST['qty'];
    $tgl_pengembalian=$_POST['tgl_pengembalian'];
    $denda=$_POST['denda'];
	$FKkode_buku=$_POST['FKkode_buku'];



    $sql="UPDATE tbPinjam_det
	SET FK_id_pinjam='$FK_id_pinjam', qty='$qty', tgl_pengembalian='$tgl_pengembalian', denda='$denda', FKkode_buku='$FKkode_buku'
	WHERE seq='$seq'";
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