-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 04:48 PM
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
-- Database: `lucid_healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `post` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `post`) VALUES
(201, 'Md. Ahsanul Amin', 'Receptioni'),
(202, 'Shila Ahmed', 'Executive '),
(203, 'Tahiyat Himel', 'Admin-inch'),
(204, 'Afsana Haider', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `doctor_id` int(3) NOT NULL,
  `patient_id` int(4) NOT NULL,
  `app_date` date DEFAULT NULL,
  `app_time` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(3) NOT NULL,
  `doctor_name` varchar(20) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `speciality` varchar(10) DEFAULT NULL,
  `visiting_hour` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `degree`, `speciality`, `visiting_hour`) VALUES
(101, 'Dr. Humayun Kabir', 'MBBS', 'Medicine', '11am-5pm'),
(102, 'Dr. Israt Porshi', 'FCPS', 'Nephrology', '9am-3pm'),
(103, 'Dr. Nusrat Promi', 'MD', 'Anesthesio', '8am-5pm'),
(104, 'Dr. Mohammad Amir', 'MD', 'Pathology', '10am-6pm'),
(105, 'Dr. Antor Mozammel', 'MS', 'Otorhinola', '12pm-6pm'),
(106, 'Dr. Tanvir Huda', 'MS', 'Radiology', '10am-3pm');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(4) NOT NULL,
  `patient_name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_password` varchar(30) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `admin_id` int(3) NOT NULL,
  `patient_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `rep_id` int(4) NOT NULL,
  `patient_id` int(4) NOT NULL,
  `patient_name` varchar(30) DEFAULT NULL,
  `doctor_id` int(3) NOT NULL,
  `doctor_name` varchar(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `symptoms` varchar(500) NOT NULL,
  `admin_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`doctor_id`,`patient_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`rep_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
