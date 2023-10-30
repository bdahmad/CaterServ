-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 05:45 AM
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
-- Database: `cater_serv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_media`
--

CREATE TABLE `tbl_social_media` (
  `social_id` int(11) NOT NULL,
  `social_facebook` varchar(150) NOT NULL,
  `social_instagram` varchar(150) NOT NULL,
  `social_twitter` varchar(150) NOT NULL,
  `social_linkedin` varchar(150) NOT NULL,
  `social_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_social_media`
--

INSERT INTO `tbl_social_media` (`social_id`, `social_facebook`, `social_instagram`, `social_twitter`, `social_linkedin`, `social_status`) VALUES
(1, 'www.facebook.com/caterser', 'www.twitter.com/caterser', 'www.instagram.com/caterser', 'www.linkedIn.com/caterser', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_social_media`
--
ALTER TABLE `tbl_social_media`
  ADD PRIMARY KEY (`social_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_social_media`
--
ALTER TABLE `tbl_social_media`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
