-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2016 at 12:18 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penpal`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `MessageID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Attachment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `avatars`
--

CREATE TABLE `avatars` (
  `UserID` int(11) NOT NULL,
  `EyeColor` varchar(150) NOT NULL,
  `SkinColor` varchar(150) NOT NULL,
  `HatType` varchar(150) NOT NULL,
  `HairColor` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `FriendID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `UserID2` int(11) NOT NULL,
  `WaitingForID` int(11) NOT NULL,
  `isApproved` enum('1','0') NOT NULL,
  `isApproved2` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `ID` int(11) NOT NULL,
  `GroupName` varchar(100) NOT NULL,
  `TeacherMasterID` int(11) NOT NULL,
  `Language` varchar(150) NOT NULL,
  `Subject` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groupmembers`
--

CREATE TABLE `groupmembers` (
  `ID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matchrequests`
--

CREATE TABLE `matchrequests` (
  `UserID` int(11) NOT NULL,
  `TeacherID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `Message` varchar(250) NOT NULL,
  `Date` date NOT NULL,
  `UserFromID` varchar(50) NOT NULL,
  `UserToID` varchar(50) NOT NULL,
  `Status` varchar(200) NOT NULL,
  `isApproved` enum('1','0') NOT NULL,
  `isReported` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signupcodes`
--

CREATE TABLE `signupcodes` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `SignupCode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `TypeID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `School` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `PostalCode` varchar(25) NOT NULL,
  `matchRequested` varchar(30) NOT NULL,
  `isVerified` tinyint(1) NOT NULL,
  `ReportedbyID` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Grade` int(11) NOT NULL,
  `Bio` varchar(100) NOT NULL,
  `Points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `TypeID`, `FirstName`, `LastName`, `Email`, `School`, `Country`, `State`, `City`, `PostalCode`, `matchRequested`, `isVerified`, `ReportedbyID`, `Password`, `Grade`, `Bio`, `Points`) VALUES
(1, 1, 'aesha', 'aesha', 'aesha@gmail.com', 'Ryerson', 'IND', 'Punjab', 'Barnala', 'N2E2K1', '1', 1, 1, 'asdasd', 1, '1', 1),
(3, 1, 'Nivaan', 'Nivan', 'Nivanm@gmail.com', 'aesha', 'Albania', 'Berat', 'Berat', 'asd', '1', 1, 1, 'jeet', 1, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `TypeID` int(11) NOT NULL,
  `TypeName` varchar(100) NOT NULL,
  `viewStudents` varchar(150) NOT NULL,
  `addStudents` varchar(150) NOT NULL,
  `matchStudents` varchar(150) NOT NULL,
  `approveLetters` enum('1','0') NOT NULL,
  `viewStudentDashboards` varchar(150) NOT NULL,
  `addTeachers` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`TypeID`, `TypeName`, `viewStudents`, `addStudents`, `matchStudents`, `approveLetters`, `viewStudentDashboards`, `addTeachers`) VALUES
(1, 'teacher', 'yes', 'yes', 'yes', '0', 'yes', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatars`
--
ALTER TABLE `avatars`
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`FriendID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `groupmembers`
--
ALTER TABLE `groupmembers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `GroupID` (`GroupID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `matchrequests`
--
ALTER TABLE `matchrequests`
  ADD UNIQUE KEY `TeacherID` (`TeacherID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `signupcodes`
--
ALTER TABLE `signupcodes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `TypeID` (`TypeID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`TypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `TypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
