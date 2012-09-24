-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Vert: localhost
-- Generert den: 24. Sep, 2012 06:52 AM
-- Tjenerversjon: 5.5.24-log
-- PHP-Versjon: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projeksjon`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `fulltext` text NOT NULL,
  `published` int(1) NOT NULL,
  `publishedDate` datetime NOT NULL,
  `createdBy` int(11) NOT NULL,
  `public` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dataark for tabell `article`
--

INSERT INTO `article` (`id`, `title`, `summary`, `fulltext`, `published`, `publishedDate`, `createdBy`, `public`) VALUES
(1, 'Heading', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. ', '<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>\r\n			  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>', 1, '2012-09-23 15:30:00', 1, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `cakeday`
--

CREATE TABLE IF NOT EXISTS `cakeday` (
  `cakeDate` date NOT NULL,
  `personId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dataark for tabell `cakeday`
--

INSERT INTO `cakeday` (`cakeDate`, `personId`) VALUES
('2012-09-27', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `deltakerliste`
--

CREATE TABLE IF NOT EXISTS `deltakerliste` (
  `EventId` int(11) NOT NULL,
  `PersonId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dataark for tabell `deltakerliste`
--

INSERT INTO `deltakerliste` (`EventId`, `PersonId`) VALUES
(2, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `eventid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `description` text NOT NULL,
  `minGrad` int(4) DEFAULT NULL,
  `maxGrad` int(4) DEFAULT NULL,
  `regStart` datetime NOT NULL,
  `regEnd` datetime NOT NULL,
  `maxPers` int(10) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `place` varchar(255) NOT NULL,
  PRIMARY KEY (`eventid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dataark for tabell `event`
--

INSERT INTO `event` (`eventid`, `name`, `time`, `description`, `minGrad`, `maxGrad`, `regStart`, `regEnd`, `maxPers`, `createdBy`, `place`) VALUES
(1, 'Bli kjent', '2012-10-01 19:00:00', 'Vi ønsker å bli kjent.', 0, 0, '2012-09-24 00:00:00', '2012-09-29 00:00:00', 0, 0, 'Tyholt'),
(2, 'Bli kjent', '2012-09-30 19:00:00', 'Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa Bla Bla da da frasdsa ', NULL, NULL, '2012-09-24 00:00:00', '2012-09-29 00:00:00', NULL, 1, 'Tyholt');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `logged_in_member`
--

CREATE TABLE IF NOT EXISTS `logged_in_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `session_id` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `token` char(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `password` text NOT NULL,
  `user_flags` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `graduateYear` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dataark for tabell `persons`
--

INSERT INTO `persons` (`id`, `username`, `name`, `email`, `birthday`, `password`, `user_flags`, `picture`, `graduateYear`) VALUES
(1, 'torbjvi', 'Test Brukersen', 'test@example.com', '2012-09-09', '', 'admin, kake, news, event', '', 2016);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` char(128) NOT NULL,
  `password` char(128) NOT NULL,
  `user_salt` varchar(50) NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `verification_code` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
