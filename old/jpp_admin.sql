-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2016 at 05:03 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jpp_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesslevel`
--

CREATE TABLE IF NOT EXISTS `accesslevel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `accesslevel`
--

INSERT INTO `accesslevel` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'Operator'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_contactus`
--

CREATE TABLE IF NOT EXISTS `jpp_contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comment` text NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=187 ;

--
-- Dumping data for table `jpp_contactus`
--

INSERT INTO `jpp_contactus` (`id`, `email`, `firstname`, `phone`, `timestamp`, `comment`, `lastname`, `city`) VALUES
(1, '', '', '', '2016-02-08 09:47:34', '', '', ''),
(2, 'test@ad', 'test', '8888888888', '2016-02-08 09:47:34', '', 'test', ''),
(3, '', '', '', '2016-02-08 09:48:33', '', '', ''),
(4, 'madd868@yahoo.in', 'tesy', '8888888888', '2016-02-08 09:48:34', '', 'test', ''),
(5, '', '', '', '2016-02-08 09:49:44', '', '', ''),
(6, 'madd868@yahoo.in', 'Dhaval', '9999999999', '2016-02-08 09:49:44', '', 'Gala', ''),
(7, '', '', '', '2016-02-08 09:50:42', '', '', ''),
(8, 'madd868@yahoo.in', 'Dhaval', '9999999999', '2016-02-08 09:50:43', '', 'Gala', ''),
(9, '', '', '', '2016-02-08 09:52:00', '', '', ''),
(10, 'mcmmaurya2@gmail.com', 'Dhaval', '9022222222', '2016-02-08 09:52:00', '', 'Gala', ''),
(11, '', '', '', '2016-02-08 09:53:55', '', '', ''),
(12, 'mahesh@wohlig.com', 'Dhaval', '9999999999', '2016-02-08 09:53:55', '', 'Gala', ''),
(13, '', '', '', '2016-02-08 10:12:53', '', '', ''),
(14, 'madd868@yahoo.in', 'mahesh', '8787878787', '2016-02-08 10:12:54', '', 'maurya', ''),
(15, 'madd868@yahoo.in', 'mahesh', '8787878788', '2016-02-08 10:14:44', '', 'maurya', ''),
(16, 'madd868@yahoo.in', 'sssssss', '8888888888', '2016-02-08 10:15:38', '', 'sssssss', ''),
(17, 'madd868@yahoo.in', 'sssssss', '2222222222', '2016-02-08 10:16:55', '', 'sssssssss', ''),
(18, 'madd868@yahoo.in', 'dddd', '2222222222', '2016-02-08 10:18:01', '', 'ssssssss', ''),
(19, 'madd868@yahoo.in', 'qqqqqqq2', '2222222222', '2016-02-08 10:18:48', '', 'dd', ''),
(20, 'madd868@yahoo.in', 'dddd', '3333333333', '2016-02-08 10:21:29', '', 'dddd', ''),
(21, '', '', '', '2016-02-08 15:06:08', '', '', ''),
(22, 'madd868@yahoo.in', 'sss', '2222222222', '2016-02-08 15:06:08', '', 'ssss', ''),
(23, '', '', '', '2016-02-09 10:32:06', '', '', ''),
(24, 'manan@ting.in', 'Manan', '9930717687', '2016-02-09 10:32:07', '', 'Vora', ''),
(25, '', '', '', '2016-02-09 12:05:49', '', '', ''),
(26, 'golliwock@hotmail.com', 'fatema', '9619610852', '2016-02-09 12:05:50', '', 'pocketwala', ''),
(27, '', '', '', '2016-02-09 12:07:19', '', '', ''),
(28, 'madd868@yahoo.in', 'asd', '8888888888', '2016-02-09 12:07:20', '', 'asd', ''),
(29, '', '', '', '2016-02-09 12:07:57', '', '', ''),
(30, 'madd868@yahoo.in', 'asd', '8888888888', '2016-02-09 12:07:57', '', 'sad', ''),
(31, '', '', '', '2016-02-09 12:10:13', '', '', ''),
(32, 'madd868@yahoo.in', 'sdssssssss', '8888888888', '2016-02-09 12:10:13', '', 'eeeeeeeee', ''),
(33, '', '', '', '2016-02-09 12:14:30', '', '', ''),
(34, 'hshah248@gmail.com', 'Harshit', '9920021248', '2016-02-09 12:14:32', '', 'Shah', ''),
(35, '', '', '', '2016-02-09 14:17:09', '', '', ''),
(36, 'pranali@gsentertainment.com', 'pranali', '9823949232', '2016-02-09 14:17:09', '', 'doshi', ''),
(37, 'manan@ting.in', 'Manan', '9930717687', '2016-02-10 04:04:17', '', 'Vora', ''),
(38, '', '', '', '2016-02-10 10:18:06', '', '', ''),
(39, '', '', '', '2016-02-10 10:18:17', '', '', ''),
(40, '', '', '', '2016-02-10 10:33:56', '', '', ''),
(41, 'jayvisariya93@gmail.com', 'Jay', '9773677677', '2016-02-13 10:37:00', '', 'Visariya', ''),
(42, 'test@test.con', 'Tesy', '1234567890', '2016-02-13 10:37:25', '', 'Test', ''),
(43, 'charudutt_shukla@rediffmail.com', 'Charudutt', '9405622803', '2016-02-14 03:30:01', '', 'Shukla', ''),
(44, 'mkmirza@gmail.com', 'Kaif', '9828609661', '2016-02-14 04:56:46', '', 'Mirza', ''),
(45, 'alabh.sh@gmail.com', 'Alabh', '9983434474', '2016-02-15 09:49:06', '', 'Shrivastava', ''),
(46, 'mangilal.tak12@gmail.com', 'Mangilal', '7262034226', '2016-02-17 07:44:59', '', 'Mali', ''),
(47, '', '', '', '2016-02-17 23:12:31', '', '', ''),
(48, 'nagendrasingh02@gmail.com', 'Nagendra', '9560529407', '2016-02-17 23:12:31', '', 'Singh', ''),
(49, 'pankajsharma1609@gmail.com', 'Pankaj', '7740900957', '2016-02-18 17:51:59', '', 'Sharma', ''),
(50, 'kunalishah@yahoo.com', 'Kunali', '9492954951', '2016-02-19 04:04:18', '', 'Shah', ''),
(51, '', '', '', '2016-02-19 04:22:24', '', '', ''),
(52, 'sanjeev@gmail.com', 'sanjeev kumar', '8989898989', '2016-02-19 04:22:28', '', 'kumar', ''),
(53, 'netrakulkarni28@gmail.com', 'Netra', '8197034557', '2016-02-19 15:07:38', '', 'Kulkarni', ''),
(54, 'pratikkhandelwal3@gmail.com', 'Pratik', '9462800020', '2016-02-19 18:50:02', '', 'Khandelwal', ''),
(55, 'gauravkej1@gmail.com', 'Suruchi', '9435390900', '2016-02-20 08:00:19', '', 'Kejriwal', ''),
(56, 'gauravkej1@gmail.com', 'Suruchi', '9435390900', '2016-02-20 08:01:43', '', 'Kejriwal', ''),
(57, 'pankajsharma1609@gmail.com', 'Pankaj', '7740900957', '2016-02-20 09:08:30', '', 'Sharma', ''),
(58, 'hits.singh1947@gmail.com', 'hitesh', '9772978002', '2016-02-20 09:15:45', '', 'shekhawat', ''),
(59, 'mirandagabie96@gmail.com', 'Gabriela', '971508167205', '2016-02-20 14:11:17', '', 'Miranda', ''),
(60, 'shiksharthharsh@rediffmail.com', 'Shiksharth', '7509333707', '2016-02-20 17:56:43', '', 'Harsh', ''),
(61, 'shiksharthharsh88@rediffmail.com', 'Shiksharth', '7509333707', '2016-02-22 17:04:47', '', 'Harsh', ''),
(62, 'gautamsharma039@gmail.com', 'Gautam', '8952001113', '2016-02-24 11:39:01', '', 'Sharma', ''),
(63, 'shekharjew@gmail.com', 'Shekhar', '9431483392', '2016-02-24 16:50:41', '', 'Kumar', ''),
(64, 'chintan@wohlig.com', 'chintan', '9819222221', '2016-02-25 05:45:30', '', 'shah', ''),
(65, '', '', '', '2016-02-25 11:24:17', '', '', ''),
(66, 'avinashppt@gmail.com', 'Avinash', '8089409114', '2016-02-25 11:24:17', '', 'K', ''),
(67, 'darsh.rocks05@gmail.com', 'Darshan', '7359724409', '2016-02-28 13:36:14', '', 'Patel', ''),
(68, 'omkthakkar@gmail.com', 'Om', '9925699994', '2016-02-28 15:47:32', '', 'Thakkar', ''),
(69, 'vikasanandani@gmail.com', 'Vikas', '8130743370', '2016-03-04 09:36:40', '', 'Anandani', ''),
(70, 'dudxmanav@gmail.com', 'Manav', '9829292562', '2016-03-04 17:13:27', '', 'Sharma', ''),
(71, 'dudxmanav@gmail.com', 'Manav', '9829292562', '2016-03-06 11:40:38', '', 'Sharma', ''),
(72, 'pooja@wohlig.com', 'Pooja', '36543656423', '2016-03-15 07:22:51', 'abc,xyz', 'Thakare', 'Mumbai'),
(81, 'pooja.wohlig@gmail.com', 'Pooja', '9594390024', '2016-03-15 10:38:59', 'Gangadhari Mallesh,Jagdeesha K.K,Kuldeep Singh', 'Thakare', 'Mumbai'),
(82, 'chaitaleelp10@gmail.com', 'chaitalee', '7435694135', '2016-03-15 10:40:19', 'Gangadhari Mallesh,Jagdeesha K.K', 'patil', 'Mumbai'),
(83, 'hhhah@yyt.xom', 'Harsh', '9999900000', '2016-03-16 07:49:03', 'Anil Patil,Raju Lal Choudhary,Samarjeet Singh', 'dsd', 'dsdsd'),
(84, 'roshanchoudhary90@gmail.com', 'Roshan', '9461236667', '2016-03-20 07:51:26', '', 'Choudhary', ''),
(85, 'rajendrakhyalia26@gmail.com', 'rajendra', '8003270150', '2016-03-21 06:14:09', 'Rajesh Narwal', 'khyalia', 'laxmangarh(sikar)'),
(86, 'r.o.ravi12@gmail.com', 'Ravi', '7708095712', '2016-03-25 13:38:49', 'Anil Patil,C. Arun,Jasvir Singh,Kuldeep Singh,Navneet Gautam,Ran Singh,Rohit Rana,Sanjay Shrestha,Samarjeet Singh,Wei Yang Tsai', 'S', 'chennai'),
(87, 'joshi.vinita690@gmail.com', 'vinita', '9799015711', '2016-03-25 13:40:45', 'C. Arun,Jagdeesha K.K,Jasvir Singh,Kuldeep Singh,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'joshi', 'Suratgarh'),
(88, 'anant.goodwill@gmail.com', 'Anant', '9482870891', '2016-03-25 13:41:06', 'Jasvir Singh,Kuldeep Singh,Rajesh Narwal,Ran Singh,Sonu Narwal', 'Jain', 'Bangalore'),
(89, 'aksoni007@outlook.com', 'Ashish', '9468885510', '2016-03-25 13:44:41', 'C. Arun,Gangadhari Mallesh,Jagdeesha K.K,Jasvir Singh,Kuldeep Singh,Mohammad Maghsodlou,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Soni', 'Bikaner'),
(90, 'csneelamgarg@gmail.com', 'NEELAM', '9555315118', '2016-03-25 13:45:31', 'Anil Patil,Mohammad Maghsodlou,Navneet Gautam,Rajesh Narwal,Raju Lal Choudhary,Rohit Rana', 'GARG', 'new delhi'),
(91, 'smartnirajsingh@gmail.com', 'Niraj', '9828278218', '2016-03-25 13:48:13', 'Rajesh Narwal', 'Singh', 'Jaipir'),
(92, 'netrakulkarni98@gmail.com', 'Netra', '8197034557', '2016-03-25 13:52:08', 'Rajesh Narwal', 'Kulkarni', 'Hubli'),
(93, 'shanulgoswami05@gmail.com', 'SHANUL', '7415229957', '2016-03-25 14:08:16', 'Jasvir Singh', 'GOSWAMI', 'jabalpur'),
(94, 'skandashyam@gmail.com', 'Skanda', '9742311022', '2016-03-25 14:11:24', 'Jasvir Singh,Kuldeep Singh,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'HS', 'Bengaluru'),
(95, 'mruth.ba@gmail.com', 'Ruth', '5133140269', '2016-03-25 14:22:09', 'Ran Singh', 'Manda', 'New Jersey'),
(96, 'meena00rajani@gmail.com', 'Rajani', '9001681458', '2016-03-25 14:25:47', 'Kuldeep Singh,Rajesh Narwal,Rohit Kumar Prajapat,Sonu Narwal', 'Meena', 'Jaipur'),
(97, 'Ashd23071994@gmail.com', 'Aashish', '8386067787', '2016-03-25 14:39:19', 'C. Arun,Jasvir Singh,Kuldeep Singh,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Dave', 'Jaipur'),
(98, 'smartnirajsingh@gmail.com', 'Niraj', '9828278218', '2016-03-25 14:56:35', 'Rajesh Narwal', 'Singh', 'Jaipur'),
(99, 'vikasanandani@gmail.com', 'vikas', '8130743370', '2016-03-25 16:43:50', 'Jasvir Singh', 'anandani', 'new delhi'),
(100, 'nchhalani@ymail.com', 'Nitin', '7568794577', '2016-03-25 18:03:49', 'Jasvir Singh,Kuldeep Singh,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Chhalani', 'Jaipur'),
(101, 'keganfernandes@yahoo.in', 'Kegan', '9920010975', '2016-03-25 19:11:18', 'Anil Patil,Jasvir Singh', 'Fernandes', 'Mumbai'),
(102, 'Premanshteotia29@gmail.com', 'PREMANSH', '9772204255', '2016-03-25 19:47:37', 'Gangadhari Mallesh,Jasvir Singh,Mohammad Maghsodlou,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Kumar Prajapat,Rohit Rana,Sonu Narwal', 'TEOTIA', 'Meerut'),
(103, 'VarunDhawanCafe@Gmail.com', 'Krish', '7879947926', '2016-03-26 03:51:47', 'Kuldeep Singh', 'Soni', 'Bhopal'),
(104, 'gunjan15aug@gmail.com', 'Gunjan', '9772124756', '2016-03-26 04:10:42', 'Jasvir Singh,Kuldeep Singh,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Kumari', 'Pilani'),
(105, 'anoshj007@gmail.com', 'Anosh', '9745529534', '2016-03-26 05:57:11', 'Jasvir Singh,Rohit Rana', 'Joy', 'pala'),
(106, 'anilsinghrathore01@gmail.com', 'ANIL SINGH', '9024777857', '2016-03-26 07:20:09', 'C. Arun,Jasvir Singh,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'RATHORE', 'SIKAR'),
(107, 'anilsinghrathore01@gmail.com', 'ANIL SINGH', '9024777857', '2016-03-26 07:21:31', 'C. Arun,Jasvir Singh,Ran Singh,Rohit Rana,Sonu Narwal', 'RATHORE', 'SIKAR'),
(108, 'anilsinghrathore1991@gmail.com', 'ANIL', '9214872548', '2016-03-26 07:23:37', 'Jasvir Singh,Kuldeep Singh,Mohammad Maghsodlou,Navneet Gautam,Rajesh Narwal,Rohit Rana,Samarjeet Singh,Wei Yang Tsai', 'SINGH', 'NAGOUR'),
(109, 'nchhalani@ymail.com', 'Nitin', '7568794577', '2016-03-26 16:27:20', '', 'Chhalani', ''),
(110, 'vinicaevents@gmail.com', 'Vincent', '8762892174', '2016-03-27 07:58:35', 'Jasvir Singh,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Crasta', 'Mangalore'),
(111, 'harshitr90@gmail.com', 'Harshit', '8435522665', '2016-03-27 10:23:34', 'Rajesh Narwal,Ran Singh', 'Rathi', 'Raipur'),
(112, 'poornachandra034@gmail.com', 'poornachandra', '8098168775', '2016-03-28 12:57:52', 'Jasvir Singh,Rajesh Narwal,Ran Singh', 'rajasekar', 'sivakasi tamilnadu'),
(113, 'vaishnavi.vartak@gmail.com', 'vaishnavi', '9823110133', '2016-04-01 10:15:52', 'Rajesh Narwal', 'vartak', 'mumbai'),
(114, 'vaishnavi.vartak@gmail.com', 'vaishnavi', '9823110133', '2016-04-01 10:16:17', 'Rajesh Narwal', 'vartak', 'mumbai'),
(115, 'nikhilpunk@gmail.com', 'nikhil', '9169277589', '2016-04-01 13:54:01', 'Rajesh Narwal', 'tripathi', 'allahabad'),
(116, 'nikhilpunk@gmail.com', 'nikhil', '9169277589', '2016-04-01 13:54:03', 'Rajesh Narwal', 'tripathi', 'allahabad'),
(117, 'vaishnavi.vartak@gmail.com', 'vaishnavi', '9823110133', '2016-04-01 14:59:18', 'Rajesh Narwal', 'vartak', 'mumbai'),
(118, 'nchhalani@ymail.com', 'Nitin', '7568794577', '2016-04-01 15:45:12', '', 'Chhalani', ''),
(119, 'nchhalani@ymail.com', 'Nitin', '7568794577', '2016-04-01 15:46:41', 'Jasvir Singh,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Chhalani', 'Jaipur'),
(120, 'meena00rajani@gmail.com', 'Rajani', '9001681458', '2016-04-01 16:10:12', 'Kuldeep Singh,Rajesh Narwal,Raju Lal Choudhary,Rohit Kumar Prajapat,Sonu Narwal', 'Meena', 'Jaipur'),
(121, 'premcool2613@gmail.com', 'Prem', '9754170642', '2016-04-01 16:14:07', 'Jasvir Singh', 'Rawat', 'Indore'),
(122, 'anand.boisa@gmail.com', 'Anand', '8983713458', '2016-04-01 16:27:00', 'Gangadhari Mallesh,Jasvir Singh,Kuldeep Singh,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Kumar Prajapat,Rohit Rana,Samarjeet Singh,Sonu Narwal,Wei Yang Tsai', 'Boisa', 'Mumbai'),
(123, 'mehul.mandaliya@yahoo.co.in', 'Mehul', '9890666866', '2016-04-01 16:41:35', '', 'Mandaliya', 'Mumbai'),
(124, 'akashkumar.6095@gmail.com', 'Akash', '9711676123', '2016-04-01 16:42:44', 'Jasvir Singh,Kuldeep Singh,Rajesh Narwal,Rohit Rana,Sonu Narwal,Wei Yang Tsai', 'Kumar', 'New Delhi'),
(125, 'sara.kumar9195@gmail.com', 'Shweta', '9873704162', '2016-04-01 16:47:26', 'Jasvir Singh,Rohit Rana', 'Kumar', 'New Delhi'),
(126, 'amishaparewaria75@gmail.com', 'amisha', '9602736922', '2016-04-01 17:36:47', 'Rajesh Narwal', 'parewaria', 'jaipur'),
(127, 'harshitsachdeva36@yahoo.com', 'Harshit', '8447063936', '2016-04-01 17:57:06', 'C. Arun,Jasvir Singh,Kuldeep Singh,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'sachdeva', 'Gurgaon'),
(128, 'jswapnil1496@gmail.com', 'Swapnil', '7276736086', '2016-04-01 17:57:38', 'Jasvir Singh,Navneet Gautam,Rajesh Narwal,Rohit Rana,Sonu Narwal', 'Joshi', 'Nagpur'),
(129, 'steven30fernandes@rediffmail.com', 'STEVEN', '9923038313', '2016-04-01 18:59:23', 'Anil Patil,C. Arun,Gangadhari Mallesh,Jagdeesha K.K,Jasvir Singh,Kuldeep Singh,Mohammad Maghsodlou,Navneet Gautam,Rajesh Narwal,Raju Lal Choudhary,Ran Singh,Rohit Kumar Prajapat,Rohit Rana,Sanjay Shrestha,Samarjeet Singh,Sonu Narwal,Wei Yang Tsai', 'FERNANDES', 'Dabolim'),
(130, 'sharma.shri@gmail.com', 'Shrikant', '9999960982', '2016-04-01 19:19:14', 'Jasvir Singh,Rajesh Narwal,Ran Singh,Rohit Rana', 'Sharma', 'New Delhi'),
(131, 'shivamanuja@gmail.com', 'Shiva', '8587870123', '2016-04-02 01:26:29', 'Anil Patil,C. Arun,Gangadhari Mallesh,Jagdeesha K.K,Jasvir Singh,Kuldeep Singh,Mohammad Maghsodlou,Navneet Gautam,Rajesh Narwal,Raju Lal Choudhary,Ran Singh,Rohit Kumar Prajapat,Rohit Rana,Sanjay Shrestha,Samarjeet Singh,Sonu Narwal,Wei Yang Tsai', 'Manuja', 'New Delhi'),
(132, 'dilipnew2010@gmail.com', 'Dilip', '8486542402', '2016-04-02 03:23:27', 'C. Arun,Jagdeesha K.K,Jasvir Singh,Rajesh Narwal,Ran Singh,Rohit Kumar Prajapat,Wei Yang Tsai', 'Hazarika', 'JORHAT'),
(133, 'cbgurjar90@gmail.com', 'chaturbhuj', '9413977471', '2016-04-02 03:49:50', 'Jasvir Singh,Kuldeep Singh,Rajesh Narwal', 'gurjar', 'RAWATBHATA'),
(134, 'jitendrasbhati@gmail.com', 'jitendra', '9049120217', '2016-04-02 04:23:14', 'Jasvir Singh,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Bhati', 'Pune'),
(135, 'la953751@gmail.com', 'aman', '9784373838', '2016-04-02 06:03:38', 'Jasvir Singh,Kuldeep Singh,Navneet Gautam,Rajesh Narwal,Rohit Rana,Sonu Narwal', 'sharma', 'jaipur'),
(136, 'as5240@gmail.com', 'Anushka', '9422235636', '2016-04-02 06:46:42', 'Jasvir Singh,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana', 'Garge', 'Jalgaon'),
(137, 'as5240@gmail.com', 'Anushka', '9422235636', '2016-04-02 07:14:20', 'Jasvir Singh,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana', 'Garge', 'Jalgaon'),
(138, 'sssatish90@gmail.com', 'Satish', '9660676669', '2016-04-02 08:16:08', 'Jasvir Singh,Ran Singh,Sonu Narwal', 'Sharma', 'Jaipur'),
(139, 'amishaparewaria75@gmail.com', 'Amisha', '9602736922', '2016-04-02 09:32:57', 'Rajesh Narwal', 'Parewaria', 'jaipur'),
(140, 'sharmaaditi318@gmail.com', 'Aditi', '9929159685', '2016-04-02 12:48:56', 'Jasvir Singh,Kuldeep Singh,Mohammad Maghsodlou,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Sharma', 'Jaipur'),
(141, '8447063936harshit@gmail.com', 'Harshit', '8447063936', '2016-04-02 16:03:32', 'Anil Patil,C. Arun,Gangadhari Mallesh,Jagdeesha K.K,Jasvir Singh,Kuldeep Singh,Mohammad Maghsodlou,Navneet Gautam,Rajesh Narwal,Raju Lal Choudhary,Ran Singh,Rohit Kumar Prajapat,Rohit Rana,Sanjay Shrestha,Samarjeet Singh,Sonu Narwal,Wei Yang Tsai', 'Sachdeva', 'Gurgaon'),
(142, 'ameer.raja.15@gmail.com', 'Ameer', '9629935448', '2016-04-03 02:50:46', 'Jasvir Singh,Kuldeep Singh,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Raja', 'Madurai'),
(143, 'jitendrasbhati@gmail.com', 'jitendra', '9049120217', '2016-04-03 15:23:39', 'Jasvir Singh,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Bhati', 'Pune'),
(144, 'vivekvinoddutta@gmail.com', 'Vivek', '9990247233', '2016-04-03 19:31:55', 'Jasvir Singh,Sonu Narwal', 'Dutta', 'Delhi'),
(145, 'amishaparewaria75@gmail.com', 'Amisha', '9602736922', '2016-04-07 13:49:40', '', 'Parewaria', ''),
(146, 'meghraj4@gmail.com', 'Meghraj', '7600476832', '2016-04-08 10:40:42', '', 'Choudhary', ''),
(147, 'rohan9mehra@ymail.com', 'Rohan', '8267969565', '2016-04-08 13:39:37', 'Jasvir Singh,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Mehra', 'Muzaffarnagar'),
(148, 'singhsukhpreet106@gmail.com', 'Sukhpreet', '9592292669', '2016-04-08 13:39:50', 'Anil Patil,Jasvir Singh,Kuldeep Singh,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana,Samarjeet Singh,Sonu Narwal', 'Singh', 'Jalandhar,punjab'),
(149, 'jswapnil1496@gmail.com', 'Swapnil', '7276736086', '2016-04-08 13:42:30', 'Jasvir Singh,Navneet Gautam,Rajesh Narwal,Rohit Rana,Sonu Narwal', 'Joshi', 'Nagpur'),
(150, 'jeetendrap0@gmail.com', 'jeetendra nath', '9040383681', '2016-04-08 13:43:34', 'C. Arun,Jasvir Singh,Kuldeep Singh,Mohammad Maghsodlou,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana,Samarjeet Singh,Sonu Narwal', 'panda', 'balasore'),
(151, 'anshulgupta.gupta69@gmail.com', 'Anshul', '9530455222', '2016-04-08 13:43:44', 'Jasvir Singh,Rajesh Narwal,Ran Singh,Rohit Rana', 'Gupta', 'Jaipur'),
(152, 'rushabh2cool@gmail.com', 'Rushabh', '9820540816', '2016-04-08 13:54:46', 'Kuldeep Singh', 'Rajguru', 'Mumbai'),
(153, 'kirannagendhra.p0521@gmail.com', 'KIRAN', '8489801994', '2016-04-08 14:27:00', 'Anil Patil,Gangadhari Mallesh,Kuldeep Singh,Navneet Gautam,Raju Lal Choudhary', 'NAGENDHRA', 'Vellore'),
(154, 'pankakdon159@gmail.com', 'Pankaj', '9482267413', '2016-04-08 14:29:54', 'Sonu Narwal', 'Yadav', 'Belgaum'),
(155, 'cbgurjar90@gmail.com', 'chaturbhuj', '9413977471', '2016-04-08 14:48:49', 'Rajesh Narwal', 'gurjar', 'RAWATBHATA'),
(156, 'meena00rajani@gmail.com', 'Rajani', '9001681458', '2016-04-08 18:47:53', 'Kuldeep Singh,Rohit Kumar Prajapat,Sonu Narwal', 'Meena', 'Jaipur'),
(157, 'sselvaram@gmail.com', 'Sengodan', '9447410485', '2016-04-09 05:19:01', 'C. Arun,Navneet Gautam,Rohit Kumar Prajapat', 'R', 'Kollam'),
(158, 'imdeepak1143@gmail.com', 'Deepak', '9766170143', '2016-04-09 05:28:15', 'Rohit Rana', 'Chaudhari', 'Pune'),
(159, 'midhet.wohlig@gmail.com', 'Midhet', '9920605751', '2016-04-11 07:13:41', '', 'Sulemani', ''),
(160, 'jsw@gsentertainment.com', 'Jupreet', '9967233337', '2016-04-15 07:44:23', 'Rohit Rana', 'Singh Walia', 'Mumbai'),
(161, 'avinashppt@gmail.com', 'Avinash', '8089409114', '2016-04-15 11:58:50', 'Jagdeesha K.K', 'K', 'Bangalore'),
(162, 'piyushsaini17@gmail.com', 'Piyush', '8764050704', '2016-04-15 13:34:52', 'C. Arun,Jasvir Singh,Kuldeep Singh,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana', 'Saini', 'Alwar'),
(163, 'meena00rajani@gmail.com', 'Rajani', '9001681458', '2016-04-15 13:46:12', 'Kuldeep Singh,Rohit Kumar Prajapat,Sonu Narwal', 'Meena', 'Jaipur'),
(164, 'steven30fernandes@rediffmail.com', 'Steven', '9545551307', '2016-04-15 14:45:32', 'Anil Patil,C. Arun,Gangadhari Mallesh,Jagdeesha K.K,Jasvir Singh,Kuldeep Singh,Mohammad Maghsodlou,Navneet Gautam,Rajesh Narwal,Raju Lal Choudhary,Ran Singh,Rohit Kumar Prajapat,Rohit Rana,Sanjay Shrestha,Samarjeet Singh,Sonu Narwal,Wei Yang Tsai', 'Fernandes', 'Alto-Dabolim'),
(165, 'Shivamthecskian62@gmail.com', 'Shivam', '9903841057', '2016-04-16 02:13:58', 'Anil Patil', 'Singh', 'Kolkata'),
(166, 'lalatkishoreswain@gmail.com', 'lalat', '7873676691', '2016-04-16 02:19:35', 'Jagdeesha K.K', 'swain', 'cuttack'),
(167, 'lalatkishoreswain@gmail.com', 'lalat', '7873676691', '2016-04-16 02:19:45', 'Jagdeesha K.K', 'swain', 'cuttack'),
(168, 'lalitchoudhary413@gmail.com', 'Lalit', '8983146772', '2016-04-16 04:18:22', 'Jasvir Singh,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Choudhary', 'Thane'),
(169, 'Shivamthecskian62@gmail.com', 'Christian', '8981426880', '2016-04-17 01:37:00', 'Anil Patil', 'Hidalgo', 'Kolkata'),
(170, 'Shivamthecskian62@gmail.com', 'Shivam(Christian)', '8981426880', '2016-04-17 01:39:05', 'Anil Patil', 'Singh(Hidalgo)', 'Kolkata'),
(171, 'Sharmanitin0508@gmail.com', 'Nitin', '9899367517', '2016-04-17 18:48:44', 'Jasvir Singh,Kuldeep Singh,Rajesh Narwal,Raju Lal Choudhary,Rohit Kumar Prajapat,Sonu Narwal,Wei Yang Tsai', 'Sharma', 'Delhi'),
(172, 'lebouteiller.cassandra@gmail.com', 'CASSANDRA', '0635285750', '2016-04-19 11:47:17', 'Navneet Gautam', 'LEBOUTEILLER', 'GRASSE'),
(173, 'nitz1583@gmail.com', 'Nitish', '9886077082', '2016-04-22 15:03:08', 'Gangadhari Mallesh,Jagdeesha K.K,Jasvir Singh,Mohammad Maghsodlou,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal,Wei Yang Tsai', 'S Murthy', 'Bangalore'),
(174, 'parikh.urvi18@gmail.com', 'Urvi', '9920305701', '2016-04-22 15:06:57', 'Jasvir Singh,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Parikh', 'Mumbai'),
(175, 'sachinprajapati45@gmail.com', 'sachin', '7340437106', '2016-04-22 15:23:31', 'Anil Patil,C. Arun,Jagdeesha K.K,Jasvir Singh,Kuldeep Singh,Mohammad Maghsodlou,Navneet Gautam,Rajesh Narwal,Rohit Kumar Prajapat,Rohit Rana,Sanjay Shrestha,Samarjeet Singh,Sonu Narwal,Wei Yang Tsai', 'prajapati', 'Jaipur'),
(176, 'nohanesim.nn@gmail.com', 'Noha', '0120300451', '2016-04-22 15:56:14', 'Rohit Rana', 'Nessim', 'Alexandria, Egypt'),
(177, 'mehul.mandaliya@yahoo.co.in', 'mehul', '9890666866', '2016-04-22 16:35:32', '', 'mandaliya', 'Mumbai'),
(178, 'chhillarankit7@gmail.com', 'Ankit', '9711712469', '2016-04-22 16:57:44', 'Jasvir Singh,Kuldeep Singh,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Chhillar', 'New Delhi'),
(179, 'joshi.vinita690@gmail.com', 'vinita', '9799015711', '2016-04-22 17:15:49', 'Jasvir Singh,Kuldeep Singh,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'joshi', 'Suratgarh'),
(180, 'tanuharshita14@gmail.com', 'Harshita', '9461133903', '2016-04-22 17:31:37', 'Jasvir Singh,Kuldeep Singh,Navneet Gautam,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Sharma', 'Jaipur'),
(181, 'padwalaryaa@gmail.com', 'Aryaa', '9619436506', '2016-04-22 17:49:35', 'C. Arun,Jasvir Singh,Kuldeep Singh,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Padwal', 'Mumbai'),
(182, 'divyateknik@gmail.com', 'Divya', '9791716893', '2016-04-22 17:54:33', 'Jasvir Singh,Rajesh Narwal,Sonu Narwal', 'Venkat', 'Chennai'),
(183, 'becauseimtinu@gmail.com', 'Tinu', '9600499986', '2016-04-22 18:53:47', 'Rohit Rana', 'Franklin', 'Chennai'),
(184, 'pratikkhandelwal3@gmail.com', 'Pratik', '9462800028', '2016-04-24 06:47:47', 'Jasvir Singh,Rajesh Narwal,Ran Singh,Rohit Rana,Sonu Narwal', 'Khandelwal', 'Jaipur'),
(185, 'mahendrabadiyar369@gmail.com', 'Mahendra', '9680490707', '2016-04-28 10:37:13', '', 'Badiyar', ''),
(186, 'mahendrabadiyar369@gmail.com', 'Mahendra', '9680490707', '2016-04-28 10:38:32', '', 'Badiyar', '');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_fixture`
--

