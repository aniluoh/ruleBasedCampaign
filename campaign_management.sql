-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 01:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campaign_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_rule`
--

CREATE TABLE `add_rule` (
  `id` int(5) NOT NULL,
  `rule_name` varchar(30) NOT NULL,
  `campaign` varchar(30) NOT NULL,
  `schedule` varchar(15) NOT NULL,
  `conditions` varchar(512) NOT NULL,
  `action` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_rule`
--

INSERT INTO `add_rule` (`id`, `rule_name`, `campaign`, `schedule`, `conditions`, `action`, `status`) VALUES
(9, 'Camp2', 'Swiggy', '15 Minute', 'eCPM >= 5.00 AND Impression >= 1000', 'Start Campaign', 'Activated'),
(10, 'camp1', 'Swiggy', '1 Hour', 'eCPM >= 5.00 AND Impression >= 1032', 'Paused Campaign', 'Deactivated'),
(12, 'Camp3', 'Swiggy', '12:00 AM', 'Spends >= 1000.00 AND eCPC >= 0.20', 'Notify', 'Activated'),
(13, 'camp6', 'Swiggy', '1 Hour', 'Clicks >= 1000.00 AND Installs >= 10', 'Notify', 'Deactivated'),
(14, 'camp7', 'Swiggy', '15 Minute', 'eCPM >= 50 AND Installs >= 20', 'Notify', 'Activated'),
(15, 'camp8', 'Netflix', '15 Minute', 'eCPI >= 2.00 AND Installs >= 10', 'Start Campaign', 'Activated'),
(16, 'camp9', 'Netflix', '12:00 AM', 'eCPM >= 5.00 AND Impression >= 10', 'Paused', 'Deactivated'),
(19, 'Camp5', 'Netflix', '15 Minute', 'Installs >= 10 AND Impression >= 1000', 'Notify', 'Activated');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_data`
--

CREATE TABLE `campaign_data` (
  `id` int(10) NOT NULL,
  `campaign` varchar(20) NOT NULL,
  `metric` varchar(20) NOT NULL,
  `value` varchar(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign_data`
--

INSERT INTO `campaign_data` (`id`, `campaign`, `metric`, `value`, `datetime`) VALUES
(1, 'Swiggy', 'Impressions', '5', '2019-01-01 10:16:00'),
(2, 'Swiggy', 'Clicks', '0', '2019-01-01 04:31:00'),
(3, 'Swiggy', 'Installs', '0', '2019-01-01 04:31:00'),
(4, 'Swiggy', 'Spend', '0.05', '2019-01-01 04:31:00'),
(5, 'Swiggy', 'Impressions', '7', '2019-01-01 04:32:00'),
(6, 'Swiggy', 'Clicks', '2', '2019-01-01 04:32:00'),
(7, 'Swiggy', 'Installs', '1', '2019-01-01 04:32:00'),
(8, 'Swiggy', 'Spend', '0.07', '2019-01-01 04:32:00'),
(9, 'Netflix', 'Impressions', '84', '2019-01-01 04:32:00'),
(10, 'Netflix', 'Clicks', '6', '2019-01-01 04:32:00'),
(11, 'Netflix', 'Installs', '2', '2019-01-01 04:32:00'),
(12, 'Netflix', 'Spend', '1.68', '2019-01-01 04:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Email` varchar(254) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Email`, `Password`) VALUES
('achaurasiya59@gmail.com', 'god123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_rule`
--
ALTER TABLE `add_rule`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rule_name` (`rule_name`);

--
-- Indexes for table `campaign_data`
--
ALTER TABLE `campaign_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_rule`
--
ALTER TABLE `add_rule`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `campaign_data`
--
ALTER TABLE `campaign_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
