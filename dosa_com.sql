-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2024 at 03:09 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dosa.com`
--
CREATE DATABASE IF NOT EXISTS `dosa.com` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dosa.com`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_cart`
--

CREATE TABLE IF NOT EXISTS `admin_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `dat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `aaction` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `admin_cart`
--

INSERT INTO `admin_cart` (`id`, `name`, `price`, `qty`, `photo`, `subtotal`, `username`, `dat`, `aaction`) VALUES
(40, 'dosa', 300, 1, 'admin/menuitem/images.jpeg', 300, 'd@123', '2024-08-24 19:42:48', 'Accept'),
(41, 'idli', 500, 1, 'menuitem/download.jpeg', 500, 'd@123', '2024-08-24 19:42:48', 'Accept'),
(42, 'idli', 500, 1, 'menuitem/download.jpeg', 500, 'd@123', '2024-08-24 19:56:14', 'Accept'),
(43, 'Dosa', 500, 1, 'menuitem/download.jpeg', 500, 'd@123', '2024-08-24 20:06:29', 'Accept'),
(44, 'idli', 500, 1, 'menuitem/download.jpeg', 500, 'd@123', '2024-08-24 20:07:31', 'Accept'),
(45, 'Dosa', 500, 1, 'menuitem/download.jpeg', 500, 'd@123', '2024-08-24 20:35:02', 'Accept'),
(46, 'Dosa', 500, 1, 'menuitem/download.jpeg', 500, 'd@123', '2024-08-26 10:44:41', 'Accept'),
(47, 'idli', 500, 1, 'menuitem/download.jpeg', 500, 'd@123', '2024-08-26 10:44:41', 'Accept'),
(48, 'idli', 500, 1, 'menuitem/download.jpeg', 500, 'nitin@123', '2024-08-31 19:52:37', 'Accept'),
(49, 'Dosa', 500, 1, 'menuitem/download.jpeg', 500, 'v@123', '2024-09-02 21:21:54', 'Accept'),
(50, 'idli', 500, 1, 'menuitem/download.jpeg', 500, 'v@123', '2024-09-02 21:21:55', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `final_order`
--

CREATE TABLE IF NOT EXISTS `final_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ostatus` varchar(20) NOT NULL,
  `dat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `feedback` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `final_order`
--

INSERT INTO `final_order` (`id`, `name`, `total`, `username`, `status`, `mobile`, `address`, `ostatus`, `dat`, `feedback`) VALUES
(1, 'dinesh', 500, 'd@123', 'Paid', '9327', 'jj', 'test', '2024-08-24 16:28:33', ''),
(2, 'dinesh', 800, 'd@123', 'Paid', '9327', 'jj', 'Delivered', '2024-08-24 19:42:43', 'good food special dosa'),
(3, 'dinesh', 500, 'd@123', 'Paid', '9327', 'jj', 'Delivered', '2024-08-24 19:50:48', 'vah saabas'),
(4, 'dinesh', 500, 'd@123', 'Paid', '9327', 'jj', 'Delivered', '2024-08-24 19:54:15', ''),
(5, 'dinesh', 500, 'd@123', 'Paid', '9327', 'jj', 'Delivered', '2024-08-24 20:06:25', ''),
(6, 'dinesh', 500, 'd@123', 'Paid', '9327', 'jj', 'Delivered', '2024-08-24 20:07:29', ''),
(7, 'dinesh', 500, 'd@123', 'Paid', '9327', 'jj', 'Delivered', '2024-08-24 20:34:50', ''),
(9, 'nitin', 500, 'nitin@123', 'Paid', '931329400', 'dwarka', 'Delivered', '2024-08-31 19:52:30', ''),
(10, 'vallabh ', 1000, 'v@123', 'Paid', '9737857293', 'vallabh vidyanagar', 'Delivered', '2024-09-02 21:21:46', 'goood ');

-- --------------------------------------------------------

--
-- Table structure for table `menuitem`
--

CREATE TABLE IF NOT EXISTS `menuitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `des` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `menuitem`
--

INSERT INTO `menuitem` (`id`, `name`, `price`, `type`, `photo`, `des`) VALUES
(1, 'Dosa', 500, 'dosa', 'menuitem/download.jpeg', 'this is dosa special'),
(12, 'Dosa', 500, 'dosa', 'menuitem/download.jpeg', 'this is dosa special'),
(13, 'Dosa', 500, 'dosa', 'menuitem/download.jpeg', 'this is dosa special'),
(14, 'idli', 500, 'dosa', 'menuitem/download.jpeg', 'this is dosa special'),
(24, 'meduvada', 200, 'dosa', 'admin/menuitem/images.jpeg', 'best'),
(25, 'vada', 20, 'dosa', 'admin/menuitem/images.jpeg', 'goog');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `tbno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mo` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ostatus` varchar(5) NOT NULL,
  PRIMARY KEY (`tbno`),
  UNIQUE KEY `tbno_3` (`tbno`),
  KEY `tbno` (`tbno`),
  KEY `tbno_2` (`tbno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`tbno`, `name`, `mo`, `time`, `status`, `ostatus`) VALUES
(1, '', '', '', 'unbook', ''),
(2, ' ', ' ', ' ', 'unbook', ' '),
(3, '', '', '', 'unbook', ''),
(4, '', '', '', 'unbook', ''),
(5, '', '', '', 'unbook', ''),
(6, '', '', '', 'unbook', ''),
(7, '', '', '', 'unbook', ''),
(8, '', '', '', 'unbook', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE IF NOT EXISTS `tblcart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `tbno` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tblcart`
--

INSERT INTO `tblcart` (`id`, `name`, `price`, `qty`, `photo`, `subtotal`, `tbno`) VALUES
(27, 'idli', 500, 1, 'menuitem/download.jpeg', 500, '1'),
(28, 'Dosa', 500, 1, 'menuitem/download.jpeg', 500, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ad_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_ad_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `ostatus` varchar(50) NOT NULL,
  `tbno` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_ad_cart`
--

INSERT INTO `tbl_ad_cart` (`id`, `name`, `price`, `qty`, `subtotal`, `cname`, `mobile`, `ostatus`, `tbno`) VALUES
(12, 'Dosa', 500, 1, 500, 'd', '123', 'done', '2'),
(13, 'Dosa', 500, 1, 500, 'd', '123', 'done', '2'),
(14, 'Dosa', 500, 1, 500, 'dineh', '9327', 'done', '2'),
(15, 'Dosa', 500, 1, 500, 'dineh', '9327', 'done', '2'),
(16, 'Dosa', 500, 1, 500, 'nitin ahir', '9313295400', 'done', '2'),
(17, 'Dosa', 500, 1, 500, 'nitin ahir', '9313295400', 'done', '2'),
(19, 'Dosa', 500, 1, 500, 'govind', '9712215065', 'done', '3'),
(20, 'Dosa', 500, 1, 500, 'NIIN', '9313295400', 'done', '6'),
(21, 'idli', 500, 1, 500, 'niin', '931329400', 'done', '3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`, `mobile`, `address`) VALUES
('dinesh', 'd@123', '123', '9327', 'devbhumi dwarka'),
('nitin', 'nitin@123', '123', '931329400', 'dwarka'),
('vallabh ', 'v@123', '123', '9737857293', 'vallabh vidyanagar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