CREATE TABLE IF NOT EXISTS `jpp_fixture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `schedule` int(11) NOT NULL,
  `team1player1name` varchar(255) NOT NULL,
  `team1player2name` varchar(255) NOT NULL,
  `team1player1score` varchar(255) NOT NULL,
  `team1player2score` varchar(255) NOT NULL,
  `team2player1name` varchar(255) NOT NULL,
  `team2player2name` varchar(255) NOT NULL,
  `team2player1score` varchar(255) NOT NULL,
  `team2player2score` varchar(255) NOT NULL,
  `raidpointsteam1` varchar(255) NOT NULL,
  `raidpointsteam2` varchar(255) NOT NULL,
  `tacklepointsteam1` varchar(255) NOT NULL,
  `tacklepointsteam2` varchar(255) NOT NULL,
  `alloutpointteam1` varchar(255) NOT NULL,
  `alloutpointteam2` varchar(255) NOT NULL,
  `extrapointsteam1` varchar(255) NOT NULL,
  `extrapointsteam2` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ishome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `jpp_fixture`
--

INSERT INTO `jpp_fixture` (`id`, `schedule`, `team1player1name`, `team1player2name`, `team1player1score`, `team1player2score`, `team2player1name`, `team2player2name`, `team2player1score`, `team2player2score`, `raidpointsteam1`, `raidpointsteam2`, `tacklepointsteam1`, `tacklepointsteam2`, `alloutpointteam1`, `alloutpointteam2`, `extrapointsteam1`, `extrapointsteam2`, `link`, `ishome`) VALUES
(1, 4, 'Rajesh', 'Sonu', '9', '9', 'Kashling', 'Surjeet', '9', '6', '22', '20', '8', '11', '4', '2', '5', '1', '', ''),
(5, 1, 'Rohit', 'Jasvir', '9', '6', 'Mohit', 'Anup', '4', '3', '10', '9', '12', '9', '2', '0', '3', '0', '', '2'),
(6, 2, 'Pardeep', 'Sandeep', '11', '5', 'Jasvir', 'Rajesh', '11', '4', '14', '16', '13', '9', '2', '0', '0', '3', '', ''),
(7, 3, 'Ashish', 'Shrikant', '7', '5', 'Rajesh', 'Sonu', '11', '4', '16', '18', '13', '4', '6', '2', '1', '2', '', ''),
(8, 5, 'Jang Kun Lee', 'Mahesh', '5', '4', 'Sonu', 'Rajesh', '7', '5', '17', '12', '10', '5', '4', '0', '3', '3', '', ''),
(9, 6, 'Manjeet', 'Ajay', '13', '11', 'Rajesh', 'Sonu', '9', '9', '21', '21', '8', '7', '2', '2', '1', '2', '', ''),
(10, 7, 'Sonu', 'Kuldeep', '5', '5', 'Meraj', 'Kuldeep', '11', '3', '13', '14', '11', '10', '0', '2', '1', '1', '', ''),
(11, 8, 'Sukesh', 'Dharmaraj', '6', '6', 'Sonu', 'Rajesh', '9', '6', '15', '14', '6', '14', '2', '4', '3', '3', '', ''),
(12, 10, 'Jasvir', 'Rajesh', '3', '3', 'Manjeet', 'Surjeet', '6', '8', '13', '10', '3', '17', '0', '4', '2', '2', '', ''),
(13, 11, 'Ran', 'Rajesh', '4', '4', 'Jang', 'Shyam', '6', '6', '5', '15', '10', '14', '0', '4', '3', '1', '', ''),
(14, 9, 'Rajesh', 'Jasvir', '7', '5', 'Pawan', 'Vinoth', '6', '5', '15', '13', '9', '7', '4', '0', '2', '1', '', ''),
(15, 12, 'Rajesh', 'Ran', '10', '4', 'Rohit', 'Sandeep', '14', '7', '13', '23', '7', '14', '2', '8', '2', '2', '', ''),
(16, 13, 'Sandeep', 'Selvamani', '5', '5', 'C. Arun', 'Ran', '7', '5', '8', '10', '11', '11', '2', '0', '', '', '', ''),
(17, 14, 'Rishank', 'Anup', '10', '6', 'Anil', 'Rajesh', '7', '5', '18', '11', '10', '7', '6', '2', '1', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_gallery`
--

