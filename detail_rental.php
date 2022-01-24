<?php  
include 'config/class.php';
if (isset($_SESSION['pelanggan'])) 
{
	$mulai = $_GET['mulai'];
	$selesai = $_GET['selesai'];
	$jumlah = $_GET['jumlah'];
	$id_mobil = $_GET['id'];
	$data1 = $rental->cek2($mulai,$selesai,$jumlah,$id_mobil);
	$m = new DateTime($mulai);
	$s = new DateTime($selesai);
	$data = $mobil->detail($id_mobil);
	$hari = $s->diff($m)->days;
	$detail = $pelanggan->detail($_SESSION['pelanggan']['id_pelanggan']);
	if (empty($detail['foto_ktp'])) 
	{
		echo "<script>alert('Lengkapi data Anda!');</script>";
		echo "<script>location='member.php';</script>";
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
			<div id="fh5co-contact" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3>RENTAL MOBIL</h3>
							<p>S2 TRANS TRAVEL ACALA</p>
						</div>
						<div class="col-md-4">
							<img class="img-thumbnail" width="400" src="img-mobil/<?= $data['foto_mobil'] ?>" alt="">
						</div>
						<div class="col-md-8">
							<form method="post">
								<div class="row">
									<div class="form-group col-md-6">
										<label for="">Tanggal Mulai</label>
										<input type="date" name="mulai" class="form-control" value="<?= $mulai ?>" readonly>
									</div>
									<div class="form-group col-md-6">
										<label for="">Tanggal Selesai</label>
										<input type="date" name="selesai" class="form-control" value="<?= $selesai ?>" readonly>
									</div>
									<div class="form-group col-md-4">
										<label for="">Jumlah</label>
										<input type="number" name="jumlah" class="form-control" value="<?= $jumlah ?>" readonly>
									</div>
									<div class="form-group col-md-4">
										<label for="">Jumlah Hari</label>
										<input type="number" name="hari" class="form-control" value="<?= $hari ?>" readonly>
									</div>
									<div class="form-group col-md-4">
										<label for="">Total</label>
										<input type="number" name="total" class="form-control" value="<?= $jumlah*$data['harga_mobil']*$hari ?>" readonly>
									</div>
								</div>
								
								<button name="checkout2" class="btn btn-primary btn-block">Checkout</button>
							</form>
							<?php  
							if (isset($_POST['checkout2'])) 
							{
								$id_rental = $rental->checkout($_POST['mulai'],$_POST['selesai'],$_POST['jumlah'],$_POST['hari'],$_POST['total'],$id_mobil);
								echo "<script>alert('Checkout berhasil!');</script>";
								echo "<script>location='deadline_rental.php?id=$id_rental';</script>";
							}
							?>

						</div>
						<div class="col-md-12"><hr>
							<div class="panel">
								<div class="panel-default">
									<div class="panel-body">
										<h2><?= $data['nama_mobil'] ?></h2>
										<h4>Jenis : <?= $data1['jenis'] ?></h4>
										<h4>Kursi Mobil : <?= $data['kursi_mobil'] ?></h4>
										<h4>Rp. <?= number_format($data['harga_mobil']) ?> / Hari</h4>
										<h4>CC : <?= $data['cc_mobil'] ?></h4>
										<h4>Tahun : <?= $data['tahun_mobil'] ?></h4>
										<h4>Stok Mobil: <?= $data1['stok'] ?></h4>
										<h4>Ketentuan Mobil:</h4>
										<h4><?= $data['ketentuan_mobil'] ?></h4>
									</div>
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

