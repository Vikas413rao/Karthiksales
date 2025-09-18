-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 07:11 AM
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
-- Database: `karthiksales`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbrand`
--

CREATE TABLE `addbrand` (
  `id` int(20) NOT NULL,
  `bname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addbrand`
--

INSERT INTO `addbrand` (`id`, `bname`) VALUES
(9, 'Moksh Agarbatti'),
(10, 'Ullas Agarbatti'),
(11, 'Zed Black Agarbtti'),
(12, 'Shantala Agarbatti'),
(13, 'Darshan Agarbatti'),
(14, 'Mahamaya Agarbatti'),
(15, 'Liberty Agarbatti'),
(16, 'Amrutha Agarbatti');

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `id` int(20) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`id`, `brand`, `pname`, `image`, `price`, `Description`) VALUES
(8, '9', 'Champa', 'Champa', '200', 'Best smell'),
(9, '10', 'Ullas', 'Ullas', '40', '5in1'),
(10, '11', 'Zed Black', 'Zed Black', '150', 'Good product'),
(11, '11', 'black stone', 'black stone', 'Rs25', 'Good product'),
(12, '13', 'Darshan', 'Darshan', '150', 'Good product'),
(13, '15', 'White Stick', 'White Stick', '200', 'Best smell'),
(14, '14', 'Royal sandal', 'Royal sandal', '120', ''),
(15, '16', 'Black Stone', 'Black Stone', '90', 'Good product'),
(17, '16', 'sandalwood', 'sandalwood', '150', 'Good product'),
(18, '11', 'zed black pouch', 'zed black pouch', '60', 'pouch');

-- --------------------------------------------------------

--
-- Table structure for table `addstaff`
--

CREATE TABLE `addstaff` (
  `id` int(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `pnumber` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addstaff`
--

INSERT INTO `addstaff` (`id`, `sname`, `email`, `password`, `pnumber`, `address`) VALUES
(2, 'chiraj', 'chirajkenjila@gmail.com', '123456', '7259819255', 'htrxh');

-- --------------------------------------------------------

--
-- Table structure for table `addstock`
--

CREATE TABLE `addstock` (
  `id` int(20) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addstock`
--

INSERT INTO `addstock` (`id`, `sname`, `date`, `image`, `quantity`, `price`) VALUES
(6, 'ullas', '2024-02-02', 'ullas', '100', 'Rs50'),
(8, 'Shanthala Agarbatti', '2024-02-03', 'Shanthala Agarbatti', '100', 'Rs100');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'karthiksales@gmail.com', '12345'),
(2, 'karthiksales@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `id`, `qty`, `userid`) VALUES
(5, 9, '5', 'chiraj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(20) NOT NULL,
  `yname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `yname`, `email`, `subject`, `message`) VALUES
(1, 'vikas', 'vikas.rao0413@gmail.com', 'About there delivery sevices', 'good service'),
(2, 'vikas', 'vikas.rao0413@gmail.com', 'About there delivery sevices', 'delivery on time');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` bigint(10) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `sname`, `email`, `password`, `phone`) VALUES
(6, 'Vikas Rao', 'karthik sales', 'karthiksales@gmail.com', 12345, 7795052548),
(7, 'Chiraj', 'super market', 'chiraj@gmail.com', 89654, 9874585656);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbrand`
--
ALTER TABLE `addbrand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addstaff`
--
ALTER TABLE `addstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addstock`
--
ALTER TABLE `addstock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbrand`
--
ALTER TABLE `addbrand`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `addstaff`
--
ALTER TABLE `addstaff`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addstock`
--
ALTER TABLE `addstock`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