CREATE TABLE IF NOT EXISTS `jpp_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `season` int(11) NOT NULL,
  `seasonname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `jpp_gallery`
--

INSERT INTO `jpp_gallery` (`id`, `order`, `name`, `image1`, `image2`, `type`, `season`, `seasonname`) VALUES
(1, 15, 'Lohri Celebration', 'cover-lohri.png', NULL, 2, 1, 'Season 3'),
(2, 15, 'School Visit', 'cover-school_visit.png', NULL, 2, 1, 'Season 3'),
(4, 11, 'Game 4: JAIPUR PINK PANTHERS VS DABANG DELHI', 'cover.png', NULL, 2, 1, 'Season 3'),
(5, 14, 'Game 1: JAIPUR PINK PANTHERS VS U MUMBA', 'cover-736x327.jpg', NULL, 2, 1, 'Season 3'),
(6, 12, 'Game 3:  JAIPUR PINK PANTHERS VS BENGALURU BULLS', 'cover1.png', NULL, 2, 1, 'Season 3'),
(7, 13, 'Game 2:   JAIPUR PINK PANTHERS VS PATNA PIRATES', 'cover.jpg', NULL, 2, 1, 'Season 3'),
(8, 10, 'Game 5:  JAIPUR PINK PANTHERS VS BENGAL WARRIORS', '736x327.png', NULL, 2, 1, 'Season 3'),
(9, 9, 'Game 6: JAIPUR PINK PANTHERS VS PUNERI PALTAN', 'Cover(736px-X-327px).jpg', NULL, 2, 1, 'Season 3'),
(10, 8, 'Game 7:   JAIPUR PINK PANTHERS VS TELUGU TITANS', '736x327-14.jpg', NULL, 2, 1, 'Season 3'),
(11, 7, 'GAME 8: JAIPUR PINK PANTHERS VS TELUGU TITANS', '736x327.jpg', NULL, 2, 1, 'Season 3'),
(12, 6, 'GAME 9: JAIPUR PINK PANTHERS VS BENGALURU BULLS', 'cover2.png', NULL, 2, 1, 'Season 3'),
(13, 5, 'GAME 10: JAIPUR PINK PANTHERS VS PUNERI PALTAN', 'webiste_cover.png', NULL, 2, 1, 'Season 3'),
(14, 4, 'GAME 11: JAIPUR PINK PANTHERS VS BENGAL WARRIORS', 'webiste-cover.png', NULL, 2, 1, 'Season 3'),
(15, 3, 'GAME 12: JAIPUR PINK PANTHERS VS PATNA PIRATES', 'webiste_cover1.png', NULL, 2, 1, 'Season 3'),
(16, 2, 'GAME 13: JAIPUR PINK PANTHERS VS DABANG DELHI', 'webiste_cover_(1).png', NULL, 2, 1, 'Season 3'),
(17, 1, 'GAME 14: JAIPUR PINK PANTHERS VS U MUMBA', '736x3271.png', NULL, 2, 1, 'Season 3');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_galleryslide`
--

CREATE TABLE IF NOT EXISTS `jpp_galleryslide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  `gallery` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=226 ;

