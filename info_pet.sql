-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 03:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_pet`
--

CREATE TABLE `info_pet` (
  `id_pet` int(10) NOT NULL,
  `gender_pet` varchar(10) NOT NULL,
  `color_pet` varchar(10) NOT NULL,
  `type_pet` varchar(10) NOT NULL,
  `vac_pet` varchar(300) NOT NULL,
  `info_pet` text NOT NULL,
  `name_pet` varchar(10) NOT NULL,
  `img_pet` blob NOT NULL,
  `gene_pet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_pet`
--

INSERT INTO `info_pet` (`id_pet`, `gender_pet`, `color_pet`, `type_pet`, `vac_pet`, `info_pet`, `name_pet`, `img_pet`, `gene_pet`) VALUES
(1, 'ผู้', 'xxx', 'แมว', 'ได้รับวัคซีน', 'xxxx', 'xxx', '', 'Chihuahua'),
(2, 'ผู้', 'xxx', 'แมว', 'ได้รับวัคซีน', 'xxxx', 'xxx', 0x646f672e6a7067, 'Chihuahua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_pet`
--
ALTER TABLE `info_pet`
  ADD PRIMARY KEY (`id_pet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_pet`
--
ALTER TABLE `info_pet`
  MODIFY `id_pet` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
