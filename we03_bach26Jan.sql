-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2017 at 03:41 am
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `we03_bach`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `profileImage` varchar(255) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `privilage` enum('User','Moderator','Admin','Banned') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstName`, `lastName`, `profileImage`, `dateCreated`, `privilage`) VALUES
(1, 'alec.bach97@gmail.com', '$2y$10$hSN1iOSQM.p0c0CyqljmQuacj8e.5G5HerS08.vFMiRExXRyIJnZq', 'Alec', 'Bach', 'imgs/users/admin/AdminPhoto.jpeg', '2017-01-18 02:47:55', 'Admin'),
(2, 'ama@gsj.d', '$2y$10$v4KgElLUNg5E6o0MOQoT0OoeQUHQCEosaPCxBpxk6fzx34PicBL0e', 'alec', 'aaaaa', 'imgs/users/ama@gsj.d/588172725041e.png', '2017-01-20 02:14:11', 'User'),
(3, 'image@test.com', '$2y$10$qfV3PP5UaLGaMfPkjxs/Y.voDwyztB4SvjyFjkFGN4mhZevTuzCKe', 'This', 'Man', 'imgs/users/image@test.com/58893a5dd040a.png', '2017-01-25 23:53:02', 'User'),
(4, 'noimage@g.c', '$2y$10$JanRflsrpqEQJK10SNforuxTWySLP78i14GvplcLNWbUJk9d6mFvC', 'skk', 'skk', NULL, '2017-01-26 00:28:17', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
