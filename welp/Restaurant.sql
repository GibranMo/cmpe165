-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2015 at 03:55 AM
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
  `cost` int(11) NOT NULL,
  `numreviews` int(11) NOT NULL,
  `searchtag` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Restaurant`
--

INSERT INTO `Restaurant` (`id`, `categoryID`, `name`, `address`, `rating`, `iconimage`, `city`, `placetype`, `foodtype`, `tags`, `cost`, `numreviews`, `searchtag`) VALUES
(1, 1, 'Fuji Sushi', '56 W Santa Clara St\r\nSan Jose, CA 95113\r\nPhone number (408) 298-3854', 5, 'fuji.jpg', 'San Jose', 'Restaurant', 'Japanese', 'sushi, food, expensive', 4, 2, 'Fuji Sushi San Jose Japanese Restaurant sushi, food'),
(2, 2, 'Kenji Sushi', '385 S Winchester Blvd\r\nSan Jose, CA 95128\r\nPhone number (408) 985-1889', 4, 'kenji.jpg', 'San Jose', 'Restaurant', 'Japanese', 'sushi, food, cheap', 2, 4, 'Kenji Sushi San Jose Japanese Restaurant sushi, food'),
(3, 3, 'Cha Cha Sushi', '547 W Capitol Expy\r\nSan Jose, CA 95136\r\nPhone number (408) 265-2416', 3, 'test2.jpg', 'San Jose', 'Restaurant', 'Japanese', 'sushi, food', 3, 1, 'Cha Cha Sushi San Jose Japanese Restaurant sushi, food'),
(4, 3, 'Misu Sushi Bar & Grill', '1035 S Winchester Blvd\r\nSan Jose, CA 95128\r\nPhone number (408) 260-7200', 2, 'mizu.jpg', 'Sunnyvale', 'Bar & Grill', 'Japanese', 'sushi, food', 2, 2, 'Misu Sushi Bar & Grill Sunnyvale Japanese Bar & Grill sushi, food'),
(5, 1, 'Kenzo Japanese Restaurant', '5465 Snell Ave\r\nSan Jose, CA 95123\r\nPhone number (408) 226-2114', 5, 'sushi2.jpg', 'Fremont', 'Restaurant', 'Japanese', 'sushi, food, dinner', 4, 3, 'Kenzo Japanese Restaurant Fremont Japanese Restaurant sushi, food, dinner'),
(6, 3, 'Paesano Ristorante Italia', '350 W Julian St\r\nSan Jose, CA 95110\r\nPhone number (408) 217-9327', 4, 'paesano.jpg', 'San Jose', 'Restaurant', 'Italian', 'italian, cheap, lunch, dinner, seafood', 1, 5, 'Paesano Ristorante Italia San Jose Italian Restaurant italian, cheap, lunch, dinner, seafood'),
(8, 1, 'Siena Bistro', '1359 Lincoln AveSan Jose, CA 95125Phone number (408) 271-0837', 4, 'siena.jpg', 'San Jose', 'Restaurant', 'Italian', 'mediterranean, italian, bread, pasta', 2, 1, 'Siena Bistro San Jose Italian Restaurant mediterranean, italian, bread, pasta'),
(9, 1, 'Zahir’s Bistro', '579 S Main St\r\nMilpitas, CA 95035\r\nPhone number (408) 946-4000', 4, 'zahir.jpg', 'Milpitas', 'Restaurant', 'Italian', 'italian, american, prime rib, new orleans chicken, stuffed mushrooms', 3, 2, 'Zahir’s Bistro Milpitas Italian Restaurant italian, american, prime rib, new orleans chicken, stuffed mushrooms');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
