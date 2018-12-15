-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 07:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `email` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `dateval` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `array` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`email`, `dateval`, `array`) VALUES
('vaishakh.s.nambiar@gmail.com', '10122018', '[\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"scl\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\"]'),
('vaishakh.s.nambiar@gmail.com', '11122018', '[\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"wrk\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"unu\",\"unu\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\"]'),
('vaishakh.s.nambiar@gmail.com', '12122018', '[\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"std\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\"]'),
('vaishakh.s.nambiar@gmail.com', '9122018', '[\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"art\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"com\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\",\"unu\"]');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `pass`) VALUES
('ravin', 'ravin8@gmail.com', 'ravin123'),
('shobith', 'shobithvijay6@gmail.com', '333333333'),
('sweta', 'swetavtiwari62189@gmail.com', 'sweta'),
('tharun', 'tharun123@gmail.com', 'tharun123'),
('vaishakh', 'vaishakh.s.nambiar@gmail.com', 'vaish123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`email`,`dateval`),
  ADD KEY `email` (`email`),
  ADD KEY `date` (`dateval`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `block`
--
ALTER TABLE `block`
  ADD CONSTRAINT `fkone` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
