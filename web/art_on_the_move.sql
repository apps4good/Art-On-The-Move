-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2013 at 11:46 PM
-- Server version: 5.5.28
-- PHP Version: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `art_on_the_move`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist_profile`
--

CREATE TABLE IF NOT EXISTS `artist_profile` (
  `uid` int(11) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `street_addr` varchar(128) NOT NULL,
  `city` varchar(32) NOT NULL,
  `region` int(11) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `artist_tagmap`
--

CREATE TABLE IF NOT EXISTS `artist_tagmap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `art_category`
--

CREATE TABLE IF NOT EXISTS `art_category` (
  `categ_id` int(11) NOT NULL AUTO_INCREMENT,
  `categ_name` varchar(32) NOT NULL,
  PRIMARY KEY (`categ_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `art_piece`
--

CREATE TABLE IF NOT EXISTS `art_piece` (
  `ap_id` int(16) NOT NULL AUTO_INCREMENT,
  `ap_title` varchar(32) NOT NULL,
  `ap_url` varchar(64) NOT NULL,
  `ap_url_sample` varchar(128) NOT NULL,
  `ap_category` varchar(32) NOT NULL,
  `ap_desc` varchar(1024) NOT NULL,
  `ap_rating` int(11) NOT NULL,
  `ap_for_sale` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ap_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `art_tag`
--

CREATE TABLE IF NOT EXISTS `art_tag` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(32) NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `art_tagmap`
--

CREATE TABLE IF NOT EXISTS `art_tagmap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ap_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `region_id` int(11) NOT NULL AUTO_INCREMENT,
  `region_name` varchar(32) NOT NULL,
  PRIMARY KEY (`region_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `signup_date` int(11) NOT NULL,
  `email_verif_key` varchar(128) NOT NULL,
  `status` int(11) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT '2' COMMENT '1 = Artist, 2 = Art Lover',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
