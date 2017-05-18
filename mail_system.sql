-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2016 at 02:09 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mail_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `ques_id` int(11) NOT NULL,
  `student` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `ques_id`, `student`, `msg`, `date`) VALUES
(2, 30, 'priyansh', ' sir please tell timing', '2016-11-14 02:46:34'),
(3, 30, 'shailesh', 'sir on monday we have classes from 2-5pm', '2016-11-14 02:50:29'),
(10, 30, 'shailesh', 'sir plx tell timing', '2016-11-14 03:20:55'),
(15, 30, 'MR. Vikas Bajpai', '12-1 monday at my office', '2016-11-14 03:48:32'),
(17, 30, 'Priyansh Mangal', 'Sir can I come at 11:30 because at 12 I have lab.', '2016-11-14 03:51:20'),
(18, 23, 'Priyansh Mangal', 'Sir 4-5 we already have java class plz shift the class', '2016-11-14 03:52:37'),
(19, 37, 'MR. Vikas Bajpai', ' date is changed to wed.', '2016-11-15 16:23:24'),
(20, 37, 'Priyansh Mangal', 'ok\r\n', '2016-11-15 16:25:02');

-- --------------------------------------------------------

--
-- Table structure for table `course_register`
--

CREATE TABLE `course_register` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_register`
--

INSERT INTO `course_register` (`id`, `subject`, `faculty`, `dept`) VALUES
(4, 'Data Structure', 'Dr. Rajbir Kaur', 'CSE'),
(8, '', '', ''),
(16, 'VEE', 'Dr. Narendra Kumar', 'HSS'),
(17, 'E-1', 'Mr. Sandeep Saini', 'ECE'),
(18, 'SSC', 'Dr. Soumitra DebNath', 'ECE'),
(19, 'M-1', 'Dr. Ajit Patel', 'MATHEMATICS'),
(20, 'TOC', 'DR.Sakti Balan', 'CSE'),
(26, 'GAA', 'DR. Vibhor Kant', 'CSE'),
(27, 'CP', 'Dr.Preety Singh', 'CSE'),
(28, 'CP', 'MR. Vikas Bajpai', 'CSE'),
(29, 'DSP', 'Dr. Abhishek Sharma', 'ECE'),
(30, 'DBMS', 'MR. Vikas Bajpai', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `name`, `email`, `password`, `Department`) VALUES
(1, 'admin', 'admin', 'admin@lnmiit.ac.in', 'admin', ''),
(2, 'cs_vb', 'MR. Vikas Bajpai', 'vikas.bajpai87@gmail.com', 'vikas', 'CSE'),
(3, 'cs_vk', 'DR. Vibhor Kant', 'vibhor.kant@lnmiit.ac.in', 'vibhor', 'CSE'),
(4, 'cs_rpg', 'Prof. Ravi Prakash Gorthi', 'rgorthi@lnmiit.ac.in', 'gorthi', 'CSE'),
(5, 'cs_sb', 'DR.Sakti Balan', 'sakti.balan@lnmiit.ac.in', 'sakti', 'CSE'),
(6, 'cs_rk', 'Dr. Rajbir Kaur', 'catchrajbirkaur@gmail.com', 'rajbir', 'CSE'),
(7, 'cs_mj', 'Mr. Mukesh Jadon', 'jadonmukesh30@gmail.com', 'jadon', 'CSE'),
(8, 'ec_as', 'Dr. Abhishek Sharma', 'abhisheksharma@lnmiit.ac.in', 'abhishek', 'ECE'),
(9, 'ec_rt', 'prof. Raghuvir Tomar', 'rtomar@lnmiit.ac.in', 'raghuvir', 'ECE'),
(10, 'ec_ss', 'Mr. Sandeep Saini', 'sandeep.s@lnmiit.ac.in', 'sandeep', 'ECE'),
(11, 'ec_sd', 'Dr. Soumitra DebNath', 'soumitra@lnmiit.ac.in', 'soumitra', 'ECE'),
(12, 'm_ap', 'Dr. Ajit Patel', 'apatel@lnmiit.ac.in', 'ajit', 'MATHEMATICS'),
(13, 'm_dm', 'DR. Dheerendre Misra', 'dheerendra.misra@lnmiit.ac.in', 'dheerendre', 'MATHEMATICS'),
(14, 'm_vg', 'Dr. Vikas Gupta', 'gupta@lnmiit.ac.in', 'vikas', 'MATHEMATICS'),
(15, 'm_mg', 'Dr. Manish Garg', 'manishiitr8@gmail.com', 'manish', 'MATHEMATICS'),
(16, 'hss_uk', 'Dr. Usha Kanoongo', 'usha.kanoongo@gmail.com', 'usha', 'HSS'),
(17, 'hss_ssm', 'Dr. Surindar Singh Mehra', 'surindarnehra@lnmiit.ac.in', 'surindar', 'HSS'),
(18, 'hss_rb', 'Dr. Raj Bala', 'raj@lnmiit.ac.in', 'raj', 'HSS'),
(19, 'hss_nk', 'Dr. Narendra Kumar', 'narendra', 'narendra', 'HSS'),
(20, 'p_an', 'Dr. Amit Neogi', 'amit.neogi@gmail.com', 'amit', 'PHYSICS'),
(21, 'p_as', 'Dr. Anjishnu Sarkar', 'anjishnu@lnmiit.ac.in', 'anjishnu', 'PHYSICS'),
(22, 'p_sv', 'Dr. Subhayan Biswas', 'shubhayanb@gmail.com', 'shubhayan', 'PHYSICS'),
(23, 'p_mks', 'Dr. Manish Kumar Singh', 'mksingh@lnmiit.ac.in', 'manish', 'PHYSICS'),
(24, 'cs_ps', 'Dr.Preety Singh', 'preety@lnmiit.ac.in', 'preety', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `doc` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `subject`, `faculty`, `type`, `msg`, `doc`, `date`) VALUES
(21, 'Java', 'Dr.preety Singh', 'General', 'lkkll', 'uploads/202.78.173.18_MIS_academic_StudentInformation.pdf', '2016-11-08 02:03:52'),
(23, 'DBMS', 'MR. Vikas Bajpai', 'Class Schedule', 'Class is on Tuesday 4-5 pm.<br>Check out the slide to read.', '../uploads/08-heapsort.ppt', '2016-11-08 02:03:52'),
(24, 'Data Structure', 'Dr. Rajbir Kaur', 'General', 'ok file send', '../uploads/GAA LEC 17-22.pdf', '2016-11-08 02:16:08'),
(29, 'Data Structure', 'Dr. Rajbir Kaur', 'General', 'Please find attached lecture slides', '../uploads/IBM_BIGSHEETS.odt', '2016-11-08 03:22:58'),
(30, 'DBMS', 'MR. Vikas Bajpai', 'Marks', 'Copies of Mid Term will be show on monday. Find attached list.', '../uploads/crime.jpg', '2016-11-08 23:10:33'),
(32, 'DBMS', 'MR. Vikas Bajpai', 'General', 'End Sem Exam will be on 21/11/2012', '../uploads/', '2016-11-10 23:25:42'),
(33, 'DBMS', 'MR. Vikas Bajpai', 'Assignment', 'Last date for submission of an assignment is 25 Nov. 2016. 11:59 am.', '../uploads/', '2016-11-14 15:43:39'),
(34, 'DBMS', 'MR. Vikas Bajpai', 'Document', 'Find attached slides for end term exam', '../uploads/Doc3.docx', '2016-11-14 15:47:51'),
(35, 'DBMS', 'MR. Vikas Bajpai', 'Class Schedule', 'class is cancel', '../uploads/', '2016-11-14 16:41:45'),
(36, 'DBMS', 'Gaurav Khatri', 'Assignment', 'Last date is friday', '../uploads/15 G Form (Pre-filled).pdf', '2016-11-15 16:22:08'),
(37, 'DBMS', 'MR. Vikas Bajpai', 'General', 'last date is maonday', '../uploads/', '2016-11-15 16:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `sem_register`
--

CREATE TABLE `sem_register` (
  `id` int(11) NOT NULL,
  `batch` varchar(200) NOT NULL,
  `sem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem_register`
--

INSERT INTO `sem_register` (`id`, `batch`, `sem`) VALUES
(6, 'y13', 'sem7'),
(9, 'y16', 'sem1'),
(11, 'y14', 'sem4'),
(13, 'y15', 'sem3');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `mobile`, `roll_no`, `batch`, `branch`, `username`, `password`, `subject`) VALUES
(1, 'Priyansh Mangal', 'y14uc207@lnmiit.ac.in', '9529666908', '14ucs087', 'y14', 'CSE', 'priyansh', 'priyansh', 'Java,DBMS,COA,'),
(2, 'Shailesh Singh', 'y14uc254@lnmiit.ac.in', '8890956247', '14ucs106', 'y14', 'CSE', 'shailesh', 'shailesh', 'Java,DBMS,COA,'),
(3, 'Rahul Deewan', 'y14uc215@lnmiit.ac.in', '8764355347', '14ucs091', 'y14', 'CSE', 'rahul', 'rahul', ''),
(5, 'Shubham Gupta', 'y14uc279@lnmiit.ac.in', '952689336', '14ucs115', 'y14', 'CSE', 'Shubham', 'shubham', ''),
(7, 'Gaurav Khatri', '15ucs076@lnmiit.ac.in', '9526854566', '15ucs076', 'y15', 'CSE', 'gaurav', 'gaurav', 'E-2,Physics-2,M-2,VEE,');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `Semester` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `dept`, `Semester`) VALUES
(1, 'CP', 'CSE', 'sem1'),
(2, 'Java', 'CSE', 'sem4'),
(3, 'DBMS', 'CSE', 'sem4'),
(4, 'Data Structure', 'CSE', 'sem3'),
(5, 'OS', 'CSE', 'sem5'),
(6, 'COA', 'CSE', 'sem4'),
(7, 'SWE', 'CSE', 'sem5'),
(8, 'TOC', 'CSE', 'sem5'),
(9, 'PPL', 'CSE', 'sem5'),
(10, 'GAA', 'CSE', 'sem5'),
(11, 'Physics-1', 'PHYSICS', 'sem1'),
(12, 'Physics-2', 'PHYSICS', 'sem2'),
(13, 'INSE', 'PHYSICS', 'sem5'),
(14, 'M-1', 'MATHEMATICS', 'sem1'),
(15, 'M-3', 'MATHEMATICS', 'sem3'),
(16, 'M-2', 'MATHEMATICS', 'sem2'),
(17, 'OPTI', 'MATHEMATICS', 'sem5'),
(18, 'E-1', 'ECE', 'sem1'),
(19, 'DCS', 'ECE', 'sem4'),
(20, 'DSP', 'ECE', 'sem5'),
(21, 'DC', 'ECE', 'sem4'),
(22, 'E-2', 'ECE', 'sem2'),
(23, 'SSC', 'ECE', 'sem5'),
(24, 'POC', 'ECE', 'sem4'),
(25, 'English', 'HSS', 'sem1'),
(26, 'VEE', 'HSS', 'sem2'),
(27, 'EEB', 'HSS', 'sem3'),
(28, 'Economics', 'HSS', 'sem3'),
(29, 'French', 'HSS', 'sem5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_register`
--
ALTER TABLE `course_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem_register`
--
ALTER TABLE `sem_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `course_register`
--
ALTER TABLE `course_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `sem_register`
--
ALTER TABLE `sem_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
