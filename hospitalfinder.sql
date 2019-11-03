-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2019 at 12:20 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `admin_user_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `email`, `admin_user_name`, `admin_password`) VALUES
(3, 'skd8238@gmail.com', 'arcrector', '7589123456');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `areas_name` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `areas_name`, `pincode`) VALUES
(2, 'Chintal', '500054'),
(3, 'dlg', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bloodAvailbility`
--

CREATE TABLE `bloodAvailbility` (
  `blood_availbility_id` int(11) NOT NULL,
  `blood_group_name` varchar(255) NOT NULL,
  `blood_quantity` varchar(255) NOT NULL,
  `hospital_user_name` varchar(255) NOT NULL,
  `hospital_id` varchar(255) NOT NULL,
  `states` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodAvailbility`
--

INSERT INTO `bloodAvailbility` (`blood_availbility_id`, `blood_group_name`, `blood_quantity`, `hospital_user_name`, `hospital_id`, `states`, `city`, `area`) VALUES
(1, 'A+', '13', 'jio', '1', NULL, NULL, NULL),
(3, 'B+', '100', 'jio', '1', NULL, NULL, NULL),
(4, 'D', '90', 'jio', '1', 'telangana', 'Hyderabad', 'Chintal'),
(5, 'B+', '90', 'soft', '3', 'telangana', 'Hyderabad', 'Chintal'),
(6, 'D', '90', 'soft', '3', 'telangana', 'Hyderabad', 'Chintal'),
(7, 'B-', '0', 'soft', '3', 'telangana', 'Hyderabad', 'Chintal'),
(8, 'A', '899', 'robin', '5', 'Maha', 'Mumbai', 'dlg'),
(9, 'A+', '778', 'soft', '3', 'telangana', 'Hyderabad', 'Chintal');

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `blood_group_id` int(255) NOT NULL,
  `blood_group_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`blood_group_id`, `blood_group_name`) VALUES
(1, 'A+'),
(2, 'B+'),
(3, 'A'),
(4, 'D'),
(5, 'L'),
(6, 'B-');

-- --------------------------------------------------------

--
-- Table structure for table `citys`
--

