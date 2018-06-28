-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 03:23 AM
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
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_matakuliah` varchar(8) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `id_fakultas` varchar(2) NOT NULL,
  `id_departemen` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_matakuliah`, `nama_matkul`, `id_fakultas`, `id_departemen`) VALUES
('', '', '', ''),
('AFF1', 'Anatomi Veteriner I', 'B', 'B0'),
('AGB100', 'Pengantar Kewirausahaan', 'P', 'PPKU'),
('AGB111', 'Dasar-Dasar Bisnis', 'H', 'H4'),
('AGH200', 'Dasar-Dasar Agronomi', 'A', 'A2'),
('AKT102', 'Pengantar Ilmu Aktuaria', 'G', 'G9'),
('ARL110', 'Menggambar Sketsa', 'A', 'A4'),
('BDP200', 'Dasar-Dasar Akuakultur', 'C', 'C1'),
('BIK204', 'Landasan Biokimia', 'G', 'G8'),
('BIO100', 'Biologi', 'P', 'PPKU'),
('BIO101', 'Biologi Umum', 'P', 'PPKU'),
('BIO200', 'Biologi Sel', 'G', 'G3'),
('EKO100', 'Ekonomi Umum', 'P', 'PPKU'),
('EKO215', 'Ekonomi Pembangunan I', 'H', 'H1'),
('EKS211', 'Filosofi Ekonomi Syariah', 'H', 'H2'),
('ESL332', 'Ekonomi Wisata', 'H', 'H5'),
('FIS100', 'Fisika', 'P', 'PPKU'),
('FIS101', 'Fisika Dasar I', 'P', 'PPKU'),
('FIS103', 'Fisika Umum', 'P', 'PPKU'),
('FIS217', 'Termodinamika', 'G', 'G7'),
('FPT101', 'Pengantar Ilmu Peternakan', 'D', 'D2'),
('GFM316', 'Analisis Meteorologi', 'G', 'G2'),
('GIZ112', 'Ilmu Gizi Dasar', 'I', 'I1'),
('HHT231', 'Mekanika Kayu', 'E', 'E2'),
('IKK233', 'Perilaku Konsumen', 'I', 'I2'),
('IPB100', 'Agama Islam', 'P', 'PPKU'),
('IPB101', 'Agama Kristen Protestan', 'P', 'PPKU'),
('IPB102', 'Agama Kristen Katolik', 'P', 'PPKU'),
('IPB103', 'Agama Hindu', 'P', 'PPKU'),
('IPB104', 'Agama Budha', 'P', 'PPKU'),
('IPB106', 'Bahasa Indonesia', 'P', 'PPKU'),
('IPB107', 'Pengantar Ilmu Pertanian', 'P', 'PPKU'),
('IPB108', 'Bahasa Inggris', 'P', 'PPKU'),
('IPB110', 'Agama Konghucu', 'P', 'PPKU'),
('IPB111', 'Pendidikan Pancasila', 'P', 'PPKU'),
('IPB112', 'Olahraga dan Seni', 'P', 'PPKU'),
('IPH223', 'Virologi Veteriner', 'B', 'B0'),
('ITK201', 'Oseanografi Umum', 'C', 'C5'),
('ITP210', 'Kimia Pangan', 'F', 'F2'),
('KIM100', 'Kimia Umum', 'P', 'PPKU'),
('KIM101', 'Kimia', 'P', 'PPKU'),
('KIM102', 'Kimia Dasar I', 'P', 'PPKU'),
('KIM222', 'Kimia Organik II', 'G', 'G4'),
('KOM101', 'Algoritme', 'G', 'G6'),
('KOM209', 'Struktur Diskret', 'G', 'G6'),
('KPM110', 'Dasar-dasar Komunikasi', 'I', 'I3'),
('KPM130', 'Sosiologi Umum', 'P', 'PPKU'),
('KSH332', 'Etnobiologi Hutan', 'E', 'E3'),
('MAN111', 'Pengantar Manajemen', 'H', 'H3'),
('MAT100', 'Pengantar Matematika', 'P', 'PPKU'),
('MAT101', 'Landasan Matematika', 'P', 'PPKU'),
('MAT103', 'Kalkulus', 'P', 'PPKU'),
('MAT113', 'Kalkulus IA', 'P', 'PPKU'),
('MAT115', 'Pengantar Logika Matematika', 'G', 'G5'),
('MNH323', 'Kehutanan Masyarakat', 'E', 'E1'),
('MSP221', 'Ekologi Perairan', 'C', 'C2'),
('NTP211', 'Pengetahuan Bahan Pakan', 'D', 'D3'),
('PSP212', 'Metode Penangkapan Ikan', 'C', 'C4'),
('PTN300', 'Karantina Tumbuhan', 'A', 'A3'),
('PTP101', 'Dasar Produksi Ternak', 'D', 'D1'),
('SBI205', 'Statistika Bisnis', 'K', 'K1'),
('SIL203', 'Gambar Teknik Konstruksi', 'F', 'F4'),
('STK202', 'Pengantar Hitung Peluang', 'G', 'G1'),
('STK211', 'Metode Statistika', 'G', 'G1'),
('SVK322', 'Silvikultur', 'E', 'E4'),
('THP313', 'Penanganan Hasil Perairan', 'C', 'C3'),
('TIN317', 'Teknik Optimasi', 'F', 'F3'),
('TMB211', 'Elemen Mesin', 'F', 'F1'),
('TSL120', 'Pengantar Kimia Tanah', 'A', 'A1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_matakuliah`),
  ADD UNIQUE KEY `id_matakuliah` (`id_matakuliah`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
