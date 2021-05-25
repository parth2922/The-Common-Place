-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 08:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_common_place`
--

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `did` int(4) NOT NULL,
  `dname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`did`, `dname`) VALUES
(0, 'ALL'),
(1, 'ARIP'),
(2, 'RPCP'),
(3, 'PDPIAS'),
(4, 'DEPSTAR'),
(5, 'CSPIT'),
(6, 'CMPICA'),
(7, 'MTIN'),
(8, 'CIPS');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(5) NOT NULL,
  `pname` varchar(15) NOT NULL,
  `pdesc` varchar(500) NOT NULL,
  `pprice` varchar(8) NOT NULL,
  `type` varchar(10) NOT NULL,
  `uid` varchar(8) NOT NULL,
  `ucont` int(11) NOT NULL,
  `deptid` int(5) NOT NULL,
  `pphoto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pdesc`, `pprice`, `type`, `uid`, `ucont`, `deptid`, `pphoto`) VALUES
(1, 'Ansi C', 'Best Book for Learning C by Balaguru Sami', '350', 'sell', '1', 1234567890, 1, 'anci.jfif'),
(2, 'EG Material', 'Engineering Drwaing', '500', 'sell', '1', 2147483647, 2, 'eg.jfif'),
(9, 'Raspberry Pi', 'model b+', '2500', 'borrow', '1', 12345678, 3, 'rasp.jfif'),
(11, 'calculator ', '991 ms scientific calc ', '5000', 'sell', '1', 12345679, 4, 'calc.jfif'),
(18, 'arduino', 'uno ', '500', 'borrow', '5', 123456798, 2, 'ard.jpg'),
(19, 'maap book', 'maap book', '150', 'sell', '2', 321654987, 1, 'maap.jfif'),
(20, 'Raspberry Pi', '2 ', '2500', 'borrow', '5', 12356547, 1, 'rasp.jfif'),
(25, 'arduino', 'uno model', '250', 'sell', '2', 12345679, 1, 'ard.jpg'),
(26, 'calculator ', '991 ms', '250', 'sell', '2', 123456789, 2, 'calc.jfif'),
(27, 'PI Camera', '5 mega pixel ', '500', 'sell', '2', 12345679, 2, 'pi.jfif'),
(31, 'Drafter', 'Best for EG', '100', 'borrow', '5', 12345678, 3, 'dra.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(9) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `userID` varchar(7) NOT NULL,
  `udept` varchar(15) NOT NULL,
  `uemail` varchar(35) NOT NULL,
  `ugen` varchar(6) NOT NULL,
  `upass` varchar(100) NOT NULL,
  `question` varchar(50) NOT NULL,
  `ans` varchar(25) NOT NULL,
  `uphoto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `userID`, `udept`, `uemail`, `ugen`, `upass`, `question`, `ans`, `uphoto`) VALUES
(1, 'Parth', '18CE027', 'Computer', '18ce027@charusat.edu.in', 'male', '900150983cd24fb0d6963f7d28e17f72', 'what is your name?', 'Parth', 'me.jfif'),
(2, 'Hardev', '18CE043', 'computer', '18ce043@charusat.edu.in', 'male', 'e99a18c428cb38d5f260853678922e03', 'what is your school name?', 'abc', 'img1.png'),
(5, 'ankur', '18CE032', 'CSPIT (BTECH)CE', '18ce032@charusat.edu.in', 'male', '900150983cd24fb0d6963f7d28e17f72', 'what is your name?', 'ankur', 'img1.png'),
(15, 'ayush', '18ce29', 'CE', '18ce029@charusat.edu.in', 'male', '9cdfb439c7876e703e307864c9167a15', 'abc', 'xyz', ''),
(16, 'Parth Goswami', '18ce027', 'CE', '18ce034@charusat.edu.in', 'male', '9cdfb439c7876e703e307864c9167a15', 'abc', 'xyz', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `did` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
