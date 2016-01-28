-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2016 at 01:08 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesslevel`
--

CREATE TABLE IF NOT EXISTS `accesslevel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jpp_gallery`
--

CREATE TABLE IF NOT EXISTS `jpp_gallery` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jpp_gallery`
--

INSERT INTO `jpp_gallery` (`id`, `order`, `name`, `image`) VALUES
(2, 2, 'Telugu Titans V/S Bengaluru Bulls', 'g8.jpg'),
(3, 3, 'Puneri Paltan V/S Dabang Delhi', 'g51.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_galleryslide`
--

CREATE TABLE IF NOT EXISTS `jpp_galleryslide` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `gallery` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jpp_galleryslide`
--

INSERT INTO `jpp_galleryslide` (`id`, `order`, `gallery`, `name`, `image`) VALUES
(1, 1, 2, 'Jaipur Pink Panther V/S Patna Pirates 1', 'g4.jpg'),
(2, 2, 2, 'Jaipur Pink Panther V/S Patna Pirates 2', 'g6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_merchandize`
--

CREATE TABLE IF NOT EXISTS `jpp_merchandize` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jpp_news`
--

CREATE TABLE IF NOT EXISTS `jpp_news` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jpp_news`
--

INSERT INTO `jpp_news` (`id`, `type`, `name`, `image`, `timestamp`, `content`, `link`, `logo`) VALUES
(1, 0, 'Lorem Ipsum', 'n11.jpg', '2016-01-27 06:44:10', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '', ''),
(2, 0, 'Lorem Ipsum 2', 'n2.jpg', '2016-01-27 12:21:13', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_pages`
--

CREATE TABLE IF NOT EXISTS `jpp_pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jpp_players`
--

CREATE TABLE IF NOT EXISTS `jpp_players` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `jerseyno` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jpp_players`
--

INSERT INTO `jpp_players` (`id`, `order`, `type`, `name`, `nationality`, `jerseyno`, `about`, `dob`) VALUES
(1, 1, 'RAider', 'efrq', 'rvg', 'rev', 'revb', '2016-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_point`
--

CREATE TABLE IF NOT EXISTS `jpp_point` (
  `id` int(11) NOT NULL,
  `played` varchar(255) NOT NULL,
  `wins` varchar(255) NOT NULL,
  `lost` varchar(255) NOT NULL,
  `point` varchar(255) NOT NULL,
  `team` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jpp_point`
--

INSERT INTO `jpp_point` (`id`, `played`, `wins`, `lost`, `point`, `team`) VALUES
(1, '2', '3', '4', '56', 1),
(2, '1', '5', '7', '3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `jpp_schedule`
--

CREATE TABLE IF NOT EXISTS `jpp_schedule` (
  `id` int(11) NOT NULL,
  `stadium` int(11) NOT NULL,
  `team1` varchar(255) NOT NULL,
  `team2` varchar(255) NOT NULL,
  `bookticket` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `starttime` time NOT NULL,
  `score1` varchar(50) NOT NULL,
  `score2` varchar(50) NOT NULL,
  `startdate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jpp_schedule`
--

INSERT INTO `jpp_schedule` (`id`, `stadium`, `team1`, `team2`, `bookticket`, `timestamp`, `starttime`, `score1`, `score2`, `startdate`) VALUES
(1, 1, '1', '2', '', '2016-01-27 06:56:26', '03:05:00', '23', '34', '2016-01-28'),
(2, 1, '2', '1', '', '2016-01-27 07:39:15', '02:05:00', '', '', '2016-01-30'),
(3, 1, '3', '4', '', '2016-01-27 12:30:02', '01:00:00', '', '', '2016-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_shop`
--

CREATE TABLE IF NOT EXISTS `jpp_shop` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jpp_shop`
--

INSERT INTO `jpp_shop` (`id`, `order`, `product`, `image`, `link`) VALUES
(1, 1, 'prod 1', '_MGL1673.jpg', 'wohlig.com');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_slider`
--

CREATE TABLE IF NOT EXISTS `jpp_slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jpp_slider`
--

INSERT INTO `jpp_slider` (`id`, `name`, `image`, `order`, `status`, `link`) VALUES
(2, 'demo', 'player.jpg', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_sponsor`
--

CREATE TABLE IF NOT EXISTS `jpp_sponsor` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jpp_stadium`
--

CREATE TABLE IF NOT EXISTS `jpp_stadium` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jpp_stadium`
--

INSERT INTO `jpp_stadium` (`id`, `name`) VALUES
(1, 'Wankhede Stadium, Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_subscribe`
--

CREATE TABLE IF NOT EXISTS `jpp_subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jpp_team`
--

CREATE TABLE IF NOT EXISTS `jpp_team` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

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
(7, 0, 'Telegu Titans', '7.png', ''),
(8, 0, 'U Mumba', '8.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_videogallery`
--

CREATE TABLE IF NOT EXISTS `jpp_videogallery` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jpp_videogallery`
--

INSERT INTO `jpp_videogallery` (`id`, `order`, `name`, `image`) VALUES
(1, 1, 'demo', 'g7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_videos`
--

CREATE TABLE IF NOT EXISTS `jpp_videos` (
  `id` int(11) NOT NULL,
  `videogallery` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jpp_videos`
--

INSERT INTO `jpp_videos` (`id`, `videogallery`, `order`, `name`, `url`, `image`) VALUES
(1, 1, 1, 'demo', 'http://wohlig.co.in', 'dahi_page.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_wallpaper`
--

CREATE TABLE IF NOT EXISTS `jpp_wallpaper` (
  `id` int(11) NOT NULL,
  `wallpapercategory` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `image6` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jpp_wallpaper`
--

INSERT INTO `jpp_wallpaper` (`id`, `wallpapercategory`, `name`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`) VALUES
(1, 1, 'demo', 'g3.jpg', '', '', '', '', ''),
(3, 1, 'demo', 'g81.jpg', 'logo1.png', 'plt_social_batch_sw_18_3_1x1.jpg', 'SFA_Schoolprofile.png', 'SFA_Studentprofile.png', 'images.jpg'),
(5, 2, 'demo', 'fixtures.jpg', '', '', '', '', ''),
(6, 2, 'demo1', 'gallery.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jpp_wallpapercategory`
--

CREATE TABLE IF NOT EXISTS `jpp_wallpapercategory` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jpp_wallpapercategory`
--

INSERT INTO `jpp_wallpapercategory` (`id`, `order`, `name`, `image`) VALUES
(1, 1, 'Desktop', 'g52.jpg'),
(2, 2, 'Mobile', 'g1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logintype`
--

CREATE TABLE IF NOT EXISTS `logintype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `linktype` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

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
(17, 'Slider', '', '', 'site/viewslider', 1, 0, 1, 1, 'icon-dashboard');

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
(9, 0),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 0),
(16, 0),
(17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
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
  `pincode` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json`, `firstname`, `lastname`, `phone`, `billingaddress`, `billingcity`, `billingstate`, `billingcountry`, `billingcontact`, `billingpincode`, `shippingaddress`, `shippingcity`, `shippingcountry`, `shippingstate`, `shippingpincode`, `shippingname`, `shippingcontact`, `currency`, `credit`, `companyname`, `registrationno`, `vatnumber`, `country`, `fax`, `gender`, `facebook`, `google`, `twitter`, `street`, `address`, `dob`, `city`, `state`, `pincode`) VALUES
(1, 'wohlig', 'a63526467438df9566c508027d9cb06b', 'wohlig@wohlig.com', 1, '0000-00-00 00:00:00', 1, 'images_(2)1.jpg', '', '', 'Facebook', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '0000-00-00', '', '', ''),
(6, 'Pooja Thakare', '', 'pooja.wohlig@gmail.com', 3, '2015-12-09 06:02:37', 1, '1.jpg', '', '103402210128529539675', 'Email', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '103402210128529539675', '', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(11) NOT NULL,
  `onuser` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesslevel`
--
ALTER TABLE `accesslevel`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `jpp_contactus`
--
ALTER TABLE `jpp_contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_gallery`
--
ALTER TABLE `jpp_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_galleryslide`
--
ALTER TABLE `jpp_galleryslide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_merchandize`
--
ALTER TABLE `jpp_merchandize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_news`
--
ALTER TABLE `jpp_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_pages`
--
ALTER TABLE `jpp_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_players`
--
ALTER TABLE `jpp_players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_point`
--
ALTER TABLE `jpp_point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_schedule`
--
ALTER TABLE `jpp_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_shop`
--
ALTER TABLE `jpp_shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_slider`
--
ALTER TABLE `jpp_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_sponsor`
--
ALTER TABLE `jpp_sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_stadium`
--
ALTER TABLE `jpp_stadium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_subscribe`
--
ALTER TABLE `jpp_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_team`
--
ALTER TABLE `jpp_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_videogallery`
--
ALTER TABLE `jpp_videogallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_videos`
--
ALTER TABLE `jpp_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_wallpaper`
--
ALTER TABLE `jpp_wallpaper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jpp_wallpapercategory`
--
ALTER TABLE `jpp_wallpapercategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logintype`
--
ALTER TABLE `logintype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesslevel`
--
ALTER TABLE `accesslevel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jpp_contactus`
--
ALTER TABLE `jpp_contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jpp_gallery`
--
ALTER TABLE `jpp_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jpp_galleryslide`
--
ALTER TABLE `jpp_galleryslide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jpp_merchandize`
--
ALTER TABLE `jpp_merchandize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jpp_news`
--
ALTER TABLE `jpp_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jpp_pages`
--
ALTER TABLE `jpp_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jpp_players`
--
ALTER TABLE `jpp_players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jpp_point`
--
ALTER TABLE `jpp_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jpp_schedule`
--
ALTER TABLE `jpp_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jpp_shop`
--
ALTER TABLE `jpp_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jpp_slider`
--
ALTER TABLE `jpp_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jpp_sponsor`
--
ALTER TABLE `jpp_sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jpp_stadium`
--
ALTER TABLE `jpp_stadium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jpp_subscribe`
--
ALTER TABLE `jpp_subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jpp_team`
--
ALTER TABLE `jpp_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `jpp_videogallery`
--
ALTER TABLE `jpp_videogallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jpp_videos`
--
ALTER TABLE `jpp_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jpp_wallpaper`
--
ALTER TABLE `jpp_wallpaper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jpp_wallpapercategory`
--
ALTER TABLE `jpp_wallpapercategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `logintype`
--
ALTER TABLE `logintype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
