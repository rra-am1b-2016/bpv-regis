-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 05 apr 2017 om 09:51
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `am1b_2017_diagram`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bpv_companies`
--

CREATE TABLE IF NOT EXISTS `bpv_companies` (
  `id` varchar(6) NOT NULL,
  `nameCompany` varchar(300) NOT NULL,
  `phoneNumberCompany` varchar(15) NOT NULL,
  `nameContact` varchar(300) NOT NULL,
  `mobileContact` varchar(13) NOT NULL,
  `streetName` varchar(200) NOT NULL,
  `houseNumber` varchar(10) NOT NULL,
  `postalcode` varchar(6) NOT NULL,
  `city` varchar(300) NOT NULL,
  `urlCompany` varchar(300) NOT NULL,
  `emailContact` varchar(300) NOT NULL,
  `whatToDo` text NOT NULL,
  `dateTime` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`urlCompany`) COMMENT 'Gecombineerde sleutel id-urlCompany'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `bpv_companies`
--

INSERT INTO `bpv_companies` (`id`, `nameCompany`, `phoneNumberCompany`, `nameContact`, `mobileContact`, `streetName`, `houseNumber`, `postalcode`, `city`, `urlCompany`, `emailContact`, `whatToDo`, `dateTime`, `status`) VALUES
('1', 'Bissmark', '0251-674209', 'Harry Heens', '31 6 2560 524', 'Vreeswijksestraatweg', '42', '1905 B', 'Oudegein', '123bissmark.nl', 'hheens@bissmark.nl', 'Alle voorkomende werkzaamheden', '2017-04-03 09:06:41', 5),
('1', 'Bissmarktestterderdetes', '0251-674209', 'Harry Heens', '31 6 2560 524', 'Vreeswijksestraatweg', '42', '1905 B', 'Oudegein', 'asdbissmark.nl', 'hheens@bissmark.nl', 'Alle voorkomende werkzaamheden', '2017-04-03 09:08:57', 2),
('1', 'Bissmark', '0251-674209', 'Harry Heens', '31 6 2560 524', 'Vreeswijksestraatweg', '42', '1905 B', 'Oudegein', 'biss12mark.nl', 'hheens@bissmark.nl', 'Alle voorkomende werkzaamheden', '2017-03-27 10:49:26', 0),
('1', 'Bissmark                                               kllk', '0251-674209', 'Harry Heens', '31 6 2560 524', 'Vreeswijksestraatweg', '42', '1905 B', 'Oudegein', 'biss21mark.nl', 'hheens@bissmark.nl', 'Alle voorkomende werkzaamheden', '2017-03-27 10:50:08', 6),
('1', 'Bissmark', '0251-674209', 'Harry Heens', '31 6 2560 524', 'Vreeswijksestraatweg', '42', '1905 B', 'Oudegein', 'biss546mark.nl', 'hheens@bissmark.nl', 'Alle voorkomende werkzaamheden', '2017-03-29 09:29:26', 3),
('1', 'Bissmark', '0251-674209', 'Harry Heens', '31 6 2560 524', 'Vreeswijksestraatweg', '42', '1905 B', 'Oudegein', 'biss67mark.nl', 'hheens@bissmark.nl', 'Alle voorkomende werkzaamheden', '2017-03-29 08:59:55', 6),
('1', 'Bissmark', '0251-674209', 'Harry Heens', ' 31 6 2560 52', 'Vreeswijksestraatweg', '42', '1905 B', 'Oudegein', 'bissmark.nl', 'hheens@bissmark.nl', 'Alle voorkomende werkzaamheden\n        ', '2017-03-27 10:41:24', 6),
('1', 'Bissmark', '0251-674209', 'Harry Heens', '31 6 2560 524', 'Vreeswijksestraatweg', '42', '1905 B', 'Oudegein', 'bissmark456.nl', 'hheens@bissmark.nl', 'Alle voorkomende werkzaamheden', '2017-04-03 09:07:34', 6),
('1', 'Bissmark', '0251-674209', 'Harry Heens', ' 31 6 2560 52', 'Vreeswijksestraatweg', '42', '1905 B', 'Oudegein', 'bissmarks.nl', 'hheens@bissmark.nl', 'Alle voorkomende werkzaamheden\n        ', '2017-03-27 10:42:56', 6),
('1', 'Bissmark', '0251-674209', 'Harry Heens', ' 31 6 2560 52', 'Vreeswijksestraatweg', '42', '1905 B', 'Oudegein', 'bizzmark.nl', 'hheens@bissmark.nl', 'Alle voorkomende werkzaamheden\n        ', '2017-03-27 10:42:20', 2),
('3', 'Bissmark', '0251-674209', 'Harry Heens', '31 6 2560 524', 'Vreeswijksestraatweg', '42', '1905 B', 'Oudegein', 'bissmark.nl', 'hheens@bissmark.nl', 'Alle voorkomende werkzaamheden', '2017-03-29 13:34:32', 6),
('3', 'Bissmark', '0251-674209', 'Harry Heens', '31 6 2560 524', 'Vreeswijksestraatweg', '42', '1905 B', 'Oudegein', 'bissmark1.nl', 'hheens@bissmark.nl', 'Alle voorkomende werkzaamheden', '2017-03-29 13:35:15', 2),
('4', 'Bissmark', '0251-674209', 'Harry Heens', '31 6 2560 524', 'Vreeswijksestraatweg', '42', '1905 B', 'Oudegein', 'bissamark.nl', 'hheens@bissmark.nl', 'Alle voorkomende werkzaamheden', '2017-03-27 11:07:09', 0),
('4', 'Bissmark', '0251-674209', 'Harry Heens', '31 6 2560 524', 'Vreeswijksestraatweg', '42', '1905 B', 'Oudegein', 'bissmark.nl', 'hheens@bissmark.nl', 'Alle voorkomende werkzaamheden', '2017-03-27 11:03:49', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(6) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `infix` varchar(20) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `numberOfContacts` int(11) NOT NULL DEFAULT '0',
  `password` varchar(40) NOT NULL,
  `activate` enum('true','false') NOT NULL DEFAULT 'false',
  `userrole` enum('student','docent','admin','bpvco','root','test') NOT NULL DEFAULT 'student',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `infix`, `lastname`, `numberOfContacts`, `password`, `activate`, `userrole`) VALUES
('1', 'Danny', 'de', 'Bok', 300, '906072001efddf3e11e6d2b5782f4777fe038739', 'true', 'student'),
('10', 'Desmet', 'de', 'Beuker', 175, '', 'false', 'student'),
('11', 'Ferry', 'van', 'Diggelen', 267, '', 'false', 'student'),
('12', 'Henk', 'de', 'Bok', 23, '', 'false', 'student'),
('13', 'Barry', 'de', 'Beer', 56, '', 'false', 'student'),
('2', 'Arjan', 'de', 'Ruijter', 250, '906072001efddf3e11e6d2b5782f4777fe038739', 'true', 'admin'),
('3', 'Bert', 'van', 'Raamsdonk', 290, '906072001efddf3e11e6d2b5782f4777fe038739', 'true', 'student'),
('4', 'Harry', 'de', 'Bever', 15, '906072001efddf3e11e6d2b5782f4777fe038739', 'true', 'student'),
('5', 'Leo', 'de', 'Haas', 267, '5977d340f3d84d33d091035263a1b80472f22125', 'false', 'student'),
('6', 'Frans', 'van', 'Dalen', 100, '906072001efddf3e11e6d2b5782f4777fe038739', 'true', 'student'),
('7', 'Gerrit', '', 'Uitdenhoven', 260, '', 'false', 'student'),
('8', 'Sander', 'van', 'Ravenzwaaij', 70, '', 'false', 'student'),
('9', 'Mario', 'den', 'Oever', 23, '', 'false', 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
