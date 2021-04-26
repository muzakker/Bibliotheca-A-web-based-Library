-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 05:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibliotheca`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookID` int(5) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `category` varchar(15) NOT NULL,
  `author` varchar(30) NOT NULL,
  `published` date NOT NULL,
  `filename` varchar(20) NOT NULL,
  `price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookID`, `bookname`, `category`, `author`, `published`, `filename`, `price`) VALUES
(101, 'Quantum Physics for Beginners', 'physics', 'Daniel Golding', '2020-08-16', 'Quantum Physics for ', 1500),
(102, 'The Physics Book', 'physics', 'Jim Al-Khalili', '2020-03-10', 'The Physics Book.png', 1200),
(103, 'Eat That Frog', 'self_help', 'Brian Tracy', '2017-04-17', 'Eat That Frog.jpg', 250),
(104, 'Rewire Your Anxious Brain', 'self_help', 'Catherine M. Pittman PhD', '2015-01-02', 'Rewire Your Anxious ', 500);

-- --------------------------------------------------------

--
-- Table structure for table `borrowlist`
--

CREATE TABLE `borrowlist` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowlist`
--

INSERT INTO `borrowlist` (`id`, `username`, `duration`) VALUES
(1, '', '12'),
(2, '', '12'),
(3, 'Agnes', '4'),
(4, 'Agnes', '0'),
(5, 'Agnes', '18');

-- --------------------------------------------------------

--
-- Table structure for table `buybooks`
--

CREATE TABLE `buybooks` (
  `id` int(11) NOT NULL,
  `bookID` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `authorname` varchar(255) NOT NULL,
  `buydate` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buybooks`
--

INSERT INTO `buybooks` (`id`, `bookID`, `bookname`, `authorname`, `buydate`, `description`) VALUES
(14, 1, 'physics', 'aaaaa', '1998-2-1', ' cccc'),
(15, 1, 'chemistry', 'asdf', '2021-2-1', 'qwerrtyu'),
(16, 2, 'physics', 'xxx', '2020-2-2', 'vvv');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `courseID` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `joindate` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `courseID`, `coursename`, `type`, `joindate`, `description`) VALUES
(1, '101', 'Introduction to physics', 'physics', '1.6.2021', 'in this course we can get o know the basic information\'s of physics'),
(2, '102', 'algebra', 'math', '4.6.2021', 'In this course all the basic of algebra formulas can be learnt'),
(3, '103', 'English poetry', 'Literature ', '7.8.2020', 'This is a course of all those English poetry that\'s enrich the English literature field'),
(26, '104', 'Calculus', 'Math', '2020-3-2', 'This Course will help to learn about the calculus formulas'),
(27, '105', 'Introduction to Chemistry', 'Chemistry', '2020-6-2', 'This Course will help to learn about the ');

-- --------------------------------------------------------

--
-- Table structure for table `issuedstatus`
--

CREATE TABLE `issuedstatus` (
  `issueID` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `issuedDate` date NOT NULL,
  `returnedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issuedstatus`
--

INSERT INTO `issuedstatus` (`issueID`, `username`, `bookname`, `issuedDate`, `returnedDate`) VALUES
(112, 'muzakker', 'Quantum Physics for Beginners', '2021-04-18', '2021-04-25'),
(113, 'ishorju', 'Quantum Physics for Beginners', '2021-04-10', '2021-04-19'),
(114, 'jasun', 'Rewire Your Anxious Brain', '2021-04-11', '2021-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `paymentID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `paymentdate` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `cardno` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `paymentID`, `name`, `email`, `paymentdate`, `type`, `cardno`, `password`) VALUES
(1, 0, 'agnes', 'oishorjo@gmail.com', '0000-00-00', '', 0, '12344');

-- --------------------------------------------------------

--
-- Table structure for table `penalty`
--

CREATE TABLE `penalty` (
  `issueID` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `issuedDate` date NOT NULL,
  `returnedDate` date NOT NULL,
  `amount` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penalty`
--

INSERT INTO `penalty` (`issueID`, `username`, `bookname`, `issuedDate`, `returnedDate`, `amount`) VALUES
(113, 'ishorju', 'Quantum Physics for Beginners', '2021-04-10', '2021-04-19', 50),
(114, 'jasun', 'Rewire Your Anxious Brain', '2021-04-11', '2021-04-15', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `email`, `gender`, `dob`, `type`, `filename`) VALUES
(1, 'Oishorjo', '123456789@', 'agnes', 'oishorjo@gmail.com', 'female', '0000-00-00', 'instructor', 'Oishorjo.jpg'),
(2, 'Agnes', '0987654321*', 'oishorjo', 'oishorjo@gmail.com', 'female', '1998-05-02', 'instructor', 'Agnes.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrowlist`
--
ALTER TABLE `borrowlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buybooks`
--
ALTER TABLE `buybooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrowlist`
--
ALTER TABLE `borrowlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buybooks`
--
ALTER TABLE `buybooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
