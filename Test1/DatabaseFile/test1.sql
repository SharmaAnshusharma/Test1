-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 10:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `custom_tbl`
--

CREATE TABLE `custom_tbl` (
  `id` bigint(20) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Amount` double NOT NULL,
  `Balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custom_tbl`
--

INSERT INTO `custom_tbl` (`id`, `Description`, `Amount`, `Balance`) VALUES
(28, 'Salary Credit', 10000, 10000),
(29, 'Shopping ', -1000, 9000),
(30, 'Bank Loan', 10000, 19000),
(31, 'Purchase Cycle', -2200, 16800),
(32, 'Room Rent', -2000, 14800),
(33, 'Salary Credit', 10000, 24800);

-- --------------------------------------------------------

--
-- Table structure for table `test_table_2`
--

CREATE TABLE `test_table_2` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_table_2`
--

INSERT INTO `test_table_2` (`ID`, `Name`) VALUES
(25, 'Text Box 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custom_tbl`
--
ALTER TABLE `custom_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_table_2`
--
ALTER TABLE `test_table_2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custom_tbl`
--
ALTER TABLE `custom_tbl`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `test_table_2`
--
ALTER TABLE `test_table_2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
