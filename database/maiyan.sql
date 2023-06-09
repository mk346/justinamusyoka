-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 02:52 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maiyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(8) NOT NULL COMMENT 'primary key',
  `name` varchar(255) NOT NULL COMMENT 'name of admin',
  `email` varchar(25) NOT NULL COMMENT 'email of admin',
  `phone` varchar(100) NOT NULL COMMENT 'admin phone number',
  `password` char(128) NOT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `name`, `email`, `phone`, `password`) VALUES
(1, 'justina musyoka', 'justinamusyoka@gmail.com', '0145275211', '34f16b99f5ce8a966eab2709ca0e2deb');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientID` int(8) NOT NULL COMMENT 'primary key',
  `username` varchar(25) NOT NULL COMMENT 'name',
  `phone` int(15) NOT NULL COMMENT 'phone number',
  `email` varchar(25) NOT NULL COMMENT 'email address',
  `location` varchar(255) NOT NULL COMMENT 'location',
  `type` varchar(100) NOT NULL,
  `date_ordered` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientID`, `username`, `phone`, `email`, `location`, `type`, `date_ordered`) VALUES
(5, 'Justo', 12345, 'mesh@gmail.com', '0', 'Formal Wear', '2023-06-06'),
(7, 'Justo', 12345, 'just@gmail.com', 'Justo', 'Delicate Fabrics', '2023-06-06'),
(8, 'meshack@gmail.com', 1234, 'meshack@gmail.com', 'rongai', 'Beddings', '2023-06-06'),
(9, 'mina', 727346900, 'mina@gmail.com', 'tumaini', 'Special Garments', '2023-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(8) NOT NULL COMMENT 'primary key',
  `date` date NOT NULL COMMENT 'date of order',
  `quantity` int(15) NOT NULL COMMENT 'quantity in kilograms',
  `clientID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(8) NOT NULL COMMENT 'primary key',
  `amount` int(15) NOT NULL COMMENT 'amount in Ksh',
  `orderID` int(8) NOT NULL COMMENT 'foreign key',
  `priceID` int(8) NOT NULL COMMENT 'foreign key'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pricelist`
--

CREATE TABLE `pricelist` (
  `priceID` int(8) NOT NULL COMMENT 'primary key',
  `price` int(11) NOT NULL COMMENT 'price per kg',
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricelist`
--

INSERT INTO `pricelist` (`priceID`, `price`, `category`) VALUES
(4, 80, 'Everyday Wear'),
(5, 120, 'Formal Wear'),
(6, 150, 'Delicate Fabrics'),
(7, 100, 'Beddings'),
(8, 150, 'Special Garments');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `itemID` int(8) NOT NULL COMMENT 'primary key',
  `name` varchar(15) NOT NULL COMMENT 'name of supply',
  `quantity` varchar(15) NOT NULL COMMENT 'available quantity in kgs',
  `price` int(11) NOT NULL,
  `date_purchased` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`itemID`, `name`, `quantity`, `price`, `date_purchased`) VALUES
(2, 'Downy', '20litres', 10500, '2023-06-05'),
(3, 'Drier/Washing M', '100kg', 50000, '2023-06-05'),
(4, 'Ironer Machine', '1kg', 3500, '2023-06-05'),
(5, 'Star Soft', '10litres', 11500, '2023-06-04'),
(6, 'Washing Powder', '20kg', 8000, '2023-06-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `foreign key` (`clientID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `pricelist`
--
ALTER TABLE `pricelist`
  ADD PRIMARY KEY (`priceID`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`itemID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'primary key';

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'primary key';

--
-- AUTO_INCREMENT for table `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `priceID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `itemID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
