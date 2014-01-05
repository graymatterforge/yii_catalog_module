-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2014 at 12:44 
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
-- Table structure for table `yii_catalog_category`
--

CREATE TABLE IF NOT EXISTS `yii_catalog_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lft` int(10) unsigned NOT NULL,
  `rgt` int(10) unsigned NOT NULL,
  `level` smallint(5) unsigned NOT NULL,
  `name` varchar(300) NOT NULL,
  `meta_title` varchar(300) NOT NULL,
  `meta_keywords` varchar(300) NOT NULL,
  `meta_desc` varchar(300) NOT NULL,
  `created_at` date NOT NULL,
  `timestap_x` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`),
  KEY `level` (`level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `yii_catalog_category`
--

INSERT INTO `yii_catalog_category` (`id`, `lft`, `rgt`, `level`, `name`, `meta_title`, `meta_keywords`, `meta_desc`, `created_at`, `timestap_x`, `sort`) VALUES
(1, 1, 20, 1, 'uncategorized', '', '', '', '0000-00-00', 0, 0),
(2, 10, 19, 2, 'Mobile phones', 'Mobile phones', 'Mobile phones', 'Mobile phones', '2014-01-05', 1388916370, 0),
(3, 2, 9, 2, 'Cars', '', '', '', '0000-00-00', 0, 0),
(4, 13, 18, 3, 'iphone', 'iphone2', 'iphone', 'iphone', '2014-01-05', 1388916356, 0),
(5, 11, 12, 3, 'samsung', '', '', '', '0000-00-00', 0, 0),
(8, 3, 4, 3, 'audi', '', '', '', '0000-00-00', 0, 0),
(9, 14, 15, 4, '4s', '', '', '', '0000-00-00', 0, 0),
(10, 16, 17, 4, '5s', '', '', '', '0000-00-00', 0, 0),
(12, 5, 6, 3, 'BMW', '', '', '', '0000-00-00', 0, 0),
(16, 7, 8, 3, 'Volvo', '', '', '', '0000-00-00', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
