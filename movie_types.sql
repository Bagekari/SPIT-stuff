-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 08:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie_types`
--

CREATE TABLE `movie_types` (
  `id` int(11) NOT NULL,
  `choice` tinyint(8) NOT NULL DEFAULT 0,
  `ts` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_types`
--

INSERT INTO `movie_types` (`id`, `choice`, `ts`) VALUES
(27, 2, '2020-03-30 02:40:08'),
(28, 8, '2020-03-30 02:40:13'),
(29, 7, '2020-03-30 02:40:19'),
(30, 4, '2020-03-30 02:40:24'),
(31, 4, '2020-03-30 02:40:32'),
(32, 4, '2020-03-30 02:40:40'),
(33, 2, '2020-03-30 02:41:15'),
(34, 6, '2020-03-30 02:42:13'),
(35, 7, '2020-03-30 02:43:40'),
(36, 1, '2020-03-30 02:43:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie_types`
--
ALTER TABLE `movie_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie_types`
--
ALTER TABLE `movie_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
