-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 04:50 PM
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
-- Database: `bachelor`
--

-- --------------------------------------------------------

--
-- Table structure for table `b1`
--

CREATE TABLE `b1` (
  `Niloy` varchar(255) DEFAULT NULL,
  `Atik` varchar(255) DEFAULT NULL,
  `Akib` varchar(255) DEFAULT NULL,
  `Istiak` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b1`
--

INSERT INTO `b1` (`Niloy`, `Atik`, `Akib`, `Istiak`) VALUES
('240', NULL, NULL, NULL),
(NULL, NULL, NULL, '250'),
(NULL, NULL, NULL, '595'),
(NULL, NULL, '800', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `b1-names`
--

CREATE TABLE `b1-names` (
  `Niloy` varchar(255) DEFAULT NULL,
  `Atik` varchar(255) DEFAULT NULL,
  `Akib` varchar(255) DEFAULT NULL,
  `Istiak` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b1-names`
--

INSERT INTO `b1-names` (`Niloy`, `Atik`, `Akib`, `Istiak`) VALUES
('Rice-2kg', NULL, NULL, NULL),
(NULL, NULL, NULL, 'Oil'),
(NULL, NULL, NULL, 'Beef'),
(NULL, NULL, 'Masala', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `b1-transactions`
--

CREATE TABLE `b1-transactions` (
  `name` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b1-transactions`
--

INSERT INTO `b1-transactions` (`name`, `item`, `amount`, `timestamp`) VALUES
('Niloy', 'Rice-2kg', '240', '2023-12-10 12:13:23'),
('Istiak', 'Oil', '250', '2023-12-10 12:14:21'),
('Istiak', 'Beef', '595', '2023-12-10 12:14:45'),
('Akib', 'Masala', '800', '2023-12-10 12:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `b22`
--

CREATE TABLE `b22` (
  `Niloy` varchar(255) DEFAULT NULL,
  `Atik` varchar(255) DEFAULT NULL,
  `Akib` varchar(255) DEFAULT NULL,
  `Istiak` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b22-names`
--

CREATE TABLE `b22-names` (
  `Niloy` varchar(255) DEFAULT NULL,
  `Atik` varchar(255) DEFAULT NULL,
  `Akib` varchar(255) DEFAULT NULL,
  `Istiak` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b22-transactions`
--

CREATE TABLE `b22-transactions` (
  `name` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b56`
--

CREATE TABLE `b56` (
  `Niloy` varchar(255) DEFAULT NULL,
  `Atik` varchar(255) DEFAULT NULL,
  `Akib` varchar(255) DEFAULT NULL,
  `Istiak` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b56`
--

INSERT INTO `b56` (`Niloy`, `Atik`, `Akib`, `Istiak`) VALUES
('500', NULL, NULL, NULL),
(NULL, NULL, '340', NULL),
('1200', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `b56-names`
--

CREATE TABLE `b56-names` (
  `Niloy` varchar(255) DEFAULT NULL,
  `Atik` varchar(255) DEFAULT NULL,
  `Akib` varchar(255) DEFAULT NULL,
  `Istiak` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b56-names`
--

INSERT INTO `b56-names` (`Niloy`, `Atik`, `Akib`, `Istiak`) VALUES
('Murgi', NULL, NULL, NULL),
(NULL, NULL, 'rice', NULL),
('Fish', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `b56-transactions`
--

CREATE TABLE `b56-transactions` (
  `name` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b56-transactions`
--

INSERT INTO `b56-transactions` (`name`, `item`, `amount`, `timestamp`) VALUES
('Niloy', 'Murgi', '500', '2024-02-19 09:22:52'),
('Akib', 'rice', '340', '2024-02-19 09:23:43'),
('Niloy', 'Fish', '1200', '2024-04-12 05:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `badda1`
--

CREATE TABLE `badda1` (
  `Niloy` varchar(255) DEFAULT NULL,
  `Istiak` varchar(255) DEFAULT NULL,
  `Atik` varchar(255) DEFAULT NULL,
  `Maidul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badda1`
--

INSERT INTO `badda1` (`Niloy`, `Istiak`, `Atik`, `Maidul`) VALUES
('240', NULL, NULL, NULL),
(NULL, NULL, NULL, '595'),
('185', NULL, NULL, NULL),
('185', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `badda1-names`
--

CREATE TABLE `badda1-names` (
  `Niloy` varchar(255) DEFAULT NULL,
  `Istiak` varchar(255) DEFAULT NULL,
  `Atik` varchar(255) DEFAULT NULL,
  `Maidul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badda1-names`
--

INSERT INTO `badda1-names` (`Niloy`, `Istiak`, `Atik`, `Maidul`) VALUES
('Rice', NULL, NULL, NULL),
(NULL, NULL, NULL, 'Beef'),
('Oil', NULL, NULL, NULL),
('Oil', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `badda1-transactions`
--

CREATE TABLE `badda1-transactions` (
  `name` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badda1-transactions`
--

INSERT INTO `badda1-transactions` (`name`, `item`, `amount`, `timestamp`) VALUES
('Niloy', 'Rice', '240', '2023-12-09 02:21:21'),
('Maidul', 'Beef', '595', '2023-12-09 02:23:03'),
('Niloy', 'Oil', '185', '2023-12-09 02:23:59'),
('Niloy', 'Oil', '185', '2023-12-09 02:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `badda5`
--

CREATE TABLE `badda5` (
  `Niloy` varchar(255) DEFAULT NULL,
  `Istiak` varchar(255) DEFAULT NULL,
  `Atik` varchar(255) DEFAULT NULL,
  `Maidul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badda5`
--

INSERT INTO `badda5` (`Niloy`, `Istiak`, `Atik`, `Maidul`) VALUES
('160', NULL, NULL, NULL),
(NULL, '450', NULL, NULL),
('450', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `badda5-names`
--

CREATE TABLE `badda5-names` (
  `Niloy` varchar(255) DEFAULT NULL,
  `Istiak` varchar(255) DEFAULT NULL,
  `Atik` varchar(255) DEFAULT NULL,
  `Maidul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badda5-names`
--

INSERT INTO `badda5-names` (`Niloy`, `Istiak`, `Atik`, `Maidul`) VALUES
('Rice', NULL, NULL, NULL),
(NULL, 'Chicken', NULL, NULL),
('Chicken', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `badda5-transactions`
--

CREATE TABLE `badda5-transactions` (
  `name` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badda5-transactions`
--

INSERT INTO `badda5-transactions` (`name`, `item`, `amount`, `timestamp`) VALUES
('Niloy', 'Rice', '160', '2023-12-09 02:11:49'),
('Istiak', 'Chicken', '450', '2023-12-09 02:13:44'),
('Niloy', 'Chicken', '450', '2023-12-09 17:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `badda21`
--

CREATE TABLE `badda21` (
  `Niloy` varchar(255) DEFAULT NULL,
  `Atik` varchar(255) DEFAULT NULL,
  `Akib` varchar(255) DEFAULT NULL,
  `Istiak` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badda21`
--

INSERT INTO `badda21` (`Niloy`, `Atik`, `Akib`, `Istiak`) VALUES
('240', NULL, NULL, NULL),
(NULL, NULL, NULL, '450'),
(NULL, NULL, NULL, '185');

-- --------------------------------------------------------

--
-- Table structure for table `badda21-names`
--

CREATE TABLE `badda21-names` (
  `Niloy` varchar(255) DEFAULT NULL,
  `Atik` varchar(255) DEFAULT NULL,
  `Akib` varchar(255) DEFAULT NULL,
  `Istiak` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badda21-names`
--

INSERT INTO `badda21-names` (`Niloy`, `Atik`, `Akib`, `Istiak`) VALUES
('Rice-3kg', NULL, NULL, NULL),
(NULL, NULL, NULL, 'Chicken '),
(NULL, NULL, NULL, 'Oil');

-- --------------------------------------------------------

--
-- Table structure for table `badda21-transactions`
--

CREATE TABLE `badda21-transactions` (
  `name` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badda21-transactions`
--

INSERT INTO `badda21-transactions` (`name`, `item`, `amount`, `timestamp`) VALUES
('Niloy', 'Rice-3kg', '240', '2023-12-09 20:45:02'),
('Istiak', 'Chicken ', '450', '2023-12-09 20:46:43'),
('Istiak', 'Oil', '185', '2023-12-09 20:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `niketon`
--

CREATE TABLE `niketon` (
  `Hanif` varchar(255) DEFAULT NULL,
  `Siam` varchar(255) DEFAULT NULL,
  `Abu` varchar(255) DEFAULT NULL,
  `Ahnaf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `niketon`
--

INSERT INTO `niketon` (`Hanif`, `Siam`, `Abu`, `Ahnaf`) VALUES
('450', NULL, NULL, NULL),
(NULL, '100', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `niketon-names`
--

CREATE TABLE `niketon-names` (
  `Hanif` varchar(255) DEFAULT NULL,
  `Siam` varchar(255) DEFAULT NULL,
  `Abu` varchar(255) DEFAULT NULL,
  `Ahnaf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `niketon-names`
--

INSERT INTO `niketon-names` (`Hanif`, `Siam`, `Abu`, `Ahnaf`) VALUES
('Chicken', NULL, NULL, NULL),
(NULL, 'Rice', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `niketon-transactions`
--

CREATE TABLE `niketon-transactions` (
  `name` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `niketon-transactions`
--

INSERT INTO `niketon-transactions` (`name`, `item`, `amount`, `timestamp`) VALUES
('Hanif', 'Chicken', '450', '2023-12-09 19:56:22'),
('Siam', 'Rice', '100', '2023-12-09 19:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `plan1` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `phone`, `email`, `password`, `plan1`) VALUES
('Md. Nafis Sadique Niloy', '01717399105', 'nafis.sadique.niloy@g.bracu.ac.bd', '1234', 'badda5'),
('Test bot 1', '01717399104', 'testbot@gmail.com', '123', 'badda1'),
('hanif', '01717399101', 'hanif@gmail.com', '12', 'Niketon'),
('Nafis Sadique ', '01571413410', 'nafissadique@gmail.com', '12', 'Badda21'),
('Nafis Sadique ', '01571413501', 'nafissadique@gmail.com', '123', 'b1'),
('Nafis Sadique ', '01571413522', 'nafissadique@gmail.com', '1234', 'b56'),
('Nafis Sadique ', '01571413555', 'nafissadique@gmail.com', '1234', 'b56'),
('Nafis Sadique ', '01571413557', 'nafissadique@gmail.com', '12345678', 'B22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
