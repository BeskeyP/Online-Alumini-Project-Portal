-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2023 at 09:21 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectmgnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `journal_name` text NOT NULL,
  `published` text NOT NULL,
  `journal_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`journal_name`, `published`, `journal_by`) VALUES
('ou', '1997', 'murali'),
('artificial intelligence', '22-10-2002', 'ramya');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `student_id` text NOT NULL,
  `project_id` text NOT NULL,
  `external_mark` text NOT NULL,
  `internal_mark` text NOT NULL,
  `total_mark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`student_id`, `project_id`, `external_mark`, `internal_mark`, `total_mark`) VALUES
('171', '5', '100', '199', '299'),
('171', '5', '47', '47', '94');

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
  `internal` text NOT NULL,
  `external` text NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectID`, `Name`, `StudentID`, `ContactNo`, `FrontEnd`, `BackEnd`, `Description`, `Department`, `internal`, `external`, `Year`) VALUES
(1, 'Online Alumini Project portal', '20010', '9988771111', 'PHP', 'MySQL', 'The project is aimed at developing a web-based system, which manages the activity of “Students Online Alumini Project portal”. It automates the work of the student’s project details and member’s member details of the project. The existing system of Students Online Alumini Project portal is extremely slow and time consuming. It involves checking of large number of Student and project details that are received. The Existing system for project management takes note of the title selected and the student’s details sorts it manually. Retrieval of data is very difficult in the existing system. There is not enough security for the existing system. The existing system is time consuming. To overcome this problem of manual evaluation a dynamic way by which the proposed titles would be given to the students with the specified criteria. The staff-in charge has to check all the forms and then issue the list. If a proposed title is selected for student’s then front end and backend, Synopsis, Proposed concept, year all details stored in database. Guide allocation is done by the staff in charge itself. The final list along with the guide will be sent to each student’s login id. Student check project details year vise and department vise.', 'IT', '', '', '2019'),
(2, ' Scholarship Information System', '20011', '9988771100', 'PHP', 'MySQL', 'The project entitled “Scholarship Information System” is developed by PHP as Front End and MYSQL as Back End. The scope of the project is User easy to apply the Scholarship Process. Scholar ship Information System provides the convenient and efficient way to extract the Student data using reports. The report can be graphically displayed details. Scholarships System are very popular, majority of students are apply various schemes of scholarships applicable to them. To have a general awareness it will be more convenient if each and every educational institution take active participation in the implementation of various scholarships schemes under their supervision. Scholarship Information System User Check the Current Status Of Applying Scholarship Details Through Via Website. User view better, faster, and more efficiently in this web application. The Scholarship Information System web application process is a system that provides the effective way of storing the data in the database and also retrieving the data. This system has totally tracking all the reports based on the data stored in the databases and much feasible web application to upgrade them. The Scholarship Information system here developing will help to get up-to-date information of student academic activities.', 'IT', '', '', '2019'),
(3, 'Project', '001', '1234567890', 'PHP', 'MY SQL', ' PROJECT', 'IT', '', '', '2019'),
(4, 'CONSUER GRIEVANCES', '001', '78907345678', 'PHP', 'MY SQL', ' Its about Consumer complaint', 'BSC CS', '', '', '2018'),
(5, 'cargo', '171ca133', '897666554', 'php', 'MY SQL', ' test', 'BCA', '', '', '2023'),
(6, 'Project', '171ca133', '9876543212', 'php', 'my sql', ' test', 'BCA', '', '', '2023'),
(7, 'consumer', '171ca135', '8754068382', 'php', 'mysql', ' consumer complaints', 'BCA', '', '', '2023'),
(8, 'library', '171ca111', '8754068382', 'php', 'my sql', ' library management', 'BSC CS', '', '', '2023'),
(9, 'swiggy', '171ca101', '8765343434', 'dot net', 'sql', ' food parcel', 'BSC CT', '', '', '2019'),
(10, 'pets', '2', '8190032356', 'php', 'mysql', 'good ', 'BCA', '100', '20', '3year'),
(11, 'pro', 'nita', '55555', 'PHP', 'MY SQL', '  a project about student developement', 'BSC CS', '50', '50', '2019'),
(12, 'pseudo', '191cs144', '9876543212', 'PHP', 'mysql', ' pseudo means imaginary', 'BSC CS', '30', '50', '2019'),
(13, 'proj', '171ca101', '43', 'PHP', 'MY SQL', ' dd', 'BCA', '22', '33', '2023'),
(14, 'digital cyber', '171ca123', '8796541237', 'asp', 'sql', ' used for shoppin', 'BCA', '50', '50', '2023');

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
(20010, 'sathish', '123', 'Male', '9988771100', 'sathi@gmail.com', ' Trichy', 'IT', 'Sem 8'),
(1, 'viji', 'viji', 'Female', '123567890', 'viji@gmail.com', ' cbe-12', 'IT', 'Sem 6'),
(2, 'vijay', 'vijay', 'Male', '76543269', 'vijay@gmail.com', ' cbe', 'BCA', 'Sem 8'),
(171, 'neha markose', '12345', 'Female', '9876543212', 'neha@gmail.com', ' cbe', 'BCA', 'Sem 6'),
(171, 'nimmi mohan', 'helloworld', 'Female', '8765343434', 'nimmi@gmail.com', ' kerala', 'BCA', 'Sem 6'),
(171, 'niveda', 'ok', 'Female', '8754068382', 'nive@gmail.com', ' tirupur', 'BCA', 'Sem 6'),
(171, 'gowri', 'po', 'Female', '897666554', 'gowri@gmail.com', ' kerala', 'BSC CS', 'Sem 6'),
(171, 'abi', 'abi', 'Male', '78639922', 'abi@gmail.com', ' coimbatore', 'BSC CT', 'Sem 6'),
(171, 'nita', 'nita', 'Female', '2598741', 'nia@mail.com', ' cbe', 'BSC CS', 'Sem 1'),
(191, 'kitty', 'ki', 'Female', '78973344567', 'ki@gmail.com', ' palakkad', 'BSC CS', 'Sem 5'),
(151, 'nila', 'ni', 'Female', '54554', 'nila@gmail.com', ' delhi', 'BSC CT', 'Sem 8'),
(171, 'dharani', 'dd', 'Female', '8796541237', 'dharani@gmail.com', ' tiruppur', 'BCA', 'Sem 6'),
(171, 'sri', 'sri', 'Male', '97452473892', 'sri@gmail.com', ' gandhipuram', 'BSC CT', 'Sem 6');
