-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2014 at 01:24 
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yiicms`
--

-- --------------------------------------------------------

--
-- Table structure for table `yii_catalog`
--

CREATE TABLE IF NOT EXISTS `yii_catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `category` int(11) NOT NULL,
  `preview_text` varchar(300) NOT NULL,
  `detail_text` text NOT NULL,
  `sort` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `meta_title` varchar(300) NOT NULL,
  `meta_desc` varchar(300) NOT NULL,
  `meta_keywords` varchar(300) NOT NULL,
  `created_at` date NOT NULL,
  `price1` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `yii_catalog`
--

INSERT INTO `yii_catalog` (`id`, `name`, `category`, `preview_text`, `detail_text`, `sort`, `count`, `meta_title`, `meta_desc`, `meta_keywords`, `created_at`, `price1`) VALUES
(25, 'Iphone 4s white 8Gb', 9, 'Best phone in world', 'Very nice phone', 500, 15, 'Buy iphone 4s quick', 'Iphone 4s white 8Gb', 'Iphone 4s white 8Gb', '2014-01-06', '17000'),
(26, 'iphone 5s black 16Gb', 10, 'ololo', '', 500, 1, 'buy iphone 5s black 16Gb', 'iphone 5s black 16Gb', 'iphone 5s black 16Gb', '2014-01-06', ''),
(27, 'Samsung galaxy', 5, '', '', 500, 1, 'Samsung galaxy', 'Samsung galaxy', 'Samsung galaxy', '2014-01-04', ''),
(28, 'Iphone 4s black 16Gb', 9, '', '', 500, 14, 'Nice phone', 'Iphone 4s black 16Gb', 'nice phone very nice', '2014-01-06', '23500'),
(30, 'Sony xperia go', 2, 'Sony xperiva nice phone', '', 500, 12, 'Buy Sony xperia go today', 'Sony xperia go', 'Sony xperia go', '2014-01-04', ''),
(31, 'LG Optimus L2', 2, 'simple fon', '', 500, 1, 'Buy LG Optimus L2 price new', 'simple fon', 'asdasd', '2014-01-04', ''),
(32, 'iphone godl 4s', 9, '', '', 500, 1, 'iphone godl 4s', 'iphone godl 4s', 'iphone godl 4s', '2014-01-06', ''),
(33, 'super gold iphone 4', 9, '', '', 500, 1, 'super gold iphone 4', 'super gold iphone 4', 'super gold iphone 4', '2014-01-06', '312');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
