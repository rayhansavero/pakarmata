-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 06:47 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mata`
--

-- --------------------------------------------------------

--
-- Table structure for table `casebase`
--

CREATE TABLE `casebase` (
  `id_casebase` varchar(6) NOT NULL,
  `id_penyakit` varchar(6) NOT NULL,
  `id_gejala` varchar(6) NOT NULL,
  `gejala` varchar(30) DEFAULT NULL,
  `penyakit` varchar(20) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `casebase1`
--

CREATE TABLE `casebase1` (
  `No` int(11) NOT NULL,
  `id_pasien` varchar(3) NOT NULL,
  `g1` int(1) NOT NULL,
  `g2` int(1) NOT NULL,
  `g3` int(1) NOT NULL,
  `g4` int(1) NOT NULL,
  `g5` int(1) NOT NULL,
  `g6` int(1) NOT NULL,
  `g7` int(1) NOT NULL,
  `g8` int(1) NOT NULL,
  `g9` int(1) NOT NULL,
  `g10` int(1) NOT NULL,
  `g11` int(1) NOT NULL,
  `g12` int(1) NOT NULL,
  `g13` int(1) NOT NULL,
  `g14` int(1) NOT NULL,
  `g15` int(1) NOT NULL,
  `g16` int(1) NOT NULL,
  `g17` int(1) NOT NULL,
  `g18` int(1) NOT NULL,
  `g19` int(1) NOT NULL,
  `g20` int(1) NOT NULL,
  `g21` int(1) NOT NULL,
  `g22` int(1) NOT NULL,
  `g23` int(1) NOT NULL,
  `g24` int(1) NOT NULL,
  `g25` int(1) NOT NULL,
  `penyakit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_pasien` varchar(3) NOT NULL,
  `nm_pasien` varchar(30) DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL,
  `alamat_pasien` varchar(50) DEFAULT NULL,
  `umur` int(2) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `gejala_gejala` text,
  `hasil_diagnosa` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id_pasien`, `nm_pasien`, `jk`, `alamat_pasien`, `umur`, `pekerjaan`, `gejala_gejala`, `hasil_diagnosa`) VALUES
('P01', 'Ilham', 'Laki-laki', 'Jember', 21, 'Artis', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(6) NOT NULL,
  `nm_gejala` varchar(100) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nm_gejala`, `keterangan`) VALUES
('GEJ001', 'Mata Merah', NULL),
('GEJ002', 'Mata Berair', NULL),
('GEJ003', 'Mata Terasa Sakit dan Nyeri', NULL),
('GEJ004', 'Mata Seperti Kelilipan', NULL),
('GEJ005', 'Lengket di Pagi Hari', NULL),
('GEJ006', 'Mata Terasa Panas', NULL),
('GEJ007', 'Mata Gatal', NULL),
('GEJ008', 'Tidak Tahan Cahaya (fotopobia)', NULL),
('GEJ009', 'Mata Cepat Lelah', NULL),
('GEJ010', 'Penurunan Penglihatan', NULL),
('GEJ011', 'Terdapat Kotoran Mata', NULL),
('GEJ012', 'Kelopak mata (palpebra) Bengkak warna merah ungu', NULL),
('GEJ013', 'Kelopak Mata (palpelbra) Bengkak warna biru jingga', NULL),
('GEJ014', 'Bintik Kecil dikelopak Mata', NULL),
('GEJ015', 'Terdapat abses/kantong nanah', NULL),
('GEJ016', 'Bayangan Pelangi', NULL),
('GEJ017', 'Sakit Kepala', NULL),
('GEJ018', 'Anemia (kurang darah)', NULL),
('GEJ019', 'Bengkak Pada Meibon', NULL),
('GEJ020', 'Peradangan Mata', NULL),
('GEJ021', 'Penglihatan Kabur', NULL),
('GEJ022', 'Sering Memicingkan Mata', NULL),
('GEJ023', 'Pembengkakan di Kelopak Mata', NULL),
('GEJ024', 'Penglihatan ganda/double terhadap benda', NULL),
('GEJ025', 'Bulu Mata Rontok', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(3) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(6) NOT NULL,
  `nm_penyakit` varchar(20) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nm_penyakit`, `keterangan`) VALUES
('PEN001', 'Bleferitis', NULL),
('PEN002', 'Dakriosistitis', NULL),
('PEN003', 'Episkleitis', NULL),
('PEN004', 'Glaukoma', NULL),
('PEN005', 'Hordeolum', NULL),
('PEN006', 'Katarak', NULL),
('PEN007', 'Keratitis', NULL),
('PEN008', 'Konjungtivitis', NULL),
('PEN009', 'Miopi', NULL),
('PEN010', 'Skleritis', NULL),
('PEN011', 'Ulkus Kornea', NULL),
('PEN012', 'Uveitis', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casebase`
--
ALTER TABLE `casebase`
  ADD PRIMARY KEY (`id_casebase`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `casebase1`
--
ALTER TABLE `casebase1`
  ADD PRIMARY KEY (`No`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `casebase1`
--
ALTER TABLE `casebase1`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `casebase`
--
ALTER TABLE `casebase`
  ADD CONSTRAINT `casebase_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`),
  ADD CONSTRAINT `casebase_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
