-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Mar 29, 2022 at 12:59 PM
-- Server version: 10.6.5-MariaDB-1:10.6.5+maria~focal
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `developmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `type` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `locationId` int(11) NOT NULL,
  `price` float NOT NULL,
  `ticketsLeft` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `type`, `date`, `startTime`, `endTime`, `locationId`, `price`, `ticketsLeft`) VALUES
(1, 'jazz', '2022-07-28', '18:00:00', '19:00:00', 1, 15, 300),
(2, 'jazz', '2022-07-28', '19:30:00', '20:30:00', 1, 15, 300),
(3, 'jazz', '2022-07-28', '21:00:00', '22:00:00', 1, 15, 300),
(4, 'jazz', '2022-07-28', '18:00:00', '19:00:00', 1, 10, 200),
(5, 'jazz', '2022-07-28', '19:30:00', '20:30:00', 1, 10, 200),
(6, 'jazz', '2022-07-28', '21:00:00', '22:00:00', 1, 10, 200),
(7, 'jazz', '2022-07-29', '18:00:00', '19:00:00', 1, 15, 300),
(8, 'jazz', '2022-07-29', '19:30:00', '20:30:00', 1, 15, 300),
(9, 'jazz', '2022-07-29', '21:00:00', '22:00:00', 1, 15, 300),
(10, 'jazz', '2022-07-29', '18:00:00', '19:00:00', 1, 10, 200),
(11, 'jazz', '2022-07-29', '19:30:00', '20:30:00', 1, 10, 200),
(12, 'jazz', '2022-07-29', '21:00:00', '22:00:00', 1, 10, 200),
(13, 'jazz', '2022-07-30', '18:00:00', '19:00:00', 1, 15, 300),
(14, 'jazz', '2022-07-30', '19:30:00', '20:30:00', 1, 15, 300),
(15, 'jazz', '2022-07-30', '21:00:00', '22:00:00', 1, 15, 300),
(16, 'jazz', '2022-07-30', '18:00:00', '19:00:00', 1, 10, 150),
(17, 'jazz', '2022-07-30', '19:30:00', '20:30:00', 1, 10, 150),
(18, 'jazz', '2022-07-30', '21:00:00', '22:00:00', 1, 10, 150),
(19, 'jazz', '2022-07-31', '15:00:00', '16:00:00', 2, 0, 0),
(20, 'jazz', '2022-07-31', '16:00:00', '17:00:00', 2, 0, 0),
(21, 'jazz', '2022-07-31', '17:00:00', '18:00:00', 2, 0, 0),
(22, 'jazz', '2022-07-31', '18:00:00', '19:00:00', 2, 0, 0),
(23, 'jazz', '2022-07-31', '19:00:00', '20:00:00', 2, 0, 0),
(24, 'jazz', '2022-07-31', '20:00:00', '21:00:00', 2, 0, 0),
(25, 'Food', '2022-07-28', '18:00:00', '19:30:00', 3, 45, 40),
(26, 'Food', '2022-07-28', '19:30:00', '21:00:00', 3, 45, 40),
(27, 'Food', '2022-07-28', '21:00:00', '22:30:00', 3, 45, 40),
(28, 'Food', '2022-07-29', '18:00:00', '19:30:00', 3, 45, 40),
(29, 'Food', '2022-07-29', '19:30:00', '21:00:00', 3, 45, 40),
(30, 'Food', '2022-07-29', '21:00:00', '22:30:00', 3, 45, 40),
(31, 'Food', '2022-07-30', '18:00:00', '19:30:00', 3, 45, 40),
(32, 'Food', '2022-07-30', '19:30:00', '21:00:00', 3, 45, 40),
(33, 'Food', '2022-07-30', '21:00:00', '22:30:00', 3, 45, 40),
(34, 'Food', '2022-07-31', '18:00:00', '19:30:00', 3, 45, 40),
(35, 'Food', '2022-07-31', '19:30:00', '21:00:00', 3, 45, 40),
(36, 'Food', '2022-07-31', '21:00:00', '22:30:00', 3, 45, 40),
(37, 'Food', '2022-07-28', '17:00:00', '19:00:00', 4, 45, 52),
(38, 'Food', '2022-07-28', '19:00:00', '21:00:00', 4, 45, 52),
(39, 'Food', '2022-07-28', '21:00:00', '23:00:00', 4, 45, 52),
(40, 'Food', '2022-07-29', '17:00:00', '19:00:00', 4, 45, 52),
(41, 'Food', '2022-07-29', '19:00:00', '21:00:00', 4, 45, 52),
(42, 'Food', '2022-07-29', '21:00:00', '23:00:00', 4, 45, 52),
(43, 'Food', '2022-07-30', '17:00:00', '19:00:00', 4, 45, 52),
(44, 'Food', '2022-07-30', '19:00:00', '21:00:00', 4, 45, 52),
(45, 'Food', '2022-07-30', '21:00:00', '23:00:00', 4, 45, 52),
(46, 'Food', '2022-07-31', '17:00:00', '19:00:00', 4, 45, 52),
(47, 'Food', '2022-07-31', '19:00:00', '21:00:00', 4, 45, 52),
(48, 'Food', '2022-07-31', '21:00:00', '23:00:00', 4, 45, 52),
(49, 'Food', '2022-07-28', '17:00:00', '19:00:00', 5, 45, 60),
(50, 'Food', '2022-07-28', '19:00:00', '21:00:00', 5, 45, 60),
(51, 'Food', '2022-07-29', '17:00:00', '19:00:00', 5, 45, 60),
(52, 'Food', '2022-07-29', '19:00:00', '21:00:00', 5, 45, 60),
(53, 'Food', '2022-07-30', '17:00:00', '19:00:00', 5, 45, 60),
(54, 'Food', '2022-07-30', '19:00:00', '21:00:00', 5, 45, 60),
(55, 'Food', '2022-07-31', '17:00:00', '19:00:00', 5, 45, 60),
(56, 'Food', '2022-07-31', '19:00:00', '21:00:00', 5, 45, 60),
(57, 'Food', '2022-07-28', '17:30:00', '19:00:00', 6, 45, 45),
(58, 'Food', '2022-07-28', '19:00:00', '20:30:00', 6, 45, 45),
(59, 'Food', '2022-07-28', '20:30:00', '22:00:00', 6, 45, 45),
(60, 'Food', '2022-07-29', '17:30:00', '19:00:00', 6, 45, 45),
(61, 'Food', '2022-07-29', '19:00:00', '20:30:00', 6, 45, 45),
(62, 'Food', '2022-07-29', '20:30:00', '22:00:00', 6, 45, 45),
(63, 'Food', '2022-07-30', '17:30:00', '19:00:00', 6, 45, 45),
(64, 'Food', '2022-07-30', '19:00:00', '20:30:00', 6, 45, 45),
(65, 'Food', '2022-07-30', '20:30:00', '22:00:00', 6, 45, 45),
(66, 'Food', '2022-07-31', '17:30:00', '19:00:00', 6, 45, 45),
(67, 'Food', '2022-07-31', '19:00:00', '20:30:00', 6, 45, 45),
(68, 'Food', '2022-07-31', '20:30:00', '22:00:00', 6, 45, 45),
(69, 'Food', '2022-07-28', '17:00:00', '18:30:00', 7, 35, 36),
(70, 'Food', '2022-07-28', '18:30:00', '20:00:00', 7, 35, 36),
(71, 'Food', '2022-07-28', '20:00:00', '21:30:00', 7, 35, 36),
(72, 'Food', '2022-07-29', '17:00:00', '18:30:00', 7, 35, 36),
(73, 'Food', '2022-07-29', '18:30:00', '20:00:00', 7, 35, 36),
(74, 'Food', '2022-07-29', '20:00:00', '21:30:00', 7, 35, 36),
(75, 'Food', '2022-07-30', '17:00:00', '18:30:00', 7, 35, 36),
(76, 'Food', '2022-07-30', '18:30:00', '20:00:00', 7, 35, 36),
(77, 'Food', '2022-07-30', '20:00:00', '21:30:00', 7, 35, 36),
(78, 'Food', '2022-07-31', '17:00:00', '18:30:00', 7, 35, 36),
(79, 'Food', '2022-07-31', '18:30:00', '20:00:00', 7, 35, 36),
(80, 'Food', '2022-07-31', '20:00:00', '21:30:00', 7, 35, 36),
(81, 'Food', '2022-07-28', '16:30:00', '18:00:00', 8, 35, 100),
(82, 'Food', '2022-07-28', '18:00:00', '19:30:00', 8, 35, 100),
(83, 'Food', '2022-07-28', '19:30:00', '21:00:00', 8, 35, 100),
(84, 'Food', '2022-07-29', '16:30:00', '18:00:00', 8, 35, 100),
(85, 'Food', '2022-07-29', '18:00:00', '19:30:00', 8, 35, 100),
(86, 'Food', '2022-07-29', '19:30:00', '21:00:00', 8, 35, 100),
(87, 'Food', '2022-07-30', '16:30:00', '18:00:00', 8, 35, 100),
(88, 'Food', '2022-07-30', '18:00:00', '19:30:00', 8, 35, 100),
(89, 'Food', '2022-07-30', '19:30:00', '21:00:00', 8, 35, 100),
(90, 'Food', '2022-07-31', '16:30:00', '18:00:00', 8, 35, 100),
(91, 'Food', '2022-07-31', '18:00:00', '19:30:00', 8, 35, 100),
(92, 'Food', '2022-07-31', '19:30:00', '21:00:00', 8, 35, 100),
(93, 'Food', '2022-07-28', '17:30:00', '19:00:00', 9, 35, 48),
(94, 'Food', '2022-07-28', '19:00:00', '20:30:00', 9, 35, 48),
(95, 'Food', '2022-07-28', '20:30:00', '22:00:00', 9, 35, 48),
(96, 'Food', '2022-07-29', '17:30:00', '19:00:00', 9, 35, 48),
(97, 'Food', '2022-07-29', '19:00:00', '20:30:00', 9, 35, 48),
(98, 'Food', '2022-07-29', '20:30:00', '22:00:00', 9, 35, 48),
(99, 'Food', '2022-07-30', '17:30:00', '19:00:00', 9, 35, 48),
(100, 'Food', '2022-07-30', '19:00:00', '20:30:00', 9, 35, 48),
(101, 'Food', '2022-07-30', '20:30:00', '22:00:00', 9, 35, 48),
(102, 'Food', '2022-07-31', '17:30:00', '19:00:00', 9, 35, 48),
(103, 'Food', '2022-07-31', '19:00:00', '20:30:00', 9, 35, 48),
(104, 'Food', '2022-07-31', '20:30:00', '22:00:00', 9, 35, 48),
(105, 'Food', '2022-07-28', '17:30:00', '19:00:00', 10, 35, 60),
(106, 'Food', '2022-07-28', '19:00:00', '20:30:00', 10, 35, 60),
(107, 'Food', '2022-07-28', '20:30:00', '22:00:00', 10, 35, 60),
(108, 'Food', '2022-07-29', '17:30:00', '19:00:00', 10, 35, 60),
(109, 'Food', '2022-07-29', '19:00:00', '20:30:00', 10, 35, 60),
(110, 'Food', '2022-07-29', '20:30:00', '22:00:00', 10, 35, 60),
(111, 'Food', '2022-07-30', '17:30:00', '19:00:00', 10, 35, 60),
(112, 'Food', '2022-07-30', '19:00:00', '20:30:00', 10, 35, 60),
(113, 'Food', '2022-07-30', '20:30:00', '22:00:00', 10, 35, 60),
(114, 'Food', '2022-07-31', '17:30:00', '19:00:00', 10, 35, 60),
(115, 'Food', '2022-07-31', '19:00:00', '20:30:00', 10, 35, 60),
(116, 'Food', '2022-07-31', '20:30:00', '22:00:00', 10, 35, 60);

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
-- Table structure for table `jazzActivity`
--

CREATE TABLE `jazzActivity` (
  `id` int(11) NOT NULL,
  `artistId` int(11) NOT NULL,
  `activityId` int(11) NOT NULL,
  `activityHall` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jazzActivity`
