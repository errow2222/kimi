-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 08:13 AM
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
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `name` varchar(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `status` enum('present','absent') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`name`, `student_id`, `date`, `status`) VALUES
('Errow Mirandilla', 101, '2024-06-01', 'present'),
('Errow Mirandilla', 101, '2024-06-05', 'absent'),
('Errow Mirandilla', 101, '2024-06-06', 'present'),
('Errow Mirandilla', 101, '2024-06-06', 'present'),
('Errow Mirandilla', 101, '2024-06-18', 'absent'),
('Errow Mirandilla', 101, '2024-06-18', 'absent'),
('Errow Mirandilla', 101, '2024-06-18', 'absent'),
('Errow Mirandilla', 101, '2024-06-18', 'absent');

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`username`, `password`) VALUES
('guardian', 'guardian123');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `student_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_date` date NOT NULL,
  `outstanding_balance` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`student_id`, `amount`, `payment_date`, `outstanding_balance`) VALUES
(101, 1000.00, '2024-06-01', 10000.00),
(101, 1000.00, '2024-06-02', 9000.00),
(101, 1000.00, '2024-06-04', 8000.00),
(101, 1000.00, '2024-06-10', 7000.00);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `name` varchar(255) NOT NULL,
  `student_id` int(100) NOT NULL,
  `awards` varchar(255) NOT NULL,
  `date_awarded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`name`, `student_id`, `awards`, `date_awarded`) VALUES
('Errow Mirandilla', 101, 'With Honor', '2024-06-01'),
('Errow Mirandilla', 101, 'With Honor, With High Honor', '2024-06-02'),
('Errow Mirandilla', 101, 'With Honor, With High Honor, With Highest Honor', '2024-06-03'),
('Errow Mirandilla', 101, 'With Honor, With High Honor, With Highest Honor, With Highest Honor', '2024-06-03'),
('Ethan Mirandilla', 102, 'With High Honor', '2024-06-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