--
-- Dumping data for table `jpp_galleryslide`
--

INSERT INTO `jpp_galleryslide` (`id`, `order`, `gallery`, `name`, `image`) VALUES
(1, 1, 1, '', '11.png'),
(2, 2, 1, '', '21.png'),
(3, 3, 1, '', '31.png'),
(4, 4, 1, '', '41.png'),
(5, 5, 1, '', '52.png'),
(6, 6, 1, '', '61.png'),
(8, 7, 1, '', '71.png'),
(9, 1, 2, '', 'school-visit-1.png'),
(10, 2, 2, '', 'school-visit-2.png'),
(11, 3, 2, '', 'school-visit-3.png'),
(12, 4, 2, '', 'school-visit-4.png'),
(13, 4, 2, '', 'school-visit-41.png'),
(14, 5, 2, '', 'school-visit-5.png'),
(15, 6, 2, '', 'school-visit-6.png'),
(16, 9, 2, '', 'school-visit-7.png'),
(17, 9, 2, '', 'school-visit-8.png'),
(18, 10, 2, '', 'school-visit-9.png'),
(25, 1, 4, '', '_MG_5454.jpg'),
(26, 2, 4, '', 'OH1A8864.jpg'),
(27, 3, 4, '', 'OH1A8900.jpg'),
(28, 4, 4, '', 'OH1A8969.jpg'),
(29, 5, 4, '', 'OH1A8994.jpg'),
(30, 6, 4, '', 'OH1A9091.jpg'),
(31, 7, 4, '', 'OH1A9095.jpg'),
(32, 8, 4, '', 'OH1A9143.jpg'),
(33, 9, 4, '', 'OH1A9175.jpg'),
(34, 10, 4, '', 'OH1A9199.jpg'),
(35, 11, 4, '', 'OH1A9234.jpg'),
(36, 12, 4, '', '_MG_5496.jpg'),
(37, 13, 4, '', '_MG_5510.jpg'),
(38, 14, 4, '', '_MG_5513.jpg'),
(39, 15, 4, '', '_MG_5516.jpg'),
(40, 1, 5, '', '9.jpg'),
(41, 2, 5, '', '10.jpg'),
(42, 3, 5, '', '11.jpg'),
(43, 4, 5, '', '2.jpg'),
(44, 5, 5, '', '3.jpg'),
(45, 6, 5, '', '4.jpg'),
(46, 7, 5, '', '5.jpg'),
(47, 8, 5, '', '6.jpg'),
(48, 9, 5, '', '7.jpg'),
(49, 10, 5, '', '8.jpg'),
(50, 11, 5, '', '13.jpg'),
(51, 12, 5, '', '111.jpg'),
(52, 13, 5, '', '12.jpg'),
(53, 14, 5, '', '14.jpg'),
(54, 1, 6, '', '_P8A5000.jpg'),
(55, 2, 6, '', '_P8A5040_(1).jpg'),
(56, 3, 6, '', '_P8A5040.jpg'),
(57, 4, 6, '', '_P8A5051.jpg'),
(58, 5, 6, '', '_P8A5074.jpg'),
(59, 6, 6, '', '_P8A5080.jpg'),
(60, 7, 6, '', '_P8A5089.jpg'),
(61, 8, 6, '', '_P8A5123.jpg'),
(62, 9, 6, '', '_P8A5226.jpg'),
(63, 10, 6, '', '_P8A5229.jpg'),
(64, 11, 6, '', '_P8A4954.jpg'),
(65, 1, 7, '', '_P8A4140.jpg'),
(66, 2, 7, '', '_P8A4145.jpg'),
(67, 3, 7, '', '_P8A4223.jpg'),
(68, 4, 7, '', '_P8A4236.jpg'),
(69, 5, 7, '', '_P8A4260.jpg'),
(70, 6, 7, '', '_P8A4289.jpg'),
(71, 7, 7, '', '_P8A4297.jpg'),
(72, 8, 7, '', '_P8A4412.jpg'),
(73, 9, 7, '', '_P8A4447.jpg'),
(74, 10, 7, '', '_P8A4477.jpg'),
(75, 11, 7, '', '_P8A4508.jpg'),
(76, 12, 7, '', '_P8A4514.jpg'),
(77, 1, 8, '', '12.png'),
(78, 2, 8, '', '32.png'),
(79, 3, 8, '', '42.png'),
(80, 4, 8, '', '53.png'),
(81, 5, 8, '', '63.png'),
(82, 6, 8, '', '72.png'),
(83, 7, 8, '', '81.png'),
(84, 8, 8, '', '9.png'),
(85, 9, 8, '', '10.png'),
(86, 10, 8, '', '111.png'),
(87, 11, 8, '', '121.png'),
(88, 12, 8, '', '13.png'),
(89, 13, 8, '', '14.png'),
(90, 14, 8, '', '15.png'),
(91, 15, 8, '', '16.png'),
(92, 16, 8, '', '17.png'),
(93, 1, 9, '', '15.jpg'),
(94, 2, 9, '', '21.jpg'),
(95, 3, 9, '', '31.jpg'),
(96, 4, 9, '', '41.jpg'),
(97, 5, 9, '', '51.jpg'),
(98, 6, 9, '', '61.jpg'),
(99, 7, 9, '', '71.jpg'),
(100, 8, 9, '', '81.jpg'),
(101, 9, 9, '', '91.jpg'),
(102, 10, 9, '', '101.jpg'),
(103, 11, 9, '', '112.jpg'),
(104, 12, 9, '', '121.jpg'),
(105, 13, 9, '', '131.jpg'),
(106, 14, 9, '', '141.jpg'),
(107, 1, 10, '', '800x800-1.jpg'),
(108, 2, 10, '', '800x800-2.jpg'),
(109, 3, 10, '', '800x800-3.jpg'),
(110, 4, 10, '', '800x800-4.jpg'),
(111, 5, 10, '', '800x800-5.jpg'),
(112, 6, 10, '', '800x800-6.jpg'),
(113, 7, 10, '', '800x800-7.jpg'),
(114, 8, 10, '', '800x800-8.jpg'),
(115, 9, 10, '', '800x800-9.jpg'),
(116, 10, 10, '', '800x800-10.jpg'),
(117, 11, 10, '', '800x800-11.jpg'),
(119, 12, 10, '', '800x800-121.jpg'),
(120, 13, 10, '', '800x800-13.jpg'),
(121, 1, 11, '', '800x800-14.jpg'),
(122, 2, 11, '', '800x800-21.jpg'),
(123, 3, 11, '', '800x800-31.jpg'),
(124, 4, 11, '', '800x800-41.jpg'),
(125, 5, 11, '', '800x800-51.jpg'),
(126, 6, 11, '', '800x800-61.jpg'),
(127, 7, 11, '', '800x800-71.jpg'),
(128, 8, 11, '', '800x800-81.jpg'),
(129, 9, 11, '', '800x800-91.jpg'),
(130, 10, 11, '', '800x800-101.jpg'),
(131, 11, 11, '', '800x800-111.jpg'),
(132, 12, 11, '', '800x800-122.jpg'),
(133, 13, 11, '', '800x800-131.jpg'),
(134, 14, 11, '', '800x800-141.jpg'),
(135, 1, 12, '', '08.png'),
(136, 2, 12, '', '09.png'),
(137, 3, 12, '', '101.png'),
(138, 4, 12, '', '112.png'),
(139, 5, 12, '', '122.png'),
(140, 6, 12, '', '131.png'),
(141, 7, 12, '', '141.png'),
(142, 8, 12, '', '151.png'),
(143, 9, 12, '', '161.png'),
(144, 10, 12, '', '171.png'),
(145, 11, 12, '', '06.png'),
(146, 12, 12, '', '07.png'),
(147, 13, 12, '', '18.png'),
(148, 14, 12, '', '01.png'),
(149, 15, 12, '', '02.png'),
(150, 16, 12, '', '03.png'),
(151, 1, 13, '', '04.png'),
(152, 2, 13, '', '05.png'),
(153, 3, 13, '', '061.png'),
(154, 4, 13, '', '071.png'),
(155, 5, 13, '', '081.png'),
(156, 6, 13, '', '091.png'),
(157, 7, 13, '', '102.png'),
(158, 8, 13, '', '113.png'),
(159, 9, 13, '', '123.png'),
(160, 10, 13, '', '132.png'),
(161, 11, 13, '', '142.png'),
(162, 12, 13, '', '152.png'),
(163, 13, 13, '', '162.png'),
(164, 14, 13, '', '011.png'),
(165, 15, 13, '', '021.png'),
(166, 1, 14, '', '012.png'),
(167, 2, 14, '', '031.png'),
(168, 3, 14, '', '041.png'),
(169, 4, 14, '', '051.png'),
(170, 5, 14, '', '062.png'),
(171, 6, 14, '', '072.png'),
(172, 7, 14, '', '082.png'),
(173, 8, 14, '', '092.png'),
(174, 9, 14, '', '103.png'),
(175, 10, 14, '', '114.png'),
(176, 11, 14, '', '124.png'),
(177, 12, 14, '', '133.png'),
(178, 13, 14, '', '143.png'),
(179, 14, 14, '', '022.png'),
(180, 1, 15, '', '013.png'),
(181, 2, 15, '', '023.png'),
(182, 3, 15, '', '032.png'),
(183, 4, 15, '', '042.png'),
(184, 5, 15, '', '052.png'),
(185, 6, 15, '', '063.png'),
(186, 7, 15, '', '073.png'),
(187, 8, 15, '', '083.png'),
(188, 9, 15, '', '093.png'),
(189, 10, 15, '', '104.png'),
(190, 11, 15, '', '115.png'),
(191, 12, 15, '', '125.png'),
(192, 13, 15, '', '134.png'),
(193, 14, 15, '', '144.png'),
(194, 15, 15, '', '153.png'),
(195, 16, 15, '', '163.png'),
(196, 17, 15, '', '172.png'),
(197, 18, 15, '', '181.png'),
(198, 1, 16, '', '014.png'),
(199, 2, 16, '', '024.png'),
(200, 3, 16, '', '033.png'),
(201, 4, 16, '', '043.png'),
(202, 5, 16, '', '053.png'),
(203, 6, 16, '', '064.png'),
(204, 7, 16, '', '094.png'),
(205, 8, 16, '', '105.png'),
(206, 9, 16, '', '116.png'),
(207, 10, 16, '', '126.png'),
(208, 11, 16, '', '135.png'),
(209, 12, 16, '', '074.png'),
(210, 13, 16, '', '084.png'),
(211, 1, 17, '', '800X800-1.png'),
(212, 2, 17, '', '800X800-2.png'),
(213, 3, 17, '', '800x800-3.png'),
(214, 4, 17, '', '800x800-4.png'),
(215, 5, 17, '', '800x800-5.png'),
(216, 6, 17, '', '800x800-6.png'),
(217, 7, 17, '', '800x800-7.png'),
(218, 8, 17, '', '800x800-8.png'),
(219, 9, 17, '', '800x800-9.png'),
(220, 10, 17, '', '800x800-10.png'),
(221, 11, 17, '', '800x800-11.png'),
(222, 12, 17, '', '800x800-12.png'),
(223, 13, 17, '', '800x800-13.png'),
(224, 14, 17, '', '800x800-14.png'),
(225, 15, 17, '', '800x800-15.png');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_merchandize`
--

CREATE TABLE IF NOT EXISTS `jpp_merchandize` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jpp_news`
--

