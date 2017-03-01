-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2016 at 06:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snacktime`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminname` varchar(25) DEFAULT NULL,
  `adminusername` varchar(25) NOT NULL DEFAULT '',
  `adminpassword` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `adminusername`, `adminpassword`) VALUES
('anup', 'anup21017', 'sdfg'),
('kunal', 'kunal21027', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `customerid` int(11) DEFAULT NULL,
  `foodname` varchar(20) DEFAULT NULL,
  `foodquantity` int(11) DEFAULT NULL,
  `foodprice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `customerid`, `foodname`, `foodquantity`, `foodprice`) VALUES
(4, 456, 'spicy', 3, 370),
(5, 457, 'veggie pizza', 5, 170),
(6, 458, 'double cheese pizza', 2, 270);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `customername` varchar(25) DEFAULT NULL,
  `customeraddress` char(20) DEFAULT NULL,
  `contact` mediumtext,
  `customerusername` varchar(20) NOT NULL DEFAULT '',
  `customerpassword` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `customername`, `customeraddress`, `contact`, `customerusername`, `customerpassword`) VALUES
(456, 'shubham', 'b-201,sec-19,airoli', '8898600239', 'shub09', 'zxc'),
(457, 'sunny', 'thane', '9323998570', 'sun09', 'werty'),
(458, 'sonu', 'nerul', '9773190293', 'son09', 'erty'),
(459, 'sanjay', 'mulund', '9323998594', 'san09', 'uiui'),
(460, 'nisha                  ', 'thane', '9619152737', 'nish09', 'yuyu'),
(462, 'nikita                  ', '    mulund(E)', '8879238246', 'nik09', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodid` int(11) NOT NULL,
  `foodname` varchar(20) DEFAULT NULL,
  `foodprice` double DEFAULT NULL,
  `foodtype` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodid`, `foodname`, `foodprice`, `foodtype`) VALUES
(1, 'double cheese pizza', 270, 'non veg'),
(2, 'spicy chicken wrap', 170, 'non veg'),
(3, 'Aloo Tikki', 40, 'veg'),
(4, 'chicken nuggets     ', 200, 'non veg'),
(5, 'spicy cheese pizza', 470, 'non veg'),
(6, 'pops                ', 77, 'veg'),
(7, 'fries', 123, 'veg'),
(1456, 'wings               ', 99, 'non veg'),
(1457, ' grilled sandwich   ', 111, 'veg'),
(1458, 'Fish fillet         ', 112, 'non veg');

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE `foodorder` (
  `orderid` int(11) NOT NULL,
  `customerid` int(11) DEFAULT NULL,
  `totalbill` double DEFAULT NULL,
  `orderstatus` varchar(15) DEFAULT NULL,
  `orderdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodorder`
--

INSERT INTO `foodorder` (`orderid`, `customerid`, `totalbill`, `orderstatus`, `orderdate`) VALUES
(1, 456, 1110, 'delivered', '2016-06-21'),
(2, 457, 850, 'delivered', '2016-06-21'),
(3, 458, 540, 'Delivered', '2016-06-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminusername`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`,`customerusername`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodid`);

--
-- Indexes for table `foodorder`
--
ALTER TABLE `foodorder`
  ADD PRIMARY KEY (`orderid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=463;
--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1459;
--
-- AUTO_INCREMENT for table `foodorder`
--
ALTER TABLE `foodorder`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
