-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2015 at 11:22 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `welp`
--

-- --------------------------------------------------------

--
-- Table structure for table `Restaurant`
--

CREATE TABLE IF NOT EXISTS `Restaurant` (
`id` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `iconimage` text COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'San Jose',
  `placetype` enum('Restaurant','Bar','Bar & Grill') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Restaurant',
  `foodtype` enum('American','Mexican','Japanese','Chinese','Indian','Other','Italian','French','Generic') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Generic',
  `tags` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1248 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Restaurant`
--

INSERT INTO `Restaurant` (`id`, `categoryID`, `name`, `address`, `rating`, `iconimage`, `city`, `placetype`, `foodtype`, `tags`) VALUES
(1, 1, 'Fushi Sushi', '56 W Santa Clara St\r\nSan Jose, CA 95113\r\nPhone number (408) 298-3854', 3, 'http://s3-media4.fl.yelpcdn.com/bphoto/v78dg8-nh55pEdf0n05aYw/ls.jpg', 'San Jose', 'Restaurant', 'Japanese', 'sushi, food'),
(2, 2, 'Kenji Sushi', '385 S Winchester Blvd\r\nSan Jose, CA 95128\r\nPhone number (408) 985-1889', 3, 'http://s3-media1.fl.yelpcdn.com/bphoto/4v_sB-UBTqAMoAXshD5M0w/ls.jpg', 'San Jose', 'Restaurant', 'Japanese', 'sushi, food'),
(3, 3, 'Cha Cha Sushi', '547 W Capitol Expy\r\nSan Jose, CA 95136\r\nPhone number (408) 265-2416', 4, 'http://s3-media1.fl.yelpcdn.com/bphoto/fI5GvJ5umK-Bn9V5GUOvQA/ls.jpg', 'San Jose', 'Restaurant', 'Japanese', 'sushi, food'),
(4, 3, 'Misu Sushi Bar & Grill', '1035 S Winchester Blvd\r\nSan Jose, CA 95128\r\nPhone number (408) 260-7200', 2, 'http://s3-media4.fl.yelpcdn.com/bphoto/h5g_7SnkkZfGDpx0VgWl3Q/ls.jpg', 'Emeryville', 'Bar & Grill', 'Japanese', 'sushi, food'),
(5, 1, 'Kenzo Japanese Restaurant', '5465 Snell Ave\r\nSan Jose, CA 95123\r\nPhone number (408) 226-2114', 3, 'http://s3-media2.fl.yelpcdn.com/bphoto/8dzI493EeXUqOR0ufiksoQ/ls.jpg', 'San Jose', 'Restaurant', 'Japanese', 'sushi, food, dinner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Restaurant`
--
ALTER TABLE `Restaurant`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Restaurant`
--
ALTER TABLE `Restaurant`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1248;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
