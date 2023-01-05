-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 05:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event photography management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_details`
--

DROP TABLE IF EXISTS `candidate_details`;
CREATE TABLE `candidate_details` (
  `Candidate_NIC` varchar(12) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Contact_No` char(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Job_ID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate_details`
--

INSERT INTO `candidate_details` (`Candidate_NIC`, `Name`, `Contact_No`, `Email`, `Description`, `Job_ID`) VALUES
('881256789v', 'Ganeesha Hatharasingha', '0712222222', 'ganeesha123@gmail.com', 'Here is my cv', 'jb0001'),
('8934567890v', 'Himali Ravihari', '0775645654', 'himali92@gmail.com', 'CV uploaded', 'jb0001'),
('921234567v', 'Sahan Mihiranga', '0724543567', 'mihiranga@gmail.com', 'CV uploaded.Thank you.', 'jb0001'),
('931234567v', 'Kalana Hasaranga', '0712345678', 'hasranga93@gmail.com', 'CV is here', 'jb0002'),
('941234567v', 'Myura Vitharana', '0913456789', 'mayura123@gmail.com', 'CV uploaded', 'jb0002');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Event` text NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Name`, `Email`, `Event`, `Description`) VALUES
('Hashini Rajapaksha', 'hashinir@gmail.com', 'Birthday', 'Date:2021/11/23\r\nVenue:Kings Ballroom, Peradeniya rest house'),
('Sanduni Randeniya', 'sadunirandeniya67@gmail.com', 'Wedding', 'Date:2022/01/03\r\nVenue:Cinnamon grand, Colombo\r\n'),
('Pasan Senanayake', 'pasansenayake@gmail.com', 'Family function', 'Date:2021/11/19\r\nVenue:No 15, Horana road, Padukka'),
('Saman Karunarathne', 'samankr@yahoo.com', 'Religious event', 'Special mass for anniversary celebration of St. Ann Church, Kollupitiya\r\nDate:2021/12/12\r\n'),
('Ajith Ranasinghe', 'ajithranasinghe@yahoo.com', 'Musical concert', 'Date:2021/11/10\r\nVenue:Nelum Pokuna Theatre'),
('Rashipaba Perera', 'rdperera@icloud.com', 'Convocation', 'Date:2021/01/02\r\nVenue:BMICH,B auddhaloka Mawatha, Colombo 07'),
('Vishwa Godage', 'vishwag@gmail.com', 'Wedding', 'Date:2021/12/31\r\nVenue:Kalutara banquet hall, St. Sebastian Rd, Kalutara'),
('Shashani Jayalath', 'shashajayalath@gmail.com', 'Fashion show', 'Date:2021/10/31\r\nVenue:Town hall, Wellawatte'),
('Nilanka De Silva', 'nilanakds@gmail.com', 'Wedding', 'Date:2022/02/01\r\nVenue:Lagoon View banquet hall,\r\nNo. 692,\r\nGalle Main road,\r\nColombo road\r\n\r\n'),
('Mahesha Bandara', 'maheshbandara678@gmail.com', 'Maternity shoot', 'Date:2021/12/02\r\nVenue:Galle Face beach');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `text`) VALUES
(1, 'Devinya Vidanage', 'it21128868@my.sliit.lk', 'fsgsg'),
(3, 'Nethya Yavindi', 'nethyagoddess@gmail.com', 'jhvdkjb'),
(4, 'Devinya Vidanage', 'it21128868@my.sliit.lk', 'vgxxjwyhfx\r\n'),
(5, 'Devinya Vidanage', 'it21128868@my.sliit.lk', 'sgb'),
(6, 'Devinya Vidanage', 'it21128868@my.sliit.lk', 'sdrferg'),
(7, 'Devinya Vidanage', 'it21128868@my.sliit.lk', 'sca'),
(10, 'Devinya Vidanage', 'it21128868@my.sliit.lk', 'great'),
(11, 'Devinya Vidanage', 'it21128868@my.sliit.lk', 'gsfvjavx'),
(12, 'Devinya Vidanage', 'it21128868@my.sliit.lk', 'gsfvjavx'),
(13, 'Sandaru Vidanage', 'it21128868@my.sliit.lk', 'great'),
(14, 'Sandaru Vidanage', 'it21128868@my.sliit.lk', 'great'),
(15, 'Devinya Vidanage', 'it21128868@my.sliit.lk', 'great'),
(16, '', '', ''),
(17, 'Devinya Vidanage', 'it21128868@my.sliit.lk', 'greatt'),
(18, 'Sathira', 'it21138386@my.sliit.lk', 'Bad photos');

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

DROP TABLE IF EXISTS `paymentdetails`;
CREATE TABLE `paymentdetails` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `reciept_id` varchar(10) NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state_province` varchar(25) NOT NULL,
  `zipcode` varchar(7) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `payment_type` enum('credit','debit') NOT NULL,
  `cardholder_name` varchar(50) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `expiry_date` varchar(10) NOT NULL,
  `cvc_number` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentdetails`
--

INSERT INTO `paymentdetails` (`first_name`, `last_name`, `user_id`, `reciept_id`, `street_address`, `city`, `state_province`, `zipcode`, `phone`, `payment_type`, `cardholder_name`, `card_number`, `expiry_date`, `cvc_number`) VALUES
('Yohan', 'Perera', '12345', 'P123', 'No, 250/3A, Bellanwila', 'Colombo', 'Western', '1020', '0783424135', 'debit', 'Yohan', '123', '159', '154');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate_details`
--
ALTER TABLE `candidate_details`
  ADD PRIMARY KEY (`Candidate_NIC`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`reciept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
