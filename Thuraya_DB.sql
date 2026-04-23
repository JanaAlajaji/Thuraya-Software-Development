-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2026 at 11:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Thuraya_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `national_id` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `feedback` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `national_id`, `birthdate`, `nationality`, `mobile`, `email`, `password`, `semester`, `feedback`) VALUES
('Jana', 'alajaji', '1122334455', '2005-09-06', 'Saudi Arabia', '0509106514', 'Jana1alajaji@gmail.com', 'Jana12', 7, 'Is the best application with a strong meaning and a clear purpose 👍🏻🤍'),
('Shatha ', 'alsahli', '1133552244', '2005-01-01', 'Saudi Arabia', '0551116740', 'Shatha@gmail.com', 'Shatha1', 7, 'I didn’t expect Saudi Arabia to have such amazing places. Thank you for this beautiful website.🤝🏻'),
('Shahad ', 'Alotaibi', '1155223344', '2005-01-01', 'Saudi Arabia', '0504927650', 'Shahad@gmail.com', 'Shahad1', 7, 'The website taught me so much about Saudi Arabia. I really enjoyed browsing the gallery and watching the video.🤩');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`national_id`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
