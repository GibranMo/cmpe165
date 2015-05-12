-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2015 at 03:29 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myvideos`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `userName` varchar(30) NOT NULL DEFAULT '',
  `passWord` varchar(30) DEFAULT NULL,
  `adminBoolean` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userName`, `passWord`, `adminBoolean`, `email`) VALUES
('Aaron', 'aaron123', 0, 'aaron@yahoo.com'),
('admin1', 'admin123', 1, 'admin1'),
('bob', 'bob12345', 0, 'bob@yahoo.com'),
('chemex@yahoo.com', 'chemex123', 0, 'chemex@yahoo.com'),
('coffee', 'coffee123', 0, 'coffee@yahoo.com'),
('joe@yahoo.com', 'joe12345', 0, 'joe@yahoo.com'),
('Karen', 'karen123', 0, 'karen@yahoo.com'),
('manny', 'manny123', 0, 'manny@yahoo.com'),
('mayweather', 'mayweather123', 0, 'mayweather@yahoo.com'),
('newuser@yahoo.com', 'newuser123', 0, 'newuser@yahoo.com'),
('noel@yahoo.com', 'noel12345', 0, 'noel@yahoo.com'),
('robert', 'robert123', 0, 'robert@yahoo.com'),
('terry', 'terry12345', 0, 'terry@yahoo.com'),
('tttttttttt@yahoo.com', 'password123', 0, 'tttttttttt@yahoo.com'),
('username2@yahoo.com', 'username2123', 0, 'username2@yahoo.com'),
('username@yahoo.com', 'username123', 0, 'username@yahoo.com'),
('zach', 'zach12345', 0, 'zach@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
