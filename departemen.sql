-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 09:53 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorin`
--

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_departemen` varchar(4) NOT NULL,
  `nama_departemen` varchar(50) NOT NULL,
  `id_fakultas` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `nama_departemen`, `id_fakultas`) VALUES
('A1', 'Manajemen Sumberdaya Lahan', 'A'),
('A2', 'Agronomi dan Hortikultura', 'A'),
('A3', 'Proteksi Tanaman', 'A'),
('A4', 'Arsitektur Lansekap', 'A'),
('B0', 'Kedokteran Hewan', 'B'),
('C1', 'Teknologi & Manajemen Perikanan Budidaya', 'C'),
('C2', 'Manajemen Sumberdaya Perairan', 'C'),
('C3', 'Teknologi Hasil Perairan', 'C'),
('C4', 'Teknologi & Manajemen Perikanan Tangkap', 'C'),
('C5', 'Ilmu Teknologi Kelautan', 'C'),
('D1', 'Teknologi Produksi Ternak', 'D'),
('D2', 'Nutrisi dan Teknologi Pakan', 'D'),
('D3', 'Teknologi Hasil Ternak', 'D'),
('E1', 'Manajemen Hutan', 'E'),
('E2', 'Teknologi Hasil Hutan', 'E'),
('E3', 'Konservasi Sumberdaya Hutan & Ekowisata', 'E'),
('E4', 'Silvikultur', 'E'),
('F1', 'Teknik Pertanian dan Biosistem', 'F'),
('F2', 'Teknologi Pangan', 'F'),
('F3', 'Teknologi Industri Pertanian', 'F'),
('F4', 'Teknik Sipil dan Lingkungan', 'F'),
('G1', 'Statistika', 'G'),
('G2', 'Geofisika dan Meteorologi', 'G'),
('G3', 'Biologi', 'G'),
('G4', 'Kimia', 'G'),
('G5', 'Matematika', 'G'),
('G6', 'Ilmu Komputer', 'G'),
('G7', 'Fisika', 'G'),
('G8', 'Biokimia', 'G'),
('G9', 'Aktuaria', 'G'),
('H1', 'Ekonomi Pembangunan', 'H'),
('H2', 'Manajemen', 'H'),
('H3', 'Agribisnis', 'H'),
('H4', 'Ekonomi Sumberdaya dan Lingkungan ', 'H'),
('H5', 'Ekonomi Syariah', 'H'),
('I1', 'Ilmu Gizi', 'I'),
('I2', 'Ilmu Keluarga dan Konsumen', 'I'),
('I3', 'Komunikasi dan Pengembangan Masyarakat', 'I'),
('K1', 'Bisnis', 'K'),
('PPKU', 'Program Pendidikan Kompetisi Umum', 'P');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`),
  ADD UNIQUE KEY `id_departemen` (`id_departemen`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
