-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 06:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsk09`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nia` varchar(9) NOT NULL DEFAULT '',
  `nama` varchar(20) NOT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `level` enum('Master-admin','Admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nia`, `nama`, `telepon`, `email`, `password`, `level`) VALUES
('ADM171201', 'Sayangku', '085617287712', 'ariftrian@gmail.com', 'admin123', 'Master-admin');

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `nin` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `rt` int(1) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `saldo` int(8) DEFAULT NULL,
  `sampah` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`nin`, `nama`, `rt`, `alamat`, `telepon`, `email`, `password`, `saldo`, `sampah`) VALUES
('NSB1712001', 'Ihsmi ', 2, 'Jl. murai 8, C.45/4', '085617287718', 'ihsmiica@gmail.com', 'user123', 0, 0),
('NSB1712002', 'Sabrina  ', 4, 'Jl. murai 8, C.45/4', '085617287718', 'sabrina123@gmail.com', '12345678', 0, 0),
('NSB2405003', 'helo', 2, 'seweww', '123456789012', 'engwkq@gmail.com', '123456', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sampah`
--

CREATE TABLE `sampah` (
  `jenis_sampah` varchar(15) NOT NULL,
  `satuan` enum('KG','PC','LT') NOT NULL,
  `harga` int(5) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `deskripsi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sampah`
--

INSERT INTO `sampah` (`jenis_sampah`, `satuan`, `harga`, `gambar`, `deskripsi`) VALUES
('HVS', 'KG', 9000, 'hvs.png', 'Semua Jenis HVS'),
('kaleng', 'KG', 3000, 'Pocari_Sweat_Kaleng_Dus_ISI_24.jpg', 'semua jenis kaleng'),
('Kardus', 'KG', 8000, 'kardus.jpg', 'Semua Jenis Kardus');

-- --------------------------------------------------------

--
-- Table structure for table `setor`
--

CREATE TABLE `setor` (
  `id_setor` int(5) NOT NULL,
  `tanggal_setor` date NOT NULL,
  `nin` varchar(10) NOT NULL,
  `jenis_sampah` varchar(15) NOT NULL,
  `berat` int(4) NOT NULL,
  `harga` int(6) NOT NULL,
  `total` int(8) NOT NULL,
  `nia` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tarik`
--

CREATE TABLE `tarik` (
  `id_tarik` int(3) NOT NULL,
  `tanggal_tarik` date NOT NULL,
  `nin` varchar(10) NOT NULL,
  `saldo` int(7) NOT NULL,
  `jumlah_tarik` int(7) NOT NULL,
  `nia` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nia`);

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`nin`);

--
-- Indexes for table `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`jenis_sampah`);

--
-- Indexes for table `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id_setor`),
  ADD KEY `nin` (`nin`),
  ADD KEY `nia` (`nia`),
  ADD KEY `jenis_sampah` (`jenis_sampah`);

--
-- Indexes for table `tarik`
--
ALTER TABLE `tarik`
  ADD PRIMARY KEY (`id_tarik`),
  ADD UNIQUE KEY `nin` (`nin`),
  ADD KEY `nia` (`nia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `setor`
--
ALTER TABLE `setor`
  MODIFY `id_setor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tarik`
--
ALTER TABLE `tarik`
  MODIFY `id_tarik` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `setor`
--
ALTER TABLE `setor`
  ADD CONSTRAINT `setor_ibfk_1` FOREIGN KEY (`nin`) REFERENCES `nasabah` (`nin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `setor_ibfk_2` FOREIGN KEY (`nia`) REFERENCES `admin` (`nia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `setor_ibfk_3` FOREIGN KEY (`jenis_sampah`) REFERENCES `sampah` (`jenis_sampah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tarik`
--
ALTER TABLE `tarik`
  ADD CONSTRAINT `tarik_ibfk_1` FOREIGN KEY (`nin`) REFERENCES `nasabah` (`nin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tarik_ibfk_2` FOREIGN KEY (`nia`) REFERENCES `admin` (`nia`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
