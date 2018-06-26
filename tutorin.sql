-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 01:50 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `admin_name` varchar(10) NOT NULL,
  `admin_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('', '', ''),
('G1', 'Statistika', 'G'),
('G2', 'Geofisika dan Meteorologi', 'G'),
('G3', 'Biologi', 'G'),
('G4', 'Kimia', 'G'),
('G5', 'Matematika', 'G'),
('G6', 'Ilmu Komputer', 'G'),
('G7', 'Fisika', 'G'),
('G8', 'Biokimia', 'G'),
('PPKU', 'Program Pendidikan Kompetisi Umum', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` varchar(2) NOT NULL,
  `nama_fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
('A', 'Fakultas Pertanian'),
('B', 'Fakultas Kedokteran Hewan'),
('A', 'Fakultas Pertanian'),
('B', 'Fakultas Kedokteran Hewan'),
('C', 'Fakultas Perikanan'),
('D', 'Fakultas Peternakan'),
('E', 'Fakultas Kehutanan'),
('F', 'Fakultas Teknik Pertanian'),
('G', 'Fakultas Matematika dan Ilmu Pengetahuan Alam'),
('H', 'Fakultas Ekonomi dan Manajemen'),
('I', 'Fakultas Ekologi Manusia'),
('J', 'D3/Vokasi'),
('K', 'Sekolah Bisnis'),
('C', 'Fakultas Perikanan'),
('D', 'Fakultas Peternakan'),
('E', 'Fakultas Kehutanan'),
('F', 'Fakultas Teknik Pertanian'),
('G', 'Fakultas Matematika dan Ilmu Pengetahuan Alam'),
('H', 'Fakultas Ekonomi dan Manajemen'),
('I', 'Fakultas Ekologi Manusia'),
('J', 'D3/Vokasi'),
('K', 'Sekolah Bisnis'),
('P', 'PPKU'),
('P', 'PPKU');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(12) NOT NULL,
  `id_tutor` int(11) NOT NULL,
  `id_matakuliah` varchar(12) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `ket` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_tutor`, `id_matakuliah`, `harga`, `ket`, `created_at`, `updated_at`) VALUES
