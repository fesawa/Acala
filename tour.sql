-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 08:44 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `norek` int(11) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `norek`, `atas_nama`, `gambar`) VALUES
(1, 'BNI', 395019090, 'Aris Abdul Ajis', 'bni.png');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `deadline` datetime NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` enum('Pending','Lunas','Menunggu Konfirmasi','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id_pelanggan`, `id_paket`, `tanggal`, `deadline`, `jumlah`, `total`, `status`) VALUES
(4, 3, 2, '2021-07-20', '1970-01-02 07:33:41', 50, 12500000, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` int(11) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `pimpinan` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `pimpinan`, `telepon`, `alamat`) VALUES
(1, 'S2 TRANS KARAWANG', 'NAMA', '081290654727', 'Gg. H. Asa, Tempuran, Kabupaten Karawang, Jawa Barat 41385');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `tgl1` datetime NOT NULL,
  `tgl2` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_booking`, `tgl1`, `tgl2`) VALUES
(1, 4, '2021-07-20 10:02:39', '2021-07-20 10:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_mobil`
--

CREATE TABLE `jenis_mobil` (
  `id_jenis_mobil` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_mobil`
--

INSERT INTO `jenis_mobil` (`id_jenis_mobil`, `jenis`) VALUES
(1, 'SUV'),
(2, 'MVP');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`) VALUES
(1, 'ONE DAY MORE PACKAGE'),
(17, 'FULL DAY PACKAGE');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `id_jenis_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(50) NOT NULL,
  `kursi_mobil` varchar(10) NOT NULL,
  `tahun_mobil` varchar(10) NOT NULL,
  `cc_mobil` varchar(10) NOT NULL,
  `ketentuan_mobil` text NOT NULL,
  `harga_mobil` int(11) NOT NULL,
  `stok_mobil` int(11) NOT NULL,
  `foto_mobil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `id_jenis_mobil`, `nama_mobil`, `kursi_mobil`, `tahun_mobil`, `cc_mobil`, `ketentuan_mobil`, `harga_mobil`, `stok_mobil`, `foto_mobil`) VALUES
(3, 1, 'Fortuner', '7', '2017', 'detail_mob', 'Toyota Fortuner tersedia dalam pilihan mesin 12 Diesel dan 4 Petrol di Indonesia SUV baru dari Toyota hadir dalam 16 varian. Fortuner tersedia dengan transmisi Manual and Otomatis tergantung variannya. Fortuner adalah SUV 7 seater dengan panjang 4795 mm, lebar 1855 mm, wheelbase 2745 mm.', 1000000, 11, '2.jpg'),
(4, 1, 'Suzuki Grand Vitara', '6', '2008', '1995 cc', 'aaa', 700000, 6, '849dbcc6-ae52-4cdb-bd6d-0c47a20cc4d8_169.jpeg'),
(5, 1, 'Aris Abdul Ajis', '4', '2001', '1000', 'asdasdas', 15000, 2, 'Screenshot_1.png');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nm_paket` varchar(100) NOT NULL,
  `destinasi` varchar(150) NOT NULL,
  `fasilitas` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `id_kategori`, `nm_paket`, `destinasi`, `fasilitas`, `deskripsi`, `harga`, `foto`) VALUES
(1, 17, 'JOGJA – GUNUNG KIDUL (50 Orang)', 'Goa Pindul, Pantai Baron atau Pantai Indrayantil', 'Bis Jet Bus Reclining Seat 2-2, Makan 2x, Snack 1x, Air mineral, P3K, Banner wisata, Tour leader, Dokumentasi, Door prize, dan Tiket Masuk OW Utama', '-', 180000, '1.jpg'),
(2, 17, 'JOGJA – MAGELANG (50 Orang)', 'Candi Borobudur dan Taman Kyai Langgeng', 'Bis Jet Bus Reclining Seat 2-2, Makan 2x, Snack 1x, Air mineral, P3K, Banner wisata, Tour leader, Dokumentasi, Door prize, dan Tiket Masuk OW Utama', '', 250000, '2.jpg'),
(3, 17, 'JOGJA – KOPENG (50 Orang)', 'Taman Wisata Tanaman dan Buah Kopeng', 'Bis Jet Bus Reclining Seat 2-2, Makan 2x, Snack 1x, Air mineral, P3K, Banner wisata, Tour leader, Dokumentasi, Door prize, dan Tiket Masuk OW Utama', '-', 200000, '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email_pelanggan` varchar(30) NOT NULL,
  `password_pelanggan` text NOT NULL,
  `telepon_pelanggan` varchar(12) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `foto_ktp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email_pelanggan`, `password_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`, `foto_ktp`) VALUES
