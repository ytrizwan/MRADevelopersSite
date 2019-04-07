-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 12:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mradb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mra_comments`
--

CREATE TABLE `mra_comments` (
  `id_comnt` int(100) NOT NULL,
  `id_post_fk` int(100) NOT NULL,
  `comments` text NOT NULL,
  `names_comnt` text NOT NULL,
  `date_comnt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mra_post`
--

CREATE TABLE `mra_post` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `img` text NOT NULL,
  `imgName` text NOT NULL,
  `cat` varchar(20) NOT NULL,
  `etc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mra_post`
--

INSERT INTO `mra_post` (`id`, `date`, `title`, `details`, `img`, `imgName`, `cat`, `etc`) VALUES
(16, '2019-04-07', 'MRA Stock Calculator', 'Put your stock purchase and sales price to find out the profit.You can put stock company code to check rates directly.You can put purchase and sales brokerage.\r\n\r\nWHAT\'S NEW\r\nAuto Calculation, no need to press button to calculate results. Save Data with multiple company name, can load any shares of specific company any time. Can see more Calculations by pressing \'detail\' button on single screen. Can see the formula\'s by pressing the names of any output.\r\n\r\nDevelopers Email:\r\nmra4developers@gmail.com\r\n\r\n', 'mraStockCalc.jpg', 'Stock Calculator', 'a', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mra_comments`
--
ALTER TABLE `mra_comments`
  ADD PRIMARY KEY (`id_comnt`);

--
-- Indexes for table `mra_post`
--
ALTER TABLE `mra_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mra_comments`
--
ALTER TABLE `mra_comments`
  MODIFY `id_comnt` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mra_post`
--
ALTER TABLE `mra_post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
