-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2017 at 11:24 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jansevadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bachat_gat_info`
--

CREATE TABLE IF NOT EXISTS `bachat_gat_info` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `bg_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sr_no`),
  KEY `sr_no` (`sr_no`),
  KEY `bg_id` (`bg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bachat_gat_info`
--

INSERT INTO `bachat_gat_info` (`sr_no`, `bg_id`, `name`) VALUES
(3, 1, 'bachat gat 1'),
(4, 2, 'bachat gat 2');

-- --------------------------------------------------------

--
-- Table structure for table `loan-mem`
--

CREATE TABLE IF NOT EXISTS `loan-mem` (
  `lm_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `loan_from(bg_id)` int(11) NOT NULL,
  `loan_amount` int(11) NOT NULL,
  `reason` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `m_id` int(10) NOT NULL,
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`m_id`),
  KEY `m_id` (`m_id`),
  KEY `m_id_2` (`m_id`),
  KEY `m_id_3` (`m_id`),
  KEY `m_id_4` (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`m_id`, `username`, `password`) VALUES
(0, 'a', 'a'),
(1, 'test1', '12345'),
(2, 'test2', '12345'),
(3, 'test3', '12345'),
(4, 'test4', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE IF NOT EXISTS `member_info` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) DEFAULT NULL,
  `fname` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mname` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fhlname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_no` int(12) DEFAULT NULL,
  `mob_no` int(12) DEFAULT NULL,
  `bg_id` int(11) DEFAULT NULL,
  `scheme_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount_paid` int(11) DEFAULT NULL,
  `mstatus` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pan_no` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adar_no` int(20) DEFAULT NULL,
  `vote_id` tinyint(1) DEFAULT NULL,
  `pan` tinyint(1) DEFAULT NULL,
  `gov_id` tinyint(1) DEFAULT NULL,
  `driving_lic` tinyint(1) DEFAULT NULL,
  `emp_id` tinyint(1) DEFAULT NULL,
  `gram_id` tinyint(1) DEFAULT NULL,
  `sal_slip` tinyint(1) DEFAULT NULL,
  `in_tax` tinyint(1) DEFAULT NULL,
  `hou_tax` tinyint(1) DEFAULT NULL,
  `ele_bill` tinyint(1) DEFAULT NULL,
  `bank_state` tinyint(1) DEFAULT NULL,
  `emp_letter` tinyint(1) DEFAULT NULL,
  `adar_card` tinyint(1) DEFAULT NULL,
  `salaried` tinyint(1) DEFAULT NULL,
  `self_emp` tinyint(1) DEFAULT NULL,
  `business` tinyint(1) DEFAULT NULL,
  `student` tinyint(1) DEFAULT NULL,
  `retired` tinyint(1) DEFAULT NULL,
  `agri` tinyint(1) DEFAULT NULL,
  `other` tinyint(1) DEFAULT NULL,
  `nom_fname` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom_mname` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom_lname` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rel_nom` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom_add` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`sr_no`),
  KEY `m_id` (`m_id`),
  KEY `bg_id` (`bg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `member_info`
--

INSERT INTO `member_info` (`sr_no`, `m_id`, `fname`, `mname`, `lname`, `fhlname`, `gender`, `address`, `contact_no`, `mob_no`, `bg_id`, `scheme_id`, `date`, `amount_paid`, `mstatus`, `dob`, `pan_no`, `adar_no`, `vote_id`, `pan`, `gov_id`, `driving_lic`, `emp_id`, `gram_id`, `sal_slip`, `in_tax`, `hou_tax`, `ele_bill`, `bank_state`, `emp_letter`, `adar_card`, `salaried`, `self_emp`, `business`, `student`, `retired`, `agri`, `other`, `nom_fname`, `nom_mname`, `nom_lname`, `rel_nom`, `nom_add`, `mem_status`) VALUES
(1, 1, 'sandeep', NULL, 'raskar', '', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'san', NULL, 'ras', '', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member_owner`
--

CREATE TABLE IF NOT EXISTS `member_owner` (
  `m_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  KEY `m_id` (`m_id`),
  KEY `owner_id` (`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_owner`
--

INSERT INTO `member_owner` (`m_id`, `owner_id`) VALUES
(1, 2),
(1, 2),
(2, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `mem_reg`
--

CREATE TABLE IF NOT EXISTS `mem_reg` (
  `fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fhfname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fhmname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fhlname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mstatus` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `add1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `add2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `mob` int(20) NOT NULL,
  `panno` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `proofids` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(50) NOT NULL,
  `scheme` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(100) NOT NULL,
  `totaldepamt` int(100) NOT NULL,
  `maturityamt` int(11) NOT NULL,
  `iwrite` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fullnom_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rel_nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom_fulladd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`panno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mem_reg`
--

INSERT INTO `mem_reg` (`fname`, `mname`, `lname`, `fhfname`, `fhmname`, `fhlname`, `dob`, `gender`, `mstatus`, `add1`, `add2`, `pincode`, `phone`, `mob`, `panno`, `proofids`, `occupation`, `year`, `scheme`, `amount`, `totaldepamt`, `maturityamt`, `iwrite`, `fullnom_name`, `rel_nom`, `nom_fulladd`) VALUES
('', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', 0, '', 0, 0, 0, '', '', '', ''),
('11', '2', '2', '3', '22', '2', '2012-10-08', 'Male', 'Single', '333', '3333', 4, 4, 4, '44', 'ID_Card_of_reputed_employer', 'myown', 0, ' 44', 4, 4, 4, '44', 'hh', 'uu', '445'),
('das', 'asas', 'asa', 're', 're', 're', '2017-03-03', 'Male', 'Single', 'rt', 're', 4, 4, 44, 'd45', 'Home_Tax', 'Self_employed_Professional', 0, ' 54353', 545, 54, 5, '54', '54', '54', '54'),
('satish', 'n', 'ugale', 'n', 'k', 'ugale', '1843-12-19', 'Male', 'Married', 'abc', 'cdf', 42002, 8, 7687, 'pan123', 'Voter_id_card', 'jobless', 0, ' hdjd', 9898, 38849, 98989, 'satish ugale', 'ffofk', 'feoekf', ';ivdv'),
('satish', 'n', 'ugale', 'n', 'k', 'ugale', '1843-12-19', 'Male', 'Married', 'abc', 'cdf', 42002, 8, 7687, 'pan1234', 'Voter_id_card', 'jobless', 0, ' hdjd', 9898, 38849, 98989, 'satish ugale', 'ffofk', 'feoekf', ';ivdv'),
('das', 'asas', 'asa', 'asasa', 'asas', 'df', '2017-03-04', 'Male', 'Single', 'Khalapur', 'mj', 564, 1, 2133, 'sdf', 'Home_Tax', 'Salaried', 0, ' 1', 100, 1000, 10000, 'srwserwe', 'fgsfs', 'sdfsf', 'Khalapur'),
('das', 'asas', 'asa', 'asasa', 'asas', 'df', '2017-03-07', 'Male', 'Single', 'Khalapur', 'sdfsf', 234, 2, 234242, 'sdfsdf', 'Govt_ID_card', 'Salaried', 0, ' 1', 100, 1000, 10000, 'srwserwe', 'fgsfs', 'sdfsf', 'Khalapur');

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE IF NOT EXISTS `scheme` (
  `scheme_id` int(11) NOT NULL,
  `scheme_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `amount` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE IF NOT EXISTS `share` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `receipt_no` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `share_amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `rem_share_amount` int(11) NOT NULL,
  `rem_penalty_amount` int(11) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member_info`
--
ALTER TABLE `member_info`
  ADD CONSTRAINT `member_info_ibfk_2` FOREIGN KEY (`bg_id`) REFERENCES `bachat_gat_info` (`bg_id`);

--
-- Constraints for table `member_owner`
--
ALTER TABLE `member_owner`
  ADD CONSTRAINT `member_owner_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `login` (`m_id`),
  ADD CONSTRAINT `member_owner_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `login` (`m_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
