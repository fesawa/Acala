<?php  
include 'config/class.php';
$id_booking = $_GET['id'];
$detail = $transaksi->detail($id_booking);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Deadline</title>
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
			
			
			

			<div id="fh5co-contact" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<?php if ($detail['status']=="Pending"): ?>
									<h3>DEADLINE PEMBAYARAN</h3>
								<?php else: ?>
									<h3>DETAIL PESANAN</h3>
								<?php endif ?>
								<p>ACALA BROMO</p>
							</div>
							<div class="col-md-12">
								<?php if ($detail['status']=="Pending"): ?>
									<h4 class="text-center">Selesaikan Pembayaran Sebelum <?= $detail['deadline']?> WIB</h4>
									<?php else: ?>
									<?php endif ?>
									<table class="table table-bordered">
										<tr>
											<th width="30%">Nama</th>
											<th width="5%">:</th>
											<th><?= $detail['nama_pelanggan'] ?></th>
										</tr>
										<tr>
											<th>Email</th>
											<th>:</th>
											<th><?= $detail['email_pelanggan'] ?></th>
										</tr>
										<tr>
											<th>Telepon</th>
											<th>:</th>
											<th><?= $detail['telepon_pelanggan'] ?></th>
										</tr>
										<tr>
											<th>Alamat</th>
											<th>:</th>
											<th><?= $detail['alamat_pelanggan'] ?></th>
										</tr>
										<tr>
											<th colspan="3" class="text-center">Pesanan</th>

										</tr>
										<tr>
											<th>Paket</th>
											<th>:</th>
											<th><?= $detail['nm_paket'] ?> - Rp. <?= $detail['harga'] ?> Org</th>
										</tr>
										<tr>
											<th>Tanggal Keberangkatan</th>
											<th>:</th>
											<th><?= $detail['tanggal'] ?></th>
										</tr>
										<tr>
											<th>Jumlah</th>
											<th>:</th>
											<th><?= $detail['jumlah'] ?> Org</th>
										</tr>
										<tr>
											<th>Total Tagihan</th>
											<th>:</th>
											<th>Rp. <?= $detail['total'] ?></th>
										</tr>
										<tr>
											<th>Status</th>
											<th>:</th>
											<th><?= $detail['status'] ?></th>
										</tr>
									</table>
									<?php if ($detail['status']=="Pending"): ?>
										<center><a href="member.php?page=pembayaran&id=<?= $id_booking ?>" class="btn btn-primary"> Bayar Sekarang!</a></center>
										<?php else: ?>
											<center><a href="member.php?page=pesanan_saya&id=<?= $id_booking ?>" class="btn btn-primary">Riwayat Pesanan</a> </center>
										<?php endif ?>
									</div>
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

