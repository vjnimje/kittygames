-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2021 at 05:29 PM
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
-- Table structure for table `gametwo`
--

CREATE TABLE `gametwo` (
  `id` int(10) NOT NULL,
  `game_id` varchar(10) NOT NULL,
  `shape` varchar(100) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gametwo`
--

INSERT INTO `gametwo` (`id`, `game_id`, `shape`, `activity`, `status`) VALUES
(1, '01', 'circle', 'Sing Song', 1),
(2, '02', 'rectangle', 'Play Guitar', 0),
(3, '03', 'trapezoid', 'Dance', 1),
(4, '04', 'square', 'Run 100 Meter', 1),
(5, '05', 'parallelogram', 'Acting', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gametwo`
--
ALTER TABLE `gametwo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gametwo`
--
ALTER TABLE `gametwo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
