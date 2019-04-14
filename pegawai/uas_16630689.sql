-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 03:16 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_16630689`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `nip` varchar(20) NOT NULL,
  `Nama_Lengkap` varchar(75) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Agama` varchar(15) NOT NULL,
  `Gol_Darah` varchar(2) NOT NULL,
  `No_Hp` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip`, `Nama_Lengkap`, `Alamat`, `Agama`, `Gol_Darah`, `No_Hp`, `Email`, `Foto`) VALUES
('16651234', 'Muhammad Faiz', 'Banjarbaru', 'Islam', 'O', '08121244', 'faiz9877@gmail.com', 'images.png'),
('16651235', 'Muhammad Aldian', 'Martapura', 'Islam', 'A', '08121234', 'Aldi_filesyste@gmail.com', 'images.png'),
('16651236', 'Muhammad Ilmi', 'Landasan Ulin', 'Islam', 'AB', '08121238', 'ilmi.coy@gmail.com', 'images.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
