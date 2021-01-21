-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 02:44 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `designation_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation_name`) VALUES
(1, 'FullTime Employee'),
(2, 'PartTime Employee'),
(3, 'Casual Worker'),
(4, 'Contract Technician'),
(5, 'Welder'),
(6, 'Vetenary'),
(7, 'Bio chemical Expert'),
(8, 'Farm Manager');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_ID` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `date_of_birth` date NOT NULL,
  `nickname` varchar(25) DEFAULT NULL,
  `gennder` varchar(25) NOT NULL,
  `phone_number` varchar(32) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `designatory` varchar(50) NOT NULL,
  `next_of_kin` varchar(25) NOT NULL,
  `kin_phone` varchar(32) NOT NULL,
  `address1` varchar(50) DEFAULT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `town` varchar(25) DEFAULT NULL,
  `post_code` int(11) DEFAULT NULL,
  `county` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_ID`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `nickname`, `gennder`, `phone_number`, `email_address`, `designatory`, `next_of_kin`, `kin_phone`, `address1`, `address2`, `town`, `post_code`, `county`, `country`) VALUES
(1, 'Japhat', 'Makanga', 'Mukuru', '1985-10-19', 'Kanga', 'Male', '0701010101', 'admin@gmail.com', '8', 'John Murage ', '0712345678', 'po box 58 ', NULL, 'Thumaita', 55, 'Kirinyaga', 'Kenya'),
(2, 'Jackline', 'Nyaguthie', 'Murigi', '0000-00-00', 'Jackie', 'Female', '0701010101', 'jackline@gmail.com', '3', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya'),
(3, 'James', 'Muriuki', 'Munene', '0000-00-00', 'Jamo', 'Male', '0701010101', 'james@gmail.com', '2', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya'),
(4, 'Vincent ', 'Kibanga', 'kariuki', '0000-00-00', 'Vini', 'Male', '0701010101', 'vincent@gmail.com', '4', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya'),
(5, 'Irene', 'Wawira', 'Gathoni', '0000-00-00', 'wawi', 'Female', '0701010101', 'irene@gmail.com', '7', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya'),
(6, 'Monica ', 'Wangechi', 'Ndegwa', '0000-00-00', NULL, 'Female', '0701010101', 'monica@gmail.com', '5', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya'),
(7, 'Geoffery', 'Munene', 'Kinga', '1985-10-19', NULL, 'Male', '0701010101', 'geoffery@gmail.com', '6', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Thumaita', 90100, 'Machakos', 'Kenya'),
(8, 'Martha', 'Mukangu', 'Murugi', '0000-00-00', NULL, 'Female', '0701010101', 'martha@gmail.com', '2', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya'),
(9, 'John', 'Masika', 'Kariuki', '0000-00-00', 'Johnie', 'Male', '0701010101', 'john@gmail.com', '1', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya'),
(10, 'Cicily', 'Mbarire', 'kariuki', '0000-00-00', NULL, 'Female', '0701010101', 'cicily@gmail.com', '5', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya'),
(11, 'Mathayo', 'Mugwanja', 'Wakenda', '0000-00-00', 'Mathayo', 'Male', '0701010101', 'mathayo@gmail.com', '3', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya'),
(12, 'Jeremiah', 'Kanini', 'Kega', '0000-00-00', 'kanini', 'Male', '0701010101', 'jeremiah@gmail.com', '4', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya'),
(13, 'Peter', 'Mwingi', 'Njagua', '0000-00-00', 'peter', 'Male', '0701010101', 'peter@gmail.com', '1', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya'),
(14, 'Susan', 'Mwirigi', 'Marakara', '0000-00-00', 'suzie', 'Female', '0701010101', 'susan@gmail.com', '1', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya'),
(15, 'John', 'Cena', 'Kariuki', '0000-00-00', 'Johnie', 'Male', '0701010101', 'john2@gmail.com', '1', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya'),
(16, 'Johnie', 'Njangi', 'Mwaniki', '0000-00-00', 'Johnie', 'Male', '0701010101', 'john3@gmail.com', '1', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya'),
(17, 'James', 'Bundi', 'Kamau', '0000-00-00', 'kamau', 'Male', '0701010101', 'james2@gmail.com', '1', 'Jimmy Gathu', '0712345678', 'po box 58 ', NULL, 'Machakos', 90100, 'Machakos', 'Kenya');

-- --------------------------------------------------------

--
-- Table structure for table `employees_on_duty`
--

CREATE TABLE `employees_on_duty` (
  `id` int(11) NOT NULL,
  `employees_id` varchar(32) NOT NULL,
  `work_id` varchar(32) NOT NULL,
  `supervisor` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees_on_duty`
--

INSERT INTO `employees_on_duty` (`id`, `employees_id`, `work_id`, `supervisor`) VALUES
(3, '8', '2', '0'),
(4, '9', '2', '1'),
(5, '10', '2', '0'),
(6, '16', '3', '0'),
(7, '17', '3', '0'),
(8, '6', '4', '0'),
(9, '11', '5', '1'),
(10, '12', '5', '1'),
(11, '13', '5', '1'),
(12, '7', '1', '0'),
(13, '3', '6', '0'),
(14, '13', '1', '0'),
(19, '8', '1', '0'),
(20, '16', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

CREATE TABLE `leave_requests` (
  `leave_request_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `leave_request` int(11) NOT NULL,
  `date_requested` date NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`leave_request_id`, `user_id`, `leave_request`, `date_requested`, `start_date`, `end_date`, `status`) VALUES
(1, 2, 1, '2020-01-15', '2020-01-20', '2020-02-25', 1),
(2, 3, 3, '2020-01-15', '2020-01-20', '2020-02-25', 1),
(3, 4, 3, '2020-01-15', '2020-01-20', '2020-02-25', 3),
(4, 5, 2, '2020-01-15', '2020-01-20', '2020-02-25', 1),
(5, 6, 2, '2020-01-15', '2020-01-20', '2020-02-25', 2),
(6, 7, 1, '2020-01-15', '2020-01-20', '2020-02-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `leave_status`
--

CREATE TABLE `leave_status` (
  `id` int(11) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_status`
--

INSERT INTO `leave_status` (`id`, `status`) VALUES
(1, 'Pending'),
(2, 'Approved'),
(3, 'Denied');

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `leave_id` int(11) NOT NULL,
  `leave_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`leave_id`, `leave_name`) VALUES
(1, 'Annual Leave'),
(2, 'Maternity Leave'),
(3, 'Paternity Leave  '),
(4, 'Sick Leave');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `passcode` varchar(32) NOT NULL,
  `type` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `passcode`, `type`, `fullname`) VALUES
(1, 'admin@gmail.com', '1234', 1, 'Japhat Makanga Mukuru'),
(2, 'jackline@gmail.com', '4321', 2, 'Jackline Nyaguthie Murigi');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` varchar(4) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `status`) VALUES
('0', 'No'),
('1', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(25) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_name`, `start_date`, `end_date`, `description`) VALUES
(1, 'Planting Maize', '2020-10-15', '2020-10-17', 'All employees to be ready and working at 8:00 am.\r\n        Late comers will get penalised'),
(2, 'Harvesting Cabbages', '2020-10-17', '2020-10-19', 'All employees to be ready and working at 8:00 am. Late comers will get penalised'),
(3, 'Tlling Coffee Farm', '2020-10-19', '2020-10-21', 'All employees to be ready and working at 8:00 am.\r\n        Late comers will get penalised'),
(4, 'Preparing Carrot Beds', '2020-10-21', '2020-10-23', 'All employees to be ready and working at 8:00 am. Late comers will be penalised'),
(5, 'Repairing Lower Fence', '2020-10-23', '2020-10-25', 'All employees to be ready and working at 8:00 am. Late comers will be penalised');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_ID`,`email_address`);

--
-- Indexes for table `employees_on_duty`
--
ALTER TABLE `employees_on_duty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD PRIMARY KEY (`leave_request_id`);

--
-- Indexes for table `leave_status`
--
ALTER TABLE `leave_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `employees_on_duty`
--
ALTER TABLE `employees_on_duty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `leave_requests`
--
ALTER TABLE `leave_requests`
  MODIFY `leave_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `leave_status`
--
ALTER TABLE `leave_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
