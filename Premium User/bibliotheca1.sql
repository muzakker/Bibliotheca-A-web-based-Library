-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 06:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibliotheca1`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookID` int(100) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `category` varchar(113) NOT NULL,
  `author` varchar(113) NOT NULL,
  `published` varchar(113) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `price` int(113) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookID`, `bookname`, `category`, `author`, `published`, `filename`, `price`) VALUES
(90, 'Sotter Pothe', 'self_help', 'Hridoy Banik', '2001-3-3', 'Sotter Pothe.jpg', 200),
(1, 'Rain Birds', 'story_book', 'clarissa', '2001-1-1', '', 10),
(10, 'Harry Potter', 'story_book', 'J. K. Rowling ', '2011-12-2', '', 30),
(21, 'Haunted Forest', 'story_book', 'Albert Lee', '2021-4-23', '', 120),
(22, 'Elon Musk', 'life_story_book', 'Elon Musk', '', '', 150),
(23, 'The Intelligent Investor', 'self_help', 'Benjamin Graham', '2013-12-26', '', 110);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` int(100) NOT NULL,
  `fullname` varchar(113) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(113) NOT NULL,
  `type` varchar(113) NOT NULL,
  `filename` varchar(113) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `fullname`, `gender`, `email`, `dob`, `type`, `filename`) VALUES
('jobair', 12345678, 'jobair hossain', 'male', 'jobairh@gmail.com', '1997-1-1', 'premium_user', 'jobair.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `fullname`, `gender`, `email`, `type`) VALUES
('abc', 'abca hasan', 'male', 'abca@gmail.com', 'premium_user'),
('pqr', 'pqr hasan', 'male', 'pqr@gmail.com', 'premium_user'),
('rihan', 'rihan hasan', 'male', 'rihan@gmail.com', 'premium_user'),
('jobair', 'jobair hossain', 'male', 'pqr@gmail.com', 'premium_user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
