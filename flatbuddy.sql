-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2024 at 10:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

create database flatbuddy;
use flatbuddy;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flatbuddy`
--

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `flatdata`
--

CREATE TABLE `flatdata` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL,
  `Profile_img` varchar(30) DEFAULT NULL,
  `Location` varchar(60) DEFAULT NULL,
  `Looking_for` varchar(20) DEFAULT NULL,
  `Rent` varchar(20) DEFAULT NULL,
  `Occupancy` varchar(20) DEFAULT NULL,
  `Amenities` varchar(30) DEFAULT NULL,
  `Flat_photos` varchar(40) DEFAULT NULL,
  `Highlights` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flatdata`
--

INSERT INTO `flatdata` (`ID`, `Name`, `Email`, `Password`, `Profile_img`, `Location`, `Looking_for`, `Rent`, `Occupancy`, `Amenities`, `Flat_photos`, `Highlights`) VALUES
(1, 'Vibhav Shukla', 'vibhavshukla1112@gmail.com', '1234', 'images/Boy 2.jpg', 'Sector 62, Noida, Uttar Pradesh', 'Male', '2323', 'Single', 'wifi,washing,cooking,fridge', 'Balcony.jpg,Banglore.jpg,Bathroom2.jpg', 'Gym,Park,School'),
(2, 'Vibhav Shukla', 'vibhavshukla1112@gmail.com', '1234', 'images/Boy 3.jpg', 'Sector 62, Noida, Uttar Pradesh', 'Male', '2323', 'Single', 'wifi,washing,cooking', 'Balcony.jpg,Banglore.jpg,Bathroom2.jpg', 'Gym,Park,School'),
(3, 'fasfa', 'vibhavshukla1112@gmail.com', '111', 'images/6134175.jpg', 'hsdhasd', 'Male', '3232', 'Single', 'wifi,washing,cooking', 'Balcony.jpg,Banglore.jpg', 'Gym,Park,School'),
(4, 'Aman Shukla', 'shuklaanil1112@gmail.com', '1234', 'images/Boy 1.jpg', 'Delhi', 'Male', '5455', 'Single', 'wifi,washing,study', 'Bathroom3.jpg,Bed1.jpg,Bed2.jpg', 'Gym,Park,Swimming-Pool'),
(5, 'Ajay', 'test@gmail.com', '1234', 'images/Boy 3.jpg', 'Gurgaon', 'Male', '7000', 'Shared', 'parking,tv,study', 'Balcony.jpg,Bathroom1.jpg,Bathroom2.jpg', 'Gym,Pet-Friendly,Swimming-Pool'),
(6, 'Jay Singh', 'jay@gmail.com', '1234', 'images/Boy 3.jpg', 'Lucknow', 'Male', '9000', 'Any', 'wifi,washing,cooking', 'Bathroom3.jpg,Bed1.jpg,Bed2.jpg', 'Park,Pet-Friendly,Swimming-Pool'),
(7, 'Adarsh Mishra', 'subbhuchutiya@gail.com', '12346789', 'images/Boy4.jpg', 'Ghatkopar', 'Female', '7000', 'Shared', 'wifi,washing,cooking,fridge,pa', 'Balcony.jpg,Bathroom1.jpg,Bathroom2.jpg', 'Gym,Park,School,Swimming-Pool'),
(8, 'Naruto Mishra', 'naruto@gmail.com', '1234', 'images/Boy4.jpg', 'Prayagraj, Uttar Pradesh', 'Any', '6800', 'Any', 'wifi,cooking,fridge,study', 'Bathroom3.jpg,Bed1.jpg,Bed2.jpg', 'Gym,Park,School'),
(9, 'Raghav Ji', 'raghav@gmail.com', '1234', 'images/Boy 1.jpg', 'Nitikhand 2, Indirapuram, Ghaziabad', 'Female', '8000', 'Shared', 'wifi,cooking,fridge,parking', 'Bathroom3.jpg,Bed1.jpg,Bed2.jpg', 'Gym,Pet-Friendly,Swimming-Pool');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL,
  `User_Type` varchar(40) DEFAULT NULL,
  `Gender` varchar(40) DEFAULT NULL,
  `City` varchar(40) DEFAULT NULL,
  `Profile_Picture` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Name`, `Email`, `Password`, `User_Type`, `Gender`, `City`, `Profile_Picture`) VALUES
(1, 'Vibhav Shukla', 'vibhavshukla1112@gmail.com', '1234', 'buddy', 'Male', 'cnb', 'images/Banglore.jpg'),
(2, 'Aman Shukla', 'abcd@gmail.com', '123', 'buddy', 'Male', 'jai', 'images/6134175.jpg'),
(3, 'Aman Shukla', 'abcdef@gmail.com', '1234', 'buddy', 'Male', 'nag', 'images/Banglore.jpg'),
(4, 'Yash Dixit', 'xyz@gmail.com', '1234', 'buddy', 'Male', 'thn', 'images/Balcony.jpg'),
(5, 'Vibhav Shukla', 'testing@gmail.com', '1234', 'buddy', 'Male', 'goa', 'images/Bathroom2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flatdata`
--
ALTER TABLE `flatdata`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flatdata`
--
ALTER TABLE `flatdata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
