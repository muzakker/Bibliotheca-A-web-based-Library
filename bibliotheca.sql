-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 01:25 PM
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
-- Database: `bibliotheca`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `content` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `username`, `content`) VALUES
(13, 'muzakker', 'Hello, this is first micro blog of Bibliotheca...WELCOME to this world'),
(13, 'muzakker', 'Hello, this is second micro blog of Bibliotheca...WELCOME to this world'),
(13, 'muzakker', 'This is the third micro blog of Bibliotheca.'),
(13, 'muzakker', 'This is the fourth microblog of Bibliotheca.'),
(19, 'ishorju', 'This is my first post...'),
(13, 'muzakker', 'This is a test...');

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
  `filename` varchar(100) NOT NULL,
  `price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookID`, `bookname`, `category`, `author`, `published`, `filename`, `price`) VALUES
(101, 'Rewire Your Anxious Brain', 'self_help', 'Catherine M. Pittman PhD', '2015-01-02', 'Rewire Your Anxious Brain.jpg', 300),
(102, 'The Physics Book', 'physics', 'Jim Al-Khalili', '2020-03-10', 'The Physics Book.png', 1200),
(103, 'Eat That Frog', 'self_help', 'Brian Tracy', '2017-04-17', 'Eat That Frog.jpg', 250),
(123, 'The Prophet', 'classics', 'Kahlil Gibran', '1923-09-01', 'The Prophet.jpg', 300),
(1234, 'Pride and Prejudice', 'classics', 'Jane Austen', '1813-01-01', 'Pride and Prejudice.jpg', 250);

-- --------------------------------------------------------

--
-- Table structure for table `bookrequest`
--

CREATE TABLE `bookrequest` (
  `requestId` int(5) NOT NULL,
  `numberofBooks` int(5) NOT NULL,
  `authorName` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `bookName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookrequest`
--

INSERT INTO `bookrequest` (`requestId`, `numberofBooks`, `authorName`, `description`, `bookName`) VALUES
(11, 1, 'Jane Austen', 'Since its immediate success in 1813, Pride and Prejudice has remained one of the most popular novels in the English language.', 'Pride and Prejudice'),
(12, 1, 'Anyone', 'Anything', 'Math');

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
  `paymentId` int(20) NOT NULL,
  `FullName` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Account_Number` varchar(30) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `returnbooks`
--

CREATE TABLE `returnbooks` (
  `returnId` int(5) NOT NULL,
  `booknumber` int(5) NOT NULL,
  `bookName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returnbooks`
--

INSERT INTO `returnbooks` (`returnId`, `booknumber`, `bookName`) VALUES
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
  `id` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `type` varchar(12) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `gender`, `email`, `dob`, `type`, `filename`) VALUES
(13, 'muzakker', '@1231231', 'Muzakker Hossain', 'male', 'muzakkerh@gmail.com', '1999-02-12', 'admin', '1619497127muzakker.jpg'),
(19, 'ishorju', '@1231234', 'Ishorju Agnes', 'female', 'ishorju@gmail.com', '1999-01-01', 'instructor', 'ishorju.jpg'),
(22, 'jasun', '@1231231', 'Shah ul Jasun', 'male', 'jasun@gmail.com', '2000-01-01', 'premium', 'jasun.jpg'),
(24, 'jobair', '@1231231', 'Jobair Hossain', 'male', 'jobair@gmail.com', '1990-01-01', 'regular_user', 'jobair.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD KEY `id` (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `bookrequest`
--
ALTER TABLE `bookrequest`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `borrowlist`
--
ALTER TABLE `borrowlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuedstatus`
--
ALTER TABLE `issuedstatus`
  ADD PRIMARY KEY (`issueID`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `penalty`
--
ALTER TABLE `penalty`
  ADD PRIMARY KEY (`issueID`);

--
-- Indexes for table `returnbooks`
--
ALTER TABLE `returnbooks`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookrequest`
--
ALTER TABLE `bookrequest`
  MODIFY `requestId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `borrowlist`
--
ALTER TABLE `borrowlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `paymentId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reviewbooks`
--
ALTER TABLE `reviewbooks`
  MODIFY `reviewerId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
