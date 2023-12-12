-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 06:16 PM
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
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfood`
--

CREATE TABLE `addfood` (
  `food_id` varchar(30) NOT NULL,
  `food_name` varchar(30) NOT NULL,
  `food_price` int(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addfood`
--

INSERT INTO `addfood` (`food_id`, `food_name`, `food_price`, `image`) VALUES
('f1', 'rice', 56, '12a86ef7b034b8fab08940c0d00b26bd.jpg'),
('f5', 'tea', 24, 'e3473c020cb36dbdd2e76e093216c9f9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addmenu`
--

CREATE TABLE `addmenu` (
  `menu_id` varchar(30) NOT NULL,
  `menu_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmenu`
--

INSERT INTO `addmenu` (`menu_id`, `menu_name`) VALUES
('', ''),
('m1', 'dinner'),
('m2', 'dinner');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` text NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', '1234567'),
('admin1', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` char(30) NOT NULL,
  `mobile` int(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `mobile`, `address`, `email`, `password`) VALUES
('Sabrina Yesmin', 1879303516, 'ctg', 'sabrinasabrin599@gmail.com', '12345'),
('Sabrina Yesmin', 1879303516, 'ctg', 'sabrinasabrin599@gmail.com', '123'),
('Sabrina Yesmin', 1879303516, 'ctg', 'sabrinasabrin599@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` varchar(30) NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `order_date`) VALUES
('O-831', 'c-80', '0000-00-00'),
('O-820', 'c-80', '0000-00-00'),
('O-111', 'c-80', '0000-00-00'),
('O-538', 'c-80', '0000-00-00'),
('O-38', 'c-80', '0000-00-00'),
('O-413', '', '0000-00-00'),
('O-888', '', '0000-00-00'),
('O-802', '', '0000-00-00'),
('O-301', '', '0000-00-00'),
('O-978', 'c-80', '0000-00-00'),
('O-348', 'c-80', '0000-00-00'),
('O-79', 'c-80', '0000-00-00'),
('O-375', 'c-80', '0000-00-00'),
('O-564', 'c-80', '0000-00-00'),
('O-224', 'c-80', '0000-00-00'),
('O-198', 'c-80', '0000-00-00'),
('O-50', 'c-80', '0000-00-00'),
('O-458', 'c-80', '0000-00-00'),
('O-822', 'c-80', '0000-00-00'),
('O-97', 'c-80', '0000-00-00'),
('O-332', 'c-80', '0000-00-00'),
('O-516', 'c-80', '0000-00-00'),
('O-729', '', '0000-00-00'),
('O-89', '', '0000-00-00'),
('O-497', '', '0000-00-00'),
('O-23', '', '0000-00-00'),
('O-750', '', '0000-00-00'),
('O-957', '', '0000-00-00'),
('O-961', '', '0000-00-00'),
('O-77', '', '0000-00-00'),
('O-34', '', '0000-00-00'),
('O-12', '', '0000-00-00'),
('O-665', '', '0000-00-00'),
('O-163', '', '0000-00-00'),
('O-826', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `name` char(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_line`
--

CREATE TABLE `order_line` (
  `food_id` varchar(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `food_price` int(100) NOT NULL,
  `total` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_line`
--

INSERT INTO `order_line` (`food_id`, `quantity`, `food_price`, `total`) VALUES
('', 0, 0, 0),
('', 0, 0, 0),
('', 11, 0, 0),
('', 1, 0, 0),
('O-516', 11, 0, 0),
('O-516', 11, 0, 0),
('O-516', 11, 0, 0),
('O-516', 11, 0, 0),
('O-516', 11, 0, 0),
('O-516', 11, 0, 0),
('O-516', 0, 0, 0),
('O-516', 0, 0, 0),
('', 0, 0, 0),
('f2', 0, 0, 0),
('f2', 0, 0, 0),
('f1', 1, 30, 30),
('f1', 1, 30, 30),
('f1', 5, 30, 150),
('f1', 5, 30, 150),
('f3', 11, 300, 3300),
('f1', 11, 30, 330),
('f1', 11, 30, 330),
('f1', 11, 30, 330),
('f1', 11, 30, 330),
('f1', 12, 30, 360),
('f1', 12, 30, 360),
('f1', 11, 30, 330),
('f1', 11, 30, 330),
('f1', 11, 30, 330),
('f1', 11, 30, 330),
('f1', 11, 30, 330),
('f1', 11, 30, 330),
('f1', 11, 30, 330);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `menu_id` varchar(30) NOT NULL,
  `menu_name` varchar(30) NOT NULL,
  `food_id` varchar(30) NOT NULL,
  `food_name` varchar(30) NOT NULL,
  `food_price` int(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`menu_id`, `menu_name`, `food_id`, `food_name`, `food_price`, `image`) VALUES
('', '', '', '', 0, 'd7af8a5f39be044e9882509f819b9c19.'),
('m1', 'breakfast', 'f1', 'snacks', 30, 'ba9d2bea82f5961de4f097f4dc4b7e76.jpg'),
('m2', 'dinner', 'f2', 'rice', 20, '0d97edd77c3765709075735ab3a3e46c.jpg'),
('m3', 'lunch', 'f3', 'biriyani', 300, 'a40d8fe01f75233df0143fd37cab3316.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `menu_id` varchar(30) NOT NULL,
  `food_id` varchar(30) NOT NULL,
  `food_name` varchar(30) NOT NULL,
  `food_price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`menu_id`, `food_id`, `food_name`, `food_price`) VALUES
('m1', 'f1', 'breakfast', 30),
('m2', 'f2', 'rice', 20),
('m3', 'f3', 'lunch', 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addfood`
--
ALTER TABLE `addfood`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `addmenu`
--
ALTER TABLE `addmenu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`menu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
