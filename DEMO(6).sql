-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 10, 2018 at 06:40 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DEMO`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(3, '123', '$2y$10$bl3Sg3wxzSCzGGPka4UJFeVpfwPjSmaBZskTjf7O17OZCmlycYCYG', '2018-05-13 10:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `voterCard` varchar(255) NOT NULL,
  `panCard` varchar(100) NOT NULL,
  `shortPartyName` varchar(255) DEFAULT NULL,
  `candidateName` varchar(255) DEFAULT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `fullPartyName` varchar(255) DEFAULT NULL,
  `dob` varchar(100) NOT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `mobile` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `symbol` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `centre` varchar(200) NOT NULL,
  `poll` int(100) NOT NULL,
  `verified` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `voterCard`, `panCard`, `shortPartyName`, `candidateName`, `fathername`, `mothername`, `fullPartyName`, `dob`, `descr`, `mobile`, `sex`, `symbol`, `district`, `centre`, `poll`, `verified`) VALUES
(76, 'VI123', 'PI123', 'BJP', 'Narendra Modi', 'Parendra Modi', 'Marendra Modi', 'Bharatiya Janata Party', '23-02-1971', 'Party for change', '7002291763', 'Male', 'Lotus', 'Nagaon', 'LP School', 2563, 1),
(77, 'VI546', 'PI546', 'CONG', 'Rahul', 'Rohit', 'Sunita', 'Congress', '12-01-1972', 'Party for youth', '7002131838', 'Male', 'Hand', 'Tinsukia', 'DBSK', 2345, 1);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `day` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `hour` varchar(100) NOT NULL,
  `min` varchar(100) NOT NULL,
  `sec` varchar(100) NOT NULL,
  `milli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `id` int(11) NOT NULL,
  `voterid` varchar(50) NOT NULL,
  `panCard` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `district` varchar(255) NOT NULL,
  `centre` varchar(100) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `count` int(100) NOT NULL DEFAULT '0',
  `vname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`id`, `voterid`, `panCard`, `password`, `name`, `fathername`, `mothername`, `dob`, `district`, `centre`, `sex`, `mobile`, `image`, `created_at`, `count`, `vname`) VALUES
(27, 'VI765', 'PI764', '$2y$10$L087vTrylzH1SFAlhoAFIO4SbA3iFNZR3.ieh90P8gmxkdwzCATbW', 'Rajesh Sharma', 'David Sharma', 'Jonali Sharma', '24-06-1995', 'Nagaon', 'admin@example.com', '', '8876594220', '', '2018-06-16 14:07:03', 1, ''),
(28, 'ER2456', 'PIO478', '$2y$10$7hE6SbzIS5xMw7lo4T.YmufEmM9Owyx.6w9CoRKk9359odSsBvJGO', 'Bijay Verma', 'Dipankar Kr Verma', 'Nakani Dey Verma', '07-07-1997', 'Jorhat', 'Hajari LP School', '', '8133807586', '', '2018-06-16 14:16:04', 1, ''),
(29, 'jhg', 'jkh', '$2y$10$hsVO2faQrZEasoj6BAMY8OrkMxfCLElXruO9lDYGiCT8KGhMwwpvy', 'jh', 'h', 'h', 'h', 'Kokrajahr', 'jk', '', '', '', '2018-06-18 15:37:34', 0, ''),
(30, 'hj', 'jkh', '$2y$10$OeihwI0PMUoYunGgFn.QlOtwEmnciIt74UUFgQVfWIY6kFNlek/hy', 'jjkh', 'kh', 'kh', 'h', 'Hojai', 'sfgsd', 'M', '7002131838', '', '2018-06-21 11:26:54', 1, 'BJP'),
(31, 'Mwntai Narjari', 'hjjjhjh', '$2y$10$VxvMlVxt53PWxXvqDX.oe.WI7uk./araMeracaHZiiv8efQAsjGce', 'hjkhjk', 'hjh', 'h', 'kh', 'Kokrajhar', 'h', 'M', '9954897453', '', '2018-06-21 11:48:02', 1, 'BJP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `votername` (`voterid`),
  ADD KEY `count` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
