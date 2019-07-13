-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2019 at 01:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_pemilihan_bem`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_bem`
--

CREATE TABLE `calon_bem` (
  `nrp_calon` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp_wakil` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_wakil` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_calon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_calon` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_wakil` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jekel` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jekel_wakil` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_lahir_wakil` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk_terakhir` float NOT NULL,
  `ipk_terakhir_wakil` float NOT NULL,
  `tgl_mencalonkan` date NOT NULL,
  `periode` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_pres` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_wakil` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_like` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT 1,
  `jenis_calon` int(5) NOT NULL DEFAULT 0,
  `no_urut` int(5) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rule` int(5) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calon_bem`
--

INSERT INTO `calon_bem` (`nrp_calon`, `nrp_wakil`, `nama_wakil`, `nama_calon`, `jurusan_calon`, `jurusan_wakil`, `jekel`, `jekel_wakil`, `tgl_lahir`, `tgl_lahir_wakil`, `ipk_terakhir`, `ipk_terakhir_wakil`, `tgl_mencalonkan`, `periode`, `visi`, `misi`, `img_pres`, `img_wakil`, `jml_like`, `status`, `jenis_calon`, `no_urut`, `password`, `rule`) VALUES
('14.04.1071', '15.04.1056', 'Reza Pahlepy', 'Nurshella Ermia', 'Teknik Informatika', 'Sistem Informasi', 'Perempuan', 'Laki-Laki', '1996-06-11', '1997-06-11', 3.2, 3.15, '2019-04-12', '2019-2020', 'mengembangkan bem stmik indonesia banjarmasin menjadi lebih baik kedepanya', '1. meningkatkan kinerja BEM stmik indonesia banjarmasin\r\n2. membuat bem lebih dihargai dilingkungan kampus khususnya akademik dan yayasan\r\n3. menjadikan bem sebagai tolak ukur kemampuan mahasiswa', 'Img-156108192230.jpg', 'Img-156108192286.jpg', '2', 1, 0, 2, '$2y$10$mQb/lcmYr3lKx0w8GHLTiOjABJOdAoArovjJF/K58HD5RBfRHYsg.', 5),
('15.04.1069', '14.04.1078', 'Muhammad Fadil', 'Muhamad Iskhaq', 'Teknik Informatika', 'Teknik Informatika', 'Laki-Laki', 'Laki-Laki', '1997-02-11', '1996-06-25', 3.2, 3.25, '2019-04-15', '2019-2020', 'menjadikan bem stmik indonesia banjarmasin sebagai wadah bagi mahasiswa untuk menyalurkan aspirasi.', '1. mengoptimalkan bem sebagai wadah aspirasi mahasiswa\r\n2. menciptakan bem yang berdaulat\r\n3. menjadikan bem yang solid', 'Img-156250323480.jpg', 'Img-156250323468.jpg', '3', 1, 0, 1, '$2y$10$zm0MlRy8aNIUuoo.e93w8eSLTRbM0v8pWSBehyyObZ83ltylFkp2.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `like_calon`
--

CREATE TABLE `like_calon` (
  `id_like` int(50) NOT NULL,
  `nrp` varchar(25) NOT NULL,
  `like_calon` varchar(25) NOT NULL,
  `create_at` date NOT NULL,
  `periode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_calon`
--

INSERT INTO `like_calon` (`id_like`, `nrp`, `like_calon`, `create_at`, `periode`) VALUES
(6, '17041234', '4444444', '2019-04-10', '2018-2019'),
(10, '14041038', '4444444', '2019-04-11', '2018-2019'),
(12, '17041098', '1231231', '2019-05-09', '2018-2019'),
(13, '17041078', '4444444', '2019-05-09', '2018-2019'),
(14, '16041194', '15.04.1069', '2019-06-21', '2019-2020'),
(15, '15041099', '15.04.1069', '2019-07-05', '2019-2020'),
(16, '18041011', '14.04.1071', '2019-07-07', '2019-2020'),
(17, '', '14.04.1071', '2019-07-08', '2019-2020'),
(18, '15041003', '15.04.1069', '2019-07-08', '2019-2020');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nrp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jekel` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(2) NOT NULL,
  `statusVote` int(10) NOT NULL,
  `statusPage` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nrp`, `nama_lengkap`, `jekel`, `email`, `jurusan`, `password`, `token`, `role`, `statusVote`, `statusPage`) VALUES
('12041212', 'Sido', 'cowo', 'sido@gmail.com', 'Teknik Informatika', '$2y$10$gCxvF5Am1aqyLR3DVSY5RORVVAajczKKPmQF47uADk006xAQwgsPG', '4e732ced3463d06de0ca9a15b6153677', 0, 1, 0),
('14041038', 'Muhammad aldi Renaldi', 'cowo', 'aldi@arch.com', 'Sistem Informasi', '$2y$10$1BUXmQaRx71HJKDIfoRrouWOmhmSiDgg1KRK3q/pwhzz2AXVQ3nci', 'c4ca4238a0b923820dcc509a6f75849b', 0, 1, 0),
('15041003', 'nurhelda', 'cewe', 'helda123@gmail.com', 'Manajemen Komputer', '', 'c9f0f895fb98ab9159f51fd0297e236d', 0, 1, 0),
('15041045', 'abdul aziz', 'cowo', 'abdulaziz@gmail.com', 'Teknik Informatika', '', '3416a75f4cea9109507cacd8e2f2aefc', 0, 1, 0),
('16041194', 'aldo pratama', 'cowo', 'aldo123@gmail.com', 'Teknik Informatika', '', 'b6d767d2f8ed5d21a44b0e5886680cb9', 0, 1, 0),
('17041078', 'suci amanah', 'cewe', 'suci@gmail.com', 'Sistem Informasi', '', 'c74d97b01eae257e44aa9d5bade97baf', 0, 1, 0),
('17041098', 'amrullah', 'cowo', 'amrullah@gmail.co', 'Teknik Informatika', '', '8f14e45fceea167a5a36dedd4bea2543', 0, 1, 0),
('17041234', 'arif rahman', 'cowo', 'arif@gmail.com', 'Teknik Informatika', '$2y$10$0JQO874.O0MC0PhnB7221u5wLBbd5C2bzVYL99JTAvgoqPDkIQbaG', 'e4da3b7fbbce2345d7772b0674a318d5', 0, 1, 0),
('17043018', 'muna irvania', 'cewe', 'munairvania24@gmail.com', 'Teknik Informatika', '', '9bf31c7ff062936a96d3c8bd1f8f2ff3', 0, 1, 0),
('18041011', 'koro', 'cowo', 'koro@gmail.com', 'Teknik Informatika', '', '1ff1de774005f8da13f42943881c655f', 0, 1, 0),
('admin', 'admin', '', 'admin@gmail.com', 'admin', '$2y$10$Z6YJCvY1dxm1HKRt2.ki..sLfCA0c7SjFST8xp1JmH0pDDYkUO2Jm', '45c48cce2e2d7fbdea1afc51c7c6ad26', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(50) NOT NULL,
  `nrp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` date NOT NULL,
  `id_cln_bem` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `nrp`, `pertanyaan`, `create_at`, `id_cln_bem`) VALUES
(20, 'admin', 'broooo', '2019-04-10', '14.04.1071'),
(21, '1231231', 'tesss', '2019-05-07', '14.04.1071'),
(22, 'admin', 'tesss lagi', '2019-05-07', '14.04.1071'),
(23, '17041234', 'cuuut', '2019-05-07', '14.04.1071'),
(24, '1231231', 'booos', '2019-05-07', '14.04.1071'),
(25, '1231231', 'saya calon bem', '2019-05-09', '14.04.1071'),
(26, '14.04.1071', 'why', '2019-06-21', '14.04.1071'),
(27, 'admin', 'tes', '2019-07-07', '14.04.1071'),
(28, '17043018', 'okke', '2019-07-07', '14.04.1071'),
(29, '15041045', 'hy bro', '2019-07-09', '15.04.1069'),
(30, '15.04.1069', 'oke', '2019-07-09', '15.04.1069');

-- --------------------------------------------------------

--
-- Table structure for table `status_vote_page`
--

CREATE TABLE `status_vote_page` (
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_vote_page`
--

INSERT INTO `status_vote_page` (`status`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id_vote` int(50) NOT NULL,
  `nrp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vote_calon` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` date NOT NULL,
  `periode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id_vote`, `nrp`, `vote_calon`, `create_at`, `periode`) VALUES
(2, '17041234', '15.04.1069', '2019-04-10', '2018-2019'),
(3, '14041038', '15.04.1069', '2019-04-10', '2018-2019'),
(4, '17041098', '15.04.1069', '2019-05-09', '2018-2019'),
(5, '17041078', '15.04.1069', '2019-05-09', '2018-2019'),
(6, '16041194', '14.04.1071', '2019-06-21', '2019-2020'),
(7, '15041099', '14.04.1071', '2019-07-05', '2019-2020'),
(8, '12041212', '14.04.1071', '2019-07-05', '2019-2020'),
(9, '18041011', '15.04.1069', '2019-07-07', '2019-2020'),
(10, '15041003', '14.04.1071', '2019-07-08', '2019-2020'),
(11, '15041045', '15.04.1069', '2019-07-09', '2019-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_bem`
--
ALTER TABLE `calon_bem`
  ADD PRIMARY KEY (`nrp_calon`);

--
-- Indexes for table `like_calon`
--
ALTER TABLE `like_calon`
  ADD PRIMARY KEY (`id_like`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nrp`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id_vote`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `like_calon`
--
ALTER TABLE `like_calon`
  MODIFY `id_like` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id_vote` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
