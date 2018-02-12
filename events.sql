-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2018 at 11:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin_csc', '3fadab2e922ac8b5db077dc4193ed562', 1),
(2, 'admin_imo', 'f8181ed770dfa73c951436a278433ea5', 2),
(3, 'markgenz', '8da5c3e9f3bafb9ac43ca21cc591308d', 3);

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dateCreated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `name`, `dateCreated`) VALUES
(1, 'CSC ALBUM', '1518147223');

-- --------------------------------------------------------

--
-- Table structure for table `attendace`
--

CREATE TABLE `attendace` (
  `id` int(3) NOT NULL,
  `studentId` varchar(30) NOT NULL,
  `eventId` int(3) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendace`
--

INSERT INTO `attendace` (`id`, `studentId`, `eventId`, `date`) VALUES
(4, '4800153138843', 5, '1517744030');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(3) NOT NULL,
  `dept_id` int(3) NOT NULL,
  `descipline` int(2) NOT NULL,
  `course` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `dept_id`, `descipline`, `course`) VALUES
(1, 1, 1, 'BSIT'),
(2, 1, 1, 'BSCS');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `name`) VALUES
(1, 'CESD'),
(2, 'NHSD'),
(3, 'TeEd'),
(4, 'TEd');

-- --------------------------------------------------------

--
-- Table structure for table `descipline`
--

CREATE TABLE `descipline` (
  `id` int(3) NOT NULL,
  `deptId` int(3) NOT NULL,
  `descipline` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `descipline`
--

INSERT INTO `descipline` (`id`, `deptId`, `descipline`) VALUES
(1, 1, 'ITE'),
(2, 1, 'Eng');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `proponents` varchar(255) NOT NULL,
  `cooperation` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `participants` varchar(255) NOT NULL,
  `targetdate` varchar(255) NOT NULL,
  `fundsource` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `theme`, `proponents`, `cooperation`, `venue`, `participants`, `targetdate`, `fundsource`) VALUES
(5, 'Convocation', 'adad', 'asd', 'asd', 'asda', 'CESD', '1517752800', 'asdas');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(3) NOT NULL,
  `albumId` int(3) NOT NULL,
  `imageName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `albumId`, `imageName`) VALUES
(1, 1, 'BUPC.png'),
(2, 1, 'libon logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `required`
--

CREATE TABLE `required` (
  `id` int(3) NOT NULL,
  `desciplineId` int(3) NOT NULL,
  `number` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `required`
--

INSERT INTO `required` (`id`, `desciplineId`, `number`) VALUES
(1, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `course_id` int(3) NOT NULL,
  `student_num` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `m_name`, `surname`, `course_id`, `student_num`, `password`, `active`) VALUES
(1, 'Mark Genisis', 'Sanorjo', 'Sabilla', 1, '4800153138843', '8da5c3e9f3bafb9ac43ca21cc591308d', 1),
(2, 'Ma', 'Ge', 'Sa', 1, '1234567', '8da5c3e9f3bafb9ac43ca21cc591308d', 1),
(4, 'rk', 'ne', 'bi', 1, '12345654', 'sabilla', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendace`
--
ALTER TABLE `attendace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `descipline`
--
ALTER TABLE `descipline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `required`
--
ALTER TABLE `required`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `attendace`
--
ALTER TABLE `attendace`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `descipline`
--
ALTER TABLE `descipline`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `required`
--
ALTER TABLE `required`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
