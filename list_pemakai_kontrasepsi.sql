-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 05:09 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_keluarga_berencana`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_pemakai_kontrasepsi`
--

CREATE TABLE IF NOT EXISTS `list_pemakai_kontrasepsi` (
  `id_list` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_kontrasepsi` int(11) NOT NULL,
  `jumlah_pemakai` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_pemakai_kontrasepsi`
--

INSERT INTO `list_pemakai_kontrasepsi` (`id_list`, `id_provinsi`, `id_kontrasepsi`, `jumlah_pemakai`) VALUES
(1, 1, 1, 50),
(4, 1, 2, 66),
(5, 1, 3, 25),
(6, 2, 1, 100),
(7, 2, 2, 75),
(8, 2, 3, 50),
(9, 1, 2, 40),
(10, 2, 2, 65),
(11, 3, 1, 90),
(12, 3, 2, 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_pemakai_kontrasepsi`
--
ALTER TABLE `list_pemakai_kontrasepsi`
  ADD PRIMARY KEY (`id_list`),
  ADD KEY `id_provinsi` (`id_provinsi`),
  ADD KEY `id_kontrasepsi` (`id_kontrasepsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_pemakai_kontrasepsi`
--
ALTER TABLE `list_pemakai_kontrasepsi`
  MODIFY `id_list` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `list_pemakai_kontrasepsi`
--
ALTER TABLE `list_pemakai_kontrasepsi`
  ADD CONSTRAINT `list_pemakai_kontrasepsi_ibfk_1` FOREIGN KEY (`id_kontrasepsi`) REFERENCES `list_kontrasepsi` (`id_kontrasepsi`),
  ADD CONSTRAINT `list_pemakai_kontrasepsi_ibfk_2` FOREIGN KEY (`id_provinsi`) REFERENCES `list_provinsi` (`id_provinsi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
