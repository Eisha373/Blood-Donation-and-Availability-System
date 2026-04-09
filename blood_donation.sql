-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2026 at 04:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `email` int(100) DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `age`, `gender`, `blood_group`, `city`, `phone`, `email`, `registration_date`) VALUES
(1, '', 22, 'Female', 'A+', 'Jhang', 0, 0, '2025-06-28 19:34:13'),
(2, 'Eisha TIR RAAZIA', 22, 'Female', 'A+', 'Jhang', 2147483647, 0, '2025-06-28 19:44:59'),
(3, 'Maheen', 18, 'Female', 'B+', 'Lahore', 2147483647, 0, '2025-06-29 15:18:40'),
(4, 'fatima', 20, 'Female', 'B+', 'lahore', 2147483647, 0, '2025-06-30 09:53:46'),
(5, 'fatima zaman', 20, 'Female', 'B+', 'lahore', 311416555, 0, '2025-06-30 10:07:31'),
(6, 'Eisha Sohail', 22, 'Female', 'A+', 'Lahore', 2147483647, 0, '2025-07-03 15:19:13'),
(7, 'Eisha Sohail', 23, 'Female', 'A+', 'Lahore', 2147483647, 0, '2025-07-25 19:42:53'),
(8, 'Ibraheem ', 25, 'Male', 'O-', 'Islamabad', 2147483647, 0, '2025-07-29 12:29:14'),
(9, 'Ali', 18, 'Male', 'O+', 'Lahore', 2147483647, 0, '2025-07-29 12:38:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
