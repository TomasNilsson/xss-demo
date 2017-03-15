-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2017 at 09:19 PM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xss_demo`
--

CREATE DATABASE IF NOT EXISTS `xss_demo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `xss_demo`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `created_at`, `user_id`) VALUES
(1, 'Please leave some comments', '2017-03-17 12:15:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` char(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$1uhWcClLzrUWyMiC5Pyjx.CsHRvu7HVzNSaxV4ofoQ.8XiMcpu9F2'),
(2, 'attacker', '$2y$10$Ny4HIxmkOZzKLfhSG5YBlOfhAXi0jZUy/vbYh0i9oz8WuI9rSpq7C');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Create database user
--
GRANT ALL PRIVILEGES ON `xss_demo`.* TO 'xss_demo_user'@'localhost';
SET PASSWORD FOR 'xss_demo_user'@'localhost' = '*8F82D3C2570CABDA6EE7E30056C8DD988EF20EEB';
FLUSH PRIVILEGES;