--

INSERT INTO `jazzActivity` (`id`, `artistId`, `activityId`, `activityHall`) VALUES
(1, 1, 1, 'Main'),
(2, 2, 2, 'Main'),
(3, 3, 3, 'Main'),
(4, 4, 4, 'Second'),
(5, 5, 5, 'Second'),
(6, 6, 6, 'Second'),
(7, 7, 7, 'Main'),
(8, 8, 8, 'Main'),
(9, 9, 9, 'Main'),
(10, 10, 10, 'Second'),
(11, 11, 11, 'Second'),
(12, 12, 12, 'Second'),
(13, 13, 13, 'Main'),
(14, 14, 14, 'Main'),
(15, 15, 15, 'Main'),
(16, 16, 16, 'Third'),
(17, 17, 17, 'Third'),
(18, 18, 18, 'Third'),
(19, 11, 19, 'None'),
(20, 4, 20, 'None'),
(21, 2, 21, 'None'),
(22, 17, 22, 'None'),
(23, 1, 23, 'None'),
(24, 13, 24, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `address` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `postalCode` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `city` varchar(20) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `address`, `postalCode`, `city`) VALUES
(1, 'Patronaat', 'Zijlsingel 2', '2013 DN', 'Haarlem'),
(2, 'Grote Markt', 'Grote Markt', '2011 RD', 'Haarlem'),
(3, 'Restaurant Mr. & Mrs.', 'Lange Veerstraat 4', '2011 DB', 'Haarlem'),
(4, 'Ratatouille', 'Spaarne 96', '2011 CL', 'Haarlem'),
(5, 'Restaurant ML', 'Kleine Houtstraat 70', '2011 DR', 'Haarlem'),
(6, 'Restaurant Fris', 'Twijnderslaan 7', '2012 BG', 'Haarlem'),
(7, 'Specktakel', 'Spekstraat 4', '2011 HM', 'Haarlem'),
(8, 'Grand Cafe Brinkman', 'Grote Markt 13', '2011 RC', 'Haarlem'),
(9, 'Urban Frenchy Bistro Toujours', 'Oude Groenmarkt 10-12', '2011 HL', 'Haarlem'),
(10, 'The Golden Bull', 'Zijlstraat 39', '2011 TK', 'Haarlem'),
(11, 'St. Bavos Church', 'Grote Markt 2', '2011 RD', 'Haarlem'),
(12, 'Club Stalker', 'Kromme Elleboogsteeg 20', '2011 TS', 'Haarlem'),
(13, 'Caprera Openluchttheater', 'Hoge Duin en Daalseweg 2', '2061 AG', 'Bloemendaal'),
(14, 'Jopenkerk', 'Gedempte Voldersgracht 2', '2011 WD', 'Haarlem'),
(15, 'Lichtfabriek', 'Minckelersweg 2', '2031 EM', 'Haarlem'),
(16, 'Club Ruis', 'Smedestraat 31', '2011 RE', 'Haarlem'),
(17, 'XO the Club', 'Grote Markt 8', '2011 RD', 'Haarlem');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `locationId` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `stars` int(11) NOT NULL,
  `seats` int(11) DEFAULT NULL,
  `phoneNumber` int(11) DEFAULT NULL,
  `price` float NOT NULL,
  `parking` varchar(100) NOT NULL,
  `website` varchar(100) DEFAULT NULL,
  `menu` varchar(1000) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `locationId`, `name`, `description`, `stars`, `seats`, `phoneNumber`, `price`, `parking`, `website`, `menu`, `contact`) VALUES
