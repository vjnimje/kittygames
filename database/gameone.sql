-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2021 at 09:54 AM
-- Server version: 5.5.45
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kittygames`
--

-- --------------------------------------------------------

--
-- Table structure for table `gameone`
--

CREATE TABLE `gameone` (
  `id` int(10) NOT NULL,
  `game_id` varchar(10) NOT NULL,
  `blur_image` varchar(100) NOT NULL,
  `original_image` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gameone`
--

INSERT INTO `gameone` (`id`, `game_id`, `blur_image`, `original_image`, `status`, `answer`) VALUES
(1, '01', '1634840759hritik.jpg', '1634840759kareena.jpg', 1, 'test 4'),
(2, '02', '1634840859amir.jpg', '1634840859salman.jpg', 0, 'test'),
(3, '03', '1', '1', 1, '1'),
(4, '04', '1', '1', 1, '1'),
(5, '05', '1', '1', 1, '1'),
(6, '06', '1', '1', 1, '1'),
(7, '07', '1', '1', 1, '1'),
(8, '08', '1', '1', 1, '1'),
(9, '09', '1', '1', 1, '1'),
(10, '10', '1', '1', 1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gameone`
--
ALTER TABLE `gameone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gameone`
--
ALTER TABLE `gameone`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
