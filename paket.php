<?php  
include 'config/class.php';
$data = $paket->get();
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
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

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
<style>
  .fh5co-cover .desc h2
  {
    color: #fff;
  }
</style>
			<div class="fh5co-hero">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/bromo.jpg);">
					<div class="desc">
						<div class="container">
							<div class="row">
								<div class="col-sm-5 col-md-5">
            <div class="tabulation animate-box">

              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active" style="color: #fff;">
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
        <div class="desc2 animate-box">
         <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
          <h2>PAKET WISATA</h2>
          <!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</div>


<div id="fh5co-car" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Paket Wisata</h3>
				<p>ACALA BROMO Menyediakan Berbagai pakat wisata.</p>
			</div>
		</div>
		<div class="row row-bottom-padded-md">
			<?php foreach ($data as $key => $value): ?>
        <a href="booking.php?id=<?= $value['id_paket'] ?>">
          <div class="col-md-12 animate-box">
           <div class="car">
            <div class="one-4">
             <h3><?= $value['nm_paket'] ?></h3>
             <span class="price"><?= number_format($value['harga']) ?><small> / Org</small></span>
             <p style="color: #FFF; margin-top: 15px;">Kategori : <?= $value['nm_kategori'] ?></p>
             <p style="color: #FFF; margin-top: 15px;">Destinasi : <?= $value['destinasi'] ?></p>
             <p style="color: #FFF;">Fasilitas : <?= $value['fasilitas'] ?></p>
           </div>
           <div class="one-1" style="background-image: url(img-paket/<?= $value['foto']?>);">
           </div>
         </div>
       </div>
     </a>
   <?php endforeach ?>





 </div>
</div>
</div>

</div>
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

