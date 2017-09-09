-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2017 at 08:20 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Sample task', 'Sample task description', '2017-09-08 18:00:00', '2017-09-08 18:00:00'),
(2, 'Another sample task', 'asdadasd', '2017-09-09 13:44:35', '2017-09-09 13:44:35'),
(3, 'No pagination', 'Fat free frameowrk', '2017-09-09 13:50:11', '2017-09-09 13:50:11'),
(4, 'See Bear’s Den - Her Tears - Live at Vondelkerk', 'Red Earth & Pouring Rain is out now!\r\nBuy, download, stream the album here: https://BearsDen.lnk.to/RedEarthAndPo... \r\nFollow Bear''s Den Complete Spotify Playlist: http://bearsden.lnk.to/CompletePlayli... \r\nListen to Bear’s Den on Apple Music: https://BearsDen.lnk.to/AppleMusic \r\n\r\nConnect with Bear''s Den:\r\nhttps://BearsDen.lnk.to/WebsiteYD\r\nhttps://BearsDen.lnk.to/FacebookYD\r\nhttps://BearsDen.lnk.to/TwitterYD\r\nhttps://BearsDen.lnk.to/MailingListYD\r\nhttps://BearsDen.lnk.to/InstagramYD', '2017-09-09 13:54:06', '2017-09-09 13:54:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
