-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2019 at 09:04 AM
-- Server version: 5.2.3
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectmgnt`
--
CREATE DATABASE `projectmgnt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projectmgnt`;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ProjectID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `StudentID` varchar(20) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `FrontEnd` varchar(25) NOT NULL,
  `BackEnd` varchar(25) NOT NULL,
  `Description` varchar(2550) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectID`, `Name`, `StudentID`, `ContactNo`, `FrontEnd`, `BackEnd`, `Description`, `Department`, `Year`) VALUES
(1, 'Online Alumini Project portal', '20010', '9988771111', 'PHP', 'MySQL', 'The project is aimed at developing a web-based system, which manages the activity of “Students Online Alumini Project portal”. It automates the work of the student’s project details and member’s member details of the project. The existing system of Students Online Alumini Project portal is extremely slow and time consuming. It involves checking of large number of Student and project details that are received. The Existing system for project management takes note of the title selected and the student’s details sorts it manually. Retrieval of data is very difficult in the existing system. There is not enough security for the existing system. The existing system is time consuming. To overcome this problem of manual evaluation a dynamic way by which the proposed titles would be given to the students with the specified criteria. The staff-in charge has to check all the forms and then issue the list. If a proposed title is selected for student’s then front end and backend, Synopsis, Proposed concept, year all details stored in database. Guide allocation is done by the staff in charge itself. The final list along with the guide will be sent to each student’s login id. Student check project details year vise and department vise.', 'IT', '2019'),
(2, ' Scholarship Information System', '20011', '9988771100', 'PHP', 'MySQL', 'The project entitled “Scholarship Information System” is developed by PHP as Front End and MYSQL as Back End. The scope of the project is User easy to apply the Scholarship Process. Scholar ship Information System provides the convenient and efficient way to extract the Student data using reports. The report can be graphically displayed details. Scholarships System are very popular, majority of students are apply various schemes of scholarships applicable to them. To have a general awareness it will be more convenient if each and every educational institution take active participation in the implementation of various scholarships schemes under their supervision. Scholarship Information System User Check the Current Status Of Applying Scholarship Details Through Via Website. User view better, faster, and more efficiently in this web application. The Scholarship Information System web application process is a system that provides the effective way of storing the data in the database and also retrieving the data. This system has totally tracking all the reports based on the data stored in the databases and much feasible web application to upgrade them. The Scholarship Information system here developing will help to get up-to-date information of student academic activities.', 'IT', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `MailID` varchar(25) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `Name`, `Password`, `Gender`, `ContactNo`, `MailID`, `Address`, `Department`, `Semester`) VALUES
(20010, 'sathish', '123', 'Male', '9988771100', 'sathi@gmail.com', ' Trichy', 'IT', 'Sem 8');