(2, 'Pelanggan', 'pelanggan@gmail.com', '597a445e77ecd913c415f2010823b7dc8095ec5c', '08981189598', 'Sekumpul', 'e-ktp-guohui-chen.jpg'),
(3, 'RASTAFARCODE', 'rastafarcode@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', '08981189598', '1', 'FAKE-KTP.jpg'),
(4, 'Suci Sri Wulandari', 'azisnurdiansyah70@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', '12', 'asd', ''),
(5, 'Aris Abdul Ajis', 'info@sera.sangopi.com', '356a192b7913b04c54574d18c28d46e6395428ab', '08981189598', 'Jl. Sekumpul', ''),
(6, 'Aris Abdul Ajis', 'aris@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', '089531290044', 'Jl. Sekumpul Gg. Purnama RT/RW 002/001 Kec. Martapura Kab. Banjar Kalimantan Selatan', 'FAKE-KTP.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_booking`, `jumlah`, `bukti`) VALUES
(2, 1, 12600000, 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_r`
--

CREATE TABLE `pembayaran_r` (
  `id_pembayaran_r` int(11) NOT NULL,
  `id_rental` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran_r`
--

INSERT INTO `pembayaran_r` (`id_pembayaran_r`, `id_rental`, `jumlah`, `bukti`) VALUES
(1, 1, 2000000, '37072707_3a053dda-4818-46a7-8418-59b8884dab39_600_563.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `deadline` datetime NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `hari` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `denda` int(11) NOT NULL,
  `terlambat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id_rental`, `id_pelanggan`, `id_mobil`, `tanggal`, `deadline`, `start`, `end`, `jumlah`, `hari`, `total`, `status`, `denda`, `terlambat`) VALUES
(1, 2, 3, '2021-01-12 23:59:24', '2021-01-13 23:59:24', '2021-01-14', '2021-01-16', 1, 2, 2000000, 'Lunas', 0, '0000-00-00'),
(2, 2, 2, '2021-01-21 23:19:42', '2021-01-22 23:19:42', '2021-01-22', '2021-01-23', 2, 1, 1600000, 'Pending', 0, '0000-00-00'),
(3, 3, 3, '2021-07-17 22:08:22', '2021-07-18 22:08:22', '2021-07-17', '2021-07-19', 1, 2, 2000000, 'Pending', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `nama`, `email`, `telepon`, `alamat`, `saran`) VALUES
(1, 'Suci Sri Wulandari', 'azisnurdiansyah70@gmail.com', '0189209812', 'Jl. Ukrim, Kadirojo I, Purwomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `telepon`, `alamat`, `level`) VALUES
(1, 'admin', '356a192b7913b04c54574d18c28d46e6395428ab', 'ADMINISTRATOR', '081294045252', 'Banjarmasin', 'Administrator'),
(4, 'aris', '356a192b7913b04c54574d18c28d46e6395428ab', 'Aris Abdul Ajis', '08981189598', 'Jl. KS Tubun', 'Pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `jenis_mobil`
--
ALTER TABLE `jenis_mobil`
  ADD PRIMARY KEY (`id_jenis_mobil`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `id_jenis_mobil` (`id_jenis_mobil`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_booking` (`id_booking`);

--
-- Indexes for table `pembayaran_r`
--
ALTER TABLE `pembayaran_r`
  ADD PRIMARY KEY (`id_pembayaran_r`),
  ADD KEY `id_rental` (`id_rental`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_mobil`
--
ALTER TABLE `jenis_mobil`
  MODIFY `id_jenis_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran_r`
--
ALTER TABLE `pembayaran_r`
  MODIFY `id_pembayaran_r` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
