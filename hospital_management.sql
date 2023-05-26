-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 10:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(100) NOT NULL,
  `User_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `User_id`) VALUES
('', ''),
('siya', '20ce62');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Pfname` varchar(100) NOT NULL,
  `Plname` varchar(100) NOT NULL,
  `Patient_id` int(10) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Admission_date` date NOT NULL,
  `Admission_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Pfname`, `Plname`, `Patient_id`, `Gender`, `Admission_date`, `Admission_id`) VALUES
('Siya', 'Chodnekar', 1, 'Female', '0000-00-00', '6675'),
('wedqwsdqd', 'qwdqwdqwd', 10, 'mLW', '2022-12-05', 'QWQWQWD');

-- --------------------------------------------------------

--
-- Table structure for table `patient_report`
--

CREATE TABLE `patient_report` (
  `Pfname` varchar(100) NOT NULL,
  `Plname` varchar(100) NOT NULL,
  `Patient_id` int(20) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Doctor_name` varchar(100) NOT NULL,
  `Doctor_id` int(20) NOT NULL,
  `Diagnosis` text NOT NULL,
  `Disease` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_report`
--

INSERT INTO `patient_report` (`Pfname`, `Plname`, `Patient_id`, `Gender`, `Doctor_name`, `Doctor_id`, `Diagnosis`, `Disease`) VALUES
('siya', 'prabhu', 1, 'f', 'rajesh', 2, 'dsfyjgdueb dnefguifh dyeigejfb ', 'dtefdte'),
('Siya', 'Chodnekar', 4, 'Female', 'ram', 3, 'dveydve vdeufr vfyrfvr', 'hrbfirhfb fhrfb');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_id` int(20) NOT NULL,
  `Ward` varchar(50) NOT NULL,
  `Room_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `staff_id` int(20) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`first_name`, `last_name`, `staff_id`, `designation`) VALUES
('qwsdqwd', 'qwsdqwdq', 3, '3ef34f3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_id`);

--
-- Indexes for table `patient_report`
--
ALTER TABLE `patient_report`
  ADD PRIMARY KEY (`Patient_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
