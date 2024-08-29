-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 04:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `nisn` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nama`, `alamat`, `tanggal_lahir`, `nisn`, `no_hp`, `email`, `hobi`, `jenis_kelamin`, `agama`) VALUES
(3, 'firman', 'pasar 6', '2007-03-31', 32141421, 2147483647, 'firmannn31@gmail.com', 'tanya sendiri', 'Laki - Laki', 'ISLAM'),
(4, 'dana', 'simpang ayam', '2007-04-24', 442144, 2147483647, 'dana11@gmail.com', 'tanya sendiri', 'Laki - Laki', 'ISLAM'),
(5, 'danu', 'pasar 8', '2007-05-03', 777231, 2141214, 'danu11@gmail.com', 'tanya sendiri', 'Laki - Laki', 'ISLAM'),
(6, 'revi', 'kebun balok', '2007-06-04', 66231, 99213992, 'revi11@gmail.com', 'tanya sendiri', 'Laki - Laki', 'ISLAM'),
(7, 'harpe', 'perdamaian', '2007-08-07', 77885, 803321333, 'harpe11@gmail.com', 'tanya sendiri', 'Laki - Laki', 'ISLAM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