CREATE TABLE IF NOT EXISTS `jpp_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `jpp_news`
--

INSERT INTO `jpp_news` (`id`, `type`, `name`, `image`, `timestamp`, `content`, `link`, `logo`) VALUES
(1, 0, 'Students get hands on experience playing Kabbadi with JPP Players, joined by Abhishek Bachchan', 'n4.jpg', '2016-01-13 01:43:47', 'http://rajasthanpatrika.patrika.com/story/rajasthan/abhishek-bachchan-arrived-jaipur-with-pink-panther-team-1617563.html', 'http://rajasthanpatrika.patrika.com/story/rajasthan/abhishek-bachchan-arrived-jaipur-with-pink-panther-team-1617563.html', 'rajasthanpatrika.png'),
(3, 0, '"Lets take a selfie!", Junior Bachchan gets candid with fans', 'n6.jpg', '2016-01-14 13:17:49', 'http://www.bhaskar.com/news/c-10-2338321-jp0925-abhishek-bacchan-NOR.html?seq=2', 'http://www.bhaskar.com/news/c-10-2338321-jp0925-abhishek-bacchan-NOR.html?seq=2', 'l3.jpg'),
(4, 0, '''Sporty'' Abhishek Bachchan aims to start Pro Kabaddi League for women', 'n52.png', '2016-01-22 13:18:21', 'http://www.newkerala.com/news/2016/fullnews-10312.html', 'http://www.newkerala.com/news/2016/fullnews-10312.html', 'l4.jpg'),
(5, 0, 'Jaipur Pink Panthers looking for change of fortune', 'n54.png', '2016-01-28 13:18:50', 'http://indianexpress.com/article/blogs/sports-blogs/pro-kabaddi-league-2016-team-preview-jaipur-pink-panthers-looking-for-change-of-fortune/', 'http://indianexpress.com/article/blogs/sports-blogs/pro-kabaddi-league-2016-team-preview-jaipur-pink-panthers-looking-for-change-of-fortune/', 'l5.jpg'),
(6, 0, 'Abhishek celebrates his birthday with Jaipur Pink Panthers team', 'Deccan_(717px-X-564px).jpg', '2016-02-13 09:00:48', '', 'http://www.deccanchronicle.com/entertainment/bollywood/120216/watch-abhishek-bachchan-celebrates-his-birthday-with-his-jaipur-pink-panthers-team.html', 'Deccan-Chronicle-logo.jpg'),
(7, 0, 'U Mumba loses to Pink Panthers', 'The-free-press_(717px-X-564px).jpg', '2016-02-13 09:03:29', '', 'http://www.freepressjournal.in/u-mumba-loses-to-pink-panthers/769953', 'Media-Logo_Free-Press-Journal.png'),
(8, 0, 'Patna Pirates shock Jaipur Pink Panthers by one point in Pro Kabaddi League', 'IBN-live_(717px-X-564px).jpg', '2016-02-13 09:04:54', '', 'http://www.ibnlive.com/news/sports/patna-pirates-shock-jaipur-pink-panthers-by-one-point-in-pro-kabaddi-league-1197884.html', 'unnamed.jpg'),
(9, 0, 'Pro Kabaddi League: Rohit Rana''s superb show helps Pink Panthers to a thumping victory over U Mumba', 'DNA_(717px-X-564px).jpg', '2016-02-13 11:16:43', '', 'http://www.dnaindia.com/sport/report-pro-kabaddi-league-rohit-rana-s-superb-show-helps-pink-panthers-to-a-thumping-victory-against-u-mumba-2172529', 'DNA_Daily_News_and_Analysis_New_Logo.jpg'),
(10, 0, 'Bowled over by kabaddi', 'Nyoooz_(717px-X-564px).jpg', '2016-02-13 11:17:29', 'Summary: Tennis star Sania Mirza and Rana live in the same colony and the colony people would celebrate every victory of Sania, he said.', 'http://www.nyoooz.com/visakhapatnam/340157/bowled-over-by-kabaddi', 'NYOOOZ.jpg'),
(11, 0, 'Jaipur Pink Panthers vs Bengaluru Bulls live streaming & TV information', 'international-business-times-resized.png', '2016-02-22 07:42:54', '', 'http://www.ibtimes.co.in/watch-pro-kabaddi-league-2016-match-36-live-jaipur-pink-panthers-vs-bengaluru-bulls-live-streaming-667677', 'logo-ibt.png'),
(12, 0, 'Puneri Paltan beat Jaipur Pink Panthers 33-18 | Pro Kabaddi League 2016 Live Score: Jaipur Pink Panthers vs Puneri Paltan Live Points Update', 'Image_India.jpg', '2016-02-26 07:38:50', '', 'http://www.india.com/sports/pro-kabaddi-league-2016-live-score-jaipur-pink-panthers-vs-puneri-paltan-live-points-update-967559/', 'india-com-logo_1.png'),
(13, 0, 'Jaipur Pink Panthers beat Bengaluru Bulls 30-21 in Pro Kabaddi', 'Image_The_Hindu.jpg', '2016-02-26 07:39:31', '', 'http://www.thehindu.com/todays-paper/tp-in-school/jaipur-pink-panthers-beat-bengaluru-bulls-3021-in-pro-kabaddi/article8265184.ece', 'The-Hindustan.png'),
(14, 0, '5 best moments of Star Sports Pro Kabaddi Season 3', 'Sk_kabaddi_Imae.jpg', '2016-04-12 09:27:58', '', 'http://www.sportskeeda.com/slideshow/5-best-moments-of-star-sports-pro-kabaddi-season-3?imgid=83422', 'Sk_kabaddi_Logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_pages`
--

