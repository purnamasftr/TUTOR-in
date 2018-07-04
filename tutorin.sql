-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 11:07 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_tutor`, `id_matakuliah`, `harga`, `created_at`, `updated_at`) VALUES
(1, 2, 'IPB100', '10000', '2018-06-22 12:42:15', '2018-06-26 03:52:52'),
(2, 2, 'KOM101', '20000', '2018-06-22 07:52:13', '2018-06-22 07:52:13'),
(6, 1, 'STK211', '5', '2018-06-23 02:05:09', '0000-00-00 00:00:00'),
(8, 2, 'IPB102', '3', '2018-06-23 00:43:39', '2018-06-23 00:43:39'),
(10, 2, 'BIO100', '12', '2018-06-23 00:47:51', '2018-06-23 00:47:51'),
(15, 2, 'IPB108', '22', '2018-06-23 09:16:52', '2018-06-23 09:16:52'),
(17, 2, 'FIS100', '20000', '2018-06-23 10:21:33', '2018-06-23 10:21:33'),
(19, 8, 'KOM209', '40.000', '2018-06-27 06:32:58', '2018-06-27 06:32:58'),
(20, 8, 'IPB100', '100.000', '2018-06-27 07:02:07', '2018-06-27 07:02:07'),
(22, 10, 'IPB107', '67.000', '2018-06-28 01:10:23', '2018-06-28 01:10:23'),
(23, 10, 'KOM101', '45.000', '2018-06-28 01:11:41', '2018-06-28 01:11:41'),
(24, 14, 'TMB211', '60.000', '2018-07-03 06:32:40', '2018-07-03 06:32:40'),
(25, 14, 'HHT231', '45.000', '2018-07-03 06:32:54', '2018-07-03 06:32:54'),
(26, 14, 'NTP211', '37.000', '2018-07-03 06:33:12', '2018-07-03 06:33:12');

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

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(12) NOT NULL,
  `id_kelas` int(12) NOT NULL,
  `id_siswa` int(12) NOT NULL,
  `id_tutor` int(12) NOT NULL,
  `pesan` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `id_kelas`, `id_siswa`, `id_tutor`, `pesan`, `status`, `created_at`, `updated_at`) VALUES
(1, 19, 7, 8, 'sss', 4, '2018-06-27 19:07:10', '2018-06-27 12:07:10'),
(2, 18, 7, 8, 'bisain', 3, '2018-06-28 01:30:38', '2018-06-27 18:30:38'),
(3, 20, 7, 8, 'attahiyaat', 3, '2018-06-27 19:52:30', '2018-06-27 12:52:30'),
(4, 15, 7, 2, 'hello miss', 4, '2018-06-28 01:18:49', '2018-06-27 18:18:49'),
(5, 18, 11, 8, 'Kak inget aku ga', 3, '2018-07-03 11:29:30', '2018-07-03 04:29:30'),
(6, 24, 11, 14, 'halo kakak ganteng', 1, '2018-07-04 02:05:08', '2018-07-04 02:05:08');

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
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatars/user.jpg',
  `fakultas` text COLLATE utf8mb4_unicode_ci,
  `departemen` text COLLATE utf8mb4_unicode_ci,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `tentang` text COLLATE utf8mb4_unicode_ci,
  `jadwal` text COLLATE utf8mb4_unicode_ci,
  `pengalaman` text COLLATE utf8mb4_unicode_ci,
  `riwayat` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `type`, `jk`, `telp`, `alamat`, `picture`, `fakultas`, `departemen`, `bio`, `tentang`, `jadwal`, `pengalaman`, `riwayat`) VALUES
(2, 'Melati Aulia Putri', 'melati@gmail.com', '$2y$10$3xB1dmfdaDuF9ememdZETOzpEIoZvg1S1zG7bYx/S3W05n7WM.o/e', 'eqmDDqz0ASap9qvLUAsX20FGvlbMGYSGhi0rP6JqQM1MZFhRmAwaZEZVTs4x', '2018-05-02 04:51:23', '2018-06-26 03:46:05', 2, 'Perempuan', '08192813213', 'Perwira', 'avatars/user.jpg', 'P', 'PPKU', 'aku melaaa', 'haiiiiiiiiiii', NULL, NULL, NULL),
(3, 'Piped Ratnaputri', 'piped97@yahoo.com', '$2y$10$6T7rVR7K4EClswKo5IlMJ.teScDLy2wyHB022pyGfpFC1wZloE20K', 'IurXNb5G42mN2EctYvpytIdF1S4GoNAFDUdSN0bect09OSX32jsbdWvha8Qm', '2018-05-04 03:51:01', '2018-05-04 03:51:01', 1, '', '0', '', 'avatars/user.jpg', '', '', '', NULL, NULL, NULL, NULL),
(4, 'Ratna Riskasari', 'ratnajunior@gmail.com', '$2y$10$7kBXHcgPs0eEHSIt6z6ivuKLZNGXpR5iqPVO1acnSfsclcpEfIu0K', 'jnENDNiknbPt1RhR2pHCvGcIgDmXDjF8fQ7MpMqnPrQAjkCX36O47R0VPyh6', '2018-05-04 03:51:51', '2018-05-04 03:51:51', 2, '', '0', '', 'avatars/user.jpg', '', '', '', NULL, NULL, NULL, NULL),
(5, 'Wiandrini Anindita', 'wawdita@gmail.com', '$2y$10$ufmekE8D4iLPTdzKhFjlzud780MOONVDQusgayNQx7qvjN4JuI9om', 'G1GIxREkn2nzbLGyoCee37YG0nk3JCVUyemfMSfTkrd9I32rOa6BA7KKVrO7', '2018-06-26 02:44:18', '2018-06-26 02:58:34', 2, 'Perempuan', '08118728376', 'Russia', 'avatars/user.jpg', 'G', 'G6', 'hahahahhaaha', 'Saya tidak tahu.', NULL, NULL, NULL),
(6, 'Kania West', 'kania@gmail.com', '$2y$10$SyJU8CBhgFai2Mu89NdQ5OU3tkfW6BRHC7YFDspwXG/ik5xP24zre', '75tWi9yJbvfwnPbfQSyjuLIDzVzrFyOTeHm5pOva4U9WkUVT6fPaJ8pQRXfy', '2018-06-26 03:03:55', '2018-06-26 03:10:12', 1, 'Perempuan', '081868263283', 'Dramaga Cantique', 'avatars/user.jpg', 'G', 'G6', NULL, NULL, NULL, NULL, NULL),
(7, 'Melinda', 'meloli@gmail.com', '$2y$10$.TIUmSN5yCz7UdWBZtrcs.1iV6kidbrw1VQnGjVSRC.bPFwmDiukK', 'jk3UGIlEncqRXoeOYdyBX0GEqCokQIwT9QRAGNJEr0VWAfQXIzevXr8Mh9pB', '2018-06-27 00:17:03', '2018-06-27 21:38:47', 1, 'Perempuan', '081924356783', 'Badoneng', 'avatars/ONrcpJj43JIw47G8uRwoDdXNhyl9mA4eXgpWmiLL.png', 'E', 'E4', NULL, NULL, NULL, NULL, NULL),
(8, 'Aisyah Jamilah', 'melolitutor@gmail.com', '$2y$10$nzQlQjHqV6f.ylkXZVW2JOox0.UYatlGad5fxPbxhBLfF1cU4R21u', '8VViFh7ZUDtKpUUUYOg7bXNf8s17mA6jFDeXavmKjiLWI1dzNiCJoZjT35Xp', '2018-06-27 01:02:23', '2018-07-03 02:34:08', 2, 'Perempuan', '089876543526', 'Asrama Putri A1', 'avatars/C0ij3RJy2me38IfJntupRw34rRTdWAeS39QQrslM.jpeg', 'H', 'H5', 'Ayo mengaji', 'Saya senang berdakwah', NULL, 'Mentoring Alhurriyah', 'Pesantren Sukabumi'),
(9, 'guagua', 'gua@gmail.com', '$2y$10$5CR421VWrZ6uKEFbB3f.V.i12kKO16bWacyB78H7YNnrMe3lhUR0O', 'n4PcihOr5zb83WU1CL3ssuQtSxZGkn8VAyb4CV0YiAS7P0P4Q9DvhvsP0kQs', '2018-06-27 13:59:41', '2018-06-27 13:59:41', 1, NULL, NULL, NULL, 'avatars/user.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Yudha Prasetya', 'yudha@gmail.com', '$2y$10$jFynnZ254O4wB4aCGC4Lu..QE63t.ONaQuDE1jzgs5iE/Lv2qYgDG', 'gZvKKHKWQ3aVmiJiib95YEbxU8H0lk5AOz1lPtNIUshkBwNkkqXMvYcsEFS5', '2018-06-28 01:04:59', '2018-06-28 01:08:26', 2, 'Laki-laki', '087654321987', 'Dramaga Cantik', 'avatars/R5JrrqhCt3dKqoqPkB8pXUvFLdgFHNrSKngW9pmn.jpeg', 'F', 'F4', 'Alhamdulilah', 'Ya Rasulullah', NULL, 'Panitia Logstran', 'SMA Tangerang'),
(11, 'Alia Nurul Zakrie', 'alia@gmail.com', '$2y$10$XzLwC0Uu2SjFu0yxiBB3EOuQ646qFhG.KMvl6BDbetxjrQVgFbzDO', '8WRwTeq8Q0AXq1pqK65OM4pXJRd8zl8E8LUnTWOmxgoJISELxLrvDiqZLN7p', '2018-07-03 00:54:57', '2018-07-04 02:06:31', 1, 'Perempuan', '087653428713', 'Dramaga Cantik no 5', 'avatars/yTli9ThyQH7DbcC4Kgd7xy2IxmhfFuMky2sA6wiU.png', 'F', 'F3', NULL, NULL, NULL, NULL, NULL),
(12, 'purnama', 'purnama@gmail.com', '$2y$10$jZP3V9LbJFr3bzXr/n2XbOhQCMkt2l50KHRP0rU9qnMUEzh.ZqSQ2', 'orxlMecwrL4vrHR6r46SflfjxGLxnklf5mn2jP8HJbznw3GLIFeRQGdtsGqA', '2018-07-03 02:14:16', '2018-07-03 02:14:47', 1, NULL, NULL, NULL, 'avatars/user.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Ali Yahmi', 'aliyahmi@gmail.com', '$2y$10$vnx50lMGcWA1R2.Meg2zauQkx6KHgXpW4VaeUK8ngTSoR4n2WpEZy', 'J6rJ8YaEGswydZuKBUdQmZeMjodpd5Jo5EBpEG7UtzVC43UBDaMyJY2UjePn', '2018-07-03 04:35:17', '2018-07-03 04:35:17', 1, NULL, NULL, NULL, 'avatars/user.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Dio Anugrah', 'dio@gmail.com', '$2y$10$JPYXju/9q18rP8Tijne4ROgutay4xKfnNEfEF01D7G51ufG//NsUq', 'hw3cY8cM7hxQrDT2UbcWBiCIs1PUSG6FGpGTdPdEoG2amxBpyhgWeKGAukSV', '2018-07-03 06:31:42', '2018-07-04 01:12:12', 2, 'Laki-laki', '089876543526', 'Bara 5', 'avatars/C1gbqp4KqKK8C7Oq6qq1QnvLjhYncy9tXEuJIIbh.jpeg', 'F', 'F1', 'Cinta kedamaian', 'Bisa benerin mesin, motor', '- Senin : 18.00-23.00', 'PJK MPKMB 52', 'SMA 2 Blitar');

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
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_kelas` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
