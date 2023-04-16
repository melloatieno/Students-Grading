-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 12:19 AM
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
-- Database: `studentgrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentgrades`
--

CREATE TABLE `studentgrades` (
  `StudentID` varchar(30) NOT NULL,
  `Web1` int(30) NOT NULL,
  `Design1` int(30) NOT NULL,
  `Programming1` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentgrades`
--

INSERT INTO `studentgrades` (`StudentID`, `Web1`, `Design1`, `Programming1`) VALUES
('DU25/001/2', 64, 67, 50),
('23', 64, 67, 50),
('C025-01-11', 76, 56, 45),
('C025011174', 64, 56, 45),
('C050111741', 67, 45, 76),
('C025-01-1174/2016', 45, 76, 67),
('CV01-62-27/17', 42, 0, 0),
('CV01-62-27/17', 42, 0, 0),
('CV01-62-27/17', 42, 0, 0),
('CV01-62-27/17', 42, 0, 0),
('C024-1-1542/17', 46, 0, 0),
('C024-1-1542/17', 46, 0, 0),
('ch123865', 31, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
