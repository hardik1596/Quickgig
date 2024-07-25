-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 03:23 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `name`, `date_add`) VALUES
(1, 'Web Developer', '0000-00-00 00:00:00'),
(2, 'Graphic Designer', '0000-00-00 00:00:00'),
(3, 'Data Science', '2021-03-22 00:40:58'),
(4, 'Accounting', '2021-03-22 00:40:58'),
(5, 'Sels & Marketing', '2021-03-22 00:40:58'),
(6, 'Writer', '2021-03-22 00:40:58'),
(7, 'Digital Marketing', '2021-03-22 00:40:58'),
(8, 'Education / Training', '2021-03-22 01:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cid` int(30) NOT NULL,
  `cname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `cname`) VALUES
(1, 'gandhinagar'),
(2, 'Amreli'),
(3, 'Gondal'),
(4, 'Jamnagar'),
(5, 'Bhuj'),
(6, 'Ahemdebad'),
(7, 'Anjar'),
(8, 'Vadodara'),
(9, 'Surat'),
(10, 'junagadh'),
(11, 'porbandar'),
(12, 'Rajkot'),
(13, 'godadhra'),
(14, 'Sanand'),
(15, 'Bavla'),
(16, 'Dholka'),
(17, 'Viramgam'),
(18, 'Anand'),
(19, 'Shojtra'),
(20, 'Danta'),
(21, 'Vav'),
(22, 'Bharuch'),
(23, 'Ankleshwar'),
(24, 'Bhavnagar'),
(25, 'Botad'),
(26, 'Chhota udaipur'),
(27, 'Dahod'),
(28, 'Dehgam'),
(29, 'Kachchh'),
(30, 'Mahesana'),
(31, 'Morbi,'),
(32, ' Upleta'),
(33, 'Dhoraji'),
(34, 'Jetpur'),
(38, 'Himmatnagar'),
(39, 'Chotila'),
(40, 'Bardoli'),
(41, 'Savli'),
(42, 'Valsad'),
(43, 'Vapi ');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `nae` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `msj` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`nae`, `email`, `subject`, `msj`) VALUES
('atara', 'atararudhi@rku.ac.in', ' rushi', 'WFCWEDX');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `c_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `e_id` int(10) NOT NULL,
  `school` varchar(255) NOT NULL,
  `degree` text NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `area_study` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gig_title` varchar(34) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `search` text NOT NULL,
  `price_hour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `user_id`, `email`, `address`, `gig_title`, `cat_id`, `description`, `type`, `search`, `price_hour`) VALUES
