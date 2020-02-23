-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2018 at 09:29 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district`) VALUES
(1, 'Barguna '),
(2, 'Barisal '),
(3, 'Bhola '),
(4, 'Jhalokati '),
(5, 'Patuakhali '),
(6, 'Pirojpur '),
(7, 'Bandarban '),
(8, 'Brahmanbaria '),
(9, 'Chandpur '),
(10, 'Chittagong '),
(11, 'Comilla '),
(12, 'Cox\'s Bazar '),
(13, 'Feni '),
(14, 'Khagrachhari '),
(15, 'Lakshmipur '),
(16, 'Noakhali '),
(17, 'Rangamati '),
(18, 'Dhaka '),
(19, 'Faridpur '),
(20, 'Gazipur '),
(21, 'Gopalganj '),
(22, 'Jamalpur '),
(23, 'Kishoreganj '),
(24, 'Madaripur '),
(25, 'Manikganj '),
(26, 'Munshiganj '),
(27, 'Mymensingh '),
(28, 'Narayanganj '),
(29, 'Narsingdi '),
(30, 'Netrakona '),
(31, 'Rajbari '),
(32, 'Shariatpur '),
(33, 'Sherpur '),
(34, 'Tangail '),
(35, 'Bagerhat '),
(36, 'Chuadanga '),
(37, 'Jessore '),
(38, 'Jhenaidah '),
(39, 'Khulna '),
(40, 'Kushtia '),
(41, 'Magura '),
(42, 'Meherpur '),
(43, 'Narail '),
(44, 'Satkhira '),
(45, 'Bogra '),
(46, 'Joypurhat '),
(47, 'Naogaon '),
(48, 'Natore '),
(49, 'Nawabganj '),
(50, 'Pabna '),
(51, 'Rajshahi '),
(52, 'Sirajganj '),
(53, 'Dinajpur '),
(54, 'Gaibandha '),
(55, 'Kurigram '),
(56, 'Lalmonirhat '),
(57, 'Nilphamari '),
(58, 'Panchagarh '),
(59, 'Rangpur '),
(60, 'Thakurgaon '),
(61, 'Habiganj '),
(62, 'Moulvibazar '),
(63, 'Sunamganj '),
(64, 'Sylhet ');

-- --------------------------------------------------------

--
-- Table structure for table `other_blood_bank_status`
--

CREATE TABLE `other_blood_bank_status` (
  `id` int(11) NOT NULL,
  `InstitutionName` varchar(50) NOT NULL,
  `ins_phone` varchar(50) NOT NULL,
  `ins_location` varchar(50) NOT NULL,
  `A_plus` varchar(50) NOT NULL,
  `A_minus` varchar(50) NOT NULL,
  `B_plus` varchar(50) NOT NULL,
  `B_minus` varchar(50) NOT NULL,
  `AB_plus` varchar(50) NOT NULL,
  `AB_minus` varchar(50) NOT NULL,
  `O_plus` varchar(50) NOT NULL,
  `O_minus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registered_donor`
--

CREATE TABLE `registered_donor` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `localtion` varchar(50) NOT NULL,
  `homeaddress` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `homephone` varchar(50) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `previousdonationdata` varchar(50) NOT NULL,
  `donateoptiontime` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registered_donor`
--

INSERT INTO `registered_donor` (`id`, `first_name`, `last_name`, `email`, `display_name`, `district`, `city`, `localtion`, `homeaddress`, `phone`, `homephone`, `bloodgroup`, `previousdonationdata`, `donateoptiontime`, `gender`) VALUES
(1, 'Masum', 'Mahbub', 'mahbubmasum@gmail.com', 'Mahbub', 'Dhaka', 'Dhaka', 'Mirpur-1', 'jani na kothay', '1234567890', '8765432', 'A+', '', '3 Month', 'Male'),
(2, 'Shihab', 'Sharia', 'ss@gmail.con', '', '2018:10:02', 'Dhaka', 'Mirpur-2', 'abcd', '019120000000', '9876543', 'O+', '2018-10-02', '3 Month', 'Male'),
(3, 'Mostafiz', 'Marif', 'maruf@gmail.com', '', '2018:10:02', 'Dhaka', 'Mirpur-1', '234', '', '', 'A+', '', '3 Month', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `district`, `city`, `mobile`, `password`) VALUES
(1, 'masum', 'mahbub@gmail.com', 'feni', 'feni sadar', '23456789', '2345678'),
(2, 'masum', 'mahbub@gmail.com', 'feni', 'feni sadar', '23456789', '2345678'),
(3, 'shihub', 'sharia@gmail.com', 'Dhaka', 'Mirpur-1', '0167312345', '1234'),
(4, 'Rana', 'rana@gmail.com', '', '', '0171234567', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_donor`
--
ALTER TABLE `registered_donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `registered_donor`
--
ALTER TABLE `registered_donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
