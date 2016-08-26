-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2016 at 09:52 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
`city_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `name`) VALUES
(1, 'Baragoi'),
(2, 'Bungoma'),
(3, 'Busia'),
(4, 'Butere'),
(5, 'Dadaab'),
(6, 'Diani Beach'),
(7, 'Eldoret'),
(8, 'Emali'),
(9, 'Embu'),
(10, 'Garissa'),
(11, 'Gede'),
(12, 'Hola'),
(13, 'Homa Bay'),
(14, 'Isiolo'),
(15, 'Kitui'),
(16, 'Kibwezi'),
(17, 'Makindu'),
(18, 'Kajiado'),
(19, 'Kakamega'),
(20, 'Kakuma'),
(21, 'Kapenguria'),
(22, 'Kericho'),
(23, 'Kiambu'),
(24, 'Kilifi'),
(25, 'Kisii'),
(26, 'Kisumu'),
(27, 'Kitale'),
(28, 'Lamu'),
(29, 'Langata'),
(30, 'Litein'),
(31, 'Lodwar'),
(32, 'Lokichoggio'),
(33, 'Londiani'),
(34, 'Loyangalani'),
(35, 'Machakos'),
(36, 'Malindi'),
(37, 'Mandera'),
(38, 'Maralal'),
(39, 'Marsabit'),
(40, 'Meru'),
(41, 'Mombasa'),
(42, 'Moyale'),
(43, 'Mumias'),
(44, 'Murang''a'),
(45, 'Mutomo'),
(46, 'Nairobi'),
(47, 'Naivasha'),
(48, 'Nakuru'),
(49, 'Namanga'),
(50, 'Nanyuki'),
(51, 'Naro Moru'),
(52, 'Narok'),
(53, 'Nyahururu'),
(54, 'Nyeri'),
(55, 'Ruiru'),
(56, 'Shimoni'),
(57, 'Takaungu'),
(58, 'Thika'),
(59, 'Vihiga'),
(60, 'Voi'),
(61, 'Wajir'),
(62, 'Watamu'),
(63, 'Webuye'),
(64, 'Wote'),
(65, 'Wundanyi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
 ADD PRIMARY KEY (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
