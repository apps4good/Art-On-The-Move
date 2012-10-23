-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2012 at 01:07 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `art_on_the_move`
--
DROP DATABASE `art_on_the_move`;
CREATE DATABASE `art_on_the_move` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `art_on_the_move`;

-- --------------------------------------------------------

--
-- Table structure for table `art_piece`
--
-- Creation: Oct 23, 2012 at 10:36 AM
-- Last update: Oct 23, 2012 at 10:58 AM
--

DROP TABLE IF EXISTS `art_piece`;
CREATE TABLE IF NOT EXISTS `art_piece` (
  `ap_id` int(16) NOT NULL AUTO_INCREMENT,
  `ap_title` varchar(32) NOT NULL,
  `ap_url` varchar(64) NOT NULL,
  `ap_url_sample` varchar(128) NOT NULL,
  `ap_category` varchar(32) NOT NULL,
  `ap_desc` varchar(1024) NOT NULL,
  `ap_rating` int(11) NOT NULL,
  PRIMARY KEY (`ap_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `art_piece`
--

INSERT INTO `art_piece` (`ap_id`, `ap_title`, `ap_url`, `ap_url_sample`, `ap_category`, `ap_desc`, `ap_rating`) VALUES
(1, 'Gardians of the Sacred Places', '1/gps.jpg', 'http://fedoraproject.org/w/uploads/d/d2/Artwork_F9Themes_Waves_sulfuric-waves-wallpaper.4.png', 'mixed media painting', '', 0),
(2, 'How is Home', '2/hih.jpg', 'http://www.nilab.tv/english/media/kunena/attachments/348/artwork-by-sandhi-schimmel-07.jpg', 'mixed media painting', '', 0),
(3, 'Newly Inherited Kitchen', '2/newly herited.jpg', 'http://www.designverb.com/wp-content/images/2008/08/russ.mills.artwork.jpg', 'mixed media painting', '', 0),
(4, 'The Way Through', '3/pic1.jpg', 'http://www.modny73.com/wp-content/uploads/2011/03/Digital-Artwork.jpg', 'mixed media painting', '', 0),
(5, 'Custodians of Living Mthys', '1/pic2.jpg', 'http://new.assets.thequietus.com/images/articles/1525/eminem_artwork_1240392861_crop_500x500.jpg', 'mixed media painting', '', 0),
(6, 'Druming in between Night & Day', '4/pic9.jpg', 'http://www.aidswalkforlife.ca/Morgan-McConnell---The-Nest-(FINAL)_artwork.jpg', 'mixed media painting', '', 0),
(7, 'Lamp Shade', '1/pic3.jpg', 'http://en.opensuse.org/images/d/dd/Opensuse-artwork.png', 'designs', '', 0),
(8, 'Lamp Shade', '1/pic4.jpg', 'http://www.michalevy.com/wp-content/uploads/artwork_china.png', 'designs', '', 0),
(9, 'Lamp Shade', '1/pic5.jpg', 'http://www.webdesignerwall.com/wp-content/uploads/2009/10/artwork-outline.jpg', 'designs', '', 0),
(10, 'Lamp Shade', '1/pic6.jpg', 'http://fedoraproject.org/w/uploads/0/00/Artwork_Mascot_werewolf_f8.png', 'designs', '', 0),
(11, 'Lamp Shade', '1/pic7.jpg', 'http://www.24x7photography.com/wp-content/uploads/2011/01/Artwork.jpg', 'designs', '', 0),
(12, 'Lamp Shade', '1/pic8.jpg', 'http://klingpost.com/wp-content/uploads/2011/05/typography-artwork-06.jpg', 'designs', '', 0),
(13, 'vector-artwork', '', 'http://indraia.com/wp-content/uploads/2012/09/vector-artwork.jpg', 'JPG ', 'Vector artwork has always intrigued me. When executed correctly, these ...', 0),
(14, 'extract_swatches_from_artwork_5', '', 'http://www.bittbox.com/wp-content/uploads/2007/09/extract_swatches_from_artwork_5.jpg', 'JPG', 'To select all just hit Command/Control + A, or in the menu Select > All.', 0),
(15, 'Chevrolette_Spark_BG_artwork_by_', '', 'http://www.deviantart.com/download/124770484/Chevrolette_Spark_BG_artwork_by_DesignWeDesire.jpg', 'JPG ', 'Add to Favourites. Download Image JPG, 650×534Shop Similar Prints', 4),
(16, 'artwork', '', 'http://www.printfast.co.uk/new%20pics/artwork.jpg', 'JPG', 'Guide to Supplying art work. Post Pic. File Formats Accepted', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
