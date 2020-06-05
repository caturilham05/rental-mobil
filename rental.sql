-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 05:27 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya`
--

CREATE TABLE `biaya` (
  `id_biaya` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `driver` varchar(15) NOT NULL,
  `denda` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biaya`
--

INSERT INTO `biaya` (`id_biaya`, `keterangan`, `driver`, `denda`) VALUES
(1, 'Dengan Supir', '10000', 1500),
(2, 'Tanpa Supir', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembayaran`
--

CREATE TABLE `detail_pembayaran` (
  `id_pembayaran` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `via_pembayaran` enum('BRI','BCA','BNI') NOT NULL,
  `total_pembayaran` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengembalian`
--

CREATE TABLE `detail_pengembalian` (
  `id_pengembalian` int(8) NOT NULL,
  `id_sewa` int(8) NOT NULL,
  `kode_sewa` varchar(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `nama_lengkap_user` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `keterlambatan` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_sewa_mobil`
--

CREATE TABLE `detail_sewa_mobil` (
  `id_detail_sewa` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_sewa` int(8) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_biaya` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `waktu_pengambilan` enum('09:00 AM','10:00 AM','11:00 AM','12:00 PM','01:00 PM','02:00 PM','03:00 PM') NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `durasi_sewa` enum('1 hari','2 hari','3 hari','lebih 3 hari') NOT NULL,
  `harga` double NOT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `status` enum('menunggu pembayaran','menunggu konfirmasi','pembayaran terkonfirmasi','batal','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_sewa_mobil`
--

INSERT INTO `detail_sewa_mobil` (`id_detail_sewa`, `name`, `id_sewa`, `id_mobil`, `id_biaya`, `lokasi`, `waktu_pengambilan`, `email`, `telepon`, `durasi_sewa`, `harga`, `bukti`, `status`) VALUES
(40, 'Anita Firdaus', 74, 28, 1, 'Semarang', '12:00 PM', 'daus@gmail.com', '43738475394785', '1 hari', 1000000, NULL, 'menunggu pembayaran'),
(41, 'catur ilham junior', 75, 22, 1, 'semarang', '11:00 AM', 'junior@gmail.com', '089648197626', '1 hari', 200000, 'Bukti-Pembayaran-200531-ba191a9b00.jpg', 'menunggu konfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `mitra_id` int(11) NOT NULL,
  `name_mitra` varchar(50) NOT NULL,
  `username_mitra` varchar(50) NOT NULL,
  `password_mitra` varchar(50) NOT NULL,
  `email_mitra` varchar(50) NOT NULL,
  `level_mitra` enum('mitra') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`mitra_id`, `name_mitra`, `username_mitra`, `password_mitra`, `email_mitra`, `level_mitra`) VALUES
(1, 'Junior asolole', 'junior', '9009337cf16333f07109b593405cf7552ed8059a', 'jupri@gmail.com', 'mitra'),
(2, 'bodong senior', 'bodong', '848daeb61f5e761767532476251216d9d742965e', 'bodong@gmail.com', 'mitra');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `nopol` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `bahanbakar` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `AC` enum('1','0') NOT NULL,
  `doorlock` enum('1','0') NOT NULL,
  `antilockbrakingsystem` enum('1','0') NOT NULL,
  `brakeassist` enum('1','0') NOT NULL,
  `powersteering` enum('1','0') NOT NULL,
  `driveairbag` enum('1','0') NOT NULL,
  `passengerairbag` enum('1','0') NOT NULL,
  `powerwindows` enum('1','0') NOT NULL,
  `cdplayer` enum('1','0') NOT NULL,
  `centrallocking` enum('1','0') NOT NULL,
  `crashsensor` enum('1','0') NOT NULL,
  `leatherseats` enum('1','0') NOT NULL,
  `added` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nama_mobil`, `merek`, `nopol`, `harga`, `bahanbakar`, `tahun`, `deskripsi`, `gambar`, `AC`, `doorlock`, `antilockbrakingsystem`, `brakeassist`, `powersteering`, `driveairbag`, `passengerairbag`, `powerwindows`, `cdplayer`, `centrallocking`, `crashsensor`, `leatherseats`, `added`) VALUES
(22, 'Terios', 'Daihatsu', 'K 3333 BB', 200000, 'Minyak', '2015', 'sadnsdksjsdk asdbjkasdd sdkasdkjbasd ksd akjsdb', 'mobil-200517-1a90eadda6.jpg', '1', '0', '1', '1', '1', '0', '0', '1', '1', '0', '0', '0', '2020-05-17 15:17:45'),
(23, 'Mobil Kodok', 'Kodok', 'K 9292 KA', 500000, 'Avtur', '2040', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo facilis ipsum amet? Voluptas, hic voluptates porro dolorem voluptatibus quae aliquid ratione quis sequi excepturi. Perferendis, unde ipsam. Illo, eligendi similique.', 'mobil-200517-8dc060d6b0.jpg', '1', '1', '1', '1', '0', '0', '0', '1', '1', '1', '1', '1', '2020-05-17 15:34:51'),
(28, 'Honda Freed', 'Honda', 'K 1234 KK', 1000000, 'Bensin', '2040', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, temporibus pariatur beatae deleniti aliquid unde qui ad fugit animi repellendus earum, nostrum amet eveniet. Labore magni temporibus ab voluptate ducimus!', 'mobil-200520-f8117af427.jpg', '1', '1', '1', '1', '1', '0', '0', '0', '1', '1', '1', '1', '2020-05-20 22:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(8) NOT NULL,
  `kode_pembayaran` varchar(8) DEFAULT NULL,
  `tgl_pembayaran` date NOT NULL,
  `via_pembayaran` enum('BRI','BCA','BNI') NOT NULL,
  `total_pembayaran` double NOT NULL,
  `bukti_pembayaran` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(8) NOT NULL,
  `nama_lengkap_user` varchar(50) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `keterlambatan` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sewa_mobil`
--

CREATE TABLE `sewa_mobil` (
  `id_sewa` int(8) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `kode_sewa` varchar(8) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewa_mobil`
--

INSERT INTO `sewa_mobil` (`id_sewa`, `id_mobil`, `kode_sewa`, `tgl_sewa`, `tgl_kembali`) VALUES
(74, 28, '53711581', '2020-06-01', '2020-06-01'),
(75, 22, '5a48c35f', '2020-06-01', '2020-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `password`, `email`, `gender`, `telepon`, `address`, `level`) VALUES
(1, 'Catur Ilham', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'ilham@gmail.com', 'L', '098978799979', 'kudus jateng', 'admin'),
(6, 'catur ilham junior', 'caturilham', '9280d1ed020ca6217f00bd974fd4aafd6680260a', 'caturilham05@gmail.com', 'L', '089648197626', 'Kudus', 'user'),
(9, 'gana junior', 'gana123', '0f53cd50c693a75bf16c222273a25c3216f2e89f', 'gana@gmail.com', 'L', '08899888', 'Kendal', 'user'),
(10, 'gana oke', 'gana11', 'ac343602b439f1b5985f7a04cb8434c82e1b997b', 'gana@gmail.com', 'L', '0888999', 'Kendal', 'user'),
(11, 'Anita Firdaus', 'dausinnaba', '3c852d58eabdf7c276829a3c81d72de968a9c26f', 'daus@gmail.com', 'P', '09898778', 'Tumpang Kudus', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `detail_pembayaran`
--
ALTER TABLE `detail_pembayaran`
  ADD KEY `id_pembayaran` (`id_pembayaran`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `detail_pengembalian`
--
ALTER TABLE `detail_pengembalian`
  ADD KEY `id_pengembalian` (`id_pengembalian`),
  ADD KEY `id_sewa` (`id_sewa`),
  ADD KEY `detail_pengembalian_ibfk_2` (`user_id`);

--
-- Indexes for table `detail_sewa_mobil`
--
ALTER TABLE `detail_sewa_mobil`
  ADD PRIMARY KEY (`id_detail_sewa`),
  ADD KEY `id_sewa` (`id_sewa`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_biaya` (`id_biaya`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`mitra_id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indexes for table `sewa_mobil`
--
ALTER TABLE `sewa_mobil`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `sewa_mobil_ibfk_1` (`id_mobil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biaya`
--
ALTER TABLE `biaya`
  MODIFY `id_biaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_sewa_mobil`
--
ALTER TABLE `detail_sewa_mobil`
  MODIFY `id_detail_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `mitra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sewa_mobil`
--
ALTER TABLE `sewa_mobil`
  MODIFY `id_sewa` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pembayaran`
--
ALTER TABLE `detail_pembayaran`
  ADD CONSTRAINT `detail_pembayaran_ibfk_1` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`);

--
-- Constraints for table `detail_pengembalian`
--
ALTER TABLE `detail_pengembalian`
  ADD CONSTRAINT `detail_pengembalian_ibfk_1` FOREIGN KEY (`id_pengembalian`) REFERENCES `pengembalian` (`id_pengembalian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
