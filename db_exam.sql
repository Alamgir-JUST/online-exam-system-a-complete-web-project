-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2017 at 08:25 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminUser` varchar(50) NOT NULL,
  `adminPass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70'),
(2, '', ''),
(3, 'Alamgir_JUST', '8226a3c238456069bbec8b760a8babaa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ans`
--

CREATE TABLE `tbl_ans` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `rightAns` int(11) NOT NULL DEFAULT '0',
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ans`
--

INSERT INTO `tbl_ans` (`id`, `quesNo`, `rightAns`, `ans`) VALUES
(128, 1, 0, 'Bev Littlewood'),
(129, 1, 1, 'Berry Bohem'),
(130, 1, 0, 'Roger Pressman'),
(131, 1, 0, 'Victor Bisili'),
(132, 2, 1, 'Waterfall Model '),
(133, 2, 0, 'Spiral Model'),
(134, 2, 0, ' Quick and Fix model'),
(135, 2, 0, ' Prototyping Model'),
(136, 3, 0, ' 3 Phases '),
(137, 3, 0, '1 Phases'),
(138, 3, 1, '2 Phases'),
(139, 3, 0, '4 Phases'),
(140, 4, 1, ' Software requirement specification '),
(141, 4, 0, 'Software requirement solution '),
(142, 4, 0, 'System requirement specification'),
(143, 4, 0, ' None of Above'),
(144, 5, 0, ' Small Projects'),
(145, 5, 0, ' Complex Projects '),
(146, 5, 1, 'Accommodating change '),
(147, 5, 0, 'None of Above'),
(148, 6, 1, ' Rapid Application Development '),
(149, 6, 0, 'Relative Application Development'),
(150, 6, 0, ' Ready Application Development'),
(151, 6, 0, ' Repeated Application Development'),
(152, 7, 1, 'IBM '),
(153, 7, 0, 'Motorola '),
(154, 7, 0, 'Microsoft '),
(155, 7, 0, 'Lucent Technologies'),
(156, 8, 0, 'Reliable Software'),
(157, 8, 0, ' Cost Effective Software '),
(158, 8, 1, 'Reliable and cost effective Software '),
(159, 8, 0, 'None Of Above'),
(160, 9, 0, '13 programmers '),
(161, 9, 0, '10 programmers '),
(162, 9, 1, '8 programmers '),
(163, 9, 0, '100/13 programmers'),
(164, 10, 0, 'Basic path '),
(165, 10, 0, 'Graph Testing '),
(166, 10, 0, 'Dataflow'),
(167, 10, 1, ' Glass box testing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques`
--

CREATE TABLE `tbl_ques` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `ques` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ques`
--

INSERT INTO `tbl_ques` (`id`, `quesNo`, `ques`) VALUES
(40, 1, 'Spiral Model was developed by? '),
(41, 2, 'Which model is popular for students small projects ? '),
(42, 3, ' Build and Fix model has?  '),
(43, 4, 'SRS stands for ?'),
(44, 5, 'Waterfall model is not suitable for ?'),
(45, 6, 'RAD stands for ?'),
(46, 7, 'RAD Model was purposed by ? '),
(47, 8, 'Software engineering aims at developing ? '),
(48, 9, 'To completely write the program in FORTRAN and rewrite the 1% code in assembly language, if the project needs 13 days, the team consists of ? '),
(49, 10, 'White box testing, a software testing  technique is sometimes called ? ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userid`, `name`, `username`, `password`, `email`, `status`) VALUES
(5, 'Md. Alamgir Hossain', 'alamgir_JUST', '8226a3c238456069bbec8b760a8babaa', 'alamgir.cse14.just@gmail.com', 0),
(7, 'Alamgir Hossain', 'alamgir_csejust', '8226a3c238456069bbec8b760a8babaa', 'malamgirhossain1996@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
--
-- AUTO_INCREMENT for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
