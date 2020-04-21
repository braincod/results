-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2020 at 04:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ischoolsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `addteacher`
--

CREATE TABLE `addteacher` (
  `t_id` int(15) NOT NULL,
  `t_fname` varchar(30) NOT NULL,
  `t_Lname` varchar(30) NOT NULL,
  `t_gender` varchar(10) NOT NULL,
  `RegDate` date NOT NULL,
  `t_email` varchar(50) NOT NULL,
  `t_mobileP` int(30) NOT NULL,
  `t_passcode` int(30) NOT NULL,
  `t_subject` varchar(30) NOT NULL,
  `t_class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'kasolo  kasolo', 'kas@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2020-02-16 12:50:16'),
(2, 'kasolo', 'era@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2020-02-16 12:59:46'),
(3, 'mambwe', 'ma@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2020-02-16 13:47:53'),
(4, 'kasolo  kas', 'mam5@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-02-16 13:51:44'),
(5, 'kasolo', 'mam@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-02-16 14:23:39'),
(6, 'king', 'kingkasolo@hotmail.com', 'd05fd4a73a95a4901e53ed4a5165d2fc', '2020-02-21 19:50:03'),
(7, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '2020-03-15 03:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `administratives`
--

CREATE TABLE `administratives` (
  `id` int(10) NOT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `school_motto` varchar(255) DEFAULT NULL,
  `school_logo` varchar(255) DEFAULT NULL,
  `upload_date` timestamp NULL DEFAULT current_timestamp(),
  `upload_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(10) NOT NULL,
  `classes` varchar(50) DEFAULT NULL,
  `date_added` varchar(50) DEFAULT NULL,
  `time_added` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `classes`, `date_added`, `time_added`) VALUES
