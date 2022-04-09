-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 03:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `cakor`
--

CREATE TABLE `cakor` (
  `id_ckr` int(12) NOT NULL,
  `nu_ckr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cakor`
--

INSERT INTO `cakor` (`id_ckr`, `nu_ckr`) VALUES
(73, 'CAKOR 1'),
(74, 'CAKOR 2'),
(75, 'CAKOR 3');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_idt` int(12) NOT NULL,
  `id_ckr` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `slogan` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `vm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_idt`, `id_ckr`, `nama`, `slogan`, `foto`, `vm`) VALUES
(26, 73, 'Assyifa Khalif S.Kom', 'BEBAS TUNTAS DALAM PERLAWANAN BAGI YANG DI TINGGAL ORMAWA	', 'CAKOR 1.jpeg', 'VISI : MENJADIKAN UNSIKA GERBANG UTAMA PERLAWANAN \r\nMISI : MEWUJUDKAN MAHASISWA KRITIS AKTIF DAN AGRESIF DALAM PENINDASAN PENGUASA'),
(27, 74, 'Annisa Rahma Putri', 'RENDAHKAN HATIMU, DAN PILIH AKU SEBAGAI CAKOR MU', 'CAKOR 2.jpg', 'Visi : MENCIPTAKAN SUASANA AKTIF PADA RUANG LINGKUNGAN INTROVERT \r\nMisi : MENGURANGI PEMAKAIAN FITUR SILENT MODE PADA INTROVERT PEOPLE'),
(28, 75, 'Irna Purnahasanah	', 'USAHAMU PENENTU KEPUSINGANMU	', 'CAKOR 3.jpeg', 'Visi : MENJADI GARDA TERDEPAN SEBAGAI PELOPOR LITERASI \r\nMisi : MENJADIKAN MAHAHASISWA YANG TELITI TENANG DALAM MEMBACA TUGAS DOSEN & ASDOS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','writer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(13, 'nisa', 'nisa', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin'),
(15, 'rahma', 'rahma', '7c222fb2927d828af22f592134e8932480637c0d', 'writer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cakor`
--
ALTER TABLE `cakor`
  ADD PRIMARY KEY (`id_ckr`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_idt`),
  ADD KEY `id_ktg` (`id_ckr`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakor`
--
ALTER TABLE `cakor`
  MODIFY `id_ckr` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_idt` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `identitas`
--
ALTER TABLE `identitas`
  ADD CONSTRAINT `identitas_ibfk_1` FOREIGN KEY (`id_ckr`) REFERENCES `cakor` (`id_ckr`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
