-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 06:43 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
  `bookID` int(50) NOT NULL,
  `bookname` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `author` varchar(30) NOT NULL,
  `published` varchar(20) NOT NULL,
  `filename` varchar(20) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookID`, `bookname`, `category`, `author`, `published`, `filename`, `price`) VALUES
(1, 'Math', 'math', 'someone', 'june', 'new', 500),
(2, 'physics', 'science', 'someone', 'july', 'new', 700),
(3, 'Nineteen Eighty-Fore', 'Novel', 'George', 'May-1990', 'new', 300);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `requestId` int(5) NOT NULL,
  `numberofBooks` int(5) NOT NULL,
  `authorName` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `bookName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`requestId`, `numberofBooks`, `authorName`, `description`, `bookName`) VALUES
(2, 0, 'fvdfv', 'i need this', 'kuhi'),
(3, 3, 'fvdfv', 'i need this too', 'kuhi'),
(4, 1, 'sss', 'ssss', 'ssss'),
(5, 1, 'qqqq', 'need this', 'aabb'),
(6, 2, 'ssssss', 'need today', 'book'),
(7, 1, 'ededed', 'ededed', 'sxexc'),
(8, 1, 'wefraef', 'arfaergf', 'wefsa'),
(9, 3, 'jnjnkjnkj', ',smsaojoj', 'kmkm');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentId` int(20) NOT NULL,
  `FullName` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Account_Number` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bookName` varchar(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentId`, `FullName`, `Email`, `Address`, `Account_Number`, `password`, `bookName`, `price`) VALUES
(6, 'jasun', '18-37805-2@student.a', 'lkmlkm', '1111111111111', '0', 'Math', 500),
(7, 'Shah Ul Jasun', '18-37805-2@student.a', 'lkmlkm', '1111111111111', '0', '', 200);

-- --------------------------------------------------------

--
-- Table structure for table `rbooks`
--

CREATE TABLE `rbooks` (
  `returnId` int(5) NOT NULL,
  `booknumber` int(5) NOT NULL,
  `bookName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rbooks`
--

INSERT INTO `rbooks` (`returnId`, `booknumber`, `bookName`) VALUES
(0, 0, ''),
(1, 2, 'asaa'),
(6, 3, 'sdfsdfgbv'),
(10, 1, 'aaaaa'),
(11, 1, 'asaa');

-- --------------------------------------------------------

--
-- Table structure for table `reviewbooks`
--

CREATE TABLE `reviewbooks` (
  `reviewerId` int(5) NOT NULL,
  `bookName` varchar(20) NOT NULL,
  `authorName` varchar(40) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewbooks`
--

INSERT INTO `reviewbooks` (`reviewerId`, `bookName`, `authorName`, `description`) VALUES
(1, 'iuhiuh', 'ugugi', 'hfufuf'),
(2, 'aa', 'aaa', 'aaaaaaaaaaaaaaaaaaaa'),
(3, 'newbook', 'jasun', 'good one'),
(4, 'ererg', 'aregfaerg', 'aregaerg'),
(5, 'lm.lm.', '.lm.lm.l', '.,,;,sjhuh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(4) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `filename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `username`, `password`, `fullname`, `gender`, `email`, `dob`, `type`, `filename`) VALUES
(1, 'jasun', 'Jasun0852', 'Shah Ul Jasun', 'male', '18-37805-2@student.aiub.edu', '1990-2-1', 'regular_us', 'jasun.jpg'),
(2, 'pronoy', 'Pronoy0852', 'pronoy hossain', 'male', 'pronoy@gmail.com', '1998-2-1', 'regular_us', 'pronoy.jpg'),
(3, 'kamrul', 'Kamrul0852', 'kalrul hossain', 'male', 'hhhaksxh@gmail.com', '', 'regular_us', ''),
(4, 'lean', 'lean08#', 'samiha lean', 'male', 'lean266@gmail.com', '1998-2-1', 'regular_us', 'lean.jpg'),
(5, 'lean266', '111111111111111111111111', 'samiha lean', 'female', 'lean266@gmail.com', '1998-2-1', 'regular_us', 'lean266.jpg'),
(6, '266', '11111111111111111111111', 'samiha lean', 'female', 'lean266@gmail.com', '1998-2-1', 'regular_us', '266.jpg'),
(7, 'newone', '1111111111111111111111', 'Shah Ul', 'male', 'lean266@gmail.com', '1998-2-1', 'regular_us', 'newone.jpg'),
(8, 'jarin', 'Jarin0852@', 'nusrat jarin', 'female', 'jarin@gmail.com', '1990-12-1', 'regular_us', 'jarin.png'),
(9, 'jabin', 'Jabin0987@', 'jabin jaman', 'male', 'jabin266@gmail.com', '1998-12-1', 'regular_us', 'jabin.png'),
(10, 'jabin266', 'Jabin0852@', 'jabin jaman', 'male', 'jabin266@gmail.com', '1998-12-1', 'regular_us', 'jabin266.png'),
(11, 'mahadi', 'Mahadi0852#', 'mahadi hossain', 'male', 'mahadi@gmail.com', '1998-2-1', 'regular_us', 'mahadi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `rbooks`
--
ALTER TABLE `rbooks`
  ADD PRIMARY KEY (`returnId`);

--
-- Indexes for table `reviewbooks`
--
ALTER TABLE `reviewbooks`
  ADD PRIMARY KEY (`reviewerId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `requestId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviewbooks`
--
ALTER TABLE `reviewbooks`
  MODIFY `reviewerId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
