-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 05:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_cab`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pickup` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `phone`, `email`, `pickup`, `person`, `date`) VALUES
(10, 'Pratik Verma', '09131867993', 'satwikverma0902@gmail.com', 'Kerala', '4', '2021-05-19 18:30:00'),
(11, '', '', '', '', '', '0000-00-00 00:00:00'),
(12, '', '', '', '', '', '0000-00-00 00:00:00'),
(13, '', '', '', '', '', '0000-00-00 00:00:00'),
(14, '', '', '', '', '', '0000-00-00 00:00:00'),
(15, '', '', '', '', '', '0000-00-00 00:00:00'),
(16, '', '', '', '', '', '0000-00-00 00:00:00'),
(17, '', '', '', '', '', '0000-00-00 00:00:00'),
(18, '', '', '', '', '', '0000-00-00 00:00:00'),
(19, '', '', '', '', '', '0000-00-00 00:00:00'),
(20, 'nitin', '9852147630', 'nikita@gmail.com', 'Delhi', '5', '2021-05-20 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `id` int(11) NOT NULL,
  `droplocation` varchar(255) NOT NULL,
  `pickuplocation` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `driver` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`id`, `droplocation`, `pickuplocation`, `image`, `name`, `price`, `driver`, `contact`, `status`) VALUES
(1, 'Noida', 'Delhi ', 'upload/car3.jpg', 'TATA TIAGO XS', '20', 'Rajesh Kumar', '8989764534', 1),
(2, 'Chhindwara', 'Delhi ', 'upload/car.png', 'ETRIGA', '15', 'Vikas Sahu', '9867436576', 1),
(3, 'Srinagar', 'Jammu', 'upload/car5.png', 'SEDAN Honda City', '20', 'M.K.Reddy', '9876543210', 1),
(4, 'Noida', 'jammu', 'upload/car2.png', 'TATA INDIGO', '14', 'Vikas ', '9876543210', 1),
(5, 'Mumbai', 'Delhi', 'upload/car4.jpg', 'TATA VERNA XS', '20', 'Vikas Sahu', '9876543210', 0),
(6, 'Noida', 'Delhi', 'upload/car1.png', 'safari', '1500', 'raman', '1236547990', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `address`) VALUES
(1, 'Pratik Verma', 'pratikverma0902@gmail.com', '1234', '09131867993', 'Vivekanand colony chhindwara, gwalior'),
(2, 'satwik saxena', 'satwikverma0902@gmail.com', '3434', '8989695676', 'Vivekanand colony chhindwara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `car_details`
--
ALTER TABLE `car_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
