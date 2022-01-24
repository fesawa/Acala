<?php  
include 'config/class.php';
$data = $paket->get_home();
$mobil = $mobil->get();
?>
<!DOCTYPE html>
<html class="no-js"> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ACALA BROMO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
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

      <div class="fh5co-hero">
       <div class="fh5co-overlay"></div>
       <div class="fh5co-cover" data-stellar-background-ratio="1" style="background-image: url(images/bromo.jpg);">
        <div class="desc">
         <div class="container">
          <div class="row">
           <div class="col-sm-6 col-md-6">
            <div class="tabulation animate-box">

              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                 <a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Paket Wisata</a>
               </li>
               <!-- <li role="presentation">
                <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Sewa Mobil</a>
              </li> -->
              
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="flights">
                <form  action="booking.php"  method="get">
                  <div class="row">
                    <div class="col-sm-12 mt">
                      <section>
                        <label for="class">Wisata :</label>
                        <select class="form-control" name="id" required="">
                          <option value="">- Pilih Wisata -</option>
                          <?php foreach ($data as $key => $value): ?>
                            <option value="<?= $value['id_paket'] ?>"><?= $value['nm_paket'] ?> | Rp. <?= number_format($value['harga']) ?> / Org</option>
                          <?php endforeach ?>
                        </select>
                      </section>
                    </div>
                    <div class="col-sm-12 col-xs-6 mt">
                      <section>
                        <label for="class">Jumlah Wisatawan:</label>
                        <input type="number" name="jumlah" class="form-control" placeholder="Cth : 50" required="">
                      </section>
                    </div>
                    <div class="col-xs-12">
                      <input type="submit" class="btn btn-primary btn-block" value="Submit">
                    </div>
                  </div>  
                </form>
              </div>

            </div>

          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

</div>

<div id="fh5co-tours" class="fh5co-section-gray">
 <div class="container">
  <div class="row">
   <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
    <h3>Paket Wisata</h3>
    <p>ACALA BROMO Menyediakan Berbagai pakat wisata.</p>
  </div>
</div>
<style>
.gambar
{
  width: 100%;
}
</style>
<div class="row">
  <?php foreach ($data as $key => $value): ?>
   <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
    <div href="#"><img src="img-paket/<?= $value['foto'] ?>" class="gambar">
     <div class="desc">
      <span></span>
      <h5 style="color: #fff;"><?= $value['nm_paket'] ?></h5>
      <span><?= $value['destinasi'] ?></span>
      <span style="color: #fff;">Rp. <?= number_format($value['harga']) ?> / Org</span>
      <a class="btn btn-primary btn-outline" href="booking.php?id=<?= $value['id_paket'] ?>">Booking <i class="icon-arrow-right22"></i></a>
    </div>
  </div>
</div>
<?php endforeach ?>
<div class="col-md-12 text-center animate-box">
  <p><a class="btn btn-primary btn-outline btn-lg" href="paket.php">Selengkapnya <i class="icon-arrow-right22"></i></a></p>
</div>
</div>
</div>
</div>

<!-- <div id="fh5co-features">
 <div class="container">
  <div class="row">
   <div class="col-md-4 animate-box">

    <div class="feature-left">
     <span class="icon">
      <i class="icon-hotairballoon"></i>
    </span>
    <div class="feature-copy">
      <h3>Family Travel</h3>
    </div>
  </div>

</div>

<div class="col-md-4 animate-box">
  <div class="feature-left">
   <span class="icon">
    <i class="icon-search"></i>
  </span>
  <div class="feature-copy">
    <h3>Travel Plans</h3>
  </div>
</div>
</div>
<div class="col-md-4 animate-box">
  <div class="feature-left">
   <span class="icon">
    <i class="icon-wallet"></i>
  </span>
  <div class="feature-copy">
    <h3>Honeymoon</h3>
  </div>
</div>
</div>
</div>
<div class="row">
 <div class="col-md-4 animate-box">

  <div class="feature-left">
   <span class="icon">
    <i class="icon-wine"></i>
  </span>
  <div class="feature-copy">
    <h3>Business Travel</h3>
  </div>
</div>

</div>

 <div class="col-md-4 animate-box">
  <div class="feature-left">
   <span class="icon">
    <i class="icon-genius"></i>
  </span>
  <div class="feature-copy">
    <h3>Solo Travel</h3>
  </div>
</div>

</div> -->
<!-- <div class="col-md-4 animate-box">
  <div class="feature-left">
   <span class="icon">
    <i class="icon-chat"></i>
  </span>
  <div class="feature-copy">
    <h3>Explorer</h3>
  </div> -->
</div>
</div>
</div>
</div>
</div>





<!-- fh5co-blog-section -->

<?php include 'footer.php'; ?>



</div>
<!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->


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

<!-- Main JS -->
<script src="js/main.js"></script>


</body>
</html>

