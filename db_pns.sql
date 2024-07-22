-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2024 at 01:16 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pns`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pwd` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `username`, `pwd`) VALUES
(1, 'Gilang Ramadhan', 'ADMGILANG', 'ADMGILANG'),
(2, 'Indra Kusumawati', 'ADMWATI', 'ADMWATI'),
(3, 'Rega Wilan Pratama', 'ADMREGA', 'ADMREGA'),
(4, 'Tan, Kezia Sherafim', 'ADMZIA', 'ADMZIA'),
(5, 'Tomara Indra Jaya', 'ADMTOM', 'ADMTOM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_pns`
--

CREATE TABLE `tb_data_pns` (
  `nomor` int NOT NULL,
  `nama` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nip` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pangkat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gol_pns` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `bdg_studi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pnd_terakhir` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_data_pns`
--

INSERT INTO `tb_data_pns` (`nomor`, `nama`, `nip`, `tgl_lahir`, `pangkat`, `gol_pns`, `bdg_studi`, `alamat`, `pnd_terakhir`, `no_hp`, `gambar`) VALUES
(31, 'Drs. HULMAN SIBARANI, M.S', '195710111981031021', '1957-10-11', 'Pembina(IV)', 'A', 'Fisika', 'Deli Serdang, Sumatera Utara, Indonesia', 'S1', '085223656168', 'man1.jpg'),
(32, 'Dra. GRISPIN', '196412041990012005', '1964-12-04', 'Penata(III)', 'D', 'Biologi', 'Semarang, Jawa Tengah, Indonesia', 'S1', '082935468125', 'woman1.jpg'),
(33, 'Dra. HOTNIDA', '196409011932017005', '1964-09-01', 'Pengatur(II)', 'B', 'Kimia', 'Bekasi, Jakarta, Indonesia', 'S1', '085669987789', 'woman2.jpg'),
(34, 'Gilang Ramadhan', '15619495', '2024-07-03', 'Pembina(IV)', 'E', 'Matematika', 'Semarang, Indonesia', 'S3', '082221456963', 'man2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `id_golongan` int NOT NULL,
  `nama_golongan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_golongan`
--

INSERT INTO `tb_golongan` (`id_golongan`, `nama_golongan`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pangkat`
--

CREATE TABLE `tb_pangkat` (
  `id_pangkat` int NOT NULL,
  `nama_pangkat` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pangkat`
--

INSERT INTO `tb_pangkat` (`id_pangkat`, `nama_pangkat`) VALUES
(1, 'Juru(I)'),
(2, 'Pengatur(II)'),
(3, 'Penata(III)'),
(4, 'Pembina(IV)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_data_pns`
--
ALTER TABLE `tb_data_pns`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `tb_pangkat`
--
ALTER TABLE `tb_pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data_pns`
--
ALTER TABLE `tb_data_pns`
  MODIFY `nomor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `id_golongan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pangkat`
--
ALTER TABLE `tb_pangkat`
  MODIFY `id_pangkat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
