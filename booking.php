<?php  
include 'config/class.php';
if (isset($_SESSION['pelanggan'])) 
{
	$id_paket = $_GET['id'];
	$data = $paket->detail($id_paket);
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
			
			
			

			<div id="fh5co-contact" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3>Booking</h3>
							<p>ACALA BROMO</p>
						</div>
						<div class="col-md-6">
							<img class="img-thumbnail" width="400" src="img-paket/<?= $data['foto'] ?>" alt="">
						</div>
						<div class="col-md-6">
							<?php if (empty($_GET['jumlah'])): ?>
								<form method="post">
									<div class="form-group">
										<label for="">Tanggal</label>
										<input type="date" name="tanggal" class="form-control" required>
									</div>
									<div class="form-group">
										<label for="">Paket</label>
										<input type="text" class="form-control" value="<?= $data['nm_paket'] ?> | Rp. <?= $data['harga'] ?>" readonly>
										<input type="hidden" name="id_paket" class="form-control" value="<?= $data['id_paket'] ?>" required>
									</div>
									<div class="form-group">
										<label for="">Jumlah Wisatawan</label>
										<input type="text" name="jumlah" class="form-control" placeholder="Isi jumlah" required="">
									</div>
									<button name="checkout" class="btn btn-primary btn-block">Checkout</button>
								</form>
								<?php  
								if (isset($_POST['checkout'])) 
								{
									$id_paket = $_POST['id_paket'];
									$jumlah = $_POST['jumlah'];
									if ($jumlah < 50) 
									{
										echo "<script>alert('Jumlah wisatawan minimal 50 orang!');</script>";
										echo "<script>location='booking.php?id=$id_paket';</script>";
									}
									else
									{
										$id_booking = $transaksi->checkout($_POST['tanggal'],$_POST['id_paket'],$_POST['jumlah']);
										echo "<script>alert('Checkout berhasil!');</script>";
										echo "<script>location='deadline.php?id=$id_booking';</script>";
									}
								}
								?>
								<?php else: ?>

									<form method="post">
										<div class="form-group">
											<label for="">Tanggal</label>
											<input type="date" name="tanggal" class="form-control" required>
										</div>
										<div class="form-group">
											<label for="">Paket</label>
											<input type="text" class="form-control" value="<?= $data['nm_paket'] ?> | Rp. <?= $data['harga'] ?> Org" readonly>
											<input type="hidden" name="id_paket" class="form-control" value="<?= $data['id_paket'] ?>" required>
										</div>
										<div class="form-group">
											<label for="">Jumlah Wisatawan</label>
											<input type="number" name="jumlah" class="form-control" value="<?= $data['jumlah'] ?>" required>
										</div>
										<button name="checkout2" class="btn btn-primary btn-block">Checkout</button>
									</form>
									<?php  
									 if (isset($_POST['checkout2'])) 
									 {
										$id_paket = $_POST['id_paket'];
										$jumlah = $_POST['jumlah'];
										$jml = $_GET['jumlah'];
									//	if ($jumlah < 50) 
									// 	{
									// 		echo "<script>alert('Jumlah wisatawan minimal 50 orang!');</script>";
									// 		echo "<script>location='booking.php?id=$id_paket&jumlah=$jml;</script>";
									// 	}
										//else
										//{
											$id_booking = $transaksi->checkout($_POST['tanggal'],$_POST['id_paket'],$_POST['jumlah']);
									 		echo "<script>alert('Checkout berhasil!');</script>";
									 		echo "<script>location='deadline.php?id=$id_booking';</script>";
									// 	}
									}
									?>
								<?php endif ?>

							</div>
							<div class="col-md-12"><br>
								<div class="card">
									<div class="card-body">
										<p>
											Keterangan :

										</p>
										<p>Kategori : <?= $data['nm_kategori'] ?></p>
										<p>Harga : <?= $data['harga'] ?></p>
										<p>Paket : <?= $data['nm_paket'] ?></p>
										<p>Destinasi : <?= $data['destinasi'] ?></p>
										<p>Fasilitas : <?= $data['fasilitas'] ?></p>
										<p>Deskripsi : <?= $data['deskripsi'] ?></p>
									</div>
								</div>
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