(1, 3, 'Restaurant Mr. & Mrs.', 'Mr. & Mrs. offers an ambiance where you feel at ease. Mr. creates delicious taste explosions with honest products and Mrs. complements the dishes with the best matching wines.', 4, 40, 0, 45, 'Paid parking nearby.', 'https://www.restaurantmrandmrs.nl/', 'https://www.restaurantmrandmrs.nl/food', 'https://www.restaurantmrandmrs.nl/contact'),
(2, 4, 'Ratatouille', 'Ratatouille Food & Wine in Haarlem is the successful restaurant of chef Jozua Jaring. The kitchen that is fed is, just like ratatouille, a mix of French cuisine and the reality of today. The excellent price-quality ratio and accessible environment is very well received by many. Michelin also appreciates the quality of Ratatouille, they have a well-deserved Michelin star to their name since 2014.', 4, 52, 0, 45, 'Park in parking garage De Appelaar at 100 meters or parking garage De Kamp at 100 meters.', 'https://ratatouillefoodandwine.nl/', 'https://ratatouillefoodandwine.nl/menukaart/', 'https://ratatouillefoodandwine.nl/contact/'),
(3, 5, 'Restaurant ML', '', 4, 60, 0, 45, 'Paid parking nearby', 'https://www.mlinhaarlem.nl/en/', 'https://www.mlinhaarlem.nl/nl/restaurant-x-bistro-home', 'https://www.mlinhaarlem.nl/nl/contact/'),
(4, 6, 'Restaurant Fris', 'Restaurant Fris is located in the middle of Haarlem, near the Frederikspark. A modern restaurant where chef Rick May presents dishes based on classic French cuisine, which he knows how to refine with worldwide influences. Taste the chefs favorite signature dish, or guilty pleasure. His French croissant with duck liver, Ibérico ham, Savora mustard with VOC spices, and fig ice cream is a flavor bomb with global influences.', 4, 45, 0, 45, 'It is best to park your car in the garage “Houtplein”, less than a 5-minute walk away. Note: parking', 'https://www.restaurantfris.nl/', 'https://www.restaurantfris.nl/menu/', 'https://www.restaurantfris.nl/contact-reserveren'),
(5, 7, 'Specktakel', 'Specktakel is a unique restaurant centrally located in the heart of Haarlem with a special courtyard and terrace. At Specktakel you dont eat quietly. Not only because of the cosiness of your company, but also because of the international food and worldly wine that you enjoy. The colors, aromas and flavors create a wonderful interplay that must be talked about.', 4, 36, 0, 35, 'Parking garages “de Appelaar”, “de Kamp” and “de Raaks”', 'https://specktakel.nl/', 'https://specktakel.nl/menu', 'https://specktakel.nl/contact'),
(6, 8, 'Grand Cafe Brinkman', 'Café Brinkmann has been a household name in Haarlem and surroundings since 1879. Good food, perfect coffee and staff who provide excellent service with enthusiasm and pleasure. All this against the backdrop of a monumental building, in the middle of the historic center, with a huge terrace that catches every ray of sunshine. In short, a hospitable place where you like to settle down.', 3, 100, 0, 35, 'Paid parking nearby', 'https://grandcafebrinkmann.nl/', 'https://grandcafebrinkmann.nl/etendrinken/', 'https://grandcafebrinkmann.nl/contact/'),
(7, 9, 'Urban Frenchy Bistro Toujours', 'Just that feeling of going all out in the restaurant. Complete. Starters, fine wines and delicious main courses and desserts. These are, in summary, the elements of our Toujours Experience Boxes. Our boxes contain everything you need for a Toujours evening at home: from easy easy boxes to extensive dinners that you can have on the table in no time. Everything is possible.', 3, 48, 0, 35, 'Paid parking nearby', 'https://restauranttoujours.nl/', 'https://restauranttoujours.nl/menus/', 'https://restauranttoujours.nl/reservations/'),
(8, 10, 'The Golden Bull', 'In addition to high quality steaks, we offer a cozy no-nonsense atmosphere. All this in combination with a wide range of special wines. An experience where your taste buds are extremely stimulated. All our meat is prepared on the lava stone grill, which creates an enormous taste sensation.', 3, 60, 0, 35, 'It is easiest to park your car in Parking garage Raaks. It is a 3-minute walk from the parking garag', 'https://thegoldenbull.nl/', 'https://thegoldenbull.nl/menukaart/', 'https://thegoldenbull.nl/contact/');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantType`
--

CREATE TABLE `restaurantType` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurantType`
--

