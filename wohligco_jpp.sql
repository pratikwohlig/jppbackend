-- phpMyAdmin SQL Dump
-- version 4.0.10.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2016 at 05:25 AM
-- Server version: 5.6.21
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wohligco_jpp`
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
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jpp_gallery`
--

CREATE TABLE IF NOT EXISTS `jpp_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jpp_gallery`
--

INSERT INTO `jpp_gallery` (`id`, `order`, `name`, `image`) VALUES
(1, 1, 'Lohri Celebration', 'cover-lohri.png'),
(2, 2, 'School Visit', 'cover-school_visit.png'),
(3, 3, 'Training', 'cover-training.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

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
(19, 1, 3, '', 'training-1.png'),
(20, 2, 3, '', 'training-2.png'),
(21, 3, 3, '', 'training-3.png'),
(22, 4, 3, '', 'training-4.png'),
(23, 5, 3, '', 'training-5.png'),
(24, 6, 3, '', 'training-6.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jpp_news`
--

INSERT INTO `jpp_news` (`id`, `type`, `name`, `image`, `timestamp`, `content`, `link`, `logo`) VALUES
(1, 0, 'Students get hands on experience playing Kabbadi with JPP Players, joined by Abhishek Bachchan', 'n4.jpg', '2016-01-29 13:13:47', 'http://rajasthanpatrika.patrika.com/story/rajasthan/abhishek-bachchan-arrived-jaipur-with-pink-panther-team-1617563.html', 'http://rajasthanpatrika.patrika.com/story/rajasthan/abhishek-bachchan-arrived-jaipur-with-pink-panther-team-1617563.html', 'n41.jpg'),
(2, 0, 'Watching college girls play kabaddi, JPP owner Jr. Bachchan also got into the game', 'n5.png', '2016-01-29 13:17:17', 'http://hindi.news18.com/news/rajasthan/abhishek-bachchan-is-promoting-pink-panther-team-in-jaipur-1264036.html', 'http://hindi.news18.com/news/rajasthan/abhishek-bachchan-is-promoting-pink-panther-team-in-jaipur-1264036.html', 'n51.png'),
(3, 0, '"Lets take a selfie!", Junior Bachchan gets candid with fans', 'n6.jpg', '2016-01-29 13:17:49', 'http://www.bhaskar.com/news/c-10-2338321-jp0925-abhishek-bacchan-NOR.html?seq=2', 'http://www.bhaskar.com/news/c-10-2338321-jp0925-abhishek-bacchan-NOR.html?seq=2', 'n61.jpg'),
(4, 0, '''Sporty'' Abhishek Bachchan aims to start Pro Kabaddi League for women', 'n52.png', '2016-01-29 13:18:21', 'http://www.newkerala.com/news/2016/fullnews-10312.html', 'http://www.newkerala.com/news/2016/fullnews-10312.html', 'n53.png'),
(5, 0, 'Jaipur Pink Panthers looking for change of fortune', 'n54.png', '2016-01-29 13:18:50', 'http://indianexpress.com/article/blogs/sports-blogs/pro-kabaddi-league-2016-team-preview-jaipur-pink-panthers-looking-for-change-of-fortune/', 'http://indianexpress.com/article/blogs/sports-blogs/pro-kabaddi-league-2016-team-preview-jaipur-pink-panthers-looking-for-change-of-fortune/', 'n55.png');

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
  `point` varchar(255) NOT NULL,
  `team` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `jpp_point`
--

INSERT INTO `jpp_point` (`id`, `played`, `wins`, `lost`, `point`, `team`) VALUES
(1, '0', '0', '0', '0', 5),
(2, '0', '0', '0', '0', 1),
(3, '0', '0', '0', '0', 2),
(4, '0', '0', '0', '0', 3),
(5, '0', '0', '0', '0', 4),
(6, '0', '0', '0', '0', 6),
(7, '0', '0', '0', '0', 7),
(8, '0', '0', '0', '0', 8);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `jpp_schedule`
--

INSERT INTO `jpp_schedule` (`id`, `stadium`, `team1`, `team2`, `bookticket`, `timestamp`, `starttime`, `score1`, `score2`, `startdate`) VALUES
(1, 1, '5', '8', '', '2016-01-27 14:09:26', '20:00:00', '', '', '2016-01-31'),
(2, 1, '1', '5', '', '2016-01-27 14:11:02', '20:00:00', '', '', '2016-02-01'),
(3, 3, '2', '5', '', '2016-01-27 14:12:00', '21:00:00', '', '', '2016-02-05'),
(4, 4, '5', '4', '', '2016-01-27 14:12:51', '21:00:00', '', '', '2016-02-07'),
(5, 4, '3', '5', '', '2016-01-27 14:13:45', '21:00:00', '', '', '2016-02-10'),
(6, 6, '6', '5', '', '2016-01-27 14:26:52', '21:00:00', '', '', '2016-02-12'),
(7, 6, '5', '7', '', '2016-01-27 14:27:36', '20:00:00', '', '', '2016-02-13'),
(8, 7, '7', '5', '', '2016-01-27 14:34:01', '21:00:00', '', '', '2016-02-16'),
(9, 8, '5', '2', '', '2016-01-27 14:34:58', '20:00:00', '', '', '2016-02-20'),
(10, 8, '5', '6', '', '2016-01-27 14:39:39', '21:00:00', '', '', '2016-02-21'),
(11, 8, '5', '3', '', '2016-01-27 14:40:15', '20:00:00', '', '', '2016-02-22'),
(12, 8, '5', '1', '', '2016-01-27 14:40:55', '00:00:21', '', '', '2016-02-23'),
(13, 9, '4', '5', '', '2016-01-27 14:41:36', '21:00:00', '', '', '2016-02-26'),
(14, 10, '8', '5', '', '2016-01-27 14:42:12', '20:00:00', '', '', '2016-02-28');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jpp_slider`
--

INSERT INTO `jpp_slider` (`id`, `name`, `image`, `order`, `status`, `link`) VALUES
(2, 'Book Match Tickets', '05_banner1.jpg', 1, 1, ''),
(3, 'Know Your Panthers', '03_banner.jpg', 2, 1, ''),
(4, 'Season 3 All Fixtures', '01_banner1.jpg', 3, 1, ''),
(5, 'Wallpapers for Desktop & Mobile', '02_banner.jpg', 4, 1, ''),
(6, 'Purchase Exclusive JPP Merchandise', '04_banner.jpg', 5, 1, '');

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
(1, 'Vishakapatnam'),
(3, 'Bengaluru'),
(4, 'Kolkata'),
(6, 'Pune'),
(7, 'Patna'),
(8, 'Jaipur'),
(9, 'Delhi'),
(10, 'Mumbai');

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
(7, 0, 'Telegu Titans', '7.png', ''),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jpp_videogallery`
--

INSERT INTO `jpp_videogallery` (`id`, `order`, `name`, `image`, `url`) VALUES
(1, 1, 'The Fun Side of Our Panthers', '', 'UDU09A-N4bU'),
(2, 2, 'Training Camp', '', 'C8ibvDo11uk'),
(3, 3, 'Panthers'' Training Camp', '', '32ZipINYTJg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `jpp_wallpaper`
--

INSERT INTO `jpp_wallpaper` (`id`, `wallpapercategory`, `name`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`) VALUES
(1, 1, '', '1-1920x1080.png', '', '', '', '', ''),
(3, 1, '', '2-1920x1080.png', '', '', '', '', ''),
(4, 1, '', '3-1920x1080.png', '', '', '', '', ''),
(5, 1, '', '4-1920x1080.png', '', '', '', '', ''),
(6, 1, '', '5-1920x1080.png', '', '', '', '', ''),
(7, 1, '', '6-1920x1080.png', '', '', '', '', ''),
(8, 1, '', '8-1920x1080.png', '', '', '', '', ''),
(10, 1, '', '11-1920x1080.png', '', '', '', '', ''),
(11, 1, '', '13-1920x1080.png', '', '', '', '', ''),
(12, 2, '', '1-1080x1920.png', '', '', '', '', ''),
(13, 2, '', '2-1080x1920.png', '', '', '', '', ''),
(14, 2, '', '3-1080x1920.png', '', '', '', '', ''),
(15, 1, '', '', '', '', '', '', ''),
(20, 2, '', '7-1080x1920.png', '', '', '', '', ''),
(21, 2, '', '9-1080x1920.png', '', '', '', '', ''),
(22, 2, '', '8-1080x1920.png', '', '', '', '', ''),
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
(33, 1, '', '', '', '', '', '', ''),
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
(44, 1, '', '33-1920x1080.png', '', '', '', '', '');

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
(2, 2, 'IOS', 'w2.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

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
(9, 1),
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

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