CREATE TABLE `citys` (
  `city_id` int(11) NOT NULL,
  `citys_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citys`
--

INSERT INTO `citys` (`city_id`, `citys_name`) VALUES
(1, 'Hyderabad'),
(2, 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(255) NOT NULL,
  `doctor_name` varchar(255) DEFAULT NULL,
  `doctor_specialization` varchar(255) DEFAULT NULL,
  `doctor_qualifications` varchar(255) NOT NULL,
  `fromDate` varchar(255) DEFAULT NULL,
  `toDate` varchar(255) DEFAULT NULL,
  `states` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `hospital_id` varchar(255) DEFAULT NULL,
  `hospital_user_name` varchar(255) DEFAULT NULL,
  `doctor_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `doctor_name`, `doctor_specialization`, `doctor_qualifications`, `fromDate`, `toDate`, `states`, `city`, `area`, `pincode`, `hospital_id`, `hospital_user_name`, `doctor_photo`) VALUES
(1, 'Shubham', 'head', '12', '9am', '6pm', 'telangana', 'Hyderabad', 'Chintal', '500054', '1', 'jio', './media/doctorPhoto/happydoctor.jpg'),
(2, 'Robin', 'Lego', 'B-tech', '9am', '6pm', NULL, NULL, NULL, NULL, '3', 'soft', ''),
(3, 'Shubham', 'neck', '10', '99', '90', NULL, NULL, NULL, NULL, '5', 'robin', './media/doctorPhoto/user.png');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hospital_user_name` varchar(255) DEFAULT NULL,
  `hospital_password` varchar(255) DEFAULT NULL,
  `hospital_name` varchar(255) DEFAULT NULL,
  `treatment` varchar(255) DEFAULT NULL,
  `hospital_details` varchar(255) DEFAULT NULL,
  `hospital_phone_number` varchar(255) DEFAULT NULL,
  `hospital_ambulance_number` varchar(255) DEFAULT NULL,
  `hospital_address` varchar(255) DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `cover_photo` varchar(255) DEFAULT NULL,
  `states` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `email`, `hospital_user_name`, `hospital_password`, `hospital_name`, `treatment`, `hospital_details`, `hospital_phone_number`, `hospital_ambulance_number`, `hospital_address`, `profile_photo`, `photo1`, `photo2`, `photo3`, `photo4`, `cover_photo`, `states`, `city`, `area`) VALUES
(1, 'skd8238@gmail.com', 'jio', '758946', 'Rohitss', 'head', 'i am detILS', '9898989898', '988989898', '', './media/hospitalPhoto/Screenshot 2019-10-30 at 11.28.05 AM.png', './media/hospitalPhoto/Screenshot 2019-10-30 at 11.27.12 AM.png', './media/hospitalPhoto/Screenshot 2019-10-30 at 11.27.21 AM.png', './media/hospitalPhoto/Screenshot 2019-10-30 at 11.27.29 AM.png', './media/hospitalPhoto/Screenshot 2019-10-30 at 11.27.34 AM.png', './media/hospitalPhoto/Screenshot 2019-10-30 at 11.28.05 AM.png', 'telangana', 'Hyderabad', 'Chintal'),
(3, 'soft@gmail.com', 'soft', '758946', 'Testings', 'Blood', 'i am hospital', '8790475451', '909090909', '', './media/doctorPhoto/5.png', './media/hospitalPhoto/1.png', './media/hospitalPhoto/3.png', './media/hospitalPhoto/4.png', './media/hospitalPhoto/2.png', './media/doctorPhoto/5.png', 'telangana', 'Hyderabad', 'Chintal'),
(4, 'test@test.com', 'test', '758946', 'test', NULL, NULL, NULL, NULL, NULL, './media/hospitalPhoto/Screenshot 2019-11-02 at 10.19.52 AM.png', './media/hospitalPhoto/Screenshot 2019-11-02 at 10.20.10 AM.png', './media/hospitalPhoto/Screenshot 2019-11-02 at 10.20.12 AM.png', './media/hospitalPhoto/Screenshot 2019-11-02 at 10.20.01 AM.png', './media/hospitalPhoto/Screenshot 2019-11-02 at 10.19.59 AM.png', './media/hospitalPhoto/Screenshot 2019-11-02 at 10.19.52 AM.png', NULL, NULL, NULL),
(5, 'robin@gmail.com', 'robin', '758946', 'Robin Hospitals', 'Blood', 'I am Hospital', '999999999', '999999999', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Maha', 'Mumbai', 'dlg');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `hospital_user_name` varchar(255) DEFAULT NULL,
  `states` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `hospital_user_name`, `states`, `city`, `area`, `pincode`) VALUES
(2, NULL, 'telangana', NULL, NULL, NULL),
(7, NULL, 'telangana', 'hyderabad', NULL, NULL),
(8, '', 'telangana', 'Hyderabad', 'Chintal', '500054'),
(9, 'jio', 'telangana', 'Hyderabad', 'Chintal', '500054');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `states_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `states_name`) VALUES
(1, 'telangana'),
(2, 'Maha');

-- --------------------------------------------------------

--
-- Table structure for table `treatments`
--

CREATE TABLE `treatments` (
  `treatment_id` int(11) NOT NULL,
  `addTreatmentsName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatments`
--

INSERT INTO `treatments` (`treatment_id`, `addTreatmentsName`) VALUES
(64, 'head'),
(69, 'Blood');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `bloodAvailbility`
--
ALTER TABLE `bloodAvailbility`
  ADD PRIMARY KEY (`blood_availbility_id`);

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`blood_group_id`);

--
-- Indexes for table `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `treatments`
--
ALTER TABLE `treatments`
  ADD PRIMARY KEY (`treatment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bloodAvailbility`
--
ALTER TABLE `bloodAvailbility`
  MODIFY `blood_availbility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `blood_group_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `citys`
--
ALTER TABLE `citys`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `treatments`
--
ALTER TABLE `treatments`
  MODIFY `treatment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
