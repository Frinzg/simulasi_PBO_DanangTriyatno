-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2026 at 02:47 AM
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
-- Database: `db_simulasi_pbo_trpl-1a_danangtriyatno`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` int NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` decimal(10,2) NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') NOT NULL,
  `pilihan_prodi` varchar(50) DEFAULT NULL,
  `lokasi_kampus` varchar(50) DEFAULT NULL,
  `jenis_prestasi` varchar(50) DEFAULT NULL,
  `tingkat_prestasi` varchar(30) DEFAULT NULL,
  `sk_ikatan_dinas` varchar(50) DEFAULT NULL,
  `instansi_sponsor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
(1, 'Rian Jombang', 'SMAN 1 Jombang', '82.40', '150000.00', 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(2, 'Siti Badriah', 'SMAN 1 Cikarang', '76.85', '155000.00', 'Reguler', 'Sistem Informasi', 'Kampus Merdeka', NULL, NULL, NULL, NULL),
(3, 'Tulus Severino', 'SMKN 3 Jakarta', '88.10', '160000.00', 'Reguler', 'Teknik Elektro', 'Kampus Utama', NULL, NULL, NULL, NULL),
(4, 'Isyana Sarasvati', 'SMAN 5 Bandung', '79.50', '150000.00', 'Reguler', 'Manajemen', 'Kampus Merdeka', NULL, NULL, NULL, NULL),
(5, 'Andmesh Kamaleng', 'SMAN 1 Kupang', '91.25', '175000.00', 'Reguler', 'Akuntansi', 'Kampus Utama', NULL, NULL, NULL, NULL),
(6, 'Marion Jola', 'SMAN 2 Kupang', '83.00', '155000.00', 'Reguler', 'Ilmu Komputer', 'Kampus Utama', NULL, NULL, NULL, NULL),
(7, 'Rizky Febian', 'SMAN 1 Cileunyi', '85.60', '165000.00', 'Reguler', 'Sistem Informasi', 'Kampus Merdeka', NULL, NULL, NULL, NULL),
(8, 'Tiara Andini', 'SMAN 1 Jember', '77.45', '150000.00', 'Reguler', 'Teknik Elektro', 'Kampus Utama', NULL, NULL, NULL, NULL),
(9, 'Ziva Magnolya', 'SMAN 2 Jakarta', '84.90', '170000.00', 'Reguler', 'Teknik Informatika', 'Kampus Merdeka', NULL, NULL, NULL, NULL),
(10, 'Keanu Reeves', 'SMAN 3 Surabaya', '94.25', '100000.00', 'Prestasi', 'Ilmu Komputer', 'Kampus Utama', 'Olimpiade Astronomi', 'Nasional', NULL, NULL),
(11, 'Anya Geraldine', 'SMAN 8 Jakarta', '89.50', '105000.00', 'Prestasi', 'Akuntansi', 'Kampus Merdeka', 'Juara 1 Debat APBN', 'Provinsi', NULL, NULL),
(12, 'Jefri Nichol', 'SMKN 1 Pemangkat', '92.15', '110000.00', 'Prestasi', 'Teknik Informatika', 'Kampus Utama', 'LKS Web Design', 'Nasional', NULL, NULL),
(13, 'Angga Yunanda', 'SMAN 2 Lombok', '87.35', '100000.00', 'Prestasi', 'Manajemen', 'Kampus Merdeka', 'Juara FLS2N Teater', 'Kabupaten', NULL, NULL),
(14, 'Syifa Hadju', 'SMAN 1 Jakarta', '90.00', '120000.00', 'Prestasi', 'Sistem Informasi', 'Kampus Utama', 'Juara Basket 3x3', 'Provinsi', NULL, NULL),
(15, 'Adhisty Zara', 'SMAN 2 Bandung', '93.80', '115000.00', 'Prestasi', 'Teknik Elektro', 'Kampus Merdeka', 'Olimpiade Kimia', 'Internasional', NULL, NULL),
(16, 'Iqbaal Ramadhan', 'SMAN 1 Magelang', '95.10', '100000.00', 'Prestasi', 'Teknik Informatika', 'Kampus Utama', 'Karya Ilmiah Remaja', 'Internasional', NULL, NULL),
(17, 'Mawar de Jongh', 'SMAN 1 Medan', '88.90', '125000.00', 'Prestasi', 'Manajemen', 'Kampus Merdeka', 'Juara Pidato Bahasa Inggris', 'Provinsi', NULL, NULL),
(18, 'Gading Marten', 'SMAN 71 Jakarta', '86.50', '250000.00', 'Kedinasan', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, 'SK-KEMENHUB-2026-B1', 'Kementerian Perhubungan'),
(19, 'Gisella Anastasia', 'SMAN 1 Surabaya', '83.20', '260000.00', 'Kedinasan', 'Ilmu Komputer', 'Kampus Merdeka', NULL, NULL, 'SK-DINAS-LH-09', 'Dinas Lingkungan Hidup'),
(20, 'Deddy Corbuzier', 'SMKN 2 Tangerang', '85.75', '275000.00', 'Kedinasan', 'Teknik Elektro', 'Kampus Utama', NULL, NULL, 'SK-KOMINFO-REK-02', 'Kementerian Kominfo'),
(21, 'Ivan Gunawan', 'SMAN 4 Jakarta', '87.10', '250000.00', 'Kedinasan', 'Manajemen', 'Kampus Merdeka', NULL, NULL, 'SK-BUMN-BNI-2026', 'PT Bank Negara Indonesia'),
(22, 'Cinta Laura', 'SMAN 8 Jakarta', '92.40', '290000.00', 'Kedinasan', 'Akuntansi', 'Kampus Utama', NULL, NULL, 'SK-KEMENLU-INT-05', 'Kementerian Luar Negeri'),
(23, 'Boy William', 'SMAN 3 Bogor', '84.15', '265000.00', 'Kedinasan', 'Teknik Informatika', 'Kampus Merdeka', NULL, NULL, 'SK-TELKOM-REK-99', 'PT Telkom Indonesia'),
(24, 'Luna Maya', 'SMAN 1 Denpasar', '89.00', '250000.00', 'Kedinasan', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, 'SK-PEMPROV-BALI-11', 'Pemerintah Provinsi Bali'),
(25, 'Reza Rahadian', 'SMAN 1 Bogor', '86.30', '280000.00', 'Kedinasan', 'Ilmu Komputer', 'Kampus Merdeka', NULL, NULL, 'SK-KEMENPAREKRAF-01', 'Kementerian Pariwisata');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
