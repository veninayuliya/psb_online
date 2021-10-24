-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 08:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `nilai` int(11) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `statuss` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `jk`, `alamat`, `ttl`, `agama`, `nilai`, `telepon`, `statuss`) VALUES
(1, 'Rizki Putra', 'Laki-laki', 'Jl. Pemuda No. 18', 'Pasuruan, 08-07-2002', 'Islam', 90, '0123456789', 'Diterima'),
(2, 'Renaldi', 'Laki-laki', 'Jl. Kebangsaan No. 17', 'Bandung, 09-12-2000', 'Islam', 76, '0123456789', 'Tidak Diterima'),
(3, 'Soni muhamad', 'Laki-laki', 'Ijen Street No.18', 'Surabaya, 11-10-2001', 'Islam', 90, '089743991', 'Diterima'),
(6, 'Danillo Essa', 'Laki-laki', 'Jl. Tunas Muda No. 5', 'Pasuruan, 10-10-2000', 'Islam', 88, '0823871111', 'Diterima'),
(8, 'Gilang Fanani', 'Laki-laki', 'Jl. Tunas Muda No. 14', 'Surabaya, 11-10-2000', 'Islam', 86, '091282000', 'Diterima'),
(10, 'Rian ibrahim', 'Laki-laki', 'Jl. Pemuda No. 10', 'Surabaya, 11-10-2000', 'Islam', 78, '123456789', 'Cadangan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `email_users` varchar(100) NOT NULL,
  `password_users` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `roles` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `email_users`, `password_users`, `nama`, `telepon`, `roles`) VALUES
(1, 'admin@mail.com', 'admin123', 'administrator', '010123234545', 'Administrator'),
(2, 'user@mail.com', 'user123', 'user', '111222333444', 'User'),
(4, 'shafa@mail.com', 'shafa123', 'shafa ilona', '01111888999', 'User'),
(5, 'falya@mail.com', 'falya123', 'falya risma', '01922222', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
