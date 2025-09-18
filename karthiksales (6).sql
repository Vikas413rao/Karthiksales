-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 05:50 AM
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
(17, 'Moksh Brand'),
(18, 'Ullas Brand'),
(19, 'Zed Black Brand'),
(20, 'Shantala Brand'),
(21, 'Darshan Brand'),
(22, 'Mahamaya Brand'),
(23, 'Liberty Brand'),
(24, 'Amrutha Brand');

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `id` int(20) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`id`, `brand`, `pname`, `image`, `price`, `Description`) VALUES
(55, '17', 'Chandana Agarbatti', 'Chandana Agarbattichanda moksh brand.jpg', 150, 'This product contain 100 grms of insance stick in a single packter'),
(57, '17', 'Champa Agarbatti', 'Champa Agarbattichampa moksh brand.png', 200, 'This product contain 100 grms of insance stick in a single packte (6packet)'),
(58, '17', 'Sandal Agarbatti', 'Sandal Agarbattisandal.png', 150, 'This product has 12 Packets. In each packets 100 grams of incense stick'),
(59, '17', 'Lavender Agarbatti', 'Lavender Agarbattilavender moksh brnd.jpg', 150, 'This product has 12 Packets. In each packets 100 grams of incense stick'),
(60, '24', 'Amrutha Lavender Agarbatti', 'Amrutha Lavender Agarbattilavender.png', 80, 'Amrutha lavender contains 80 grams of sticks in each packet'),
(61, '24', 'Amrutha Sugandh', 'Amrutha Sugandhamrutha sugandh.jpg', 70, 'Amrutha sugandh contains 130 grams of incense stick '),
(62, '18', 'Ullas Agarbatti', 'Ullas Agarbattiullas-perfume-aromatic-agarbatti (2).jpg', 60, 'Ullas Agarbatti (6 pack) in one set '),
(63, '18', 'Ullas Agrbatti MAX', 'Ullas Agrbatti MAXUllas max.png', 300, 'Ullas Agarbatti MAX contains 110 grams of stick in each packet'),
(64, '19', 'Zed Black Agarbatti', 'Zed Black AgarbattiZed-Black-3-in-1-Medium-Packet-and-Outer-3.png', 130, 'Zed black 3 in 1 product (12 packets) in each packets it contains 100 grms of incense stick'),
(65, '20', 'Shantala Agarbatti', 'Shantala Agarbattishanthala-tube-orange-500x500.png', 40, 'Shantala 3 in 1 Agarbatti contains 90g of sticks '),
(66, '21', 'Black Stone', 'Black Stoneblack stone.jpg', 280, 'Black Stone agarbatti (420 sticks) '),
(67, '21', 'Bharat Darshan Agarbatti', 'Bharat Darshan Agarbattibharat darsha.png', 200, 'Bharta Darshan stick mixed 120 g of stick in 6 packet'),
(68, '22', 'Royal sandal', 'Royal sandalraoyal sandal mahamaya.jpeg', 150, 'Royal Sandal (12pack) big .'),
(69, '23', 'Black Stick Agarbatti', 'Black Stick Agarbattiblack-sticks-eco-500x500.png', 200, 'Black Stick (6 pack) conatins 80 grams of stick'),
(70, '23', 'White Stick Agarbatti', 'White Stick Agarbattiwhite stick.png', 200, 'White Stick (6 pack) each pack contains 80 grms os stick');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `address` varchar(200) NOT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `name`, `email`, `phone`, `district`, `pincode`, `address`, `userid`) VALUES
(7, 'Chirag', 'chiragrj06@gmail.com', '779505254', '', 575022, 'hosabettu surathkal', 'karthiksales@gmail.com'),
(8, 'Vikas Rao', 'vikas.rao0413@gmail.com', '7795052548', '', 575022, 'beeri kotekar post', 'vikas.rao0413@gmail.com');

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
  `date1` date DEFAULT NULL,
  `quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addstock`
--

