<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/favicon.png" type="image/ico" />

	<title>Maranatha e-Library</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <center>
            &nbsp; <a href="index.php" class="fa fa-mortar-board fa-2x" style="color:#fff;"><span><font size="4.95" color="white" face="Helvetica Neue"> Perpustakaan Digital</font></span></a>
            </center>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="assets/images/image.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>
                  </li>
                  <li><a href="#"><i class="fa fa-desktop"></i> Data Mahasiswa<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tampil_mhsw">Tampil Data</a></li>
                      <li><a href="index.php?page=sp_mhswawalan">Cari Data Berdasarkan Awalan Nama Mahasiswa</a></li>
                      <li><a href="index.php?page=sp_nrpmhs">Cari Data Berdasarkan Awalan NRP Mahasiswa</a></li>
					  <li><a href="index.php?page=sp_mhsprodi">Cari Data Mahasiswa Berdasarkan Prodi</a></li>
					  <li><a href="index.php?page=tPinjaman_Buku_Mhs">Cari Data Total Buku Yang Pernah Dipinjam Berdasarkan NRP</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-desktop"></i> Data Petugas<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tampil_petugas">Tampil Data</a></li>
					  <li><a href="index.php?page=sp_petugasawalan">Cari Data Berdasarkan Awalan Nama Petugas</a></li>
					  <li><a href="index.php?page=sp_TotalGajiPetugasDariVwGaji">Cari Data Berdasarkan Id Petugas dan Tanggal Masuk</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-desktop"></i> Data Buku<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tampil_buku">Tampil Data</a></li>
                      <li><a href="index.php?page=sp_bukuawalan">Cari Data Berdasarkan Judul Buku </a></li>
                      <li><a href="index.php?page=sp_lihatbukuterlarisdarivw">Cari Data Jumlah Buku Yang Telah Dipinjam</a></li>
                      <li><a href="index.php?page=sp_bukuyangbelumdibalikin">Cari Data Buku Yang Belum Dikembalikan Berdasarkan Tanggal Pinjam</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-desktop"></i> Data Kategori<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tampil_kategori">Tampil Data</a></li>
                      <li><a href="index.php?page=sp_kategoriawalan">Cari Data Berdasarkan Nama Kategori</a></li>
                      <li><a href="index.php?page=sp_lihatnamakategoridarivw">Cari Data Judul Buku Berdasarkan Id Kategori</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-desktop"></i> Data Rak<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tampil_rak">Tampil Data</a></li>
                      <li><a href="index.php?page=sp_rakawal">Cari Data Berdasarkan Nama Rak</a></li>
                      <li><a href="index.php?page=sp_lihatnamarakdarivw">Cari Data Nama Kategori Berdasarkan Id Rak</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-desktop"></i> Data Penerbit<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tampil_penerbit">Tampil Data</a></li>
                      <li><a href="index.php?page=sp_penerbitawalan">Cari Data Berdasarkan Nama Penerbit</a></li>
                      <li><a href="index.php?page=tCountBuku">Cari Data Jumlah Buku Yang Diterbitkan Berdasarkan Nama Penerbit</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-desktop"></i> Data Pinjam<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tampil_pinjam_master">Tampil Data Pinjam Master</a></li>
                      <li><a href="index.php?page=tampil_pinjam_det">Tampil Data Pinjam Detil</a></li>
                      <li><a href="index.php?page=sp_lihatpengembalian">Cari Data Berdasarkan Tanggal Pengembalian</a></li>
                      <li><a href="index.php?page=sp_lihatpeminjaman">Cari Data Berdasarkan Tanggal Peminjaman</a></li>
                      <li><a href="index.php?page=sp_dendamhs">Cari Data Denda Berdasarkan Nrp Mahasiswa</a></li>
                    </ul>
                  <li><a href="#"><i class="fa fa-desktop"></i> Data Log<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tampil_log">Tampil Data</a></li>
                      <li><a href="index.php?page=sp_tgllog">Cari Data Berdasarkan Tanggal</a></li>
                    </ul>
                  <li><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Settings 1</a></li>
                      <li><a href="#">Settings 2</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="#">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen" href="#">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock" href="#">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" >
                  <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/image.png" alt="">Admin
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="#"> Profile</a>
                      <a class="dropdown-item"  href="#">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    <a class="dropdown-item"  href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content - HALAMAN UTAMA ISI DISINI -->
        <div class="right_col" role="main">
      <?php
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'], $queries);
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      switch ($queries['page']) {
      	case 'tampil_mhsw':
      		# code...
      		include 'tampil_mhsw.php';
      		break;
      	case 'tampil_petugas':
      		# code...
      		include 'tampil_petugas.php';
      		break;
        case 'tampil_buku':
        		# code...
        	include 'tampil_buku.php';
        	break;
        case 'tampil_kategori':
          		# code...
          include 'tampil_kategori.php';
          break;
        case 'tampil_rak':
          		# code...
          include 'tampil_rak.php';
          break;
        case 'tampil_penerbit':
          		# code...
          include 'tampil_penerbit.php';
          break;
      	case 'tampil_pinjam_master':
      		# code...
      		include 'tampil_pinjam_master.php';
      		break;
      	case 'tampil_pinjam_det':
      		# code...
      		include 'tampil_pinjam_det.php';
      		break;
        case 'tampil_log':
          		# code...
          include 'tampil_log.php';
          break;
      	case 'tambah_mhsw':
      		# code...
      		include 'tambah_mhsw.php';
      		break;	
      	case 'tambah_penerbit':
      		# code...
      		include 'tambah_penerbit.php';
      		break;
      	case 'tambah_petugas':
      		# code...
      		include 'tambah_petugas.php';
      		break;
      	case 'tambah_rak':
      		# code...
      		include 'tambah_rak.php';
      		break;			
      	case 'tambah_buku':
      		# code...
      		include 'tambah_buku.php';
      		break;	
      	case 'tambah_kategori':
      		# code...
      		include 'tambah_kategori.php';
      		break;		
      	case 'tambah_pinjam_master':
      		# code...
      		include 'tambah_pinjam_master.php';
      		break;			
      	case 'tambah_pinjam_det':
      		# code...
      		include 'tambah_pinjam_det.php';
      		break;		
      	case 'edit_mhsw':
      		# code...
      		include 'edit_mhsw.php';
      		break;		
      	case 'edit_kategori':
      		# code...
      		include 'edit_kategori.php';
      		break;	
      	case 'edit_penerbit':
      		# code...
      		include 'edit_penerbit.php';
      		break;	
      	case 'edit_petugas':
      		# code...
      		include 'edit_petugas.php';
      		break;	
      	case 'edit_rak':
      		# code...
      		include 'edit_rak.php';
      		break;	
      	case 'edit_buku':
      		# code...
      		include 'edit_buku.php';
      		break;		
      	case 'edit_pinjam_master':
      		# code...
      		include 'edit_pinjam_master.php';
      		break;			
      	case 'edit_pinjam_det':
      		# code...
      		include 'edit_pinjam_det.php';
      		break;	
      	case 'sp_mhswawalan':
      		# code...
      		include 'sp_mhswawalan.php';
      		break;	
      	case 'sp_nrpmhs':
      		# code...
      		include 'sp_nrpmhs.php';
      		break;
		case 'tPinjaman_Buku_Mhs':
      		# code...
      		include 'tPinjaman_Buku_Mhs.php';
      		break;
      	case 'sp_petugasawalan':
      		# code...
      		include 'sp_petugasawalan.php';
      		break;	
      	case 'sp_TotalGajiPetugasDariVwGaji':
      		# code...
      		include 'sp_TotalGajiPetugasDariVwGaji.php';
      		break;	
      	case 'sp_bukuawalan':
      		# code...
      		include 'sp_bukuawalan.php';
      		break;	
      	case 'sp_kategoriawalan':
      		# code...
      		include 'sp_kategoriawalan.php';
      		break;	
      	case 'sp_rakawal':
      		# code...
      		include 'sp_rakawal.php';
      		break;
      	case 'sp_penerbitawalan':
      		# code...
      		include 'sp_penerbitawalan.php';
      		break;
      	case 'sp_lihatpengembalian':
      		# code...
      		include 'sp_lihatpengembalian.php';
      		break;
      	case 'sp_lihatpeminjaman':
      		# code...
      		include 'sp_lihatpeminjaman.php';
      		break;
      	case 'sp_tgllog':
      		# code...
      		include 'sp_tgllog.php';
      		break;
      	case 'tCountBuku':
      		# code...
      		include 'tCountBuku.php';
      		break;
			
			
      	case 'sp_lihatnamarakdarivw':
      		# code...
      		include 'sp_lihatnamarakdarivw.php';
      		break;		

			
      	case 'sp_lihatnamakategoridarivw':
      		# code...
      		include 'sp_lihatnamakategoridarivw.php';
      		break;	
			
      	case 'sp_lihatbukuterlarisdarivw':
      		# code...
      		include 'sp_lihatbukuterlarisdarivw.php';
      		break;	
			
      	case 'sp_bukuyangbelumdibalikin':
      		# code...
      		include 'sp_bukuyangbelumdibalikin.php';
      		break;	

      	case 'sp_dendamhs':
      		# code...
      		include 'sp_dendamhs.php';
      		break;

      	case 'sp_mhsprodi':
      		# code...
      		include 'sp_mhsprodi.php';
      		break;
			
        default:
		          #code...
		      include 'home.php';
		      break;
        }
        ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright @ 2021 Maranatha E-Library
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="assets/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="assets/skycons/skycons.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>

  </body>
</html>
