-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 02:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis-pemetaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(225) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `no_telpon` varchar(225) DEFAULT NULL,
  `latitude` varchar(225) DEFAULT NULL,
  `longitude` varchar(225) DEFAULT NULL,
  `kondisi_sekolah` varchar(225) DEFAULT NULL,
  `luas_bangunan` varchar(225) DEFAULT NULL,
  `jumlah_siswa` varchar(225) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`id_sekolah`, `nama_sekolah`, `alamat`, `no_telpon`, `latitude`, `longitude`, `kondisi_sekolah`, `luas_bangunan`, `jumlah_siswa`, `keterangan`) VALUES
(3, 'MAN 2 Model', 'Jl.Patimura', '0783672', '0.5104712662594086', '101.45288236800285', 'Baik', '1242', '124566', 'Sekolah Favorite'),
(4, 'SMPN 4', 'Jl hangtuah', '0972871', '0.5259630718092752', '101.45582195972028', 'Baik', '187291', '34533', 'Baik'),
(5, 'SMA Plus', 'Jln Kubang Raya', '3982', '0.4882848761483431', '101.45401502617634', 'baik', '13452', '145543', 'Sangat Baik'),
(6, 'afaf', 'afaf', 'sfwr242', '0.5142905791708248', '101.43505254751341', 'Baik', 'sve3r3', 'wfqwf', 'wefw'),
(7, 'asfdaf', 'afaf', '92892', '0.5160071235562094', '101.43093367435574', 'asscsc', '24242', 'e2e2', 'csca'),
(8, 'SMA 1 Pekanbaru', 'Jl. Sultan Syarif Qasim No.159, Rintis, Kec. Lima Puluh, Kota Pekanbaru, Riau 28156', '07826728', '0.4875124279590434', '101.4631956137631', 'Permanen', '134224', '874445', 'Sangat Baik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(225) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'asha', 'admin', 'admin'),
(2, 'shari', 'user', '12345'),
(3, 'ayu', 'ayu', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
