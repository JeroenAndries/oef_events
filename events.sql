-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 02 jun 2014 om 00:45
-- Serverversie: 5.6.14
-- PHP-versie: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `events`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `name` varchar(64) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `email` varchar(64) NOT NULL,
  `site` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `events`
--

INSERT INTO `events` (`name`, `discription`, `date`, `time`, `email`, `site`, `picture`, `id`) VALUES
('test', 'ejrer', '9999-07-13', '00:00:00', '9998899', '999', 'http://gallery.photo.net/photo/8349037-md.jpg', 1),
('test', 'ejrer', '9999-07-13', '00:00:00', '9998899', '999', 'http://gallery.photo.net/photo/6945809-md.jpg', 2),
('test', 'ejrer', '9999-07-13', '00:00:00', '9998899', '999', 'http://gallery.photo.net/photo/9852890-md.jpg', 3),
('test jeroen', 'sdfsdf', '2222-12-13', '00:00:00', 'sdsd4', 'sdsd', 'http://gallery.photo.net/photo/3092910-lg.jpg', 4),
('jeroen', 'testje van jere', '1994-07-13', '00:00:00', 'dsfkdsf@dfdf.bd', 'http://etst.be', 'http://gallery.photo.net/photo/8349037-md.jpg', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
