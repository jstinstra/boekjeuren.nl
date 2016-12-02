-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 04 nov 2016 om 22:23
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `urenboek`
--
CREATE DATABASE IF NOT EXISTS `urenboek` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `urenboek`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `Leerlingnummer` int(11) NOT NULL COMMENT 'Leerlingnummer',
  `Wachtwoord` text NOT NULL COMMENT 'Wachtwoord dat gebruiker kiest (eerst is dit Postcode)',
  `Klas` varchar(12) NOT NULL,
  `Voornaam` varchar(255) NOT NULL,
  `Achternaam` varchar(255) NOT NULL,
  `Tussenvoegsel` varchar(40) DEFAULT NULL,
  `FirstLogin` int(11) NOT NULL DEFAULT '0',
  `GroupID` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Leerlingnummer`),
  KEY `Leerlingnummer` (`Leerlingnummer`),
  KEY `Voornaam` (`Voornaam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `account`
--

INSERT INTO `account` (`Leerlingnummer`, `Wachtwoord`, `Klas`, `Voornaam`, `Achternaam`, `Tussenvoegsel`, `FirstLogin`, `GroupID`) VALUES
(111111, '2c23483da4bbddb7e8505d61d7505c01fc4e0e021a031670b5ef7648', 'ICTAPPO415AH', 'Michel', 'Jonkman', '', 1, 1),
(112233, '4f555b1bb8bc729a665b8892df73119e2ef2eb50dffaf0d5c546cf23', 'ICTAPPO415AH', 'Levi', 'Grootheest', 'van', 1, 1),
(123456, 'ABC', 'ICTAPPO415AH', 'Mike', 'Decker', 'De', 0, 0),
(332211, 'ABC', 'ICTAPPO415AH', 'Jan Tamis', 'Kossen', '', 0, 0),
(882233, 'ABC', 'ICTAPPO415AH', 'Tim', 'Remeeus', '', 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `PostID` int(11) NOT NULL AUTO_INCREMENT,
  `User` int(11) NOT NULL,
  `Tijd-in` text NOT NULL,
  `Tijd-uit` text NOT NULL,
  `Datum` date NOT NULL,
  `Locatie` text NOT NULL,
  `Vak` text NOT NULL,
  `Check` int(11) NOT NULL DEFAULT '0',
  `Werkzaamheden` text NOT NULL,
  `Opmerking` varchar(255) NOT NULL DEFAULT 'Er zijn geen opmerkingen',
  PRIMARY KEY (`PostID`),
  KEY `User` (`User`),
  KEY `User_2` (`User`),
  KEY `User_3` (`User`),
  KEY `Datum` (`Datum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `posts`
--

INSERT INTO `posts` (`PostID`, `User`, `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Check`, `Werkzaamheden`, `Opmerking`) VALUES
(1, 112233, '02:15:56', '02:15:57', '2016-10-03', 'School', 'Programmeren', 1, 'dgfcghjbnjmlkjhjgtfrd', 'vgbhkjlk'),
(2, 112233, '11:10:29', '11:10:30', '2016-10-03', 'Thuis', 'Programmeren', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 'Er zijn geen opmerkingen');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `todo`
--

CREATE TABLE IF NOT EXISTS `todo` (
  `ToDoID` int(11) NOT NULL AUTO_INCREMENT,
  `User` int(11) NOT NULL,
  `Vak` varchar(40) NOT NULL,
  `Nodig` varchar(255) NOT NULL,
  `WieNodig` varchar(255) NOT NULL,
  `Tijd` varchar(50) NOT NULL,
  `prior` int(11) NOT NULL,
  `Datum` varchar(456) NOT NULL,
  `Check` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ToDoID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `todo`
--

INSERT INTO `todo` (`ToDoID`, `User`, `Vak`, `Nodig`, `WieNodig`, `Tijd`, `prior`, `Datum`, `Check`) VALUES
(1, 112233, 'Programmeren', 'dxcgfvhbhjnmkl', 'azdsfxgcfvhjnkml', '52 min asmdkmsdd', 1, '09/10/2016', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vakken`
--

CREATE TABLE IF NOT EXISTS `vakken` (
  `Vak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `vakken`
--

INSERT INTO `vakken` (`Vak`) VALUES
('Nederlands'),
('Gamen'),
('Gamen'),
('Wiskunde'),
('cghk'),
('Programmeren');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
