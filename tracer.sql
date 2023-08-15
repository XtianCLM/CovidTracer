-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 07:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer`
--

-- --------------------------------------------------------

--
-- Table structure for table `enterfacilities`
--

CREATE TABLE `enterfacilities` (
  `id` int(11) NOT NULL,
  `Facility` varchar(30) NOT NULL,
  `Fullname` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Room` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enterfacilities`
--

INSERT INTO `enterfacilities` (`id`, `Facility`, `Fullname`, `Status`, `Address`, `Room`) VALUES
(1, 'Alijis Quarantine', 'John Xyryl Pedrosa', 'Negative', 'Brgy Alijis', 12),
(3, 'Agro Mansilingan', 'John doe', 'Positive', 'Brgy Mansilingan', 15);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `FacCode` varchar(30) NOT NULL,
  `FacName` varchar(30) NOT NULL,
  `FacLocation` varchar(30) NOT NULL,
  `FacRooms` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `FacCode`, `FacName`, `FacLocation`, `FacRooms`) VALUES
(1, '0001', 'Alijis Quarantine', 'Brgy Alijis', 32),
(2, '0002', 'Agro Mansilingan', 'Brgy Mansilingan', 32),
(3, '0003', 'North point Tourist Inn', 'Brgy Mandalagann', 32),
(4, '0004', 'Midway ref', 'Brgy Alijis', 30);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `HospitalName` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `AvailableRoom` int(15) NOT NULL,
  `Legend` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `HospitalName`, `Location`, `AvailableRoom`, `Legend`) VALUES
(1, 'Riverside Hospital', 'BS. Aquino Drive', 10, 'Normal'),
(4, 'Bacolod Our Lady of Mercy Specialty Hospital', 'Brgy Bata', 10, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `masterlogin`
--

CREATE TABLE `masterlogin` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `roles` varchar(30) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Code` varchar(30) NOT NULL,
  `EstabName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masterlogin`
--

INSERT INTO `masterlogin` (`id`, `Fullname`, `Email`, `Phone`, `Gender`, `Address`, `Username`, `Password`, `roles`, `Status`, `Code`, `EstabName`) VALUES
(9, '       Christian lloyd Magtoli', 'Xtian@gmail.com', '        0912', 'Male', 'Brgy Alijis', '        Xtian', 'password', 'admin', '       Normal', '', ''),
(16, '   Mark Delosreyes', 'Delos@gmail.com', '   091235703', 'Male', 'Brgy Mansilingan', '   Reyes', 'password', 'citizen', '   Normal', '   Cit88453', ''),
(17, '     Tadenz Pedrosa', 'Tadenz@gmail.com', '     0912357', 'Male', '  Brgy Mansilingan', '     Tadenz', 'password', 'citizen', '   Normal', '   Cit31551', ''),
(21, '       Shed Pedrosa', 'Shed@gmail.com', '       09123', 'Male', '     Brgy Mansilingan', '       Shed', 'password', 'establishment', '  Normal', '  Cit86983', '    Super Market'),
(25, ' Christian lloyd Magtolis', 'Uptemp@gmail.com', ' 09271359910', 'Male', 'Brgy Alijis', ' XtianLloyd', 'password', 'citizen', ' Normal', ' Cit62410', ''),
(26, 'John Xyryl', 'Xyryl@gmail.com', '09271359910', 'Male', 'Brgy Alijis', 'Xyryl', 'password', 'employee', 'Normal', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rtpcr`
--

CREATE TABLE `rtpcr` (
  `id` int(11) NOT NULL,
  `TestCode` varchar(15) NOT NULL,
  `TestResult` varchar(10) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rtpcr`
--

INSERT INTO `rtpcr` (`id`, `TestCode`, `TestResult`, `Fullname`, `Address`, `Dates`) VALUES
(4, '0003', 'Pending', 'Sherwin Dave Pedrosa', 'Brgy Mansilingan', '2022-03-09'),
(5, '0001', 'Positive', 'John doe', 'Brgy Mansilingan', '2022-03-09'),
(6, '0003', 'Negative', 'John Xyryl Pedrosa', 'Brgy Alijis', '2022-03-09'),
(9, '0005', 'Positive', 'Jade Deen', 'Brgy Mandalagan', '2022-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `travelhistory`
--

CREATE TABLE `travelhistory` (
  `id` int(11) NOT NULL,
  `EstabName` varchar(50) NOT NULL,
  `CitCode` varchar(30) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travelhistory`
--

INSERT INTO `travelhistory` (`id`, `EstabName`, `CitCode`, `Fullname`, `Dates`) VALUES
(2, 'Super Market', 'Cit31551', 'Tadenz Pedrosa', '2022-03-10'),
(3, 'Super Market', 'Cit88453', 'Mark Delosreyes', '2022-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `zonelist`
--

CREATE TABLE `zonelist` (
  `id` int(11) NOT NULL,
  `Code` varchar(30) NOT NULL,
  `Brgy` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zonelist`
--

INSERT INTO `zonelist` (`id`, `Code`, `Brgy`, `City`) VALUES
(1, '0001', 'Brgy Mansilingan', 'Bacolod City'),
(2, '0002', 'Brgy Alijis', 'Bacolod City'),
(3, '0003', 'Brgy Bata', 'Bacolod City'),
(4, '0004', 'Brgy Mandalagan', 'Bacolod City'),
(5, '0005', 'Brgy Handumanan', 'Bacolod City'),
(6, '0006', 'Brgy Murcia', 'Bacolod City'),
(7, '0007', 'Brgy Paglaum', 'Bacolod City');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enterfacilities`
--
ALTER TABLE `enterfacilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masterlogin`
--
ALTER TABLE `masterlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rtpcr`
--
ALTER TABLE `rtpcr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travelhistory`
--
ALTER TABLE `travelhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zonelist`
--
ALTER TABLE `zonelist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enterfacilities`
--
ALTER TABLE `enterfacilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `masterlogin`
--
ALTER TABLE `masterlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `rtpcr`
--
ALTER TABLE `rtpcr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `travelhistory`
--
ALTER TABLE `travelhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zonelist`
--
ALTER TABLE `zonelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
