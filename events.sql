-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 04:59 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

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
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(3) NOT NULL,
  `dept_id` int(3) NOT NULL,
  `course` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `dept_id`, `course`) VALUES
(1, 1, 'BSIT'),
(2, 1, 'BSCS');

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
(1, 'Sample', 'Saple theme', 'asdasd', 'asdasd', 'GYM', 'CESD', '1515427200', 'sadasd'),
(2, 'asasd', 'asd', 'asd', 'asd', 'asd', 'TeED', '1516082400', 'sadas'),
(3, 'asd', 'asd', 'asd', 'asd', 'asd', 'TeED', '1516586400', 'asd'),
(4, 'Wala', 'asd', 'asd', 'asd', 'asdasd', 'General Assembly', '1516672800', 'asdasd'),
(5, 'Sampel', 'asdasd', 'asdasd', 'dfs', 'asdasd', 'CESD', '1516762800', 'asdasdsd');

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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `m_name`, `surname`, `course_id`, `student_num`, `password`) VALUES
(1, 'Mark Genisis', 'Sanorjo', 'Sabilla', 1, '2018-323-123', '8da5c3e9f3bafb9ac43ca21cc591308d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
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
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
