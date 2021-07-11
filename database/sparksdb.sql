-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 01:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparks`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` varchar(25) NOT NULL,
  `receiver` varchar(25) NOT NULL,
  `amount` int(9) NOT NULL,
  `datetime` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `amount`, `datetime`) VALUES
(1, 'rithu@gmail.com', 'hirav@gmail.com', 100, '2021-07-06 00:38:34.201851'),
(2, 'hirav@gmail.com', 'rithu@gmail.com', 1000, '2021-07-06 00:56:40.619051'),
(3, 'rithu@gmail.com', 'hirav@gmail.com', 100, '2021-07-06 00:58:50.585680'),
(4, 'rithu@gmail.com', 'hirav@gmail.com', 100, '2021-07-06 17:48:45.368799'),
(5, 'yelugu@gmail.com', 'hirav@gmail.com', 1000, '2021-07-06 18:11:55.264192'),
(6, 'rachana@gmail.com', 'hirav@gmail.com', 2000, '2021-07-10 13:15:01.313459');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Richitha', 'richireddy@gmail.com', 10000),
(2, 'Rithwik', 'rithu@gmail.com', 31400),
(3, 'Hirav', 'hirav@gmail.com', 20600),
(4, 'Vihan', 'vihan11@gmail.com', 18000),
(5, 'Rajesh', 'rajeshrddy@gmail.com', 10050),
(6, 'Bindhu', 'yelugu@gmail.com', 29000),
(7, 'Rachana', 'rachana@gmail.com', 13900),
(8, 'Niharika', 'viniha@gmail.com', 19000),
(9, 'Ritish', 'ritish@gmail.com', 10770),
(10, 'Bhagyaraj', 'panrutti@gmail.com', 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
