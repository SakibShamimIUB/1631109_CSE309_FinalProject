-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 09, 2021 at 06:12 AM
-- Server version: 8.0.24
-- PHP Version: 7.3.24-(to be removed in future macOS)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_catring`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contact_no` int DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subscription` varchar(100) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `order_status` tinyint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`id`, `name`, `contact_no`, `email`, `subscription`, `order_date`, `order_status`) VALUES
(1, 'masud', 342, 'kfjd@dfkj.do', 'Event', '10 Oct 2021', 1),
(3, 'masud', 342, 'kfjd@dfkj.do', 'kldjf', '2', 0),
(4, 'masud', 342, 'kfjd@dfkj.do', 'kldjf', '2', 0),
(5, 'Alfaz', 391238345, 'alfaz@dc.com', 'Birthday', '2/Oct/2021', 0),
(7, 'Rafsan', 12435987, 'rafsan@dcastalia.com', 'Birthday', '20 Oct 2021', 0),
(8, 'sfsd', 3543645, '', '', '', 0),
(9, 'sdf', 234, 'sdf@dg.df', 'df', 'dsf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `status`) VALUES
(1, 'admin', '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
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
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
