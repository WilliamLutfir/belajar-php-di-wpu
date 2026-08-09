-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2025 at 07:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nim` char(10) DEFAULT NULL,
  `surel` varchar(100) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `surel`, `jurusan`, `gambar`) VALUES
(1, 'William Lutfir Rahman Harjo', '0701202183', '701202183@uinsu.ac.id', 'Ilmu Komputer', 'william.png'),
(2, 'Irwan Gunawan', '0701201002', '701201002@999.ac.id', 'Ilmu Hitam', 'irwan.png'),
(3, 'Anisa Rahman', '0701201172', '701201172@uinsu.ac.id', 'Ilmu Komputer', 'nophotogirl.jpg'),
(4, 'Windi Imelda Putri Hutauruk', '0701202206', '701202206@uinsu.ac.id', 'Ilmu Komputer', 'nophotogirl.jpg'),
(5, 'Nada Sofha', '0701202177', '701202177@uinsu.ac.id', 'Ilmu Komputer', 'nophotogirl.jpg'),
(6, 'Aura Farahnisa', '0701201001', '701201001@uinsu.ac.id', 'Ilmu Komputer', 'nophotogirl.jpg'),
(7, 'Mia Risa Br. Keliat', '0701202194', '701202194@uinsu.ac.id', 'Ilmu Komputer', 'nophotogirl.jpg'),
(8, 'Khairunissabina', '0701202158', '701202158@uinsu.ac.id', 'Ilmu Komputer', 'nophotogirl.jpg'),
(9, 'Raihan Rizieq Harahap', '0701201014', '701201014@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy.jpg'),
(10, 'Dwiky Darmawan', '0701202215', '701202215@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy2.jpg'),
(11, 'Abdul Haris Adani', '0701202190', '701202190@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy.jpg'),
(12, 'Azky Wifa Hasibuan', '0701203242', '701203242@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy2.jpg'),
(13, 'Nurhayati', '0701201218', '701201218@uinsu.ac.id', 'Ilmu Komputer', 'nophotogirl.jpg'),
(14, 'Almanna Hussein', '0701201212', '701201212@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy.jpg'),
(15, 'Siti Saniah', '0701201091', '701201091@uinsu.ac.id', 'Ilmu Komputer', 'nophotogirl.jpg'),
(16, 'Novrianti Kesuma', '0701201130', '701201130@uinsu.ac.id', 'Ilmu Komputer', 'nophotogirl.jpg'),
(17, 'Aina Nur Nabilla', '0701202222', '701202222@uinsu.ac.id', 'Ilmu Komputer', 'nophotogirl.jpg'),
(18, 'Gema Ramadhan', '0701202221', '701202221@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy2.jpg'),
(19, 'Fadilla Maharani Putri', '0701202197', '701202197@uinsu.ac.id', 'Ilmu Komputer', 'nophotogirl.jpg'),
(20, 'Alwi Bintang Situmorang', '0701202211', '701202211@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy.jpg'),
(21, 'Azizah Oktarina Ritonga', '0701202208', '701202208@uinsu.ac.id', 'Ilmu Komputer', 'nophotogirl.jpg'),
(22, 'Nursalimah Isnaina Fatwa', '0701202202', '701202202@uinsu.ac.id', 'Ilmu Komputer', 'nophotogirl.jpg'),
(23, 'Suci Addina Ramadhani Hasibuan', '0701202209', '701202209@uinsu.ac.id', 'Ilmu Komputer', 'nophotogirl.jpg'),
(24, 'Fadhli Rizqi Haidar Pane', '0701202159', '701202159@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy2.jpg'),
(25, 'Muhammad Alif Fahrezy', '0701203243', '701203243@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy.jpg'),
(26, 'Ihsanul Hakim Nainggolan', '0701203236', '701203236@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy2.jpg'),
(27, 'Bermiko Kasah Padang', '0701203232', '701203232@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy.jpg'),
(28, 'Zery Mesanda', '0701203239', '701203239@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy2.jpg'),
(29, 'Maulana Habibie Syahrandy', '0701203238', '701203238@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy.jpg'),
(30, 'Muhammad Zidan Akbar', '0701203237', '701203237@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy2.jpg'),
(31, 'Fara Dhiaulhaq', '0701203244', '701203244@uinsu.ac.id', 'Ilmu Komputer', 'nophotoboy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `namapengguna` text NOT NULL,
  `katasandi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `namapengguna`, `katasandi`) VALUES
(1, 'william', '$2y$10$mfKrCdy.oURGWW9YU1U0x.GaCGeVQo7qVBJpnevazqxj49TOR6ZPe'),
(2, 'admin', '$2y$10$HQOLWrCrtynCCGOIZeGYEO2yoLKtk6kJv.hSc57m08wxcX7YL/MRq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