INSERT INTO `restaurantType` (`id`, `name`) VALUES
(1, 'All cuisines'),
(2, 'Argentinian'),
(3, 'Asian'),
(4, 'Dutch'),
(5, 'European'),
(6, 'Seafood'),
(7, 'French'),
(8, 'International'),
(9, 'Modern'),
(10, 'Steakhouse');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantTypelink`
--

CREATE TABLE `restaurantTypelink` (
  `id` int(11) NOT NULL,
  `restaurantTypeId` int(11) NOT NULL,
  `restaurantId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurantTypelink`
--

INSERT INTO `restaurantTypelink` (`id`, `restaurantTypeId`, `restaurantId`) VALUES
(25, 2, 8),
(26, 3, 5),
(27, 4, 1),
(28, 4, 3),
(29, 4, 4),
(30, 4, 6),
(31, 4, 7),
(32, 5, 1),
(33, 5, 2),
(34, 5, 3),
(35, 5, 4),
(36, 5, 5),
(37, 5, 6),
(38, 5, 7),
(39, 5, 8),
(40, 6, 1),
(41, 6, 2),
(42, 6, 3),
(43, 6, 7),
(44, 7, 2),
(45, 7, 4),
(46, 8, 5),
(47, 9, 6),
(48, 10, 8);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleId` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `type`) VALUES
(1, 'User'),
(2, 'Administrator'),
(3, 'SuperAdministrator');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locationId` (`locationId`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jazzActivity`
--
ALTER TABLE `jazzActivity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artistId` (`artistId`),
  ADD KEY `activityId` (`activityId`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locationId` (`locationId`);

--
-- Indexes for table `restaurantType`
--
ALTER TABLE `restaurantType`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurantTypelink`
--
ALTER TABLE `restaurantTypelink`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurantId` (`restaurantId`),
  ADD KEY `restaurantTypeId` (`restaurantTypeId`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `roleId` (`roleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `jazzActivity`
--
ALTER TABLE `jazzActivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `restaurantType`
--
ALTER TABLE `restaurantType`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `restaurantTypelink`
--
ALTER TABLE `restaurantTypelink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`locationId`) REFERENCES `location` (`id`);

--
-- Constraints for table `jazzActivity`
--
ALTER TABLE `jazzActivity`
  ADD CONSTRAINT `jazzActivity_ibfk_1` FOREIGN KEY (`artistId`) REFERENCES `artist` (`id`),
  ADD CONSTRAINT `jazzActivity_ibfk_2` FOREIGN KEY (`activityId`) REFERENCES `activity` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`locationId`) REFERENCES `location` (`id`);

--
-- Constraints for table `restaurantTypelink`
--
ALTER TABLE `restaurantTypelink`
  ADD CONSTRAINT `restaurantTypelink_ibfk_1` FOREIGN KEY (`restaurantId`) REFERENCES `restaurant` (`id`),
  ADD CONSTRAINT `restaurantTypelink_ibfk_2` FOREIGN KEY (`restaurantTypeId`) REFERENCES `restaurantType` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `roles` (`roleId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