CREATE TABLE IF NOT EXISTS `jpp_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jpp_players`
--

CREATE TABLE IF NOT EXISTS `jpp_players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `jerseyno` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jpp_point`
--

CREATE TABLE IF NOT EXISTS `jpp_point` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `played` varchar(255) NOT NULL,
  `wins` varchar(255) NOT NULL,
  `lost` varchar(255) NOT NULL,
  `point` int(11) NOT NULL,
  `team` int(11) NOT NULL,
  `sd` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `jpp_point`
--

INSERT INTO `jpp_point` (`id`, `played`, `wins`, `lost`, `point`, `team`, `sd`) VALUES
(1, '14', '4', '8', 28, 5, -63),
(2, '14', '10', '2', 58, 1, 104),
(3, '14', '2', '12', 14, 2, -102),
(4, '14', '9', '5', 47, 3, 26),
(5, '14', '1', '12', 11, 4, -142),
(6, '14', '7', '4', 48, 6, 92),
(7, '14', '7', '7', 38, 7, -10),
(8, '14', '12', '2', 60, 8, 95);

-- --------------------------------------------------------

--
-- Table structure for table `jpp_schedule`
--

CREATE TABLE IF NOT EXISTS `jpp_schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stadium` int(11) NOT NULL,
  `team1` varchar(255) NOT NULL,
  `team2` varchar(255) NOT NULL,
  `bookticket` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `starttime` time NOT NULL,
  `score1` varchar(50) NOT NULL,
  `score2` varchar(50) NOT NULL,
  `startdate` date NOT NULL,
  `ishome` int(11) NOT NULL,
  `hour` int(11) NOT NULL,
  `minute` int(11) NOT NULL,
  `matchtime` varchar(50) NOT NULL,
  `galleryid` int(11) NOT NULL,
  `season` int(11) NOT NULL,
  `seasonname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `jpp_schedule`
--

INSERT INTO `jpp_schedule` (`id`, `stadium`, `team1`, `team2`, `bookticket`, `timestamp`, `starttime`, `score1`, `score2`, `startdate`, `ishome`, `hour`, `minute`, `matchtime`, `galleryid`, `season`, `seasonname`) VALUES
(1, 1, '5', '8', '', '2016-04-12 12:04:09', '20:00:00', '27', '18', '2016-01-31', 2, 20, 0, '00:00', 5, 1, 'Season 3'),
(2, 1, '1', '5', '', '2016-04-12 12:04:09', '21:00:00', '29', '28', '2016-02-01', 2, 21, 0, '00:00', 7, 1, 'Season 3'),
(3, 3, '2', '5', '', '2016-04-12 12:04:09', '21:00:00', '36', '26', '2016-02-05', 2, 21, 0, '00:00', 6, 1, 'Season 3'),
(4, 4, '5', '4', '', '2016-04-12 12:04:09', '21:00:00', '39', '34', '2016-02-07', 2, 21, 0, '00:00', 4, 1, 'Season 3'),
(5, 4, '3', '5', '', '2016-04-12 12:04:09', '21:00:00', '34', '20', '2016-02-10', 2, 21, 0, '40:00', 8, 1, 'Season 3'),
(6, 6, '6', '5', '', '2016-04-12 12:04:09', '21:00:00', '32', '32', '2016-02-12', 2, 21, 0, '40:00', 9, 1, 'Season 3'),
(7, 6, '5', '7', '', '2016-04-12 12:04:09', '20:00:00', '25', '27', '2016-02-13', 2, 20, 0, '40:00', 10, 1, 'Season 3'),
(8, 7, '7', '5', '', '2016-04-12 12:04:09', '21:00:00', '26', '35', '2016-02-16', 2, 21, 0, '40:00''', 11, 1, 'Season 3'),
(9, 8, '5', '2', 'https://in.bookmyshow.com/sports/pro-kabaddi/jaipur-pink-panthers/?utm_source=facebook&utm_medium=referral&utm_campaign=fb_pro-kabaddi_jaipur_pinkpanther_290116', '2016-04-12 12:04:09', '20:00:00', '30', '21', '2016-02-20', 1, 20, 0, '40''', 12, 1, 'Season 3'),
(10, 8, '5', '6', 'https://in.bookmyshow.com/sports/pro-kabaddi/jaipur-pink-panthers/?utm_source=facebook&utm_medium=referral&utm_campaign=fb_pro-kabaddi_jaipur_pinkpanther_290116', '2016-04-12 12:04:09', '21:00:00', '18', '33', '2016-02-21', 1, 21, 0, '40''', 13, 1, 'Season 3'),
(11, 8, '5', '3', 'https://in.bookmyshow.com/sports/pro-kabaddi/jaipur-pink-panthers/?utm_source=facebook&utm_medium=referral&utm_campaign=fb_pro-kabaddi_jaipur_pinkpanther_290116', '2016-04-12 12:04:09', '20:00:00', '18', '34', '2016-02-22', 1, 20, 0, '40:00', 14, 1, 'Season 3'),
(12, 8, '5', '1', 'https://in.bookmyshow.com/sports/pro-kabaddi/jaipur-pink-panthers/?utm_source=facebook&utm_medium=referral&utm_campaign=fb_pro-kabaddi_jaipur_pinkpanther_290116', '2016-04-12 12:04:09', '21:00:00', '24', '47', '2016-02-23', 1, 21, 0, '40''', 15, 1, 'Season 3'),
(13, 9, '4', '5', '', '2016-04-12 12:04:09', '21:00:00', '21', '21', '2016-02-26', 2, 21, 0, '40''', 16, 1, 'Season 3'),
(14, 10, '8', '5', 'test', '2016-04-12 12:04:09', '20:00:00', '35', '21', '2016-02-28', 2, 20, 0, '40''', 17, 1, 'Season 3'),
(18, 6, '8', '5', '', '2016-04-12 12:05:08', '21:00:00', '', '', '2016-06-25', 2, 21, 0, '', 0, 2, 'Season 4'),
(19, 8, '5', '7', '', '2016-04-12 12:05:08', '20:00:00', '', '', '2016-06-29', 1, 20, 0, '', 0, 2, 'Season 4'),
(20, 8, '5', '2', '', '2016-04-12 12:05:08', '20:00:00', '', '', '2016-06-30', 1, 20, 0, '', 0, 2, 'Season 4'),
(21, 8, '5', '3', '', '2016-04-12 12:05:08', '21:00:00', '', '', '2016-07-01', 1, 21, 0, '', 0, 2, 'Season 4'),
(22, 8, '5', '6', '', '2016-04-12 12:05:08', '21:00:00', '', '', '2016-07-02', 1, 21, 0, '', 0, 2, 'Season 4'),
(23, 1, '4', '5', '', '2016-04-12 12:05:08', '20:00:00', '', '', '2016-07-06', 2, 20, 0, '', 0, 2, 'Season 4'),
(24, 7, '1', '5', '', '2016-04-12 12:05:08', '21:00:00', '', '', '2016-07-10', 2, 21, 0, '', 0, 2, 'Season 4'),
(25, 3, '2', '5', '', '2016-04-12 12:05:08', '20:00:00', '', '', '2016-07-13', 2, 20, 0, '', 0, 2, 'Season 4'),
(26, 3, '5', '8', '', '2016-04-12 12:05:08', '20:00:00', '', '', '2016-07-14', 2, 20, 0, '', 0, 2, 'Season 4'),
(27, 4, '3', '5', '', '2016-04-12 12:05:08', '20:00:00', '', '', '2016-07-16', 2, 20, 0, '', 0, 2, 'Season 4'),
(28, 4, '6', '5', '', '2016-04-12 12:05:08', '20:00:00', '', '', '2016-07-17', 2, 20, 0, '', 0, 2, 'Season 4'),
(29, 10, '5', '4', '', '2016-04-12 12:05:08', '20:00:00', '', '', '2016-07-21', 2, 20, 0, '', 0, 2, 'Season 4'),
(30, 10, '5', '1', '', '2016-04-12 12:05:08', '20:00:00', '', '', '2016-07-22', 2, 20, 0, '', 0, 2, 'Season 4'),
(31, 9, '7', '5', '', '2016-04-12 12:05:08', '21:00:00', '', '', '2016-07-24', 2, 21, 0, '', 0, 2, 'Season 4');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_shop`
--

CREATE TABLE IF NOT EXISTS `jpp_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jpp_slider`
--

CREATE TABLE IF NOT EXISTS `jpp_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `jpp_slider`
--

INSERT INTO `jpp_slider` (`id`, `name`, `image`, `order`, `status`, `link`) VALUES
(2, 'JPP Gallery', 'Action_Season_3.jpg', 3, 1, '/gallery'),
(3, 'Know Your Panthers', '03_banner.jpg', 4, 1, '/players'),
(5, 'Wallpapers for Desktop & Mobile', '02_banner1.jpg', 7, 1, '/wallpaper'),
(6, 'Purchase Exclusive JPP Merchandise', '04_banner1.jpg', 5, 2, '/ticket-merchandise'),
(7, 'JPP ANDROID APP', 'Banners_new.jpg', 2, 1, 'https://play.google.com/store/apps/details?id=com.jaipurpinkpanthers.android'),
(8, 'LATEST NEWS OF JPP', 'Banners_news.jpg', 8, 1, '/news-media'),
(9, 'Season 4 Schedule', 'Season_4_Schedule.jpg', 1, 1, '/fixtures/1'),
(10, 'Tune into JPP TV', 'Tune_in_to_jpp_TV.jpg', 5, 1, '/jpp-tv');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_sponsor`
--

CREATE TABLE IF NOT EXISTS `jpp_sponsor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jpp_stadium`
--

CREATE TABLE IF NOT EXISTS `jpp_stadium` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `jpp_stadium`
--

