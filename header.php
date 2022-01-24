<header id="fh5co-header-section" class="sticky-banner">
 <div class="container">
  <div class="nav-header">
   <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
   <h1 id="fh5co-logo" style="font-size: 20px;"><a href="./"><i class="icon-airplane"></i>ACALA BROMO</a></h1>
   <!-- START #fh5co-menu-wrap -->
   <nav id="fh5co-menu-wrap" role="navigation">
    <ul class="sf-menu" id="fh5co-primary-menu">
     <li class="active"><a href="./">Home</a></li>
     <li><a href="paket.php">Paket Wisata</a></li>
     <!-- <li><a href="mobil.php">Kalender Jadwal</a></li> -->
     <li><a href="tentang.php">Tentang</a></li>
     <!--  <li><a href="sewa_mobil.php">Sewa Mobil</a></li> -->
     <li><a href="kontak.php">Kontak</a></li>
     <li><a href="saran.php">Kritik & Saran</a></li>
     <?php if (isset($_SESSION['pelanggan'])): ?>
       <li><a href="member.php?page=profil"><?= $_SESSION['pelanggan']['nama_pelanggan'] ?></a></li>
       <?php else: ?>
         <li><a href="login.php" class="btn btn-primary">Login</a></li>
       <?php endif ?>
     </ul>
   </nav>
 </div>
</div>
</header>