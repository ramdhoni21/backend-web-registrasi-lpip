-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 01:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `level` int(1) NOT NULL,
  `validasi` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `name`, `email`, `password`, `date`, `level`, `validasi`) VALUES
(1, 'Admin LPIP', 'admin@mail.com', 'b93d83634de0b8143a418f91495b4fdb', '2021-03-10', 1, 1),
(2, 'Andi Malang', 'andi@mail.com', '3041d56394d9130561ff70a4595771f8', '2021-03-11', 2, 0),
(3, 'Budi Kurniawan', 'budi@mail.com', 'f9979a4dac110cf478b8c98fd9b86dbc', '2021-03-11', 3, 1),
(4, 'Aku Nama', 'aku@mail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2021-03-11', 3, 0),
(5, 'Cici Parasmita', 'cici@mail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2021-03-12', 3, 1),
(6, 'Didi sulaeman', 'didi@mail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2021-03-12', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