INSERT INTO `addstock` (`id`, `sname`, `date`, `date1`, `quantity`) VALUES
(68, '55', '2024-04-24', NULL, '100'),
(69, '57', '2024-04-24', '2024-04-25', '40'),
(70, '58', '2024-04-25', NULL, '55'),
(71, '59', '2024-04-25', NULL, '35'),
(74, '60', '2024-04-25', NULL, '20'),
(77, '61', '2024-04-25', NULL, '60'),
(79, '62', '2024-04-25', NULL, '55');

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
(3, 'karthiksales@gmail.com', 'Karthik@123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `qty` float NOT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `id`, `qty`, `userid`) VALUES
(69, 27, 70, 'karthiksales@gmail.com'),
(70, 27, 2, 'karthiksales@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `id` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`id`, `sname`, `amount`) VALUES
(3, 'super market', '13000'),
(5, 'karthik sales', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `external_bill`
--

CREATE TABLE `external_bill` (
  `id` int(20) NOT NULL,
  `bno` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `bsid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `external_bill`
--

INSERT INTO `external_bill` (`id`, `bno`, `name`, `phone`, `date`, `product`, `qty`, `price`, `total`, `status`, `bsid`) VALUES
(63, '1', 'Chiraj', '9874585656', '2024-04-26', 'champa', '5', '12', '60', 'Confirm', '31'),
(64, '2', 'Vikas Rao', '7795052548', '2024-04-11', 'champa', '3', '12', '36', 'Confirm', '31'),
(65, '3', 'Vikas Rao', '7795052548', '2024-04-15', 'Ullas', '3', '40', '120', 'Confirm', '32'),
(66, '3', 'Vikas Rao', '7795052548', '2024-04-15', 'Zed Black', '4', '150', '600', 'Confirm', '35'),
(67, '4', 'Vikas Rao', '7795052548', '2024-04-15', 'Ullas', '3', '40', '120', 'Confirm', '32'),
(68, '4', 'Vikas Rao', '7795052548', '2024-04-15', 'White Stick', '6', '150', '900', 'Confirm', '34'),
(69, '5', 'Vikas Rao', '7795052548', '2024-04-19', 'Ullas', '4', '40', '160', 'Confirm', '32'),
(70, '6', 'Vikas Rao', '7795052548', '2024-04-21', 'champa', '3', '12', '36', 'Confirm', '41'),
(74, '7', 'Vikas Rao', '7795052548', '2024-04-21', 'Ullas', '1', '40', '40', 'Confirm', '52'),
(77, '8', 'Vikas Rao', '7795052548', '2024-04-22', 'champa', '1', '12', '12', '', '51'),
(78, '9', 'Vikas Rao', '7795052548', '2024-04-23', 'Ullas', '5', '40', '200', 'Confirm', '52'),
(79, '10', 'Vikas Rao', '7795052548', '2024-04-23', 'Ullas', '3', '40', '120', 'Confirm', '52');

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
(2, 'vikas', 'vikas.rao0413@gmail.com', 'About there delivery sevices', 'delivery on time'),
(3, 'vikas', 'new@gmail.com', 'sasffsd', 'product is vwery good and they deliverd the product on time\r\n'),
(4, 'vikas', 'karthiksales@gmail.com', 'About there delivery sevices', 'on time delivery with free delivery cahrge');

-- --------------------------------------------------------

--
-- Table structure for table `ordertb`
--

CREATE TABLE `ordertb` (
  `orderid` int(20) NOT NULL,
  `orderno` varchar(50) NOT NULL,
  `id` int(20) NOT NULL,
  `qty` float NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `userid` varchar(200) NOT NULL,
  `paymentmethod` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `deliver` varchar(50) NOT NULL,
  `esdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordertb`
--

INSERT INTO `ordertb` (`orderid`, `orderno`, `id`, `qty`, `date`, `userid`, `paymentmethod`, `status`, `deliver`, `esdate`) VALUES
(32, 'O001', 29, 3, '2024-04-24 07:12:38.354764', 'vikas.rao0413@gmail.com', 'cash_on_delivery', '', 'Delivered', '2024-04-29'),
(33, 'O001', 27, 3, '2024-04-24 07:12:38.354764', 'vikas.rao0413@gmail.com', 'cash_on_delivery', '', 'Delivered', '2024-04-29'),
(34, 'O002', 26, 4, '2024-04-25 03:49:35.576878', 'vikas.rao0413@gmail.com', 'cash_on_delivery', '', '', '2024-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `totalamt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `sname`, `email`, `password`, `phone`, `totalamt`) VALUES
(10, 'Vikas Rao', 'karthik sales', 'vikas.rao0413@gmail.com', 'Vikas@123', 7795052548, ''),
(11, 'Chiraj', 'super market', 'chiraj@gmail.com', 'Chiraj@123', 7795052549, ''),
(12, 'Chirag', 'nama market', 'chirag@gmail.com', 'Chirag@123', 9675463423, '');

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
-- Indexes for table `address`
--
ALTER TABLE `address`
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
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `external_bill`
--
ALTER TABLE `external_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertb`
--
ALTER TABLE `ordertb`
  ADD PRIMARY KEY (`orderid`);

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `addstaff`
--
ALTER TABLE `addstaff`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addstock`
--
ALTER TABLE `addstock`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `external_bill`
--
ALTER TABLE `external_bill`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ordertb`
--
ALTER TABLE `ordertb`
  MODIFY `orderid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
