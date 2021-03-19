-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 19, 2021 at 02:38 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
  `password` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `level` int(1) NOT NULL,
  `validasi` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `name`, `email`, `password`, `date`, `level`, `validasi`) VALUES
(1, 'Admin LPIP', 'admin@mail.com', 'b93d83634de0b8143a418f91495b4fdb', '2021-03-10', 1, 1),
(2, 'Andi Malang', 'andi@mail.com', '3041d56394d9130561ff70a4595771f8', '2021-03-11', 2, 1),
(3, 'Budi Kurniawan', 'budi@mail.com', 'f9979a4dac110cf478b8c98fd9b86dbc', '2021-03-11', 3, 1),
(10, 'Dinda Kirana', 'dinda@mail.com', '02e3e9f9e0df6e5ad0c48288002d3c14', '2021-03-17', 3, 1),
(11, 'Aku Kamu', 'aku@mail.com', '4dd39f49f898c062283963c187532af8', '2021-03-19', 3, 1);

--
-- Triggers `tb_users`
--
DELIMITER $$
CREATE TRIGGER `add_new_user` AFTER INSERT ON `tb_users` FOR EACH ROW INSERT INTO tb_users_detail
SET id_users = NEW.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users_detail`
--

CREATE TABLE `tb_users_detail` (
  `id_users_detail` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `category` int(1) DEFAULT '0',
  `affiliation` text,
  `telp` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_users_detail`
--

INSERT INTO `tb_users_detail` (`id_users_detail`, `id_users`, `category`, `affiliation`, `telp`) VALUES
(1, 1, 0, NULL, NULL),
(2, 2, 1, 'Tokyo University', '1234567890'),
(3, 3, 1, NULL, NULL),
(4, 10, 1, 'Unsoed', '081225678765'),
(5, 11, 1, 'UMP', '081234567789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users_detail`
--
ALTER TABLE `tb_users_detail`
  ADD PRIMARY KEY (`id_users_detail`),
  ADD KEY `id_users` (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_users_detail`
--
ALTER TABLE `tb_users_detail`
  MODIFY `id_users_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
