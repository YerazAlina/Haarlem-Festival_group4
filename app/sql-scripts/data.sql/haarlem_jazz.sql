-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Mar 11, 2022 at 12:10 AM
-- Server version: 10.6.5-MariaDB-1:10.6.5+maria~focal
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haarlem_jazz`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `description`) VALUES
(1, 'Gumbo Kings', 'Five-headed Soul Monster combines the groove of New Orleans Funk with the grittiness of Delta Blues and the melodies of Memphis Soul.'),
(2, 'Evolve', 'One of the most sought-after party bands in the UK; with a set list jam-packed full of the latest pop favorites and a selection of oldies.'),
(3, 'Ntjam Rosie', 'Music in which African rhythms, Western functional harmony, and the melody of the native inhabitants come together perfectly.'),
(4, 'Wicked Jazz Sounds', 'Travel through a futuristic journey through jazz, hip-hop, soul, funk, broken-beat, house, drum & bass, and beyond.'),
(5, 'Tom Thomsom Assemble', 'Enjoy the tunes of these newly founded band.'),
(6, 'Jonna Frazer', 'A versatile artist Dutch-Surinamese hip-hop artist, his style of music, ranges from gangsta rap to r&b/soul to pop music.'),
(7, 'Fox & The Mayors', 'Haarlem legend treats the arriving audience to unadulterated blues-rock, in a beautiful musical interaction with guitarist Nick Vos.\r\n\r\n'),
(8, 'Uncle Sue', 'Uncle Sue is a seven-piece Haarlem Funk and Soul Band with its own story and swinging wind section.'),
(9, 'Kris Allen', 'All of his fluency in the language of jazz and deep knowledge of the music’s modern masters is very much his own man with his own creative voice.'),
(10, 'Myles Sanko', 'Dubbed as the lovechild of soul music, Myles Sanko began his music career singing alongside jockeys in nightclubs.'),
(11, 'Ruis Soundsystem', 'Get a taste of their broad style of music characterized by complex harmony, syncopated rhythms, and a heavy emphasis on improvisation.'),
(12, 'The Family XL', 'The Family XL is the new band of Xander Hubrecht.'),
(13, 'Gare du Nord', 'Jazz, Latin, and Blues duo from Belgium and the Netherlands. When playing live they play with a nine-headed band.'),
(14, 'Rilan & The Bombadiers', 'The energetic live show along with the charismatic and unique performance of frontman Rilan will give you a time to remember.'),
(15, 'Soul Six', 'Come enjoy the sounds of a professional band who will deliver a repertoire of 60\'s classics to the very latest releases.'),
(16, 'Han Bennink', 'Dutch jazz drummer and multi-instrumentalist and one of the rare musicians whose abilities and interests span the music\'s entire spectrum.'),
(17, 'The Nordanians', 'Described as “A three-headed monster with the lightness of a ballerina”, they make it clear that serious music can also be fun.'),
(18, 'Lilith Merlot', 'Inspired by icons from jazz/neo-soul, The Haarlem singer is back with a new and warm sound.');

-- --------------------------------------------------------

--
-- Table structure for table `jazzactivity`
--

CREATE TABLE `jazzactivity` (
  `id` int(11) NOT NULL,
  `artistId` int(11) NOT NULL,
  `performanceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jazzactivity`
--

INSERT INTO `jazzactivity` (`id`, `artistId`, `performanceId`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 11, 11),
(12, 12, 12),
(13, 13, 13),
(14, 14, 14),
(15, 15, 15),
(16, 16, 16),
(17, 17, 17),
(18, 18, 18),
(19, 11, 19),
(20, 4, 20),
(21, 2, 21),
(22, 17, 22),
(23, 1, 23),
(24, 13, 24);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `hall` varchar(50) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `postalCode` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`name`, `address`, `postalCode`, `city`) VALUES
('Patronaat', 'Zijlsingel 2', '2013 DN', 'Haarlem'),
('Grote Markt','Grote Markt', '2011 RD', 'Haarlem'),

('Restaurant Mr. & Mrs.','Lange Veerstraat 4', '2011 DB', 'Haarlem'),
('Ratatouille','Spaarne 96', '2011 CL', 'Haarlem'),
('Restaurant ML','Kleine Houtstraat 70', '2011 DR', 'Haarlem'),
('Restaurant Fris','Twijnderslaan 7', '2012 BG', 'Haarlem'),
('Specktakel','Spekstraat 4', '2011 HM', 'Haarlem'),
('Grand Cafe Brinkman','Grote Markt 13', '2011 RC', 'Haarlem'),
('Urban Frenchy Bistro Toujours','Oude Groenmarkt 10-12', '2011 HL', 'Haarlem'),
('The Golden Bull','Zijlstraat 39', '2011 TK', 'Haarlem'),

('St. Bavos Church', 'Grote Markt 2','2011 RD','Haarlem'),

('Club Stalker','Kromme Elleboogsteeg 20', '2011 TS', 'Haarlem'),
('Caprera Openluchttheater','Hoge Duin en Daalseweg 2', '2061 AG', 'Bloemendaal'),
('Jopenkerk','Gedempte Voldersgracht 2', '2011 WD', 'Haarlem'),
('Lichtfabriek','Minckelersweg 2', '2031 EM', 'Haarlem'),
('Club Ruis','Smedestraat 31', '2011 RE', 'Haarlem'),
('XO the Club','Grote Markt 8', '2011 RD', 'Haarlem');
-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `locationId` int(11) NOT NULL,
  `price` double NOT NULL,
  `ticketsLeft` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `performance`
--

INSERT INTO `activity` (`type`,`date`, `startTime`, `endTime`, `locationId`, `price`, `ticketsLeft`) VALUES
('jazz', '2022-07-28', '18:00:00', '19:00:00', 1, 15.00, 300),
('jazz', '2022-07-28', '19:30:00', '20:30:00', 1, 15.00, 300),
('jazz', '2022-07-28', '21:00:00', '22:00:00', 1, 15.00, 300),
('jazz', '2022-07-28', '18:00:00', '19:00:00', 1, 10.00, 200),
('jazz', '2022-07-28', '19:30:00', '20:30:00', 1, 10.00, 200),
('jazz', '2022-07-28', '21:00:00', '22:00:00', 1, 10.00, 200),
('jazz', '2022-07-29', '18:00:00', '19:00:00', 1, 15.00, 300),
('jazz', '2022-07-29', '19:30:00', '20:30:00', 1, 15.00, 300),
('jazz', '2022-07-29', '21:00:00', '22:00:00', 1, 15.00, 300),
('jazz', '2022-07-29', '18:00:00', '19:00:00', 1, 10.00, 200),
('jazz', '2022-07-29', '19:30:00', '20:30:00', 1, 10.00, 200),
('jazz', '2022-07-29', '21:00:00', '22:00:00', 1, 10.00, 200),
('jazz', '2022-07-30', '18:00:00', '19:00:00', 1, 15.00, 300),
('jazz', '2022-07-30', '19:30:00', '20:30:00', 1, 15.00, 300),
('jazz', '2022-07-30', '21:00:00', '22:00:00', 1, 15.00, 300),
('jazz', '2022-07-30', '18:00:00', '19:00:00', 1, 10.00, 150),
('jazz', '2022-07-30', '19:30:00', '20:30:00', 1, 10.00, 150),
('jazz', '2022-07-30', '21:00:00', '22:00:00', 1, 10.00, 150),
('jazz', '2022-07-31', '15:00:00', '16:00:00', 2, 0.00, 0),
('jazz', '2022-07-31', '16:00:00', '17:00:00', 2, 0.00, 0),
('jazz', '2022-07-31', '17:00:00', '18:00:00', 2, 0.00, 0),
('jazz', '2022-07-31', '18:00:00', '19:00:00', 2, 0.00, 0),
('jazz', '2022-07-31', '19:00:00', '20:00:00', 2, 0.00, 0),
('jazz', '2022-07-31', '20:00:00', '21:00:00', 2, 0.00, 0),

--1st restaurant
('Food', '2022-07-28', '18:00:00', '19:30:00', 3, 45.00, 40),
('Food', '2022-07-28', '19:30:00', '21:00:00', 3, 45.00, 40),
('Food', '2022-07-28', '21:00:00', '22:30:00', 3, 45.00, 40),
('Food', '2022-07-29', '18:00:00', '19:30:00', 3, 45.00, 40),
('Food', '2022-07-29', '19:30:00', '21:00:00', 3, 45.00, 40),
('Food', '2022-07-29', '21:00:00', '22:30:00', 3, 45.00, 40),
('Food', '2022-07-30', '18:00:00', '19:30:00', 3, 45.00, 40),
('Food', '2022-07-30', '19:30:00', '21:00:00', 3, 45.00, 40),
('Food', '2022-07-30', '21:00:00', '22:30:00', 3, 45.00, 40),
('Food', '2022-07-31', '18:00:00', '19:30:00', 3, 45.00, 40),
('Food', '2022-07-31', '19:30:00', '21:00:00', 3, 45.00, 40),
('Food', '2022-07-31', '21:00:00', '22:30:00', 3, 45.00, 40),

--2nd restaurant
('Food', '2022-07-28', '17:00:00', '19:00:00', 4, 45.00, 52),
('Food', '2022-07-28', '19:00:00', '21:00:00', 4, 45.00, 52),
('Food', '2022-07-28', '21:00:00', '23:00:00', 4, 45.00, 52),
('Food', '2022-07-29', '17:00:00', '19:00:00', 4, 45.00, 52),
('Food', '2022-07-29', '19:00:00', '21:00:00', 4, 45.00, 52),
('Food', '2022-07-29', '21:00:00', '23:00:00', 4, 45.00, 52),
('Food', '2022-07-30', '17:00:00', '19:00:00', 4, 45.00, 52),
('Food', '2022-07-30', '19:00:00', '21:00:00', 4, 45.00, 52),
('Food', '2022-07-30', '21:00:00', '23:00:00', 4, 45.00, 52),
('Food', '2022-07-31', '17:00:00', '19:00:00', 4, 45.00, 52),
('Food', '2022-07-31', '19:00:00', '21:00:00', 4, 45.00, 52),
('Food', '2022-07-31', '21:00:00', '23:00:00', 4, 45.00, 52),

--3rd restaurant
('Food', '2022-07-28', '17:00:00', '19:00:00', 5, 45.00, 60),
('Food', '2022-07-28', '19:00:00', '21:00:00', 5, 45.00, 60),
('Food', '2022-07-29', '17:00:00', '19:00:00', 5, 45.00, 60),
('Food', '2022-07-29', '19:00:00', '21:00:00', 5, 45.00, 60),
('Food', '2022-07-30', '17:00:00', '19:00:00', 5, 45.00, 60),
('Food', '2022-07-30', '19:00:00', '21:00:00', 5, 45.00, 60),
('Food', '2022-07-31', '17:00:00', '19:00:00', 5, 45.00, 60),
('Food', '2022-07-31', '19:00:00', '21:00:00', 5, 45.00, 60),

--4th restaurant
('Food', '2022-07-28', '17:30:00', '19:00:00', 6, 45.00, 45),
('Food', '2022-07-28', '19:00:00', '20:30:00', 6, 45.00, 45),
('Food', '2022-07-28', '20:30:00', '22:00:00', 6, 45.00, 45),
('Food', '2022-07-29', '17:30:00', '19:00:00', 6, 45.00, 45),
('Food', '2022-07-29', '19:00:00', '20:30:00', 6, 45.00, 45),
('Food', '2022-07-29', '20:30:00', '22:00:00', 6, 45.00, 45),
('Food', '2022-07-30', '17:30:00', '19:00:00', 6, 45.00, 45),
('Food', '2022-07-30', '19:00:00', '20:30:00', 6, 45.00, 45),
('Food', '2022-07-30', '20:30:00', '22:00:00', 6, 45.00, 45),
('Food', '2022-07-31', '17:30:00', '19:00:00', 6, 45.00, 45),
('Food', '2022-07-31', '19:00:00', '20:30:00', 6, 45.00, 45),
('Food', '2022-07-31', '20:30:00', '22:00:00', 6, 45.00, 45),

--5th restaurant
('Food', '2022-07-28', '17:00:00', '18:30:00', 7, 35.00, 36),
('Food', '2022-07-28', '18:30:00', '20:00:00', 7, 35.00, 36),
('Food', '2022-07-28', '20:00:00', '21:30:00', 7, 35.00, 36),
('Food', '2022-07-29', '17:00:00', '18:30:00', 7, 35.00, 36),
('Food', '2022-07-29', '18:30:00', '20:00:00', 7, 35.00, 36),
('Food', '2022-07-29', '20:00:00', '21:30:00', 7, 35.00, 36),
('Food', '2022-07-30', '17:00:00', '18:30:00', 7, 35.00, 36),
('Food', '2022-07-30', '18:30:00', '20:00:00', 7, 35.00, 36),
('Food', '2022-07-30', '20:00:00', '21:30:00', 7, 35.00, 36),
('Food', '2022-07-31', '17:00:00', '18:30:00', 7, 35.00, 36),
('Food', '2022-07-31', '18:30:00', '20:00:00', 7, 35.00, 36),
('Food', '2022-07-31', '20:00:00', '21:30:00', 7, 35.00, 36),

--6th restaurant
('Food', '2022-07-28', '16:30:00', '18:00:00', 8, 35.00, 100),
('Food', '2022-07-28', '18:00:00', '19:30:00', 8, 35.00, 100),
('Food', '2022-07-28', '19:30:00', '21:00:00', 8, 35.00, 100),
('Food', '2022-07-29', '16:30:00', '18:00:00', 8, 35.00, 100),
('Food', '2022-07-29', '18:00:00', '19:30:00', 8, 35.00, 100),
('Food', '2022-07-29', '19:30:00', '21:00:00', 8, 35.00, 100),
('Food', '2022-07-30', '16:30:00', '18:00:00', 8, 35.00, 100),
('Food', '2022-07-30', '18:00:00', '19:30:00', 8, 35.00, 100),
('Food', '2022-07-30', '19:30:00', '21:00:00', 8, 35.00, 100),
('Food', '2022-07-31', '16:30:00', '18:00:00', 8, 35.00, 100),
('Food', '2022-07-31', '18:00:00', '19:30:00', 8, 35.00, 100),
('Food', '2022-07-31', '19:30:00', '21:00:00', 8, 35.00, 100),

--7th restaurnat
('Food', '2022-07-28', '17:30:00', '19:00:00', 9, 35.00, 48),
('Food', '2022-07-28', '19:00:00', '20:30:00', 9, 35.00, 48),
('Food', '2022-07-28', '20:30:00', '22:00:00', 9, 35.00, 48),
('Food', '2022-07-29', '17:30:00', '19:00:00', 9, 35.00, 48),
('Food', '2022-07-29', '19:00:00', '20:30:00', 9, 35.00, 48),
('Food', '2022-07-29', '20:30:00', '22:00:00', 9, 35.00, 48),
('Food', '2022-07-30', '17:30:00', '19:00:00', 9, 35.00, 48),
('Food', '2022-07-30', '19:00:00', '20:30:00', 9, 35.00, 48),
('Food', '2022-07-30', '20:30:00', '22:00:00', 9, 35.00, 48),
('Food', '2022-07-31', '17:30:00', '19:00:00', 9, 35.00, 48),
('Food', '2022-07-31', '19:00:00', '20:30:00', 9, 35.00, 48),
('Food', '2022-07-31', '20:30:00', '22:00:00', 9, 35.00, 48),

--8th restaurant
('Food', '2022-07-28', '17:30:00', '19:00:00', 10, 35.00, 60),
('Food', '2022-07-28', '19:00:00', '20:30:00', 10, 35.00, 60),
('Food', '2022-07-28', '20:30:00', '22:00:00', 10, 35.00, 60),
('Food', '2022-07-29', '17:30:00', '19:00:00', 10, 35.00, 60),
('Food', '2022-07-29', '19:00:00', '20:30:00', 10, 35.00, 60),
('Food', '2022-07-29', '20:30:00', '22:00:00', 10, 35.00, 60),
('Food', '2022-07-30', '17:30:00', '19:00:00', 10, 35.00, 60),
('Food', '2022-07-30', '19:00:00', '20:30:00', 10, 35.00, 60),
('Food', '2022-07-30', '20:30:00', '22:00:00', 10, 35.00, 60),
('Food', '2022-07-31', '17:30:00', '19:00:00', 10, 35.00, 60),
('Food', '2022-07-31', '19:00:00', '20:30:00', 10, 35.00, 60),
('Food', '2022-07-31', '20:30:00', '22:00:00', 10, 35.00, 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jazzactivity`
--
ALTER TABLE `jazzactivity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artistId` (`artistId`),
  ADD KEY `performanceId` (`performanceId`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locationId` (`locationId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jazzactivity`
--
ALTER TABLE `jazzactivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jazzactivity`
--
ALTER TABLE `jazzactivity`
  ADD CONSTRAINT `jazzactivity_ibfk_1` FOREIGN KEY (`artistId`) REFERENCES `artist` (`id`),
  ADD CONSTRAINT `jazzactivity_ibfk_2` FOREIGN KEY (`performanceId`) REFERENCES `performance` (`id`);

--
-- Constraints for table `performance`
--
ALTER TABLE `performance`
  ADD CONSTRAINT `performance_ibfk_1` FOREIGN KEY (`locationId`) REFERENCES `location` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
