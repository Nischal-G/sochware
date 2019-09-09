-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 11:58 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sw_sochware`
--

-- --------------------------------------------------------

--
-- Table structure for table `sw_about`
--

CREATE TABLE `sw_about` (
  `about_id` int(10) NOT NULL,
  `about_title` varchar(50) NOT NULL,
  `about_description` text NOT NULL,
  `about_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sw_about`
--

INSERT INTO `sw_about` (`about_id`, `about_title`, `about_description`, `about_image`) VALUES
(1, 'We\'ve got what you need!', 'Sochware, native engineers working for Indigenous problems. We create hardware solutions, for locally existing glitches, and help develop Technical Nepal. SochWare is a clay-pot by techies for innovation of explored solution to support the traditional market with the arms of hardware. Initially we\'re supporting the agriculture with the help of Internet of things (iOT) What if I could do better with the technology? Let\'s agriculture in a smart way. Let\'s do it like a boss. Let SochWare work for you.\r\n\r\n', 'about.png');

-- --------------------------------------------------------

--
-- Table structure for table `sw_achievements`
--

CREATE TABLE `sw_achievements` (
  `achievement_id` int(11) NOT NULL,
  `achievement_iconclass` varchar(50) NOT NULL,
  `achievement_number` int(11) NOT NULL,
  `achievement_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sw_achievements`
--

INSERT INTO `sw_achievements` (`achievement_id`, `achievement_iconclass`, `achievement_number`, `achievement_title`) VALUES
(1, 'flaticon-medal', 21, 'Number of Awards'),
(2, 'flaticon-chef', 1, 'Our Branches'),
(3, 'flaticon-laugh', 13, 'Happy Clients'),
(4, 'flaticon-chef', 15, 'Staff'),
(5, 'flaticon-medal', 23, 'meadls');

-- --------------------------------------------------------

--
-- Table structure for table `sw_blog`
--

CREATE TABLE `sw_blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_description` text NOT NULL,
  `blog_date` varchar(50) NOT NULL,
  `blog_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sw_blog`
--

INSERT INTO `sw_blog` (`blog_id`, `blog_title`, `blog_description`, `blog_date`, `blog_image`) VALUES
(1, 'An AI Team', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Sept 10, 2018', 'img1.jpg'),
(2, 'An AI Team', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Sept 10, 2018', 'slider1.jpg'),
(3, 'An AI Team', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Sept 10, 2018', 'img1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sw_homeslider`
--

CREATE TABLE `sw_homeslider` (
  `homeslider_id` int(11) NOT NULL,
  `homeslider_title` varchar(50) NOT NULL,
  `homeslider_description` text NOT NULL,
  `homeslider_btn1` varchar(50) NOT NULL,
  `homeslider_btn2` varchar(50) NOT NULL,
  `homeslider_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sw_homeslider`
--

INSERT INTO `sw_homeslider` (`homeslider_id`, `homeslider_title`, `homeslider_description`, `homeslider_btn1`, `homeslider_btn2`, `homeslider_image`) VALUES
(1, 'Live it', 'Sochware, native engineers working for Indigenous problems. We create hardware solutions, for locally existing glitches, and help develop Technical Nepal.', 'know more', 'Explore', 'img1.jpg'),
(2, 'Build it', 'Sochware, native engineers working for Indigenous problems. We create hardware solutions, for locally existing glitches, and help develop Technical Nepal.', 'know more', 'Explore', 'slider1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sw_service`
--

CREATE TABLE `sw_service` (
  `service_id` int(11) NOT NULL,
  `service_title` varchar(50) NOT NULL,
  `service_description` varchar(255) NOT NULL,
  `service_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sw_service`
--

INSERT INTO `sw_service` (`service_id`, `service_title`, `service_description`, `service_image`) VALUES
(1, 'Software', 'It\'s our duty to fulfill your needs. Be like a boss as you are!', 'software.png'),
(2, 'Hardware', 'It\'s our duty to fulfill your needs. Be like a boss as you are!', 'hardware.png'),
(3, 'Community', 'It\'s our duty to fulfill your needs. Be like a boss as you are!', 'comm.png'),
(4, 'Training', 'It\'s our duty to fulfill your needs. Be like a boss as you are!', 'training.png');

-- --------------------------------------------------------

--
-- Table structure for table `sw_team`
--

CREATE TABLE `sw_team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_description` text NOT NULL,
  `team_designation` varchar(100) NOT NULL,
  `team_fb` varchar(50) NOT NULL,
  `team_insta` varchar(50) NOT NULL,
  `team_twitter` varchar(50) NOT NULL,
  `team_linkedin` varchar(50) NOT NULL,
  `team_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sw_team`
--

INSERT INTO `sw_team` (`team_id`, `team_name`, `team_description`, `team_designation`, `team_fb`, `team_insta`, `team_twitter`, `team_linkedin`, `team_image`) VALUES
(1, 'Rabin Shrestha', 'He was born in 1881 (probably in the spring) in Salonica, then an Ottoman city, now inGreece. His father Ali Riza, a customs official turned lumber merchant, died when Mustafawas still a boy. His mother Zubeyde, adevout and strong-willed woman, raised him and his sister.', 'Senior Developer', 'yoyo', 'yoyo', 'yoyo', 'yoyo', 'rabin.jpg'),
(2, 'Milan Thapa', 'Tech Enthusiast, Gadget Lover. Graduating fellow from CITE fulfilling his dream aid of Software Engineering. Mostly enjoy with his own Lappie want to swim in the depth of the Technological world and want to share the fishes what he would catch.', 'Chief Technology Officer(CTO)', '', '', '', '', 'milan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sw_about`
--
ALTER TABLE `sw_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `sw_achievements`
--
ALTER TABLE `sw_achievements`
  ADD PRIMARY KEY (`achievement_id`);

--
-- Indexes for table `sw_blog`
--
ALTER TABLE `sw_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `sw_homeslider`
--
ALTER TABLE `sw_homeslider`
  ADD PRIMARY KEY (`homeslider_id`);

--
-- Indexes for table `sw_service`
--
ALTER TABLE `sw_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `sw_team`
--
ALTER TABLE `sw_team`
  ADD UNIQUE KEY `team_id` (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sw_about`
--
ALTER TABLE `sw_about`
  MODIFY `about_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sw_achievements`
--
ALTER TABLE `sw_achievements`
  MODIFY `achievement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sw_blog`
--
ALTER TABLE `sw_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sw_homeslider`
--
ALTER TABLE `sw_homeslider`
  MODIFY `homeslider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sw_service`
--
ALTER TABLE `sw_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
