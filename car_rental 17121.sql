-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 02:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(100) NOT NULL,
  `adminPass` varchar(100) NOT NULL,
  `adminName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminPass`, `adminName`) VALUES
('admin', '123', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` varchar(100) NOT NULL,
  `customerPass` varchar(100) NOT NULL,
  `customerName` varchar(100) NOT NULL,
  `customerPhoneNumber` varchar(100) NOT NULL,
  `houseLotNum` varchar(100) NOT NULL,
  `postalCode` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `customerPass`, `customerName`, `customerPhoneNumber`, `houseLotNum`, `postalCode`, `city`) VALUES
('eqalkimi', '26eef21b029b7cf9f81f27afa4f3daba', 'Muhammad Haiqal Hakimi Bin Mohd Rozman', '+60165445710', ' Apt. Impian Baiduri', '46100', 'PJ'),
('user', '202cb962ac59075b964b07152d234b70', 'azri', '+60165445710', 'rumah ali', '43100', 'KL');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `rentalID` int(100) NOT NULL,
  `customerID` varchar(100) NOT NULL,
  `vehicleID` varchar(100) NOT NULL,
  `rentalDate` date NOT NULL,
  `rentalStartTime` time NOT NULL,
  `rentalReturnTime` time NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`rentalID`, `customerID`, `vehicleID`, `rentalDate`, `rentalStartTime`, `rentalReturnTime`, `status`) VALUES
(6, 'eqalkimi', 'CVC', '2021-01-12', '22:41:02', '45:41:02', 'ACCEPTED'),
(7, 'user', 'SG01', '2021-01-12', '22:41:02', '45:41:02', 'PENDING'),
(8, 'eqalkimi', 'CVC', '2021-01-12', '22:41:02', '45:41:02', 'DECLINED'),
(9, 'eqalkimi', 'CVC', '2021-01-12', '22:41:02', '45:41:02', 'ACCEPTED'),
(19, 'user', 'V01', '2021-01-17', '21:27:00', '09:27:00', 'ACCEPTED');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicleID` varchar(100) NOT NULL,
  `vehicleBrand` varchar(100) NOT NULL,
  `vehicleModel` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicleID`, `vehicleBrand`, `vehicleModel`, `quantity`) VALUES
('CVC', 'Honda', 'Civic', 3),
('SG01', 'Proton', 'Saga', 10),
('V01', 'Honda', 'CRV', 1),
('V02', 'Honda', 'Civic', 1),
('V03', 'Perodua', 'Myvi', 3),
('V04', 'Perodua', 'Alza', 2),
('V05', 'Proton', 'Iriz', 3),
('V06', 'Proton', 'Saga', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`rentalID`),
  ADD KEY `customerID` (`customerID`),
  ADD KEY `vehicleID` (`vehicleID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `rentalID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `rental_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`),
  ADD CONSTRAINT `rental_ibfk_2` FOREIGN KEY (`vehicleID`) REFERENCES `vehicle` (`vehicleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
