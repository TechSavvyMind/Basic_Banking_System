-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 04:39 PM
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
-- Database: `grip`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `S.no` int(100) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Bank_balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`S.no`, `Name`, `Email`, `Bank_balance`) VALUES
(1, 'Pratyusha', 'Pratyushapaddu2714@gmail.com', 51000),
(2, 'Deepak', 'Deepakyerramj2@gmail.com', 50000),
(3, 'Sravs', 'sravanivakati123@outlook.com', 50000),
(4, 'Bobby', 'bobby1728@gmail.com', 75000),
(5, 'Aryan', 'Aryansathya5@gmail.com', 91270),
(6, 'Shalini', 'shalini1312@gmail.com', 69000),
(7, 'Sriya', 'Sriyasri@gmail.com', 58000),
(8, 'Y.Lakshmi Deepak', 'Yerramdeepak1312@gmail.com', 98000),
(9, 'Venu', 'Venudara143@gmail.com', 91000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` varchar(50) NOT NULL,
  `sender` varchar(50) DEFAULT NULL,
  `receiver` varchar(50) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `date and time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `sender`, `receiver`, `amount`, `date and time`) VALUES
('id-648efe5ace54e', 'Y. Lakshimi Deepak', 'Pratyusha', 1000, '18/06/23 - Sunday - 06:23:46 pm'),
('id-648f0e7e339f0', 'Y. Lakshimi Deepak', 'Sravs', 1000, '18/06/23 - Sunday - 07:32:38 pm'),
('id-648f14ed71e94', 'Y. Lakshimi Deepak', 'Pratyusha', 1000, '18/06/23 - Sunday - 08:00:05 pm'),
('id-6491afae22e11', 'Y. Lakshimi Deepak', 'Venu', 1000, '20/06/23 - Tuesday - 07:24:54 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
