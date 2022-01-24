<?php  
include 'config/class.php';
if (isset($_SESSION['pelanggan'])) 
{
  $id_pelanggan = $_SESSION['pelanggan']['id_pelanggan'];
  $detail = $pelanggan->detail($id_pelanggan);
}
else
{
  echo "<script>alert('Anda harus login!');</script>";
  echo "<script>location='login.php';</script>";
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ACALA BROMO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />

  <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FREEHTML5.CO
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
-->

<!-- Facebook and Twitter integration -->
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

<!-- Animate.css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Superfish -->
<link rel="stylesheet" href="css/superfish.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="css/magnific-popup.css">
<!-- Date Picker -->
<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
<!-- CS Select -->
<link rel="stylesheet" href="css/cs-select.css">
<link rel="stylesheet" href="css/cs-skin-border.css">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
  <div id="fh5co-wrapper">
    <div id="fh5co-page">

      <?php include 'header.php'; ?>

      <!-- end:header-top -->




      <div id="fh5co-contact" class="fh5co-section-gray">
        <div class="container">
          <div class="panel">
            <div class="panel-default">
              <div class="panel-body">
               <ul class="nav nav-pills nav-justified">
                <li <?php if ($_GET['page']=='profil') {echo "class='active'";} ?>><a href="member.php?page=profil"><i class="fa fa-user-o"></i> Profil Saya</a></li>
                <li <?php if ($_GET['page']=='pesanan_saya' || $_GET['page']=='pembayaran') {echo "class='active'";} ?>><a href="member.php?page=pesanan_saya"><i class="fa fa-globe"></i> Riwayat Wisata</a></li>
               
                <li><a href="logout.php"><i class="fa fa-power-off"></i> Keluar</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">

          <?php  
          if (!isset($_GET['page'])) 
          {
            include 'profil.php';
          }
          else
          {
            if ($_GET['page']=="profil") 
            {
              include 'profil.php';
            }
            elseif ($_GET['page']=="pesanan_saya")
            {
              include 'pesanan_saya.php';
            }
            elseif ($_GET['page']=="pembayaran")
            {
              include 'pembayaran.php';
            }
              elseif ($_GET['page']=="rental")
            {
              include 'rental.php';
            }
            elseif ($_GET['page']=="pembayaran_r")
            {
              include 'pembayaran_r.php';
            }
          }
          ?>
        </div>
      </div>
    </div>

  </div>
  <!-- END map -->

  <?php include 'footer.php'; ?>



</div>
<!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ubah Profil</h4>
        <hr>
        <div class="alert alert-danger"><i class="fa fa-info-circle"></i> Kosongkan password jika tidak diubah!</div>
      </div>
      <form method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" value="<?= $detail['nama_pelanggan'] ?>" class="form-control" placeholder="Nama Lengkap" required="">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" value="<?= $detail['email_pelanggan'] ?>" class="form-control" placeholder="Email" required="">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="">Telepon</label>
            <input type="text" name="telepon" value="<?= $detail['telepon_pelanggan'] ?>" class="form-control" placeholder="Telepon" required="">
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" value="<?= $detail['alamat_pelanggan'] ?>" class="form-control" placeholder="Alamat" required="">
          </div>
          <div class="form-group">
            <label for="">Foto KTP</label>
            <input type="file" name="foto" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button name="simpan" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </form>
      <?php  
      if (isset($_POST['simpan'])) 
      {
        $pelanggan->edit($_POST['nama'],$_POST['email'],$_POST['password'],$_POST['telepon'],$_POST['alamat'],$_FILES['foto'],$id_pelanggan);
        echo "<script>alert('Profil berhasil diubah!');</script>";
        echo "<script>location='member.php?page=profil';</script>";
      }
      ?>
    </div>

  </div>
</div>


<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/sticky.js"></script>

<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="js/classie.js"></script>
<script src="js/selectFx.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="js/google_map.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>

</body>
</html>

