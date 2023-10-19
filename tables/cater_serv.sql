-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 05:37 AM
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
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` int(11) NOT NULL,
  `about_heading` varchar(50) NOT NULL,
  `about_para` varchar(200) NOT NULL,
  `about_service_1` varchar(150) NOT NULL,
  `about_service_2` varchar(150) NOT NULL,
  `about_service_3` varchar(150) NOT NULL,
  `about_service_4` varchar(150) NOT NULL,
  `about_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_heading`, `about_para`, `about_service_1`, `about_service_2`, `about_service_3`, `about_service_4`, `about_photo`) VALUES
(1, 'Trusted By 200 + satisfied clients', 'Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eit esdioilore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaemco laboeeiris nis.', 'Fresh and Fast food Delivery', 'Easy Customization Options', '24/7 Customer Support ', 'Delicious Deals for Delicious Meals ', 'about_1697134113_82657214.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_achievement`
--

CREATE TABLE `tbl_achievement` (
  `achieve_id` int(11) NOT NULL,
  `achieve_customers` varchar(10) NOT NULL,
  `achieve_chefs` varchar(10) NOT NULL,
  `achieve_events` varchar(10) NOT NULL,
  `achieve_video` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_achievement`
--

INSERT INTO `tbl_achievement` (`achieve_id`, `achieve_customers`, `achieve_chefs`, `achieve_events`, `achieve_video`) VALUES
(1, '5', '522', '120', 'https://www.youtube.com/watch?v=Rmcrrf4p_VA&ab_channel=%E0%A6%AE%E0%A6%BE%E0%A6%B0%E0%A6%95%E0%A6%BE%E0%A6%9C%E0%A6%9F%E0%A6%BF%E0%A6%AD%E0%A6%BFMarkazTv');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(11) NOT NULL,
  `event_cate_id` int(11) NOT NULL,
  `event_image` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_cate_id`, `event_image`) VALUES
(3, 2, 'event_1697438168_58235546.jpg'),
(4, 3, 'event_1697438610_63880840.jpg'),
(5, 3, 'event_1697438619_19662693.jpg'),
(6, 4, 'event_1697438628_45202075.jpg'),
(7, 5, 'event_1697438639_30240226.png'),
(8, 2, 'event_1697447759_35940627.jpg'),
(9, 3, 'event_1697447768_80127793.jpg'),
(10, 4, 'event_1697447777_2911337.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_category`
--

CREATE TABLE `tbl_event_category` (
  `event_cate_id` int(11) NOT NULL,
  `event_cate_name` varchar(25) NOT NULL,
  `event_cate_slug` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_event_category`
--

INSERT INTO `tbl_event_category` (`event_cate_id`, `event_cate_name`, `event_cate_slug`) VALUES
(1, 'All Event', 'all_event'),
(2, 'Wedding', 'wedding'),
(3, 'Corporate', 'corporate'),
(4, 'Cocktail', 'cocktail'),
(5, 'Buffet', 'buffet');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role_name`) VALUES
(1, 'Superadmin'),
(2, 'Admin'),
(3, 'Author'),
(4, 'Editor'),
(5, 'Subscriber');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `service_id` int(11) NOT NULL,
  `service_icon` varchar(25) NOT NULL,
  `service_title` varchar(25) NOT NULL,
  `service_description` text NOT NULL,
  `service_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`service_id`, `service_icon`, `service_title`, `service_description`, `service_link`) VALUES
(1, 'fas fa-calendar', '  this is title  ', 'this is description', 'www.link.com'),
(3, 'fas fa-bold', 'adfafasd', 'fasdfas', 'fasfasf'),
(4, 'fab fa-app-store-ios', '  this is title  ', 'this is description', 'this is link'),
(5, 'fas fa-gem', ' this sis service ', 'service description', 'link'),
(6, 'fab fa-codepen', 'sdfsfgasdgfasdga', 'adgfasgagag', 'adgagag');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status_name`) VALUES
(1, 'Active'),
(2, 'Inactive'),
(3, 'Processing'),
(4, 'Disable'),
(5, 'Block');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(25) NOT NULL,
  `team_designation` varchar(25) NOT NULL,
  `team_facebook` varchar(50) NOT NULL,
  `team_twitter` varchar(50) NOT NULL,
  `team_instagram` varchar(50) NOT NULL,
  `team_slug` varchar(15) NOT NULL,
  `team_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`team_id`, `team_name`, `team_designation`, `team_facebook`, `team_twitter`, `team_instagram`, `team_slug`, `team_photo`) VALUES
(1, 'Ahmad Ali', 'Head Chef', 'https://www.facebook.com/', 'https://twitter.com/i/flow/', 'https://www.instagram.com/', 'U652984c76719e', 'team_1697219783_3203573.jpg'),
(2, 'Reja Kazi', 'Decoration Chef', 'https://www.facebook.com/', 'twitter.com', 'instagram.com', 'U6529871c0979c', 'team_1697220380_35454765.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_username` varchar(20) NOT NULL,
  `user_password` varchar(35) NOT NULL,
  `user_designation` varchar(20) NOT NULL,
  `user_address` text NOT NULL,
  `user_slug` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `user_photo` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_username`, `user_password`, `user_designation`, `user_address`, `user_slug`, `role_id`, `status_id`, `user_photo`) VALUES
(2, 'Ahmad', 'ahmad@gmail.com', '1935056526', 'ahmad', '6512bd43d9caa6e02c990b0a82652dca', 'engg', 'mirpur dhaka', 'jfasdjlkf', 1, 1, 'users_1697088015_25761476.jpg'),
(3, 'ahmad', 'ahmad@gmail.com', '1234569877', 'ahmad', '6512bd43d9caa6e02c990b0a82652dca', 'mirpur data', 'dfjalfjdalk', 'U65266773376cd', 1, 5, 'users_1697087424_51258287.jpg'),
(4, 'Sabbir', 'sabbir@gmail.com', '1236978541', 'sabbir', '6512bd43d9caa6e02c990b0a82652dca', 'engg', 'manik', 'U6526680b4500d', 4, 3, 'users_1697087379_63971349.jpg'),
(5, 'Ashfuq Ahmed', 'ashfuq@gmail.com', '1234987456', 'aadf', 'c4ca4238a0b923820dcc509a6f75849b', 'Graphic Designer', 'Banai', 'U65267dea4a89a', 4, 5, 'users_1697087287_13908286.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_achievement`
--
ALTER TABLE `tbl_achievement`
  ADD PRIMARY KEY (`achieve_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `event_cate_id` (`event_cate_id`);

--
-- Indexes for table `tbl_event_category`
--
ALTER TABLE `tbl_event_category`
  ADD PRIMARY KEY (`event_cate_id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `status_id` (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_achievement`
--
ALTER TABLE `tbl_achievement`
  MODIFY `achieve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_event_category`
--
ALTER TABLE `tbl_event_category`
  MODIFY `event_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD CONSTRAINT `tbl_event_ibfk_1` FOREIGN KEY (`event_cate_id`) REFERENCES `tbl_event_category` (`event_cate_id`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_role` (`role_id`),
  ADD CONSTRAINT `tbl_users_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
