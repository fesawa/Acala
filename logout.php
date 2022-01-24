<?php  
include 'config/class.php';
if (isset($_SESSION['pelanggan'])) 
{
	unset($_SESSION['pelanggan']);
}
echo "<script>alert('Berhasil logout!');</script>";
echo "<script>location='index.php?halaman=login.php';</script>";
?>