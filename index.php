<?php  
include '../config/class.php';
if (isset($_SESSION['user'])) 
{
  $id_user = $_SESSION['user']['id_user'];
  $data_user = $user->detail($id_user);
}
else
{
  echo "<script>alert('Anda harus login');</script>";
  echo "<script>location='login.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrator</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
</head>
<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white" style="background:#1AC0F7;">
      <div class="container">
        <a href="./" class="navbar-brand">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" >
          <span class="brand-text font-weight-light text-white">ADMINISTRATOR</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php?halaman=dashboard" class="nav-link text-white">Dashboard</a>
            </li>
            <li class="nav-item dropdown">
              <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-white">Data Master</a>
              <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="index.php?halaman=bank" class="dropdown-item">Data Bank </a></li>
                <li><a href="index.php?halaman=kategori" class="dropdown-item">Data Kategori </a></li>
                <li><a href="index.php?halaman=paket" class="dropdown-item">Data Paket Wisata </a></li>
               <!--  <li><a href="index.php?halaman=jenis" class="dropdown-item">Data Jenis Mobil </a></li>
                <li><a href="index.php?halaman=mobil" class="dropdown-item">Data Mobil</a></li> -->
                <li><a href="index.php?halaman=pelanggan" class="dropdown-item">Data Pelanggan </a></li>
                <li><a href="index.php?halaman=user" class="dropdown-item">Data User</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="index.php?halaman=liburan" class="nav-link text-white">Transaksi Wisata</a>
            </li>
           <!--  <li class="nav-item">
              <a href="index.php?halaman=rental" class="nav-link text-white">Rental Mobil</a>
            </li> -->
            <li class="nav-item">
              <a href="index.php?halaman=laporan" class="nav-link text-white">Laporan</a>
            </li>
            <li class="nav-item">
              <a href="index.php?halaman=saran" class="nav-link text-white">Kritik & Saran</a>
            </li>
            <li class="nav-item dropdown">
              <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-white">Pengaturan</a>
              <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="index.php?halaman=instansi" class="dropdown-item">Instansi </a></li>
                <li><a href="index.php?halaman=profil" class="dropdown-item">Profil</a></li>
                <li><a href="index.php?halaman=ubahpassword" class="dropdown-item">Ubah Password</a></li>
              </ul>
            </li>

          </ul>

          <!-- SEARCH FORM -->
          
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- Messages Dropdown Menu -->
          
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <img src="../images/user.png" class="user-image img-circle elevation-2" alt="User Image">
              <span class="d-none d-md-inline text-white"><?= $data_user['nama'] ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <!-- User image -->
              <li class="user-header bg-orange">
                <img src="../images/user.png" class="img-circle elevation-2" alt="User Image">

                <p class="text-white">
                 <?= $data_user['nama'] ?>
                 <small><?= $data_user['level'] ?></small>
               </p>
             </li>
             <!-- Menu Body -->

             <!-- Menu Footer-->
             <li class="user-footer">
              <a href="logout.php" class="btn btn-default btn-block btn-flat float-right">Keluar</a>
            </li>
          </ul>
        </li>

      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <?php  
  if (!isset($_GET['halaman'])) 
  {
    include 'dashboard.php';
  }
  else
  {
    if ($_GET['halaman']=="dashboard") 
    {
      include 'dashboard.php';
    }
    elseif ($_GET['halaman']=="kategori") 
    {
      include 'kategori/list.php';
    }
    elseif ($_GET['halaman']=="tambahkategori") 
    {
      include 'kategori/add.php';
    }
    elseif ($_GET['halaman']=="ubahkategori") 
    {
      include 'kategori/edit.php';
    }
    elseif ($_GET['halaman']=="hapuskategori") 
    {
      include 'kategori/delete.php';
    }
    elseif ($_GET['halaman']=="jenis") 
    {
      include 'jenis/list.php';
    }
    elseif ($_GET['halaman']=="tambahjenis") 
    {
      include 'jenis/add.php';
    }
    elseif ($_GET['halaman']=="ubahjenis") 
    {
      include 'jenis/edit.php';
    }
    elseif ($_GET['halaman']=="hapusjenis") 
    {
      include 'jenis/delete.php';
    }
    elseif ($_GET['halaman']=="paket") 
    {
      include 'paket/list.php';
    }
    elseif ($_GET['halaman']=="tambahpaket") 
    {
      include 'paket/add.php';
    }
    elseif ($_GET['halaman']=="ubahpaket") 
    {
      include 'paket/edit.php';
    }
    elseif ($_GET['halaman']=="hapuspaket") 
    {
      include 'paket/delete.php';
    }
    elseif ($_GET['halaman']=="pelanggan") 
    {
      include 'pelanggan/list.php';
    }
    elseif ($_GET['halaman']=="hapuspelanggan") 
    {
      include 'pelanggan/delete.php';
    }
    elseif ($_GET['halaman']=="user") 
    {
      include 'user/list.php';
    }
    elseif ($_GET['halaman']=="tambahuser") 
    {
      include 'user/add.php';
    }
    elseif ($_GET['halaman']=="ubahuser") 
    {
      include 'user/edit.php';
    }
    elseif ($_GET['halaman']=="hapususer") 
    {
      include 'user/delete.php';
    }
    elseif ($_GET['halaman']=="mobil") 
    {
      include 'mobil/list.php';
    }
    elseif ($_GET['halaman']=="tambahmobil") 
    {
      include 'mobil/add.php';
    }
    elseif ($_GET['halaman']=="ubahmobil") 
    {
      include 'mobil/edit.php';
    }
    elseif ($_GET['halaman']=="hapusmobil") 
    {
      include 'mobil/delete.php';
    }
    elseif ($_GET['halaman']=="liburan") 
    {
      include 'liburan/list.php';
    }
    elseif ($_GET['halaman']=="detail_liburan") 
    {
      include 'liburan/detail.php';
    }
    elseif ($_GET['halaman']=="pembayaran") 
    {
      include 'liburan/pembayaran.php';
    }
    elseif ($_GET['halaman']=="konfirmasi") 
    {
      include 'liburan/konfirmasi.php';
    }
    elseif ($_GET['halaman']=="rental") 
    {
      include 'rental/list.php';
    }
    elseif ($_GET['halaman']=="detail_r") 
    {
      include 'rental/detail.php';
    }
    elseif ($_GET['halaman']=="pembayaran_r") 
    {
      include 'rental/pembayaran.php';
    }
    elseif ($_GET['halaman']=="konfirmasi_r") 
    {
      include 'rental/konfirmasi.php';
    }
    elseif ($_GET['halaman']=="laporan") 
    {
      include 'laporan/list.php';
    }
    elseif ($_GET['halaman']=="instansi") 
    {
      include 'pengaturan/instansi.php';
    }
    elseif ($_GET['halaman']=="profil") 
    {
      include 'pengaturan/profil.php';
    }
    elseif ($_GET['halaman']=="ubahpassword") 
    {
      include 'pengaturan/ubah_password.php';
    }
    elseif ($_GET['halaman']=="saran") 
    {
      include 'saran/list.php';
    }
    elseif ($_GET['halaman']=="bank") 
    {
      include 'bank/list.php';
    }

    elseif ($_GET['halaman']=="ubahbank") 
    {
      include 'bank/edit.php';
    }

    elseif ($_GET['halaman']=="tambahbank") 
    {
      include 'bank/add.php';
    }

    elseif ($_GET['halaman']=="hapusbank") 
    {
      include 'bank/delete.php';
    }
  }
  ?>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!--  <script src="dist/js/demo.js"></script> -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
