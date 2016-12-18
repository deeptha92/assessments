-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 05:33 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asm`
--

-- --------------------------------------------------------

--
-- Table structure for table `asdata`
--

CREATE TABLE IF NOT EXISTS `asdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(20) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `ICA01` varchar(2) DEFAULT NULL,
  `ICA02` varchar(2) DEFAULT NULL,
  `ICA03` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `regno` (`regno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `asdata`
--

INSERT INTO `asdata` (`id`, `regno`, `subject`, `ICA01`, `ICA02`, `ICA03`) VALUES
(1, '2013/ICT/18', 'ICT2212', 'C', 'A', 'B'),
(2, '2013/ICT/18', 'ICT2222', 'A', NULL, NULL),
(3, '2013/ICT/47', 'ICT2243', NULL, 'C+', NULL),
(4, '2013/ICT/55', 'ICT2212', 'B', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stname` varchar(100) NOT NULL,
  `regno` varchar(20) NOT NULL COMMENT 'primary key of the table',
  `nic` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stname`, `regno`, `nic`, `email`, `password`) VALUES
('Miyuru Madusankha', '2013/ICT/18', '932040956V', 'miyurumadusanka@yahoo.com', 'miyuru'),
('Bhanuka Prasad', '2013/ICT/47', '932546122V', 'bhanukasn@gmail.com', 'bhanuka'),
('Praneeth Madura', '2013/ICT/55', '932458716V', 'praneeth.madura@gmail.com', 'praneeth');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asdata`
--
ALTER TABLE `asdata`
  ADD CONSTRAINT `st-asdata  foreign` FOREIGN KEY (`regno`) REFERENCES `student` (`regno`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
