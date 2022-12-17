-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2022 at 05:41 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arngren`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(255) NOT NULL,
  `adminUsername` varchar(255) NOT NULL,
  `adminPassword` varchar(255) NOT NULL,
  `logStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminUsername`, `adminPassword`, `logStatus`) VALUES
(1, 'admin', 'admin123', 0),
(2, 'admin2', 'admin123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productQty` int(11) NOT NULL,
  `productPrice` decimal(10,2) NOT NULL,
  `productIMG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productQty`, `productPrice`, `productIMG`) VALUES
(1001, 'Electric ATV (Red)', 5, 8999.99, 'https://www.arngren.net/ATV-1.s10_1000watt_rotmetallic_seitevr.jpg'),
(1002, 'Elektrisk-GoKart', 10, 8998.00, 'https://www.arngren.net/ATV-5.gokart_800_seitevr.jpg'),
(1003, 'Elektrisk- Jeep & Golf-Bil', 8, 89998.00, 'https://www.arngren.net/Jeep.c6.jpg'),
(1004, 'Electric T-Truck', 5, 119998.00, 'https://www.arngren.net/T-truck.jpg'),
(1008, 'Electric Scooter', 6, 9099.99, 'https://arngren.net/sitebuilder/images/elsykkel-elsykkel9-600x375.jpg'),
(1009, 'Electric Car', 16, 10599.99, 'https://www.arngren.net/sitebuilder/images/elbil-2-14-450x600.jpg'),
(1014, 'Binocular T-300', 6, 549.99, 'https://www.arngren.net/sitebuilder/images/kikkert-71012-438x235.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `orderID` int(255) NOT NULL,
  `userID` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `orderDate` date NOT NULL,
  `orderTime` time NOT NULL,
  `Qty` int(10) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`orderID`, `userID`, `fullname`, `email`, `orderDate`, `orderTime`, `Qty`, `productName`, `total`, `address`, `state`, `city`, `zip`) VALUES
(1, 1014, 'Wibu', 'wibumibu@smail.com\r\n', '2022-01-18', '13:42:45', 1, 'Electric ATV', 10998.99, 'Morgedalsvegen 23, 0378 Oslo, Norway', 'Østlandet', 'Oslo', 378);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstName`, `lastName`, `password`, `email`, `logStatus`) VALUES
(1000, 'Deba', 'Debaba', 'Debaba13@', 'debaba@smail.com', 0),
(1013, 'Oya', 'Oyayo', 'Oyayo01@', 'oyayo01@smail.com', 0),
(1014, 'Wibu', 'Mibu', 'Wibumibu13@', 'wibumibu@smail.com', 0),
(1016, 'Yuubida', 'Bida', 'Yuubida31@', 'yuubida@smail.com', 0),
(1028, 'Walaowe', 'Wowe', 'Walaowe13@', 'walaowe09@smail.com', 0),
(1032, 'Asdas', 'Asadasa', 'Asdas13@', 'asdas@smail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1015;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `orderID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1034;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
