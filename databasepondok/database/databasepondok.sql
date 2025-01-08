-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 05:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasepondok`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_pondok`
--

CREATE TABLE `admin_pondok` (
  `admin_id` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telp_admin` varchar(20) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `address_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_pondok`
--

INSERT INTO `admin_pondok` (`admin_id`, `nama_admin`, `username`, `password`, `telp_admin`, `email_admin`, `address_admin`) VALUES
(1, 'Abdul Rohim', 'abdul', 'admin', '081268933543', 'abdulrohim100699@gmail.com', 'Jl. Khatib Sulaiman No 56 Koto Tuo Lima Kampung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` char(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `th_ajaran` varchar(9) NOT NULL,
  `prgm_pendidikan` varchar(50) NOT NULL,
  `nm_peserta` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `almt_peserta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `th_ajaran`, `prgm_pendidikan`, `nm_peserta`, `tmp_lahir`, `tgl_lahir`, `jk`, `almt_peserta`) VALUES
('P202300002', '2023-07-15', '2023/2024', 'Program Karantina Tahfizh Plus Intensif', 'Abdul', 'Bukittinggi', '1999-06-10', 'Laki-laki', 'Lima Kampung'),
('P202300005', '2023-07-21', '2023/2024', 'Program Karantina Tahfizh Plus Intensif', 'Muhammad Abdul Rohim', 'Bukittinggi', '1999-06-10', 'Laki-laki', 'Lima Kampung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_pondok`
--
ALTER TABLE `admin_pondok`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_pondok`
--
ALTER TABLE `admin_pondok`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
