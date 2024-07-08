-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2024 at 02:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `uname`, `pass`) VALUES
(0, 'admin', 'a123');

-- --------------------------------------------------------

--
-- Table structure for table `donor_registration`
--

CREATE TABLE `donor_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `fname` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `age` int(6) DEFAULT NULL,
  `bggroup` varchar(10) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `mno` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor_registration`
--

INSERT INTO `donor_registration` (`id`, `name`, `fname`, `address`, `city`, `age`, `bggroup`, `email`, `mno`) VALUES
(31, 'imran', 'yusuf', 'opp, central hub\r\n', 'anand', 25, 'O+', 'imran@gmail.com', '134567890'),
(32, 'imtiyaz', 'yusuf', 'opp, central hub\r\n', 'anand', 26, 'A-', 'imtiyaz@gmail.c', '12365561232'),
(33, 'sufiyan', 'yusuf', 'opp, central hub\r\n', 'anand', 26, 'O+', 'sufiyan@gmail.c', '9945461671'),
(34, 'atib', 'faruk', 'opp, central hub\r\n', 'anand', 22, 'O-', 'atib@gmail.com', '9945461671'),
(36, 'usman', 'yusuf', 'opp, central hub\r\n', 'anand', 21, 'O+', 'usman@gmail.com', '9945461671'),
(37, 'abdul rahman', 'yusuf', 'opp, Samiha Banglows', 'anand', 26, 'A+', 'abdulrahman@gma', '9945461671');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_b`
--

CREATE TABLE `exchange_b` (
  `id` int(11) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `fname` varchar(10) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `city` varchar(8) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `mno` varchar(13) DEFAULT NULL,
  `bggroup` varchar(8) DEFAULT NULL,
  `ebggroup` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exchange_b`
--

INSERT INTO `exchange_b` (`id`, `name`, `fname`, `address`, `city`, `age`, `email`, `mno`, `bggroup`, `ebggroup`) VALUES
(6, 'tosif', 'yusuf', 'opp, central hub', 'anand', 21, '9784563215', 'q@gmail.com', 'O+', 'A+'),
(7, 'vasim', 'yusuf', 'opp, central hub\r\n', 'anand', 22, '9945461671', 'vasim@gmail.c', 'O-', 'A-'),
(8, 'kasim', 'yusuf', 'opp, central hub\r\n', 'anand', 23, '8320693856', 'kasim@gmail.c', 'A+', 'O+'),
(9, 'ahmed', 'yusuf', 'opp, central hub\r\n', 'anand', 24, '9156953261', 'ahmed@gmail.c', 'A-', 'O-'),
(10, 'arfan', 'yusuf', 'opp, Samiha Banglows', 'anand', 26, '9876543210', 'abdulrahman@g', 'A+', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `out_stock_b`
--

CREATE TABLE `out_stock_b` (
  `id` int(11) NOT NULL,
  `bname` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `mno` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `out_stock_b`
--

INSERT INTO `out_stock_b` (`id`, `bname`, `name`, `mno`) VALUES
(32, 'O+', 'tosif', '9784563215'),
(33, 'O-', 'vasim', '9945461671'),
(34, 'A+', 'kasim', '8320693856'),
(35, 'A-', 'ahmed', '9156953261'),
(36, 'A+', 'arfan', '9876543210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_registration`
--
ALTER TABLE `donor_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange_b`
--
ALTER TABLE `exchange_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_stock_b`
--
ALTER TABLE `out_stock_b`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_registration`
--
ALTER TABLE `donor_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `exchange_b`
--
ALTER TABLE `exchange_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `out_stock_b`
--
ALTER TABLE `out_stock_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