INSERT INTO `jpp_stadium` (`id`, `name`) VALUES
(1, 'Rajiv Gandhi Indoor Stadium, Vizag'),
(3, 'Sree Kanteerava Stadium, Bengaluru'),
(4, 'Netaji Subhash Chandra Bose Indoor Stadium, Kolkata'),
(6, 'Shree Shiv Chhatrapati Sports Complex, Pune'),
(7, 'Patilputra Sports Complex, Patna'),
(8, 'Sawai Mansingh Stadium, Jaipur'),
(9, 'Thyagaraj Sports Complex, Delhi'),
(10, 'DOME@NSCI SVP Stadium, Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_subscribe`
--

CREATE TABLE IF NOT EXISTS `jpp_subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jpp_team`
--

CREATE TABLE IF NOT EXISTS `jpp_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `jpp_team`
--

INSERT INTO `jpp_team` (`id`, `type`, `name`, `image`, `content`) VALUES
(1, 0, 'Patna Pirates', '51.png', ''),
(2, 0, 'Bengaluru Bulls', '1.png', ''),
(3, 0, 'Bengal Warriors', '2.png', ''),
(4, 0, 'Dabang Delhi', '3.png', ''),
(5, 0, 'Jaipur Pink Panthers', '4.png', ''),
(6, 0, 'Puneri Paltan', '6.png', ''),
(7, 0, 'Telugu Titans', '7.png', ''),
(8, 0, 'U Mumba', '8.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_videogallery`
--

CREATE TABLE IF NOT EXISTS `jpp_videogallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jpp_videogallery`
--

INSERT INTO `jpp_videogallery` (`id`, `order`, `name`, `image`, `url`) VALUES
(1, 6, 'The Fun Side of Our Panthers', '', 'r6FDeb1D_NI'),
(2, 5, 'Tough Training Sessions', '', 'O5Lll7OOsiQ'),
(3, 4, 'Panthers'' Training Camp', '', 'wjkptJhOWD8'),
(4, 7, 'Vizag Leg of Pro Kabaddi Season 3', '', 'cib-4PIJwGg'),
(5, 1, 'JPP fan video', '', 'NZCuxPZDmaY'),
(6, 2, 'Quiz Part 1', '', 'rvFqUd8IJyw'),
(7, 3, 'Quiz Part 2', '', '8T9Ce6h_sas');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_videos`
--

CREATE TABLE IF NOT EXISTS `jpp_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `videogallery` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jpp_wallpaper`
--

CREATE TABLE IF NOT EXISTS `jpp_wallpaper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wallpapercategory` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `image6` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=193 ;

--
-- Dumping data for table `jpp_wallpaper`
--

INSERT INTO `jpp_wallpaper` (`id`, `wallpapercategory`, `name`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`) VALUES
(1, 1, '', '1-1920x1080.png', '', '', '', '', ''),
(3, 1, '', '2-1920x1080.png', '', '', '', '', ''),
(4, 1, '', '3-1920x1080.png', '', '', '', '', ''),
(5, 1, '', '4-1920x1080.png', '', '', '', '', ''),
(6, 1, '', '5-1920x1080.png', '', '', '', '', ''),
(8, 1, '', '8-1920x1080.png', '', '', '', '', ''),
(10, 1, '', '11-1920x1080.png', '', '', '', '', ''),
(11, 1, '', '13-1920x1080.png', '', '', '', '', ''),
(12, 2, '', '1-1080x1920.png', '', '', '', '', ''),
(13, 2, '', '2-1080x1920.png', '', '', '', '', ''),
(14, 2, '', '3-1080x1920.png', '', '', '', '', ''),
(21, 2, '', '9-1080x1920.png', '', '', '', '', ''),
(23, 2, '', '6-1080x1920.png', '', '', '', '', ''),
(24, 1, '', '14-1920x1080.png', '', '', '', '', ''),
(25, 1, '', '15-1920x1080.png', '', '', '', '', ''),
(26, 1, '', '16-1920x1080.png', '', '', '', '', ''),
(27, 1, '', '17-1920x1080.png', '', '', '', '', ''),
(28, 1, '', '18-1920x1080.png', '', '', '', '', ''),
(29, 1, '', '19-1920x1080.png', '', '', '', '', ''),
(30, 1, '', '20-1920x1080.png', '', '', '', '', ''),
(31, 1, '', '21-1920x1080.png', '', '', '', '', ''),
(32, 1, '', '22-1920x1080.png', '', '', '', '', ''),
(34, 1, '', '23-1920x1080.png', '', '', '', '', ''),
(35, 1, '', '24-1920x1080.png', '', '', '', '', ''),
(36, 1, '', '25-1920x1080.png', '', '', '', '', ''),
(37, 1, '', '26-1920x1080.png', '', '', '', '', ''),
(38, 1, '', '27-1920x1080.png', '', '', '', '', ''),
(39, 1, '', '28-1920x1080.png', '', '', '', '', ''),
(40, 1, '', '29-1920x1080.png', '', '', '', '', ''),
(41, 1, '', '30-1920x1080.png', '', '', '', '', ''),
(42, 1, '', '31-1920x1080.png', '', '', '', '', ''),
(43, 1, '', '32-1920x1080.png', '', '', '', '', ''),
(44, 1, '', '33-1920x1080.png', '', '', '', '', ''),
(45, 2, '', '4-1080x1920.png', '', '', '', '', ''),
(46, 2, '', '10-1080x1920.png', '', '', '', '', ''),
(47, 2, '', '5-1080x1920.png', '', '', '', '', ''),
(48, 2, '', '11-1080x1920.png', '', '', '', '', ''),
(49, 2, '', '12-1080x1920.png', '', '', '', '', ''),
(50, 2, '', '13-1080x1920.png', '', '', '', '', ''),
(51, 2, '', '14-1080x1920.png', '', '', '', '', ''),
(52, 2, '', '15-1080x1920.png', '', '', '', '', ''),
(53, 2, '', '16-1080x1920.png', '', '', '', '', ''),
(54, 2, '', '17-1080x1920.png', '', '', '', '', ''),
(55, 2, '', '18-1080x1920.png', '', '', '', '', ''),
(56, 2, '', '19-1080x1920.png', '', '', '', '', ''),
(57, 2, '', '20-1080x1920.png', '', '', '', '', ''),
(58, 2, '', '21-1080x1920.png', '', '', '', '', ''),
(59, 2, '', '22-1080x1920.png', '', '', '', '', ''),
(60, 2, '', '23-1080x1920.png', '', '', '', '', ''),
(61, 2, '', '24-1080x1920.png', '', '', '', '', ''),
(62, 2, '', '25-1080x1920.png', '', '', '', '', ''),
(63, 2, '', '26-1080x1920.png', '', '', '', '', ''),
(64, 2, '', '27-1080x1920.png', '', '', '', '', ''),
(65, 2, '', '28-1080x1920.png', '', '', '', '', ''),
(66, 2, '', '29-1080x1920.png', '', '', '', '', ''),
(67, 2, '', '30-1080x1920.png', '', '', '', '', ''),
(68, 2, '', '31-1080x1920.png', '', '', '', '', ''),
(69, 2, '', '31-1080x19201.png', '', '', '', '', ''),
(70, 2, '', '32-1080x1920.png', '', '', '', '', ''),
(71, 2, '', '33-1080x1920.png', '', '', '', '', ''),
(73, 3, '', '1-1080x19201.png', '', '', '', '', ''),
(74, 3, '', '2-1080x19201.png', '', '', '', '', ''),
(75, 3, '', '3-1080x19201.png', '', '', '', '', ''),
(76, 3, '', '4-1080x19201.png', '', '', '', '', ''),
(77, 3, '', '5-1080x19201.png', '', '', '', '', ''),
(78, 3, '', '6-1080x19201.png', '', '', '', '', ''),
(81, 3, '', '9-1080x19201.png', '', '', '', '', ''),
(82, 3, '', '10-1080x19201.png', '', '', '', '', ''),
(83, 3, '', '11-1080x19201.png', '', '', '', '', ''),
(84, 3, '', '12-1080x19201.png', '', '', '', '', ''),
(85, 3, '', '13-1080x19201.png', '', '', '', '', ''),
(86, 3, '', '14-1080x19202.png', '', '', '', '', ''),
(87, 3, '', '15-1080x19201.png', '', '', '', '', ''),
(88, 3, '', '16-1080x19201.png', '', '', '', '', ''),
(89, 3, '', '17-1080x19201.png', '', '', '', '', ''),
(90, 3, '', '18-1080x19201.png', '', '', '', '', ''),
(91, 3, '', '19-1080x19201.png', '', '', '', '', ''),
(92, 3, '', '20-1080x19201.png', '', '', '', '', ''),
(93, 3, '', '21-1080x19201.png', '', '', '', '', ''),
(94, 3, '', '22-1080x19201.png', '', '', '', '', ''),
(95, 3, '', '23-1080x19201.png', '', '', '', '', ''),
(96, 3, '', '24-1080x19201.png', '', '', '', '', ''),
(97, 3, '', '25-1080x19201.png', '', '', '', '', ''),
(98, 3, '', '26-1080x19201.png', '', '', '', '', ''),
(99, 3, '', '27-1080x19201.png', '', '', '', '', ''),
(100, 3, '', '28-1080x19201.png', '', '', '', '', ''),
(101, 3, '', '29-1080x19201.png', '', '', '', '', ''),
(102, 3, '', '30-1080x19201.png', '', '', '', '', ''),
(103, 3, '', '31-1080x19202.png', '', '', '', '', ''),
(104, 3, '', '32-1080x19201.png', '', '', '', '', ''),
(105, 3, '', '33-1080x19201.png', '', '', '', '', ''),
(106, 1, '', '_H1A0114.jpg', '', '', '', '', ''),
(107, 1, '', '_H1A0310.jpg', '', '', '', '', ''),
(108, 1, '', '_H1A0394.jpg', '', '', '', '', ''),
(109, 1, '', '_H1A0568.jpg', '', '', '', '', ''),
(110, 1, '', '_H1A0651.jpg', '', '', '', '', ''),
(111, 1, '', '_H1A0663.jpg', '', '', '', '', ''),
(112, 1, '', '_H1A0807.jpg', '', '', '', '', ''),
(113, 1, '', '_H1A1034.jpg', '', '', '', '', ''),
(114, 1, '', '_H1A1673.jpg', '', '', '', '', ''),
(115, 1, '', '_H1A2446.jpg', '', '', '', '', ''),
(116, 1, '', '_H1A2517.jpg', '', '', '', '', ''),
(117, 1, '', '_H1A9684.jpg', '', '', '', '', ''),
(118, 1, '', '_H1A9767.jpg', '', '', '', '', ''),
(119, 1, '', '_H1A9898.jpg', '', '', '', '', ''),
(120, 1, '', '_MG_3936.jpg', '', '', '', '', ''),
(121, 1, '', '_MG_8043.jpg', '', '', '', '', ''),
(122, 1, '', '_MG_8054.jpg', '', '', '', '', ''),
(123, 1, '', '_P8A4347.jpg', '', '', '', '', ''),
(124, 1, '', '_P8A4876.jpg', '', '', '', '', ''),
(125, 1, '', '_P8A4930.jpg', '', '', '', '', ''),
(126, 1, '', '_P8A50801.jpg', '', '', '', '', ''),
(127, 1, '', '_P8A51231.jpg', '', '', '', '', ''),
(128, 1, '', '_P8A8807.jpg', '', '', '', '', ''),
(129, 1, '', '_P8A5160.jpg', '', '', '', '', ''),
(130, 1, '', '_P8A8863.jpg', '', '', '', '', ''),
(131, 1, '', '_P8A9009.jpg', '', '', '', '', ''),
(132, 1, '', '_P8A9211.jpg', '', '', '', '', ''),
(133, 1, '', 'OH1A89941.jpg', '', '', '', '', ''),
(134, 1, '', 'OH1A9156.jpg', '', '', '', '', ''),
(135, 2, '', '_H1A01141.jpg', '', '', '', '', ''),
(136, 2, '', '_H1A03101.jpg', '', '', '', '', ''),
(137, 2, '', '_H1A03941.jpg', '', '', '', '', ''),
(138, 2, '', '_H1A05681.jpg', '', '', '', '', ''),
(139, 2, '', '_H1A06511.jpg', '', '', '', '', ''),
(140, 2, '', '_H1A06631.jpg', '', '', '', '', ''),
(141, 2, '', '_H1A08071.jpg', '', '', '', '', ''),
(142, 2, '', '_H1A10341.jpg', '', '', '', '', ''),
(143, 2, '', '_H1A16731.jpg', '', '', '', '', ''),
(144, 2, '', '_H1A24461.jpg', '', '', '', '', ''),
(145, 2, '', '_H1A25171.jpg', '', '', '', '', ''),
(146, 2, '', '_H1A96841.jpg', '', '', '', '', ''),
(147, 2, '', '_H1A97671.jpg', '', '', '', '', ''),
(148, 2, '', '_H1A98981.jpg', '', '', '', '', ''),
(149, 2, '', '_MG_39361.jpg', '', '', '', '', ''),
(150, 2, '', '_MG_80431.jpg', '', '', '', '', ''),
(151, 2, '', '_MG_80541.jpg', '', '', '', '', ''),
(152, 2, '', '_P8A43471.jpg', '', '', '', '', ''),
(153, 2, '', '_P8A48761.jpg', '', '', '', '', ''),
(154, 2, '', '_P8A49301.jpg', '', '', '', '', ''),
(155, 2, '', '_P8A50802.jpg', '', '', '', '', ''),
(156, 2, '', '_P8A51232.jpg', '', '', '', '', ''),
(157, 2, '', '_P8A51601.jpg', '', '', '', '', ''),
(158, 2, '', '_P8A88071.jpg', '', '', '', '', ''),
(159, 2, '', '_P8A88631.jpg', '', '', '', '', ''),
(160, 2, '', '_P8A90091.jpg', '', '', '', '', ''),
(161, 2, '', '_P8A92111.jpg', '', '', '', '', ''),
(162, 2, '', 'OH1A89942.jpg', '', '', '', '', ''),
(163, 2, '', 'OH1A91561.jpg', '', '', '', '', ''),
(164, 3, '', '_H1A01142.jpg', '', '', '', '', ''),
(165, 3, '', '_H1A03102.jpg', '', '', '', '', ''),
(166, 3, '', '_H1A03942.jpg', '', '', '', '', ''),
(167, 3, '', '_H1A05682.jpg', '', '', '', '', ''),
(168, 3, '', '_H1A06512.jpg', '', '', '', '', ''),
(169, 3, '', '_H1A06632.jpg', '', '', '', '', ''),
(170, 3, '', '_H1A08072.jpg', '', '', '', '', ''),
(171, 3, '', '_H1A10342.jpg', '', '', '', '', ''),
(172, 3, '', '_H1A16732.jpg', '', '', '', '', ''),
(173, 3, '', '_H1A24462.jpg', '', '', '', '', ''),
(174, 3, '', '_H1A25172.jpg', '', '', '', '', ''),
(175, 3, '', '_H1A96843.jpg', '', '', '', '', ''),
(176, 3, '', '_H1A97672.jpg', '', '', '', '', ''),
(177, 3, '', '_H1A98982.jpg', '', '', '', '', ''),
(178, 3, '', '_MG_39362.jpg', '', '', '', '', ''),
(179, 3, '', '_MG_80432.jpg', '', '', '', '', ''),
(180, 3, '', '_MG_80542.jpg', '', '', '', '', ''),
(181, 3, '', '_P8A43472.jpg', '', '', '', '', ''),
(182, 3, '', '_P8A48762.jpg', '', '', '', '', ''),
(183, 3, '', '_P8A49302.jpg', '', '', '', '', ''),
(184, 3, '', '_P8A50803.jpg', '', '', '', '', ''),
(185, 3, '', '_P8A51233.jpg', '', '', '', '', ''),
(186, 3, '', '_P8A51602.jpg', '', '', '', '', ''),
(187, 3, '', '_P8A88072.jpg', '', '', '', '', ''),
(188, 3, '', '_P8A88632.jpg', '', '', '', '', ''),
(189, 3, '', '_P8A90092.jpg', '', '', '', '', ''),
(190, 3, '', '_P8A92112.jpg', '', '', '', '', ''),
(191, 3, '', 'OH1A89943.jpg', '', '', '', '', ''),
(192, 3, '', 'OH1A91562.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_wallpapercategory`
--

CREATE TABLE IF NOT EXISTS `jpp_wallpapercategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jpp_wallpapercategory`
--

INSERT INTO `jpp_wallpapercategory` (`id`, `order`, `name`, `image`) VALUES
(1, 1, 'Desktop', 'w1.jpg'),
(2, 2, 'IOS', 'w2.jpg'),
(3, 3, 'ANDROID', 'BY5A6812.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logintype`
--

CREATE TABLE IF NOT EXISTS `logintype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `logintype`
--

INSERT INTO `logintype` (`id`, `name`) VALUES
(1, 'Facebook'),
(2, 'Twitter'),
(3, 'Email'),
(4, 'Google');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `linktype` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `keyword`, `url`, `linktype`, `parent`, `isactive`, `order`, `icon`) VALUES
(1, 'Users', '', '', 'site/viewusers', 1, 0, 1, 1, 'icon-user'),
(2, 'Stadium', '', '', 'site/viewstadium', 1, 0, 1, 2, 'icon-dashboard'),
(3, 'Point', '', '', 'site/viewpoint', 1, 0, 1, 3, 'icon-dashboard'),
(4, 'Shop', '', '', 'site/viewshop', 1, 0, 1, 5, 'icon-dashboard'),
(5, 'Schedule', '', '', 'site/viewschedule', 1, 0, 1, 4, 'icon-dashboard'),
(6, 'Merchandize', '', '', 'site/viewmerchandize', 1, 0, 1, 5, 'icon-dashboard'),
(7, 'Gallery', '', '', 'site/viewgallery', 1, 0, 1, 5, 'icon-dashboard'),
(8, 'News', '', '', 'site/viewnews', 1, 0, 1, 5, 'icon-dashboard'),
(9, 'Players', '', '', 'site/viewplayers', 1, 0, 1, 5, 'icon-dashboard'),
(10, 'Wallpaper Category', '', '', 'site/viewwallpapercategory', 1, 0, 1, 5, 'icon-dashboard'),
(11, 'Pages', '', '', 'site/viewpages', 1, 0, 1, 5, 'icon-dashboard'),
(12, 'Team', '', '', 'site/viewteam', 1, 0, 1, 5, 'icon-dashboard'),
(13, 'Sponsors', '', '', 'site/viewsponsor', 1, 0, 1, 5, 'icon-dashboard'),
(14, 'Video Gallery', '', '', 'site/viewvideogallery', 1, 0, 1, 5, 'icon-dashboard'),
(15, 'Contact Us', '', '', 'site/viewcontactus', 1, 0, 1, 5, 'icon-dashboard'),
(16, 'Subscribe', '', '', 'site/viewsubscribe', 1, 0, 1, 5, 'icon-dashboard'),
(17, 'Slider', '', '', 'site/viewslider', 1, 0, 1, 1, 'icon-dashboard'),
(18, 'Fan Corner', '', '', 'site/viewcontactus', 1, 0, 1, 1, 'icon-dashboard');

-- --------------------------------------------------------

--
-- Table structure for table `menuaccess`
--

CREATE TABLE IF NOT EXISTS `menuaccess` (
  `menu` int(11) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuaccess`
--

INSERT INTO `menuaccess` (`menu`, `access`) VALUES
(1, 1),
(4, 1),
(2, 1),
(3, 1),
(5, 1),
(6, 1),
(7, 1),
(7, 3),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 0),
(16, 0),
(17, 1),
(18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(0, 'Choose Status'),
(1, 'Enable'),
(2, 'Disable');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE IF NOT EXISTS `title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `name`, `logo`) VALUES
(1, 'JPP', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `accesslevel` int(11) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `socialid` varchar(255) NOT NULL,
  `logintype` varchar(255) NOT NULL,
  `json` text NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `billingaddress` text NOT NULL,
  `billingcity` varchar(255) NOT NULL,
  `billingstate` varchar(255) NOT NULL,
  `billingcountry` varchar(255) NOT NULL,
  `billingcontact` varchar(255) NOT NULL,
  `billingpincode` varchar(255) NOT NULL,
  `shippingaddress` text NOT NULL,
  `shippingcity` varchar(255) NOT NULL,
  `shippingcountry` varchar(255) NOT NULL,
  `shippingstate` varchar(255) NOT NULL,
  `shippingpincode` varchar(255) NOT NULL,
  `shippingname` varchar(255) NOT NULL,
  `shippingcontact` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `credit` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `registrationno` varchar(255) NOT NULL,
  `vatnumber` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json`, `firstname`, `lastname`, `phone`, `billingaddress`, `billingcity`, `billingstate`, `billingcountry`, `billingcontact`, `billingpincode`, `shippingaddress`, `shippingcity`, `shippingcountry`, `shippingstate`, `shippingpincode`, `shippingname`, `shippingcontact`, `currency`, `credit`, `companyname`, `registrationno`, `vatnumber`, `country`, `fax`, `gender`, `facebook`, `google`, `twitter`, `street`, `address`, `dob`, `city`, `state`, `pincode`) VALUES
(1, 'wohlig', 'a63526467438df9566c508027d9cb06b', 'wohlig@wohlig.com', 1, '0000-00-00 00:00:00', 1, 'images_(2)1.jpg', '', '', 'Facebook', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '0000-00-00', '', '', ''),
(6, 'Pooja Thakare', '', 'pooja.wohlig@gmail.com', 3, '2015-12-09 06:02:37', 1, '1.jpg', '', '103402210128529539675', 'Email', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '103402210128529539675', '', '', '', '0000-00-00', '', '', ''),
(7, 'Juspreet Singh Walia', '5d331841559276d7f4380a99b8cc5be9', 'jsw@jaipurpinkpanthers.com', 1, '2016-04-04 17:58:12', 1, '', '', '', '', '0', 'Juspreet', 'Walia', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `onuser` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `onuser`, `status`, `description`, `timestamp`) VALUES
(1, 1, 1, 'User Address Edited', '2014-05-12 06:50:21'),
(2, 1, 1, 'User Details Edited', '2014-05-12 06:51:43'),
(3, 1, 1, 'User Details Edited', '2014-05-12 06:51:53'),
(4, 4, 1, 'User Created', '2014-05-12 06:52:44'),
(5, 4, 1, 'User Address Edited', '2014-05-12 12:31:48'),
(6, 23, 2, 'User Created', '2014-10-07 06:46:55'),
(7, 24, 2, 'User Created', '2014-10-07 06:48:25'),
(8, 25, 2, 'User Created', '2014-10-07 06:49:04'),
(9, 26, 2, 'User Created', '2014-10-07 06:49:16'),
(10, 27, 2, 'User Created', '2014-10-07 06:52:18'),
(11, 28, 2, 'User Created', '2014-10-07 06:52:45'),
(12, 29, 2, 'User Created', '2014-10-07 06:53:10'),
(13, 30, 2, 'User Created', '2014-10-07 06:53:33'),
(14, 31, 2, 'User Created', '2014-10-07 06:55:03'),
(15, 32, 2, 'User Created', '2014-10-07 06:55:33'),
(16, 33, 2, 'User Created', '2014-10-07 06:59:32'),
(17, 34, 2, 'User Created', '2014-10-07 07:01:18'),
(18, 35, 2, 'User Created', '2014-10-07 07:01:50'),
(19, 34, 2, 'User Details Edited', '2014-10-07 07:04:34'),
(20, 18, 2, 'User Details Edited', '2014-10-07 07:05:11'),
(21, 18, 2, 'User Details Edited', '2014-10-07 07:05:45'),
(22, 18, 2, 'User Details Edited', '2014-10-07 07:06:03'),
(23, 7, 6, 'User Created', '2014-10-17 06:22:29'),
(24, 7, 6, 'User Details Edited', '2014-10-17 06:32:22'),
(25, 7, 6, 'User Details Edited', '2014-10-17 06:32:37'),
(26, 8, 6, 'User Created', '2014-11-15 12:05:52'),
(27, 9, 6, 'User Created', '2014-12-02 10:46:36'),
(28, 9, 6, 'User Details Edited', '2014-12-02 10:47:34'),
(29, 4, 6, 'User Details Edited', '2014-12-03 10:34:49'),
(30, 4, 6, 'User Details Edited', '2014-12-03 10:36:34'),
(31, 4, 6, 'User Details Edited', '2014-12-03 10:36:49'),
(32, 8, 6, 'User Details Edited', '2014-12-03 10:47:16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
