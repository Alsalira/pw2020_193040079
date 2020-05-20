-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 04:41 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tubes_193040079`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_musik`
--

CREATE TABLE IF NOT EXISTS `alat_musik` (
  `id` int(11) NOT NULL,
  `no` int(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `stock` int(10) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat_musik`
--

INSERT INTO `alat_musik` (`id`, `no`, `foto`, `nama`, `jenis`, `warna`, `stock`, `harga`) VALUES
(1, 1, 'GitarAkustikElektrikAD810E(1).jpg', 'CORT GA5F BW-NS ELECTRIC ACOUSTIC GUITAR', 'Acoustic Electric Guitar', 'caramel', 45, 4000000),
(2, 2, 'jade1.jpg', 'CORT JADE1-AW ACOUSTIC GUITAR', 'Acoustic Guitar', 'white', 35, 1800000),
(3, 3, 'martinlxk2.jpg', 'MARTIN LXK2 Acoustic Guitar', 'Acoustic Guitar', 'wood', 40, 7000000),
(4, 4, 'sfx.jpg', 'CORT SFX ME BKS ACOUSTIC GUITAR', 'Acoustic Guitar', 'black', 45, 2400000),
(5, 5, 'CORTAC100OP(1).jpg', 'CORT AC100 OP CLASSIC GUITAR', 'Classic Guitar', 'caramel', 35, 1400000),
(6, 6, 'CORTActionBassVPlus.jpg', 'CORT ACTION BASS V PLUS-TR ELECTRIC BASS', 'Electric Bass', 'black', 45, 2500000),
(7, 7, 'CORTActionB5PlusASOPN.jpg', 'CORT ARTISAN B5 PLUS AS OPN ELECTRIC BASS', 'Electric Bass', 'light wood', 40, 6000000),
(8, 8, 'Evansb08g2coated.jpg', 'EVANS B08G2 COATED WHITE HEAD', 'Acoustic Drums', 'black-white', 30, 108000),
(9, 9, 'Evanstricenterbongo.jpg', 'EVANS EB0709 TRI-CENTER BONGO HEAD', 'Percussion', 'white-gold', 30, 720000),
(10, 10, 'YamahaDigitalPianoYDP143(1).jpg', 'YAMAHA DIGITAL PIANO YDP-103R', 'Digital Pianos', 'black', 20, 9200000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_musik`
--
ALTER TABLE `alat_musik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_musik`
--
ALTER TABLE `alat_musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
