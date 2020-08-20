-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 09:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_message` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_name`, `c_email`, `c_message`) VALUES
('bobita', 'bob@kmail.com', 'ladies section available?'),
('hakim', 'hk@ilo.com', 'gym is good!'),
('lupin', 'lupi@jmail.com', 'how to join?'),
('mehnaz', 'mehna@kolo.com', 'open now?'),
('palermo', 'pam@hotpot.com', 'how much is supplements?'),
('jaqi', 's@lo.com', 'i am here');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `name` varchar(50) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `cost` int(11) NOT NULL,
  `branch_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`name`, `quantity`, `cost`, `branch_no`) VALUES
('brench', 7, 8000, 2),
('bumble', 20, 30000, 3),
('dumble', 10, 20000, 1),
('rope', 10, 8000, 1),
('skit', 1, 100, 4),
('trade-mill', 4, 70000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE `gym` (
  `branch_no` int(11) NOT NULL,
  `b_location` varchar(80) NOT NULL,
  `trainer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym`
--

INSERT INTO `gym` (`branch_no`, `b_location`, `trainer_id`) VALUES
(1, 'Gandaria', 9901),
(2, 'Keraniganj', 9902),
(3, 'Wari', 9903),
(4, 'Zinzira', 9904);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `mobile` int(11) NOT NULL,
  `guardian_name` varchar(50) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `joint_day` date DEFAULT NULL,
  `service` varchar(10) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `branch_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `name`, `password`, `age`, `sex`, `mobile`, `guardian_name`, `address`, `joint_day`, `service`, `shift`, `branch_number`) VALUES
(1, 'minhaz', 'harmonica', 22, 'male', 1677931224, 'mashiur', 'gandaria', '2017-03-11', 'monthly', 'day', 1),
(2, 'sultan', 'guitar', 23, 'male', 19060704, 'kuddus', 'rail gate', '2018-06-25', 'monthly', 'morning', 3),
(3, 'trishka', 'piano', 19, 'female', 14545564, 'barkat', 'arsin gate', '2020-01-01', 'yearly', 'day', 2),
(4, 'ludi', 'saxophone', 21, 'male', 11231224, 'zinia', 'lalbug', '2017-10-07', 'yearly', 'morning', 4),
(5, 'zabin', 'drum', 20, 'female', 167454354, 'osama', 'baniyanagar', '2018-08-19', 'monthly', 'day', 1),
(7, 'qwe', 'lolita', 12, 'female', 1232343, 'qw', 'pirojpur', '2020-05-21', 'monthly', 'morning', 1),
(8, 'orthy', 'tobla', 16, 'female', 1223454, 'mukta', 'kali das road', '2020-05-21', 'monthly', 'day', 3),
(10, 'orthy', 'tobla', 16, 'female', 1223454, 'mukta', 'kali das road', '2020-05-21', 'monthly', 'day', 3),
(11, 'fahim', 'polimer', 22, 'male', 2147483647, 'rio', 'rasta', '2020-05-21', 'yearly', 'day', 4),
(12, 'sadik', 'asas', 24, 'male', 12112212, 'koli', 'wqa', '2020-05-21', 'yearly', 'day', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_no` int(11) NOT NULL,
  `n_news` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_no`, `n_news`) VALUES
(1, 'tomorrow gym will be closed'),
(2, 'you have to pay more '),
(8, 'i owe you all'),
(9, 'we all know that'),
(10, 'gym will open soon'),
(11, 'free admission for all'),
(12, 'be safe!');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `o_phone` int(11) NOT NULL,
  `o_name` varchar(50) NOT NULL,
  `o_password` varchar(20) NOT NULL,
  `o_adress` varchar(80) DEFAULT NULL,
  `branch_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`o_phone`, `o_name`, `o_password`, `o_adress`, `branch_no`) VALUES
(171717171, 'Roni', 'kungfu', '10 satis sarker road', 1),
(181818181, 'Mashfiq', 'shaolin', '88 rankin street', 3),
(191919191, 'Sattar', 'judo', '56 ovalin rasta', 4);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `mem_id` int(11) NOT NULL,
  `month` varchar(15) NOT NULL,
  `year` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`mem_id`, `month`, `year`, `amount`) VALUES
(1, 'april', 2019, 600),
(1, 'december', 2019, 600),
(1, 'october', 2019, 600),
(2, 'february', 2020, 600),
(2, 'jan', 2020, 600),
(3, 'february', 2019, 600),
(4, 'march', 2019, 600),
(5, 'november', 2019, 600),
(11, 'january', 2020, 1200),
(15, 'jan', 2006, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_password` varchar(20) NOT NULL,
  `experience` varchar(20) DEFAULT NULL,
  `salary` int(11) NOT NULL,
  `branch` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`t_id`, `t_name`, `t_password`, `experience`, `salary`, `branch`) VALUES
(9901, 'sumon', 'gandaria123', '8yr', 10000, 1),
(9902, 'akbar', 'keraniganj123', '2yr', 5000, 2),
(9903, 'emon', 'wari123', '10yr', 15000, 3),
(9904, 'asif', 'zinzira123', '3yr', 6000, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_email`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`branch_no`),
  ADD UNIQUE KEY `b_location` (`b_location`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_no`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`o_phone`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`mem_id`,`month`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