(6, 22, 'hsakariya823@gmail.com', 'bhojrajpara,gondal', 'web/sofware dev', 1, 'php,html,css,java script developer.', 'FT', 'php', 30),
(7, 22, 'hsakariya823@gmail.com', 'bhojrajpara,gondal', 'Data science', 3, 'Sql,Mysql,data structure.', 'PT', 'sql', 30),
(8, 22, 'hsakariya823@gmail.com', 'bhojrajpara,gondal', 'Accounting/consulting', 4, 'Accounting,Consulting.', 'IS', 'accounting', 35),
(9, 1, 'teaj@gm.com', 'Near the kumar shad-2,navavas, bhuj-kutch', 'writing/translating', 6, 'temporary writer & translator.', 'TP', 'writing', 30),
(10, 1, 'teaj@gm.com', 'Near the kumar shad-2,navavas, bhuj-kutch', 'Sels / Marketing ', 5, 'Full time Sels & marketing. ', 'FT', 'marketing', 25),
(11, 1, 'teaj@gm.com', 'Near the kumar shad-2,navavas, bhuj-kutch', 'Graphics / Design', 2, 'Graphics / Design.', 'IS', 'Graphics', 28),
(12, 20, 'mitali@gmail.com', 'Gandhinagar,Gujarat', 'Digital Marketing', 7, 'Digital Marketing.', 'PT', 'Digital Marketing', 29),
(13, 20, 'mitali@gmail.com', 'Gandhinagar,Gujarat', 'Education / Training', 8, 'Education / Training.', 'FT', 'Education', 20),
(14, 20, 'mitali@gmail.com', 'Gandhinagar,Gujarat', 'web/sofware dev', 1, 'web/sofware devloper.', 'IS', 'php', 32),
(15, 23, 'rushid@gmail.com', 'Gondal,Gujarat', 'Data science', 3, 'Data science & Analytics.', 'IS', 'sql', 28),
(16, 23, 'rushid@gmail.com', 'Gondal,Gujarat', 'Accounting/consulting', 4, 'Accounting/consulting.', 'IS', 'accounting', 28),
(17, 23, 'rushid@gmail.com', 'Gondal,Gujarat', 'writing/translating', 6, 'writing/translating.', 'IS', 'writing', 24),
(18, 24, 'pritesh@gmail.com', 'Near the kumar shad,navavas, bhuj-kutch', 'Sels / Marketing ', 5, 'Sels / Marketing .', 'TP', 'marketing', 26),
(19, 24, 'pritesh@gmail.com', 'Near the kumar shad,navavas, bhuj-kutch', 'Graphics / Design', 2, 'Graphics / Design.', 'PT', 'Graphics', 23),
(21, 24, 'pritesh@gmail.com', 'Near the kumar shad,navavas, bhuj-kutch', 'Digital Marketing', 7, 'Digital Marketing.', 'FT', 'marketing', 27),
(22, 25, 'Smriti@gmail.com', 'Bhuj,Gujarat.', 'Education / Training', 8, 'Education / Training.', 'IS', 'Education', 26),
(23, 25, 'Smriti@gmail.com', 'Bhuj,Gujarat', 'web/software developer', 1, 'web/software developer.', 'TP', 'php', 25),
(24, 25, 'Smriti@gmail.com', 'Bhuj,Gujarat', 'Data science', 3, 'Data science.', 'FT', 'sql', 21),
(25, 26, 'Kirtan@gmail.com', 'botad,gujarat.', 'Accounting/consulting', 4, 'Accounting/consulting.', 'FT', 'accounting', 25),
(26, 26, 'Kirtan@gmail.com', 'botad,gujarat.', 'writing/translating', 6, 'writing/translating', 'PT', 'writing', 26),
(27, 26, 'Kirtan@gmail.com', 'botad,gujarat.', 'Sels / Marketing ', 5, 'Sels / Marketing .', 'TP', 'marketing', 27),
(28, 19, 'atararushi@gmail.com', 'MARUTINAGAR BAGASARA', 'WEBSIT', 1, '', ' FT', '', 2000),
(30, 19, 'atararushi@gmail.com', 'MARUTINAGAR BAGASARA', 'WEBSITE', 2, '', 'PT', '', 200),
(35, 19, 'atararushi@gmail.com', 'ADca', 'rudshi', 1, 'zxc', 'FT', 'php', 20),
(36, 19, 'atararushi@gmail.com', 'rk', 'web', 2, '', 'PT', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `freelancer`
--

CREATE TABLE `freelancer` (
  `f_id` int(10) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(23) NOT NULL,
  `location` int(10) NOT NULL,
  `category` int(10) NOT NULL,
  `skillset` varchar(255) NOT NULL,
  `exper_level` varchar(10) NOT NULL,
  `edu_history` int(10) NOT NULL,
  `employee` int(10) NOT NULL,
  `availability` text NOT NULL,
  `pro_img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `l_id` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `c_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile_user`
--

CREATE TABLE `profile_user` (
  `pf_id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `usename` text NOT NULL,
  `profile` blob NOT NULL,
  `language` varchar(50) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `e_id` int(11) NOT NULL,
  `oursite` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phnumber` bigint(20) NOT NULL,
  `log` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `rank_id` int(11) NOT NULL,
  `rname` varchar(10) NOT NULL,
  `Description` text NOT NULL,
  `e_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sc_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `c_id` int(10) NOT NULL,
  `add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phnumber` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` int(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `gen` varchar(8) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `phnumber`, `email`, `dob`, `password`, `country`, `state`, `city`, `pincode`, `gen`, `profile`) VALUES
(1, 'tejas', 'hirani', 578362889, 'teaj@gm.com', '', 'teni01', 'india', 'gujarat', 1, 370040, 'male', '999.png'),
(19, 'Atar', 'Rushibhai', 3567222, 'atararushi@gmail.com', '2021-03-16', 'rush', 'United States', 'gujarat', 2, 355468, 'option2', '999.png'),
(20, 'Mitali', 'Patel', 9898989898, 'mitali@gmail.com', '2001-03-05', 'mitali01', '4', '', 1, 232435, 'female', '999.png'),
(22, 'Hardik', 'Sakariya', 7034529566, 'hsakariya823@gmail.com', '2001-07-11', '123', '4', '', 3, 360311, 'male', '999.png'),
(23, 'Rushi', 'Dudhatra', 7034529545, 'rushid@gmail.com', '2003-03-01', 'rd123', '4', '', 3, 360311, 'male', '999.png'),
(24, 'Pritesh', 'Panchani', 7034529456, 'pritesh@gmail.com', '2003-09-12', 'pritesh', '4', '', 5, 360356, 'male', '999.png'),
(25, 'Smriti', 'Mandhana', 9999999999, 'Smriti@gmail.com', '1998-02-12', '8910', '4', 'gujarat', 6, 360345, 'female', '999.png'),
(26, 'Kirtan', 'Moradiya', 7034529597, 'Kirtan@gmail.com', '2002-12-04', 'swami', '4', '', 25, 360357, 'male', '999.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `freelancer`
--
ALTER TABLE `freelancer`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `profile_user`
--
ALTER TABLE `profile_user`
  ADD PRIMARY KEY (`pf_id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `UNIQUE` (`phnumber`),
  ADD KEY `city` (`city`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `e_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `freelancer`
--
ALTER TABLE `freelancer`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `l_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_user`
--
ALTER TABLE `profile_user`
  MODIFY `pf_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `rank_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sc_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `country_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`c_id`);

--
-- Constraints for table `freelancer`
--
ALTER TABLE `freelancer`
  ADD CONSTRAINT `freelancer_ibfk_1` FOREIGN KEY (`location`) REFERENCES `location` (`l_id`),
  ADD CONSTRAINT `freelancer_ibfk_2` FOREIGN KEY (`category`) REFERENCES `category` (`c_id`),
  ADD CONSTRAINT `freelancer_ibfk_3` FOREIGN KEY (`edu_history`) REFERENCES `education` (`e_id`),
  ADD CONSTRAINT `freelancer_ibfk_4` FOREIGN KEY (`employee`) REFERENCES `employee` (`e_id`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `country` (`c_id`);

--
-- Constraints for table `profile_user`
--
ALTER TABLE `profile_user`
  ADD CONSTRAINT `profile_user_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `employee` (`e_id`);

--
-- Constraints for table `rank`
--
ALTER TABLE `rank`
  ADD CONSTRAINT `rank_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `employee` (`e_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `category` (`c_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`city`) REFERENCES `city` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
