-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2021 at 03:53 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameshow.vizaualads.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `gameone`
--

CREATE TABLE `gameone` (
  `id` int(10) NOT NULL,
  `game_id` varchar(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `blur_image` varchar(100) NOT NULL,
  `original_image` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gameone`
--

INSERT INTO `gameone` (`id`, `game_id`, `type`, `blur_image`, `original_image`, `status`, `answer`) VALUES
(1, '01', 'image', '1634997056who_is_on_the_screen.jpg', '1634997056template.png', 1, 'Abhimanyudu'),
(2, '02', 'image', '1634997091Guess_Who.jpg', '1634997091template1.png', 1, 'K Balachandar  &  K viswanath'),
(3, '03', 'image', '1634997004Guess_Me.jpg', '16349970043ANS.jpg', 1, 'test 2'),
(4, '04', 'image', '1635000373GUESS_ABCD.png', '1635000373q4a.jpeg', 1, 'ABCD'),
(5, '05', 'image', '16350008082ndGuess_ABCD.png', '1635000808q5a.jpeg', 1, 'ABCD'),
(6, '06', 'image', '1634998350Guess_The_Movie.jpg', '1634998350Answer.jpg', 1, 'Answer'),
(7, '07', 'audio', '1635000724music.mp3', '1635000724template5.png', 1, 'Gopi Sundar'),
(8, '08', 'image', '1634998586Find_the_Movie.jpg', '1634998586template2.png', 1, 'AkaliRajyam'),
(9, '09', 'image', '1634998834fun.jpg', '1634998834template3.png', 1, 'Ven-Key-Ma-Ma'),
(10, '10', 'video', '1634999423video.mp4', '1634999423template4.png', 1, 'Aravind Swamy & Druva');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(10) NOT NULL,
  `game_id` varchar(100) NOT NULL,
  `game_name` varchar(100) NOT NULL,
  `game_link` varchar(100) NOT NULL,
  `game_image` varchar(100) NOT NULL,
  `game_answer` varchar(100) NOT NULL,
  `game_option_answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `game_id`, `game_name`, `game_link`, `game_image`, `game_answer`, `game_option_answer`) VALUES
(1, '01', 'Guess Image 1', 'Test Link 1', '1634706767Capture2.PNG', 'Answer 1', 'Answer 1,Answer 2,Answer 3,Answer 4,Answer 5,Answer 6,Answer 7,Answer 8,Answer 9,Answer 10'),
(2, '02', 'Guess Image 2', 'Test Link 2', '1634707689Capture.PNG', 'Answer 2', 'Answer 1,Answer 2,Answer 3,Answer 4,Answer 5,Answer 6,Answer 7,Answer 8,Answer 9,Answer 10'),
(3, '03', 'Guess Image 3', 'Test Link 3', '1634707829athithi_logo.png', 'Answer 3', 'Answer 1,Answer 2,Answer 3,Answer 4,Answer 5,Answer 6,Answer 7,Answer 8,Answer 9,Answer 10'),
(4, '04', '1', '1', '1', '1', '1'),
(5, '05', '1', '1', '1', '1', '1'),
(6, '06', '1', '1', '1', '1', '1'),
(7, '07', '1', '1', '1', '1', '1'),
(8, '08', '1', '1', '1', '1', '1'),
(9, '09', '1', '1', '1', '1', '1'),
(10, '10', '1', '1', '1', '1', '1');

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
(1, '01', 'Indian Women Sports', 'Name the 1st Indian Women to Win a Medal in Olympics ? , Magnificent Mary & 6 world titles Indian Super Mom Boxer from which State? , Who is the highest scorer in Women\'s International Cricket ? ,Who is the Captain of Indian Female Hockey Team?', 1),
(2, '02', 'Indian Politics', 'Who is the 1st full-time female Finance Minister of India ? ,  In 1982 Indira Gandhi ordered a Police Action at Sikh Temple. What was the Name of that Action? , Mamata Banerjee has been sworn 3times in a row as the CM of West Bengal from which Party? ,  Who is the Youngest Female to receive the Noble Peace Award?', 1),
(3, '03', 'Indian Science & Tech', 'Which is India\'s 1st Satellite ? , Which gas is known as \"Laughing Gas\" ? , Which Blood Group is known as Universal Recipients\' group ? , Who was the 1st Indian-born woman to enter space & died in space shuttle Columbia ?', 1),
(4, '04', 'Telugu Literature ', 'Whose Birthday Telugu Language Day is celebrated on 29th August ? ,  Who Translated Vishwanatha Satyanarana \"VeyyiPadagalu\" to Hindi? ,  శ్రీకృష్ణ దేవరాయలు రచించిన ప్రసిద్ధ గ్రంధం ఏది? ,  ఆంధ్ర కవితా పితామహునిగా ప్రసిద్దుడైన కవి ఎవరు?', 1),
(5, '05', 'Indian Culture/History', '\'Natya - Shastra\' the main source of India\'s classical dances was written by ? ,  The India\'s highest annual rainfall is reported at ? , The Vedic deity Indra was the Goddess of ? , Tulsidas the author of Ramcharitmanas was a contemporary of which of the following rulers?', 1);

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
(1, '01', 'circle', 'BUILT FORM BRICK TOWER-ISHAPE', 0),
(2, '02', 'rectangle', 'PUZZLE _FRAME IT', 1),
(3, '03', 'trapezoid', 'BLOW BALOONS', 1),
(4, '04', 'square', 'PLACE THEM N BASKET', 1),
(5, '05', 'parallelogram', 'TELL & DRAW A STORY', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', '0e7517141fb53f21ee439b355b5a1d0a', 'Visual Ads'),
(2, 'vijay', '0e7517141fb53f21ee439b355b5a1d0a', 'Vijay Nimje'),
(3, 'testuser', 'testpassword', 'Test User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gameone`
--
ALTER TABLE `gameone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gamethree`
--
ALTER TABLE `gamethree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gametwo`
--
ALTER TABLE `gametwo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gameone`
--
ALTER TABLE `gameone`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gamethree`
--
ALTER TABLE `gamethree`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gametwo`
--
ALTER TABLE `gametwo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
