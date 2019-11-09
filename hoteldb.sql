-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 07:35 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boutiquedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `appid` int(11) NOT NULL,
  `gno` int(11) NOT NULL,
  `staffnr` int(11) NOT NULL,
  `apptype` varchar(30) NOT NULL,
  `appdate` date NOT NULL,
  `cancel` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appid`, `gno`, `staffnr`, `apptype`, `appdate`, `cancel`) VALUES
(1, 1, 2, 'Class B', '0000-00-00', 'Yes'),
(2, 1, 2, 'Class A', '0000-00-00', 'No'),
(3, 1, 0, 'Dress fitting', '0000-00-00', 'No'),
(4, 1, 0, 'Dress fitting', '0000-00-00', 'No'),
(5, 1, 0, 'Class A', '0000-00-00', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `bookingno` int(11) NOT NULL,
  `gno` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `dressid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(15) NOT NULL,
  `Status` varchar(11) NOT NULL DEFAULT 'pending',
  `amount` int(11) NOT NULL,
  `quant` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `ddate` date NOT NULL,
  `checkinDate` date NOT NULL,
  `checkoutDate` date NOT NULL,
  `canceldate` date NOT NULL,
  `no_room` int(50) NOT NULL,
  `no_people` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`bookingno`, `gno`, `room_id`, `dressid`, `did`, `color`, `size`, `Status`, `amount`, `quant`, `bdate`, `ddate`, `checkinDate`, `checkoutDate`, `canceldate`, `no_room`, `no_people`) VALUES
(5, 1, 4, 0, 0, '', '', 'Approved', 3012, 0, '0000-00-00', '0000-00-00', '2017-07-12', '2017-07-26', '0000-00-00', 1, 1),
(6, 1, 5, 0, 0, '', '', 'Approved', 5000, 0, '0000-00-00', '0000-00-00', '2017-07-12', '2017-07-31', '0000-00-00', 1, 1),
(7, 1, 6, 0, 0, '', '', 'pending', 3350, 0, '0000-00-00', '0000-00-00', '2017-07-12', '2017-07-30', '0000-00-00', 1, 1),
(8, 1, 8, 0, 0, '', '', 'pending', 1230, 0, '0000-00-00', '0000-00-00', '2017-07-12', '2017-07-27', '0000-00-00', 1, 1),
(9, 1, 1, 0, 0, '', '', 'pending', 2500, 0, '0000-00-00', '0000-00-00', '2017-10-23', '2017-10-26', '0000-00-00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guest`
--

CREATE TABLE `tbl_guest` (
  `gno` int(11) NOT NULL,
  `idno` varchar(13) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `province` varchar(20) NOT NULL,
  `hstraddr` varchar(100) NOT NULL,
  `htown` varchar(100) NOT NULL,
  `hpcode` varchar(5) NOT NULL,
  `cellno` varchar(12) NOT NULL,
  `emailaddr` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guest`
--

INSERT INTO `tbl_guest` (`gno`, `idno`, `surname`, `firstname`, `username`, `pwd`, `province`, `hstraddr`, `htown`, `hpcode`, `cellno`, `emailaddr`) VALUES
(1, '9001315759087', 'Mugangati', 'Adorn', 'Adornist', 'Adornist77@tut', 'Limpopo', 'P. O Box 2150\r\nGiyani \r\n0826', 'Giyani', '0826', '0826392050', 'tinjombo77@webmail.co.za'),
(2, '9305275509085', 'Modiba', 'Oliver', 'Oly', '1111', 'Limpopo', 'PO Box 15\r\nMunnik\r\n0703', 'Tzaneen', '0568', '0713498071', 'olivergerson20@gmail.com'),
(3, '7855451525261', 'moeti', 'michel', 'moeti', 'Moeti', 'Limpopo', 'Po Box 2383\r\ndhnxj', 'Polokwane', '0700', '0485848256', 'moet@gmail.com'),
(4, '921225549508', 'khosa', 'nhlamulo', 'khosa', 'Nk2285@#', 'Limpopo', 'babanana 427', 'tsaneen', '0871', '07911553', 'nhlamulooriel@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_refreshments`
--

CREATE TABLE `tbl_refreshments` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `wprice` int(11) NOT NULL,
  `jprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_refreshments`
--

INSERT INTO `tbl_refreshments` (`id`, `quantity`, `wprice`, `jprice`) VALUES
(1, 150, 1075, 1450),
(2, 200, 1400, 1900),
(3, 250, 1725, 2350),
(4, 300, 1900, 2500),
(5, 350, 2200, 2900),
(6, 400, 2500, 3300);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(20) NOT NULL,
  `room_price` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `room_name`, `room_price`, `status`) VALUES
(1, 'Room 1', '2500', 'active'),
(2, 'Room 2', '3500', 'active'),
(3, 'Room 3', '2600', 'active'),
(4, 'Room 4', '3012', 'active'),
(5, 'Room 5', '5000', 'active'),
(6, 'Room 6', '3350', 'active'),
(7, 'Room 7', '4500', 'active'),
(8, 'Room 8', '1230', 'active'),
(9, 'Room 9', '2000', 'active'),
(10, 'Room 10', '2850', 'active'),
(11, 'Room 11', '3520', 'active'),
(12, 'Room 12', '2420', 'active'),
(13, 'Room 1', '2500', 'active'),
(14, 'room 2', '3500', 'active'),
(15, 'room 3', '2600', 'active'),
(16, 'room 4', '3012', 'active'),
(17, 'room 5', '5000', 'active'),
(18, 'room 6', '3350', 'active'),
(19, 'room 7', '4500', 'active'),
(20, 'Room 8', '1230', 'active'),
(21, 'Room 9', '2000', 'active'),
(22, 'Room 10', '2850', 'active'),
(23, 'Room 11', '3520', 'active'),
(24, 'Room 12', '2420', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staffnr` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dateAppointed` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `cellno` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `job` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staffnr`, `fname`, `lname`, `username`, `password`, `dateAppointed`, `email`, `cellno`, `address`, `job`) VALUES
(2, 'Adornist', 'Mugangati', 'adornist77', 'Adornist77@tut', '2016-09-29', 'tinjombo77@webmail.co.za', '0833244083', 'Hlomela 125, Giyani', 'Programmer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`bookingno`);

--
-- Indexes for table `tbl_guest`
--
ALTER TABLE `tbl_guest`
  ADD PRIMARY KEY (`gno`);

--
-- Indexes for table `tbl_refreshments`
--
ALTER TABLE `tbl_refreshments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staffnr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `appid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `bookingno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_guest`
--
ALTER TABLE `tbl_guest`
  MODIFY `gno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_refreshments`
--
ALTER TABLE `tbl_refreshments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staffnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