(1, '10A', '21/Apr/2020', '2020-04-21 11:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `current_season`
--

CREATE TABLE `current_season` (
  `id` int(10) NOT NULL,
  `current_session` varchar(20) DEFAULT NULL,
  `current_term` varchar(50) DEFAULT NULL,
  `date_declared` varchar(50) DEFAULT NULL,
  `time_declared` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_season`
--

INSERT INTO `current_season` (`id`, `current_session`, `current_term`, `date_declared`, `time_declared`) VALUES
(1, '2020/2021', 'First Term', '30/Oct/2019', '2019-12-30 08:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `gradeID` int(10) NOT NULL,
  `pupilID` int(20) NOT NULL,
  `subjectID` int(20) NOT NULL,
  `score` int(20) NOT NULL,
  `term` int(10) NOT NULL,
  `poistionInClass` int(10) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `standard` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newuser`
--

CREATE TABLE `newuser` (
  `id` int(10) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `schoolrole` text DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `date_of_reg` varchar(50) DEFAULT NULL,
  `time_of_reg` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(10) DEFAULT NULL,
  `sessions` varchar(20) DEFAULT NULL,
  `date_added` varchar(50) DEFAULT NULL,
  `time_added` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `sessions`, `date_added`, `time_added`) VALUES
(1, '2019/2020', '30/jan/2020', '2016-10-30 07:23:14'),
(NULL, '2020/2021', '21/Apr/2020', '2020-04-21 11:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `othername` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `mob` varchar(50) DEFAULT NULL,
  `yob` varchar(50) DEFAULT NULL,
  `contact_phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `sponsor_name` varchar(50) DEFAULT NULL,
  `sponsor_phone` varchar(20) DEFAULT NULL,
  `relationship` varchar(20) DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  `reg_number` varchar(100) DEFAULT NULL,
  `gen_password` varchar(20) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `date_of_reg` varchar(20) DEFAULT NULL,
  `time_of_reg` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `gender`, `firstname`, `lastname`, `othername`, `dob`, `mob`, `yob`, `contact_phone`, `address`, `province`, `nationality`, `sponsor_name`, `sponsor_phone`, `relationship`, `class`, `reg_number`, `gen_password`, `passport`, `date_of_reg`, `time_of_reg`) VALUES
(59, 'Male', 'Sunday', 'Onyinye', 'Agatha', '11', 'March', '1990', '07036798652', 'Ikom', 'Ebonyi', 'zambaian', 'ml', '36798652', 'Parent', 'G10 ', '174JSS1SCHOOLNAME1', 'spk', 'image/bs.png', '31/Dec/2016', '2016-12-31 18:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `Subject`
--

CREATE TABLE `Subject` (
  `subjectID` int(20) NOT NULL,
  `subjectName` varchar(20) NOT NULL,
  `t_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `id` int(11) NOT NULL,
  `classname` varchar(80) DEFAULT NULL,
  `classid` varchar(10) NOT NULL,
  `classteacherid` varchar(50) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `classname`, `classid`, `classteacherid`, `CreationDate`, `UpdationDate`) VALUES
(1, 'ten', '1', 'TID01', '2020-03-02 18:08:17', '2020-03-02 18:09:34'),
(2, 'ten', '1', 'TID1', '2020-03-02 18:11:07', '0000-00-00 00:00:00'),
(3, 'ten', '10A', 'TID01', '2020-03-02 18:16:00', '0000-00-00 00:00:00'),
(11, 'ten', '10B', 'TID02', '2020-03-02 19:01:36', '0000-00-00 00:00:00'),
(12, 'twelve', '10A', 'TID01', '2020-03-02 19:04:00', '0000-00-00 00:00:00'),
(13, 'twelve', '2', 'TID02', '2020-03-02 19:07:22', '0000-00-00 00:00:00'),
(14, 'ten', '10A', 'TID03 mack otis', '2020-03-02 19:24:10', '0000-00-00 00:00:00'),
(15, 'ten', '2', 'TID01', '2020-03-02 19:29:06', '0000-00-00 00:00:00'),
(16, 'ten', '10C', 'TID02', '2020-03-03 10:15:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblpupil`
--

CREATE TABLE `tblpupil` (
  `pupilid` varchar(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `Grade` varchar(10) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpupil`
--

INSERT INTO `tblpupil` (`pupilid`, `fname`, `lname`, `Gender`, `DOB`, `address`, `contact`, `ClassId`, `Grade`, `RegDate`, `UpdationDate`, `Status`) VALUES
('ID01', 'kasolo', 'lname', 'Male', '2015-12-30', 'lilanda', '2609776857', 1, '10', '2020-02-28 16:51:18', NULL, 1),
('ID02', 'Paul ', 'lname', 'Male', '2000-06-22', 'lilanda', '260950249531', 12, '12', '2020-02-29 10:51:23', NULL, 1),
('ID03', 'bukata', 'mambwe', 'Female', '2012-03-01', 'lilanda impala road', '12458976', 2, '10', '2020-02-29 12:51:57', NULL, 1),
('ID04', 'mabula', 'paper', 'Male', '2007-02-01', 'ibex', '0950249531', 2, '10', '2020-03-02 15:09:28', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE `tblsubject` (
  `id` int(11) NOT NULL,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubject`
--

INSERT INTO `tblsubject` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`, `UpdationDate`) VALUES
(1, 'bemba', ' b123', '2020-03-01 15:13:20', '0000-00-00 00:00:00'),
(2, 'english', 'eng1', '2020-03-01 15:14:11', '0000-00-00 00:00:00'),
(3, 'french', 'fch1', '2020-03-02 22:18:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcombination`
--

CREATE TABLE `tblsubjectcombination` (
  `id` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updationdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `teacherId` varchar(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobilenumber` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `teachingsubject` varchar(100) NOT NULL,
  `othersubjects` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`teacherId`, `firstname`, `lastname`, `gender`, `email`, `mobilenumber`, `password`, `department`, `teachingsubject`, `othersubjects`, `role`, `RegDate`, `UpdationDate`, `Status`) VALUES
('TID01', 'kasolo', 'mambwe', 'Male', 'kas@gmail.com', '58745521425', '81dc9bdb52d04dc20036dbd8313ed055', 'mathematics', 'computer studies', 'non', 'teacher', '2020-03-02 15:32:44', NULL, 1),
('TID02', 'joyce', 'meyer', 'Female', 'meyer@gmail.com', '97865842222', '827ccb0eea8a706c4c34a16891f84e7b', 'social science', 'english', 'R.E', 'teacher', '2020-03-02 15:51:32', NULL, 1),
('TID03', 'mack', 'otis', 'Male', 'otis@gmail.com', '+2545454544', '827ccb0eea8a706c4c34a16891f84e7b', 'mathematics', 'ict', 'math', 'teacher', '2020-03-02 15:53:38', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_comment`
--

CREATE TABLE `t_comment` (
  `commId` int(30) NOT NULL,
  `t_comment` varchar(100) NOT NULL,
  `regdate` date NOT NULL,
  `PupilID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `userid` int(20) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `mobileP` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Passcode` varchar(15) NOT NULL,
  `Regdate` varchar(30) NOT NULL,
  `pupilD` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addteacher`
--
ALTER TABLE `addteacher`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administratives`
--
ALTER TABLE `administratives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD KEY `pupilID` (`pupilID`),
  ADD KEY `subjectID` (`subjectID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `Subject`
--
ALTER TABLE `Subject`
  ADD PRIMARY KEY (`subjectID`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubject`
--
ALTER TABLE `tblsubject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_comment`
--
ALTER TABLE `t_comment`
  ADD PRIMARY KEY (`commId`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addteacher`
--
ALTER TABLE `addteacher`
  MODIFY `t_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `administratives`
--
ALTER TABLE `administratives`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblsubject`
--
ALTER TABLE `tblsubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `grade_ibfk_1` FOREIGN KEY (`pupilID`) REFERENCES `pupil` (`pupilID`),
  ADD CONSTRAINT `grade_ibfk_2` FOREIGN KEY (`subjectID`) REFERENCES `Subject` (`subjectID`) ON DELETE CASCADE;

--
-- Constraints for table `Subject`
--
ALTER TABLE `Subject`
  ADD CONSTRAINT `Subject_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `addteacher` (`t_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