(1, 2, 'IPB100', '10000', 'huehue', '2018-06-22 12:42:15', '2018-06-26 03:52:52'),
(2, 2, 'KOM101', '20000', NULL, '2018-06-22 07:52:13', '2018-06-22 07:52:13'),
(6, 1, 'STK211', '5', '1', '2018-06-23 02:05:09', '0000-00-00 00:00:00'),
(8, 2, 'IPB102', '3', NULL, '2018-06-23 00:43:39', '2018-06-23 00:43:39'),
(10, 2, 'BIO100', '12', NULL, '2018-06-23 00:47:51', '2018-06-23 00:47:51'),
(15, 2, 'IPB108', '22', NULL, '2018-06-23 09:16:52', '2018-06-23 09:16:52'),
(17, 2, 'FIS100', '20000', 'hahaha', '2018-06-23 10:21:33', '2018-06-23 10:21:33');

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
('AGB100', 'Pengantar Kewirausahaan', 'P', 'PPKU'),
('BIO100', 'Biologi', 'P', 'PPKU'),
('BIO101', 'Biologi Umum', 'P', 'PPKU'),
('EKO100', 'Ekonomi Umum', 'P', 'PPKU'),
('FIS100', 'Fisika', 'P', 'PPKU'),
('FIS101', 'Fisika Dasar I', 'P', 'PPKU'),
('FIS103', 'Fisika Umum', 'P', 'PPKU'),
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
('KIM100', 'Kimia Umum', 'P', 'PPKU'),
('KIM101', 'Kimia', 'P', 'PPKU'),
('KIM102', 'Kimia Dasar I', 'P', 'PPKU'),
('KOM101', 'Algoritme', 'G', 'G6'),
('KOM209', 'Struktur Diskret', 'G', 'G6'),
('KPM130', 'Sosiologi Umum', 'P', 'PPKU'),
('MAT100', 'Pengantar Matematika', 'P', 'PPKU'),
('MAT101', 'Landasan Matematika', 'P', 'PPKU'),
('MAT103', 'Kalkulus', 'P', 'PPKU'),
('MAT113', 'Kalkulus IA', 'P', 'PPKU'),
('STK202', 'Pengantar Hitung Peluang', 'G', 'G1'),
('STK211', 'Metode Statistika', 'G', 'G1');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_kelas` int(12) NOT NULL,
  `id_siswa` int(12) NOT NULL,
  `id_tutor` int(12) NOT NULL,
  `pesan` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_user_siswa` int(12) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `email_siswa` int(50) NOT NULL,
  `password_siswa` int(15) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `fakultas_siswa` text NOT NULL,
  `jurusan_siswa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id_user_tutor` int(12) NOT NULL,
  `nama_tutor` varchar(50) NOT NULL,
  `email_tutor` varchar(50) NOT NULL,
  `password_tutor` varchar(15) NOT NULL,
  `alamat_tutor` text NOT NULL,
  `fakultas_tutor` text NOT NULL,
  `jurusan_tutor` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id_user_tutor`, `nama_tutor`, `email_tutor`, `password_tutor`, `alamat_tutor`, `fakultas_tutor`, `jurusan_tutor`, `created_at`, `updated_at`) VALUES
(4, 'Melati Syahrini', 'incesmela@gmail.com', 'melati', 'Kos Ibu Wati', 'Fakultas Perikanan', 'MOBA', '2018-04-21 09:30:49', '2018-04-23 02:52:01'),
(5, 'Melia Deby', 'meliadeb@gmail.com', 'hahaha', 'aldkjsaldj', 'FEMA', 'SKPM', '2018-04-25 05:53:41', '2018-04-25 05:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(1) NOT NULL,
  `jk` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `fakultas` text COLLATE utf8mb4_unicode_ci,
  `departemen` text COLLATE utf8mb4_unicode_ci,
  `picture` text COLLATE utf8mb4_unicode_ci,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `tentang` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `type`, `jk`, `telp`, `alamat`, `fakultas`, `departemen`, `picture`, `bio`, `tentang`) VALUES
(2, 'Melati Aulia Putri', 'melati@gmail.com', '$2y$10$3xB1dmfdaDuF9ememdZETOzpEIoZvg1S1zG7bYx/S3W05n7WM.o/e', 'lzHtyD69hgytPTifEiD4CnS7UDHEFE1LqadmTAAZkiqslDAfMfCtzEik5UrM', '2018-05-02 04:51:23', '2018-06-26 03:46:05', 2, 'Perempuan', '08192813213', 'Perwira', 'P', 'PPKU', '', 'aku melaaa', 'haiiiiiiiiiii'),
(3, 'Piped Ratnaputri', 'piped97@yahoo.com', '$2y$10$6T7rVR7K4EClswKo5IlMJ.teScDLy2wyHB022pyGfpFC1wZloE20K', 'IurXNb5G42mN2EctYvpytIdF1S4GoNAFDUdSN0bect09OSX32jsbdWvha8Qm', '2018-05-04 03:51:01', '2018-05-04 03:51:01', 1, '', '0', '', '', '', '', '', NULL),
(4, 'Ratna Riskasari', 'ratnajunior@gmail.com', '$2y$10$7kBXHcgPs0eEHSIt6z6ivuKLZNGXpR5iqPVO1acnSfsclcpEfIu0K', 'jnENDNiknbPt1RhR2pHCvGcIgDmXDjF8fQ7MpMqnPrQAjkCX36O47R0VPyh6', '2018-05-04 03:51:51', '2018-05-04 03:51:51', 2, '', '0', '', '', '', '', '', NULL),
(5, 'Wiandrini Anindita', 'wawdita@gmail.com', '$2y$10$ufmekE8D4iLPTdzKhFjlzud780MOONVDQusgayNQx7qvjN4JuI9om', 'G1GIxREkn2nzbLGyoCee37YG0nk3JCVUyemfMSfTkrd9I32rOa6BA7KKVrO7', '2018-06-26 02:44:18', '2018-06-26 02:58:34', 2, 'Perempuan', '08118728376', 'Russia', 'G', 'G6', NULL, 'hahahahhaaha', 'Saya tidak tahu.'),
(6, 'Kania West', 'kania@gmail.com', '$2y$10$SyJU8CBhgFai2Mu89NdQ5OU3tkfW6BRHC7YFDspwXG/ik5xP24zre', '383ygTRubBLY2LYHiU7ufVnzM2hHMwYtDEgJiXBk96SyNcuggtPn03VRUDBs', '2018-06-26 03:03:55', '2018-06-26 03:10:12', 1, 'Perempuan', '081868263283', 'Dramaga Cantique', 'G', 'G6', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`),
  ADD UNIQUE KEY `id_departemen` (`id_departemen`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_matakuliah`),
  ADD UNIQUE KEY `id_matakuliah` (`id_matakuliah`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_user_siswa`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD UNIQUE KEY `id_user_tutor` (`id_user_tutor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_user_siswa` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
