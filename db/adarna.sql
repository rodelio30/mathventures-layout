-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2024 at 04:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adarna`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(155) NOT NULL,
  `Firstname` varchar(155) NOT NULL,
  `Middlename` varchar(155) NOT NULL,
  `Lastname` varchar(155) NOT NULL,
  `Username` varchar(155) NOT NULL,
  `Password` varchar(155) NOT NULL,
  `Section` varchar(155) NOT NULL,
  `Usertype` varchar(155) NOT NULL,
  `Status` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `Firstname`, `Middlename`, `Lastname`, `Username`, `Password`, `Section`, `Usertype`, `Status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin', 'n/a', 'admin', 'Active'),
(20240827, 'First Tester', 'Middle T1', 'Last T1', 'tester1@gmail.com', 'Last T12024-08-27', 'platinum', 'student', 'Active'),
(20240828, 'Second Tester', 'Middle T2', 'Last T2', 'second@gmail.com', 'Last T22024-08-28', 'tungsten', 'student', 'Active'),
(20240829, 'Third tester', 'Middle T3', 'Last T3', 'thirdt@gmail.com', 'Last T32024-08-30', 'manganese', 'student', 'Active'),
(202408290, 'Forth Tester', 'Middle T4', 'Last T4', 'ft@gmail.com', 'Last T42024-08-30', 'zinc', 'student', 'Active'),
(365565624, 'Jan', 'Migs', 'Juan', 'janmigs@gmail.com', 'Juan2024-07-21', 'zinc', 'student', 'Active'),
(2000021247, 'Juan', 'Cacho', 'Dela Cruz', 'juan1@gmail.com', 'Dela Cruz2024-07-19', 'zinc', 'student', 'Active'),
(2147483647, 'adad', 'adasd', 'asdad', 'e@gmail.com', 'asdad2024-07-22', 'silver', 'student', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student_chapters`
--

CREATE TABLE `student_chapters` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `chapter_number` int(11) NOT NULL,
  `score` int(11) NOT NULL CHECK (`score` >= 1 and `score` <= 10),
  `completed_date` date DEFAULT NULL,
  `status` enum('completed','not_completed') DEFAULT 'not_completed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_chapters`
--

INSERT INTO `student_chapters` (`id`, `student_id`, `chapter_number`, `score`, `completed_date`, `status`) VALUES
(1, 2000021247, 1, 3, '2024-08-28', 'completed'),
(2, 2000021247, 2, 8, '2024-08-28', 'completed'),
(3, 365565624, 1, 4, '2024-08-28', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(155) NOT NULL,
  `Firstname` varchar(155) NOT NULL,
  `Middlename` varchar(155) NOT NULL,
  `Lastname` varchar(155) NOT NULL,
  `Gender` varchar(155) NOT NULL,
  `Birthdate` varchar(155) NOT NULL,
  `Username` varchar(155) NOT NULL,
  `Section` varchar(155) NOT NULL,
  `Status` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Firstname`, `Middlename`, `Lastname`, `Gender`, `Birthdate`, `Username`, `Section`, `Status`) VALUES
(20240827, 'First Tester', 'Middle T1', 'Last T1', 'Male', '2024-08-27', 'tester1@gmail.com', 'platinum', 'Active'),
(20240828, 'Second Tester', 'Middle T2', 'Last T2', 'Female', '2024-08-28', 'second@gmail.com', 'tungsten', 'Active'),
(20240829, 'Third tester', 'Middle T3', 'Last T3', 'Male', '2024-08-30', 'thirdt@gmail.com', 'manganese', 'Active'),
(202408290, 'Forth Tester', 'Middle T4', 'Last T4', 'Male', '2024-08-30', 'ft@gmail.com', 'zinc', 'Active'),
(365565624, 'JanA', 'Migs', 'Juan', 'Male', '2024-07-21', 'janmigs@gmail.com', 'zinc', 'Active'),
(2000021247, 'Juan', 'Cacho', 'Dela Cruz', 'Female', '2024-07-19', 'juan1@gmail.com', 'zinc', 'Active'),
(2147483647, 'adad', 'adasd', 'asdad', 'Male', '2024-07-22', 'e@gmail.com', 'silver', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_chapters`
--
ALTER TABLE `student_chapters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_chapters`
--
ALTER TABLE `student_chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_chapters`
--
ALTER TABLE `student_chapters`
  ADD CONSTRAINT `student_chapters_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
