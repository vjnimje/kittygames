-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2021 at 07:44 PM
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
-- Table structure for table `gamethree`
--

CREATE TABLE `gamethree` (
  `id` int(10) NOT NULL,
  `game_id` varchar(10) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `questions` varchar(1000) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gamethree`
--

INSERT INTO `gamethree` (`id`, `game_id`, `topic`, `questions`, `status`) VALUES
(1, '01', 'Cricket', 'Que 1,Que 2,Que 3,Que 4', 0),
(2, '02', 'T20 World Cup', 'Que 1,Que 2,Que 3,Que 4', 0),
(3, '03', 'Covid 19 ', 'Que 1,Que 2,Que 3,Que 4', 1),
(4, '04', 'Life In USA', 'Que 1,Que 2,Que 3,Que 4', 1),
(5, '05', 'Indian Politics', 'Que 1,Que 2,Que 3,Que 4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gamethree`
--
ALTER TABLE `gamethree`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gamethree`
--
ALTER TABLE `gamethree`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
