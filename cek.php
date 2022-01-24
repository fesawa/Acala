<?php  
include 'config/class.php';
if (isset($_SESSION['pelanggan'])) 
{
	$mulai = $_GET['mulai'];
	$selesai = $_GET['selesai'];
	$jumlah = $_GET['jumlah'];
	$data = $rental->cek($mulai,$selesai,$jumlah);
	$detail = $pelanggan->detail($_SESSION['pelanggan']['id_pelanggan']);
	if (empty($detail['foto_ktp'])) 
	{
		echo "<script>alert('Lengkapi data Anda!');</script>";
		echo "<script>location='member.php?page=profil';</script>";
	}

}
else
{
	echo "<script>alert('Anda harus login!');</script>";
	echo "<script>location='login.php';</script>";
}
?>
<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>S2 TRANS TRAVEL KARAWANG</title>
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
			
			
			

			<div id="fh5co-contact" class="fh5co-section-gray">
				<div class="container">
					<?php if (empty($data)): ?>
						<div class="panel">
							<div class="panel-default">
								<div class="panel-body">
									<center>
										<h4>Maaf, Mobil untuk tanggal <?= $mulai ?> s/d <?= $selesai ?> dan jumlah mobil <?= $jumlah ?> tidak ditemukan</h4>
									</center>
								</div>
							</div>
						</div>
					<?php else: ?>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
								<h3>RENTAL MOBIL</h3>
								<p>S2 TRANS TRAVEL KARAWANG</p>
							</div>
							<?php foreach ($data as $key => $value): ?>
								<?php if (empty($data)): ?>
								<?php else: ?>
									<div class="col-md-12">
										<a href="detail_rental.php?mulai=<?= $mulai ?>&selesai=<?= $selesai ?>&id=<?= $value['id_mobil'] ?>&jumlah=<?= $jumlah ?>">
											<div class="panel">
												<div class="panel-default">
													<div class="panel-body">
														<div class="row">
															<div class="col-md-6">
																<img class="img-thumbnail" width="400" src="img-mobil/<?= $value['foto_mobil'] ?>" alt="">
															</div>
															<div class="col-md-6 animate-box">
																<div class="car">
																	<div class="one-4">
																		<h3><?= $value['nama_mobil'] ?></h3>
																		<span class="price"><?= number_format($value['harga_mobil']) ?><small> / Hari</small></span>
																		<p style="color: #000; margin-top: 15px;">CC : <?= $value['cc_mobil'] ?></p>
																		<p style="color: #000; margin-top: 15px;">Tahun : <?= $value['tahun_mobil'] ?></p>
																		<p style="color: #000; margin-top: 15px;">Stok : <?= $value['stok'] ?></p>
																	</div>
																	<div class="one-1" style="background-image: url(img-mobil/<?= $value['foto_mobil']?>);">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
								<?php endif ?>
								
							<?php endforeach ?>



						</div>
					<?php endif ?>

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

