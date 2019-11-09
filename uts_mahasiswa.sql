-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Nov 2019 pada 07.14
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_mhs` int(50) NOT NULL,
  `nim` int(50) NOT NULL,
  `no_hp_lama` varchar(50) NOT NULL,
  `no_hp_baru` varchar(50) NOT NULL,
  `tgl_ubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_mhs`, `nim`, `no_hp_lama`, `no_hp_baru`, `tgl_ubah`) VALUES
(1, 1612400004, '89666666', '89123456', '2019-10-29 13:07:48'),
(2, 1612400012, '8912123', '999999', '2019-10-29 13:09:08'),
(3, 2147483647, '2147483647', '2147483647', '2019-11-01 19:18:55'),
(4, 2147483647, '2147483647', '2147483647', '2019-11-01 19:18:57'),
(5, 2147483647, '0', '1324567652', '2019-11-01 19:19:12'),
(6, 2147483647, '2147483647', '2147483647', '2019-11-07 13:05:35'),
(7, 2147483647, '2147483647', '2147483647', '2019-11-07 13:05:52'),
(8, 13245678, '3232', '2147483647', '2019-11-09 12:07:06'),
(9, 2147483647, '2147483647', '99999999', '2019-11-09 12:12:07'),
(10, 2147483647, '99999999', '81234321', '2019-11-09 12:12:41'),
(11, 2147483647, '081234321', '09999999', '2019-11-09 12:14:33'),
(12, 2147483647, '09999999', '08212112345', '2019-11-09 12:15:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `id_mhs` int(15) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `jns_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `alamat_lengkap` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`id_mhs`, `nim`, `nama_mhs`, `jns_kelamin`, `alamat_lengkap`, `no_hp`) VALUES
(26, '161240000438', 'Umam Kari', 'Laki-Laki', 'Kepok, Bangsri', '08112345678'),
(28, '161240000491', 'Shihab Kafibaih', 'Laki-Laki', 'Bulungan, Jepara', '08212112345');

--
-- Trigger `mhs`
--
DELIMITER $$
CREATE TRIGGER `no_hp_update` BEFORE UPDATE ON `mhs` FOR EACH ROW INSERT INTO log
SET nim = old.nim,
no_hp_lama = old.no_hp,
no_hp_baru = new.no_hp,
tgl_ubah = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil`
--
CREATE TABLE `tampil` (
`id_mhs` int(15)
,`nim` varchar(20)
,`nama_mhs` varchar(100)
,`jns_kelamin` enum('Laki-Laki','Perempuan','','')
,`alamat_lengkap` varchar(100)
,`no_hp` varchar(20)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `tampil`
--
DROP TABLE IF EXISTS `tampil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil`  AS  (select `mhs`.`id_mhs` AS `id_mhs`,`mhs`.`nim` AS `nim`,`mhs`.`nama_mhs` AS `nama_mhs`,`mhs`.`jns_kelamin` AS `jns_kelamin`,`mhs`.`alamat_lengkap` AS `alamat_lengkap`,`mhs`.`no_hp` AS `no_hp` from `mhs`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_mhs` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id_mhs` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
