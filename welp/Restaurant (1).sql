-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2015 at 03:26 AM
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
  `tags` text COLLATE utf8_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1250 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Restaurant`
--

INSERT INTO `Restaurant` (`id`, `categoryID`, `name`, `address`, `rating`, `iconimage`, `city`, `placetype`, `foodtype`, `tags`, `cost`) VALUES
(1, 1, 'Fuji Sushi', '56 W Santa Clara St\r\nSan Jose, CA 95113\r\nPhone number (408) 298-3854', 5, 'fuji.jpg', 'San Jose', 'Restaurant', 'Japanese', 'sushi, food', 4),
(2, 2, 'Kenji Sushi', '385 S Winchester Blvd\r\nSan Jose, CA 95128\r\nPhone number (408) 985-1889', 4, 'kenji.jpg', 'San Jose', 'Restaurant', 'Japanese', 'sushi, food', 2),
(3, 3, 'Cha Cha Sushi', '547 W Capitol Expy\r\nSan Jose, CA 95136\r\nPhone number (408) 265-2416', 3, 'test2.jpg', 'San Jose', 'Restaurant', 'Japanese', 'sushi, food', 3),
(4, 3, 'Misu Sushi Bar & Grill', '1035 S Winchester Blvd\r\nSan Jose, CA 95128\r\nPhone number (408) 260-7200', 2, 'mizu.jpg', 'Emeryville', 'Bar & Grill', 'Japanese', 'sushi, food', 2),
(5, 1, 'Kenzo Japanese Restaurant', '5465 Snell Ave\r\nSan Jose, CA 95123\r\nPhone number (408) 226-2114', 1, 'sushi2.jpg', 'San Jose', 'Restaurant', 'Japanese', 'sushi, food, dinner', 4),
(6, 3, 'Paesano Ristorante Italia', '350 W Julian St\r\nSan Jose, CA 95110\r\nPhone number (408) 217-9327', 4, 'paesano.jpg', 'San Jose', 'Restaurant', 'Italian', 'italian, cheap, lunch, dinner, seafood', 1),
(8, 1, 'Siena Bistro', '1359 Lincoln Ave\r\nSan Jose, CA 95125\r\nGet Directions\r\nPhone number (408) 271-0837', 4, 'siena.jpg', 'San Jose', 'Restaurant', 'Italian', 'mediterranean, italian, bread, pasta', 2);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1250;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
