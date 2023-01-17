-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 04:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legoraktar`
--
CREATE DATABASE IF NOT EXISTS `legoraktar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `legoraktar`;

-- --------------------------------------------------------

--
-- Table structure for table `bolt`
--

CREATE TABLE `bolt` (
  `boltID` int(2) NOT NULL,
  `boltnev` varchar(100) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `iranyitoszam` int(4) NOT NULL,
  `telepules` char(100) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `kozteruletnev` char(100) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `hazszam` varchar(10) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `boltkapacitas` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolt`
--

INSERT INTO `bolt` (`boltID`, `boltnev`, `iranyitoszam`, `telepules`, `kozteruletnev`, `hazszam`, `boltkapacitas`) VALUES
(1, 'REGIO Játékkereskedelmi Kft.', 6729, 'Szeged', 'Szabadkai út', '7', 600),
(2, 'Bambini Játék - Szeged', 6724, 'Szeged', 'Kossuth Lajos sugárút', '119', 60),
(3, 'Liliput Játékvilág ÁRKÁD Szeged', 6724, 'Szeged', 'Londoni körút', '3', 210),
(4, 'REGIO JÁTÉK', 6721, 'Szeged', 'Felső Tisza-Part', '16', 450),
(5, 'Sluban Építőjáték Webáruház', 6800, 'Hódmezővásárhely', 'Jókai utca', '189', 550),
(6, 'Kockashop', 1119, 'Budapest', 'Tétényi út', '63', 100),
(7, 'Kockamanó Játékbolt', 1119, 'Budapest', 'Etele út', '32/C', 520),
(8, 'LEGO Store Allee', 1117, 'Budapest', 'Október huszonharmadika utca', '8-10', 440),
(9, 'KockaVilág.hu LEGO termékek szaküzlete', 1013, 'Budapest', 'Attila út', '47', 420),
(10, 'LEGO Store Westend', 1062, 'Budapest', 'Váci út', '1-3', 666),
(11, '220kocka.hu Kft.', 1135, 'Budapest', 'Szegedi út', '42-44', 110),
(12, 'Kockabirodalom', 1073, 'Budapest', 'Erzsébet körút', '16', 80),
(13, 'Kockamanó Játékbolt', 1119, 'Budapest', 'Etele út', '32', 60),
(14, 'Mindörökké LEGO Játék Bolt', 1078, 'Budapest', 'Hernádi utca', '8', 90),
(15, 'Kockamanó Játékbolt', 1119, 'Budapest', 'Etele út', '32', 800),
(16, 'LEGO Store Árkád', 1148, 'Budapest', 'Örs vezért tere', '25', 50),
(17, 'Kockabolygó LEGO áruház', 1185, 'Budapest', 'Üllői út', '612', 400),
(18, 'kockaorszag.hu Kft.', 2051, 'Biatorbágy', 'Szabadság út', '96', 900),
(19, 'Brick Fanatix', 2030, 'Érd', 'Esztergályos utca', '15', 150),
(20, 'Campona KockaPark', 1222, 'Budapest', 'Nagytétényi út', '37-43', 60),
(21, 'Managertoys', 1052, 'Budapest', 'Váci utca', '4', 80),
(22, 'Manó Shop', 2013, 'Pomáz', 'Damjanich utca', '45', 333),
(23, 'Papír-Írószer és LEGO üzlet - GEM-1991 Bt.', 1161, 'Budapest', 'Rákosi út', '112', 100),
(24, 'Játéksziget', 4024, 'Debrecen', 'Csapó utca', '30', 111),
(25, 'BRIXCITY Debrecen - LEGO áruház és webshop', 4043, 'Debrecen', 'Kishatár utca', '9', 888),
(26, 'LEGO Kockafalu', 4220, 'Hajdúböszörmény', 'Kinizsi Pál utca', '12/a', 100),
(27, 'REGIO JÁTÉK - Miskolc Avas', 3508, 'Miskolc', 'Mésztelep utca', '1/a', 800),
(28, 'KreativKocka.hu - Creative Store Hungary Kft.', 3434, 'Mályi', 'Fő utca', '11', 900),
(29, 'Játék Dzsungel', 13530, 'Miskolc', 'Széchenyi István út', '26', 700),
(30, 'Brickmania.hu', 3527, 'Miskolc', 'Zsigmondi Vilmos utca', '36/A', 400),
(31, 'REGIO JÁTÉK – Eger', 3300, 'Eger', 'II. Rákóczi Ferenc utca', '90', 500),
(32, 'REGIO JÁTÉK Miskolc', 3527, 'Miskolc', 'József Attila utca', '90', 500),
(33, 'Liliput Játékvilág Agria Park', 3300, 'Eger', 'Törvényház utca', '4', 200),
(34, 'REGIO Játék', 8000, 'Székesfehérvár', 'Szent Flórián körút', '13', 100),
(35, 'Játékország Játékbolt', 8000, 'Székesfehérvár', 'Fő utcat', '2-4', 200),
(36, 'REGIO JÁTÉK - Alba Plaza', 8000, 'Székesfehérvár', 'Palotai út', '32', 60),
(37, 'Játékbizományi', 8200, 'Veszprém', 'Haszkovó utca', '18/G', 780),
(38, 'Bambini Játék - Veszprém Pláza', 8200, 'Veszprém', 'Budapest út', '20', 150),
(39, 'Játékparadicsom', 8200, 'Veszprém', 'Hérics utca', '1/F', 30),
(40, 'REGIO JÁTÉK - Veszprém Stop Shop', 8200, 'Veszprém', 'Dornyai Béla utca', '4', 45),
(41, 'Fapipa Bt.', 9021, 'Győr', 'Baross Gábor út', '23', 60),
(42, 'Galaxy játékbolt', 9025, 'Győr', 'Csipkegyári út', '11', 90),
(43, 'REGIO JÁTÉK - Győr Plaza', 9024, 'Győr', 'Vasvári Pál utca', '1', 120),
(44, 'JÁTÉKSZIGET JÁTÉKBOLT - GYŐR ÁRKÁD BEVÁSÁRLÓKÖZPONT', 9027, 'Győr', 'budai út', '1-3', 180),
(45, 'Regio Játék', 9023, 'Győr', 'Fehérvári út', '3', 210),
(46, 'Stadion Játékdiszkont', 9400, 'Sopron', 'Leckner Kristóf utca', '48/a', 270),
(47, 'Lurkó Játéksziget Játék Webáruház', 6000, 'Kecskemét', 'Tinódi utca', '14', 300),
(48, 'REGIO Játék', 600, 'Kecskemét', 'Korona utca', '2', 360),
(49, 'Pinokkió Játékáruház', 7621, 'Pécs', 'Irgalmasok utcája', '8', 720),
(50, 'Regio Játék', 7621, 'Pécs', 'Ráckóczi út', '66', 666),
(51, 'Játėksziget', 7622, 'Pécs', 'Czindrei utca', '5', 444),
(52, 'REGIO JÁTÉK - Szombathely', 9700, 'Szombathely', 'Viktória  utca', '12', 555),
(53, 'Játék Erdő - Játék és Ajándékbolt', 9700, 'Szombathely', 'Wesselényi Miklós utca', '2', 777),
(54, 'Játékdiszkont - CsupaCsoda játékbolt', 9700, 'Szombathely', 'Kinizsi Pál utca', '14', 999),
(55, 'Regio Játék', 5000, 'Szolnok', 'Ady Endre utca', '15', 123),
(56, 'Okos Játékok Üzlete (Graduál Bt.),', 5000, 'Szolnok', 'Tófenék utca', '4', 456),
(57, 'Galaxy Játékáruház', 5600, 'Békéscsaba', 'Andrássy út', '43', 789),
(58, 'REGIO JÁTÉK - Békéscsaba', 5600, 'Békéscsaba', 'Szarvasi út', '68', 147),
(59, 'Bűbáj Játékbolt - Vértes Center', 2800, 'Tatabánya', 'Győri út', '7-9', 258),
(60, 'Bűbáj Webjátékbolt játék webáruház és játékbolt', 2890, 'Tata', 'Vitéz utca', '1', 369),
(61, 'JátékShop Webáruház és játékbolt', 2600, 'Vác', 'Zrínyi Miklós utca', '41/b', 951),
(62, 'Játékbolt Kiskőrös', 6200, 'Kiskőrös', 'Árpád utca', '2', 753),
(63, 'Regio Játék', 4400, 'Nyíregyháza', 'Pazonyi út', '37', 100);

-- --------------------------------------------------------

--
-- Table structure for table `kaphato`
--

CREATE TABLE `kaphato` (
  `boltID` int(2) DEFAULT NULL,
  `cikkszam` int(20) DEFAULT NULL,
  `kaphatodb` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kaphato`
--

INSERT INTO `kaphato` (`boltID`, `cikkszam`, `kaphatodb`) VALUES
(1, 10780, 6),
(1, 40550, 10),
(1, 2000431, 10),
(2, 5007565, 5),
(2, 76183, 6),
(2, 71411, 6),
(3, 76187, 10),
(3, 40560, 10),
(4, 2000431, 10),
(4, 5007565, 10),
(5, 41962, 10),
(5, 853968, 10),
(6, 88036, 10),
(6, 31109, 10),
(6, 2000431, 10),
(7, 40341, 10),
(7, 71411, 10),
(8, 40341, 10),
(8, 76187, 10),
(9, 31109, 10),
(9, 42127, 10),
(9, 71411, 10),
(10, 40560, 10),
(10, 31109, 10),
(11, 31058, 10),
(11, 2000431, 10),
(12, 75550, 10),
(13, 853968, 10),
(14, 31109, 10),
(15, 88036, 10),
(15, 5007565, 10),
(15, 31109, 10),
(16, 75550, 10),
(16, 88036, 10),
(16, 853968, 10),
(17, 5007565, 10),
(17, 853968, 10),
(17, 76187, 10),
(18, 2000431, 10),
(18, 21336, 10),
(19, 5007565, 10),
(19, 2000431, 10),
(20, 31109, 10),
(20, 31058, 10),
(21, 2000409, 10),
(21, 40560, 10),
(21, 40341, 10),
(21, 2000431, 10),
(22, 5007566, 10),
(22, 88036, 10),
(22, 2000409, 10),
(23, 31109, 10),
(23, 5007566, 10),
(24, 40560, 10),
(25, 42127, 10),
(25, 31109, 10),
(26, 5007566, 10),
(26, 40560, 10),
(27, 75550, 10),
(27, 41962, 10),
(28, 75550, 10),
(29, 21336, 10),
(29, 71411, 10),
(30, 5007566, 10),
(30, 40560, 10),
(30, 5007565, 10),
(31, 42127, 10),
(31, 2000409, 10),
(31, 5007566, 10),
(32, 88036, 10),
(32, 2000431, 10),
(33, 40341, 10),
(33, 31119, 10),
(34, 2000409, 10),
(34, 5007566, 10),
(35, 40341, 10),
(35, 10265, 10),
(35, 5007565, 10),
(36, 41962, 10),
(36, 76187, 10),
(36, 40560, 10),
(37, 21336, 10),
(37, 75550, 10),
(38, 5007555, 10),
(38, 71411, 10),
(38, 41962, 10),
(39, 2000409, 10),
(39, 31119, 10),
(40, 10265, 10),
(40, 853968, 10),
(40, 31058, 10),
(41, 5007566, 10),
(41, 2000409, 10),
(42, 41450, 10),
(42, 853968, 10),
(43, 71411, 10),
(43, 60352, 10),
(44, 5007565, 10),
(45, 41962, 10),
(45, 2000409, 10),
(45, 853968, 10),
(46, 76187, 10),
(46, 75550, 10),
(47, 31058, 10),
(47, 60352, 10),
(48, 41962, 10),
(49, 41450, 10),
(49, 41962, 10),
(49, 2000409, 10),
(50, 31058, 10),
(50, 21336, 10),
(51, 5007555, 10),
(51, 10265, 10),
(52, 60352, 10),
(53, 41962, 10),
(53, 5007566, 10),
(54, 41961, 10),
(54, 5007565, 10),
(54, 853968, 10),
(55, 31058, 10),
(55, 5007566, 10),
(55, 60352, 10),
(56, 5007555, 10),
(57, 41961, 10),
(58, 10265, 10),
(58, 71411, 10),
(58, 5007555, 10),
(58, 41962, 10),
(59, 60352, 10),
(59, 71411, 10),
(60, 21336, 10),
(60, 5007555, 10),
(60, 10265, 10),
(61, 5007555, 10),
(61, 41961, 10),
(61, 10265, 10),
(62, 5007565, 10),
(62, 5007555, 10),
(63, 41962, 10),
(1, 88014, 17),
(1, 10303, 8),
(3, 10273, 1),
(63, 10255, 18),
(11, 10273, 8),
(16, 10265, 9),
(63, 10255, 18),
(2, 10255, 5),
(20, 10255, 1),
(27, 10255, 31),
(55, 10255, 32),
(2, 10265, 6),
(13, 5007558, 3),
(9, 853970, 1),
(15, 853970, 1),
(10, 40377, 2),
(2, 43106, 10),
(2, 31206, 9),
(1, 5007558, 10),
(2, 854197, 8),
(2, 43204, 5),
(55, 5007558, 10);

-- --------------------------------------------------------

--
-- Table structure for table `raktar`
--

CREATE TABLE `raktar` (
  `raktarnev` varchar(10) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `raktarkapacitas` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `raktar`
--

INSERT INTO `raktar` (`raktarnev`, `raktarkapacitas`) VALUES
('Buda', 500),
('Debrecen', 200),
('Győr', 300),
('Kecskemét', 200),
('Miskolc', 600),
('Pécs', 150),
('Pest', 600),
('Szeged', 200),
('Szolnok', 100),
('Veszprém', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tarol`
--

CREATE TABLE `tarol` (
  `raktarnev` varchar(10) CHARACTER SET utf8 COLLATE utf8_hungarian_ci DEFAULT NULL,
  `cikkszam` int(20) DEFAULT NULL,
  `szoba` int(2) NOT NULL,
  `polc` int(3) NOT NULL,
  `taroldb` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tarol`
--

INSERT INTO `tarol` (`raktarnev`, `cikkszam`, `szoba`, `polc`, `taroldb`) VALUES
('Buda', 10255, 1, 1, 15),
('Buda', 10265, 2, 2, 7),
('Buda', 10265, 3, 3, 7),
('Buda', 10273, 4, 4, 10),
('Debrecen', 11717, 4, 4, 1),
('Győr', 21183, 1, 1, 9),
('Győr', 21327, 2, 2, 9),
('Győr', 21330, 3, 3, 9),
('Győr', 21336, 4, 4, 9),
('Kecskemét', 11022, 1, 1, 9),
('Kecskemét', 31122, 2, 2, 9),
('Kecskemét', 31132, 3, 3, 9),
('Kecskemét', 31207, 4, 4, 9),
('Miskolc', 31205, 2, 2, 9),
('Miskolc', 40341, 3, 3, 9),
('Miskolc', 40377, 4, 4, 7),
('Pécs', 40496, 1, 1, 9),
('Pécs', 40535, 2, 2, 9),
('Pécs', 40547, 3, 3, 9),
('Pécs', 40550, 4, 4, 9),
('Pest', 41166, 1, 1, 9),
('Pest', 41168, 2, 2, 9),
('Pest', 42083, 3, 3, 9),
('Pest', 42141, 4, 4, 9),
('Szeged', 43106, 1, 1, 8),
('Szeged', 43204, 2, 2, 4),
('Szeged', 51515, 3, 3, 9),
('Szeged', 71043, 4, 4, 9),
('Szolnok', 71395, 1, 1, 9),
('Szolnok', 71755, 2, 2, 9),
('Szolnok', 71774, 3, 3, 9),
('Szolnok', 75571, 4, 4, 9),
('Veszprém', 853970, 3, 3, 9),
('Veszprém', 5007558, 4, 4, 71),
('Pest', 854197, 4, 4, 2),
('Kecskemét', 40550, 4, 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tema`
--

CREATE TABLE `tema` (
  `temaID` int(20) NOT NULL,
  `temanev` varchar(50) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tema`
--

INSERT INTO `tema` (`temaID`, `temanev`) VALUES
(1, 'Architecture'),
(2, 'Batman'),
(3, 'BOOST'),
(4, 'BrickHeadz'),
(5, 'Brick Sketches'),
(6, 'City'),
(7, 'Classic'),
(8, 'Creator 3-in-1'),
(9, 'Creator Expert'),
(10, 'DC'),
(11, 'Disney'),
(12, 'Disney Mickey és barátai'),
(13, 'Lightyear'),
(14, 'DOTS'),
(15, 'DUPLO'),
(16, 'Friends'),
(17, 'Jégvarázs'),
(18, 'Harry Potter'),
(19, 'Ideas'),
(20, 'Jurassic World'),
(21, 'Art'),
(22, 'Avatár'),
(23, 'Education'),
(24, 'Icons'),
(25, 'Super Mario'),
(26, 'Marvel'),
(27, 'MINDSTORMS'),
(28, 'Minecraft'),
(29, 'Minifigurák'),
(30, 'Minions'),
(31, 'Monkie Kid'),
(32, 'NINJAGO'),
(33, 'Energiaellátás'),
(34, 'Powered UP'),
(35, 'SERIOUS PLAY'),
(36, 'Speed Champions'),
(37, 'Spider-Man'),
(38, 'Star Wars'),
(39, 'Stranger Things'),
(40, 'Technic'),
(41, 'VIDIYO'),
(42, 'Xtra');

-- --------------------------------------------------------

--
-- Table structure for table `termek`
--

CREATE TABLE `termek` (
  `cikkszam` int(20) NOT NULL,
  `termeknev` varchar(100) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `korosztaly` int(2) NOT NULL,
  `epitoelemek` int(10) NOT NULL,
  `temaID` int(20) DEFAULT NULL,
  `ar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `termek`
--

INSERT INTO `termek` (`cikkszam`, `termeknev`, `korosztaly`, `epitoelemek`, `temaID`, `ar`) VALUES
(10255, 'Assembly Square piactér', 16, 4002, 9, 114990),
(10265, 'Ford Mustang', 16, 1471, 9, 61990),
(10270, 'Könyvesbolt', 16, 2509, 9, 76990),
(10273, 'Kísértetkastély', 18, 3241, 9, 112990),
(10274, 'Szellemirtók ECTO-1', 18, 2352, 9, 91990),
(10276, 'Colosseum', 18, 9036, 24, 209990),
(10303, 'Hullámvasút hurokkal', 18, 3756, 24, 152990),
(10304, 'Chevrolet Camaro Z28', 18, 1456, 24, 64990),
(10305, 'Az oroszlánlovagok kastélya', 10, 4536, 24, 152990),
(10306, 'Atari 2600', 18, 2533, 24, 91990),
(10692, 'LEGO Kreatív építőelemek', 4, 221, 7, 5490),
(10777, 'Mickey és Minnie egér kempingezik', 4, 103, 12, 7690),
(10778, 'Mickey, Minnie és Goofy vidámparki szórakozása', 4, 184, 12, 11990),
(10780, 'Mickey és barátai várvédők', 4, 215, 12, 19990),
(10875, 'Tehervonat', 2, 105, 15, 47990),
(10975, 'A nagyvilág vadállatai', 2, 141, 15, 47990),
(10976, 'A Mikulás mézeskalács házikója', 2, 50, 15, 12990),
(11006, 'Kreatív kék kockák', 4, 52, 7, 1990),
(11020, 'Építsetek együtt', 5, 1601, 7, 39990),
(11022, 'Űrbeli küldetés', 5, 1700, 7, 30990),
(11717, 'Elemek, elemek, lapok', 4, 1504, 7, 26990),
(17101, 'Kreatív robotok', 7, 847, 3, 59990),
(21042, 'Szabadság-szobor', 16, 1685, 1, 39990),
(21054, 'Fehér Ház', 18, 1483, 1, 39990),
(21056, 'Taj Mahal', 18, 2022, 1, 44990),
(21057, 'Szingapúr', 18, 1476, 1, 22990),
(21058, 'A gízai nagy piramis', 18, 1476, 1, 55990),
(21161, 'Crafting láda 3.0', 8, 564, 28, 31990),
(21173, 'Az égi torony', 8, 565, 28, 21990),
(21183, 'A gyakorlótér', 8, 534, 28, 24990),
(21187, 'A piros pajta', 9, 799, 28, 39990),
(21188, 'A lámák faluja', 9, 1252, 28, 49990),
(21226, 'Művészeti projekt - Alkossunk együtt!', 7, 4138, 21, 47990),
(21318, 'Lombház', 16, 3036, 19, 92990),
(21327, 'Írógép', 18, 2079, 19, 92990),
(21330, 'Ideas Home Alone', 18, 3960, 19, 114990),
(21335, 'Motorizált világítótorony', 18, 2067, 19, 114990),
(21336, 'The Office', 18, 1164, 19, 45990),
(31058, 'Hatalmas dinoszaurusz', 7, 174, 8, 5690),
(31109, 'Kalózhajó', 9, 1264, 8, 59990),
(31119, 'Óriáskerék', 9, 1002, 8, 35990),
(31122, 'Akvárium', 8, 352, 8, 10990),
(31132, 'Viking hajó és a Midgard kígyó', 9, 1192, 8, 44990),
(31203, 'Világtérkép', 18, 11695, 21, 26990),
(31204, 'Elvis Presley A király', 18, 3445, 21, 47990),
(31205, 'Jim Lee Batman gyűjtemény', 18, 4167, 2, 47990),
(31206, 'The Rolling Stones', 18, 1998, 21, 57990),
(31207, 'Virágművészet', 18, 2870, 21, 26990),
(40341, 'LEGO Education SPIKE Prime kiegészítő készlet', 6, 24, 42, 1390),
(40377, 'Donald kacsa', 10, 90, 11, 3690),
(40378, 'Goofy és Plútó', 10, 214, 11, 5490),
(40391, 'Első rendi rohamosztagos', 8, 151, 38, 5999),
(40431, 'BB-8', 8, 171, 38, 5999),
(40456, 'Mickey egér', 8, 118, 11, 6490),
(40457, 'Minnie egér', 8, 140, 11, 6490),
(40477, 'Dagobert bácsi, Tiki, Niki és Viki', 10, 340, 4, 8990),
(40495, 'Harry, Hermione, Ron és Hagrid', 10, 466, 4, 8990),
(40496, 'Voldemort, Nagini és Bellatrix', 10, 344, 4, 8990),
(40535, 'Vasember', 8, 200, 5, 6490),
(40536, 'Miles Morales', 8, 214, 11, 6490),
(40539, 'Ahsoka Tano', 8, 164, 38, 3690),
(40547, 'Obi-Wan Kenobi és Darth Vader', 10, 260, 38, 7290),
(40548, 'Spice Girls', 16, 578, 4, 17990),
(40549, 'Demogorgon és Eleven', 16, 192, 39, 7290),
(40550, 'Chip és Dale', 10, 226, 4, 7290),
(40560, 'Roxforti tanárok', 10, 601, 4, 14990),
(41166, 'Elza kocsis kalandja', 4, 116, 17, 11990),
(41168, 'Elza ékszerdoboza', 6, 300, 17, 15990),
(41450, 'Heartlake City bevásárlóközpont', 8, 1032, 16, 39990),
(41684, 'Heartlake City Grand Hotel', 8, 1308, 16, 39990),
(41704, 'Fő utcai épület', 8, 1682, 16, 61990),
(41706, 'Friends Adventi naptár', 6, 312, 16, 9390),
(41714, 'Andrea színiiskolája', 8, 1154, 16, 39990),
(41952, 'Nagy üzenőfal', 8, 943, 14, 14990),
(41961, 'Tervezőkészlet - Minták', 8, 1096, 14, 24990),
(41962, 'Egyszarvú kreatív családi készlet', 6, 707, 14, 18990),
(41964, 'Mickey egér és Minnie egér tanévkezdő doboz', 6, 669, 14, 16990),
(42083, 'Bugatti Chiron', 18, 3599, 40, 134990),
(42115, 'Lamborghini Sián FKP 37', 18, 3696, 40, 169990),
(42127, 'BATMAN - BATMOBILE', 10, 1360, 40, 37990),
(42141, 'McLaren Formula 1 versenyautó', 18, 1434, 40, 76990),
(43102, 'Candy Mermaid BeatBox', 7, 71, 41, 6990),
(43103, 'Punk Pirate BeatBox', 7, 73, 41, 6990),
(43105, 'Party Llama BeatBox', 7, 82, 41, 6990),
(43106, 'Unicorn DJ BeatBox', 7, 84, 41, 6990),
(43107, 'HipHop Robot BeatBox', 7, 73, 41, 6990),
(43125, 'Ferrari 488 GTE AF Corse 51', 18, 1684, 40, 76990),
(43204, 'Anna és Olaf kastélybeli mókája', 4, 108, 17, 13990),
(45026, 'Csövek', 3, 150, 23, 59990),
(45028, 'Az én XL LEGO Education világom', 2, 480, 23, 104990),
(45507, 'Academy tanári szett', 10, 1, 27, 7690),
(45609, 'LEGO Technic Small Hub', 6, 2, 23, 81230),
(45612, 'LEGO Technic Small Hub akkumulátor', 6, 1, 23, 25846),
(45681, 'LEGO Education SPIKE Prime kiegészítő készlet', 10, 604, 23, 48990),
(51515, 'Robot feltaláló', 10, 949, 27, 129990),
(60336, 'Tehervonat', 7, 1153, 6, 67990),
(60337, 'Expresszvonat', 7, 764, 6, 61990),
(60339, 'Kaszkadőr aréna dupla hurokkal', 7, 598, 6, 57990),
(60352, 'LEGO City Adventi naptár', 5, 287, 6, 8990),
(71043, 'Roxfort kastély', 16, 6020, 18, 2290),
(71374, 'Nintendo Entertainment System', 18, 2646, 25, 102990),
(71395, 'Super Mario 64 Kérdőjel Kocka', 18, 2064, 25, 76990),
(71405, 'Fuzzy kilövő kiegészítő szett', 6, 154, 25, 9990),
(71410, 'Karaktercsomagok - 5. sorozat', 6, 47, 25, 2290),
(71411, 'A hatalmas Bowser', 18, 2807, 25, 102990),
(71741, 'NINJAGO Városi Lombház', 14, 5705, 32, 129990),
(71755, 'A Végtelen Tenger temploma', 9, 1060, 32, 39990),
(71756, 'Vízi fejvadásze', 9, 1159, 32, 57990),
(71774, 'Lloyd ultra aranysárkánya', 9, 989, 32, 57990),
(71775, 'Nya Szamuráj X robotja', 10, 1003, 32, 44990),
(75317, 'A Mandalori és a Gyermek', 10, 295, 38, 7690),
(75546, 'Minyonok Gru laborjában', 4, 87, 30, 7690),
(75547, 'Minyon pilóta gyakorlaton', 4, 119, 30, 13990),
(75549, 'Megállíthatatlan motoros üldözés', 6, 136, 30, 7990),
(75550, 'Minyonok Kung Fu csatája', 6, 310, 30, 14990),
(75571, 'Neytiri és Thanator az AMP Suit-os Quaritch ellen', 9, 560, 22, 17990),
(75572, 'Jake és Neytiri első Banshee repülése', 9, 572, 22, 8490),
(75573, 'Lebegő sziklák: 26-os helyszín és RDA Samson', 9, 887, 22, 39990),
(75574, 'Toruk Makto és a Lelkek Fája', 12, 1212, 22, 59990),
(75978, 'Az Abszol út', 16, 5544, 18, 169990),
(76161, '1989 Denevérszárny​', 18, 2366, 10, 72990),
(76175, 'Támadás a pókbarlang ellen', 8, 466, 37, 29990),
(76180, 'Batman vs. Joker: Batmobile hajsza', 4, 136, 10, 11990),
(76181, 'Batmobile: Penguin hajsza', 8, 392, 10, 11990),
(76183, 'Batcave: Leszámolás Riddler-rel', 8, 581, 10, 27990),
(76187, 'Venom', 18, 565, 37, 26990),
(76211, 'Shuri madara', 8, 355, 26, 19990),
(76213, 'Namor király trónterme', 7, 355, 26, 13990),
(76214, 'Fekete Párduc: Harc a vízen', 8, 545, 26, 34990),
(76215, 'Fekete Párduc', 18, 2961, 26, 134990),
(76220, 'Batman Harley Quinn ellen', 4, 42, 2, 5990),
(76225, 'Miles Morales figura', 8, 238, 37, 11990),
(76226, 'Pókember figura', 8, 258, 37, 11990),
(76230, 'Venom figura', 8, 297, 37, 11990),
(76231, 'A galaxis őrzői Adventi naptár', 6, 268, 26, 13990),
(76240, 'LEGO DC Batman Batmobile Tumbler', 18, 2049, 10, 102990),
(76389, 'Roxfort Titkok Kamrája', 9, 1187, 18, 59990),
(76404, 'Harry Potter Adventi naptár', 7, 334, 18, 13990),
(76405, 'Roxfort Expressz – Gyűjtői kiadás', 18, 5149, 18, 189990),
(76830, 'Küklopsz üldözés', 4, 87, 13, 7690),
(76831, 'Zurg csatája', 7, 261, 13, 12990),
(76832, 'XL-15 űrhajó', 8, 497, 13, 19990),
(76903, 'Chevrolet Corvette C8.R Race Car és 1969 Chevrolet Corvette', 8, 512, 36, 14990),
(76904, 'Mopar Dodge//SRT Top Fuel Dragster és 1970 Dodge Challenger T/A', 8, 627, 36, 23990),
(76909, 'Mercedes-AMG F1 W12 E Performance y Mercedes-AMG Project One', 9, 564, 36, 17990),
(76910, 'Aston Martin Valkyrie AMR Pro és Aston Martin Vantage GT3', 9, 592, 36, 17990),
(76911, '007 Aston Martin DB5', 8, 298, 36, 9490),
(76942, 'Baryonyx dinoszaurusz szökés csónakon', 8, 308, 20, 29990),
(76948, 'T-Rex és Atrociraptor dinoszaurusz szökése', 8, 466, 20, 39990),
(76949, 'Giganotosaurus és therizinosaurus támadás', 9, 810, 20, 55990),
(76951, 'Pyroraptor és Dilophosaurus szállítás', 7, 254, 20, 19990),
(76956, 'T. rex szökése', 18, 1212, 20, 39990),
(80013, 'Monkie Kid csapatának titkos főhadiszállása', 10, 1959, 31, 64990),
(80039, 'Mennyei birodalmak', 10, 2433, 31, 69990),
(88006, 'Move Hub', 7, 1, 34, 30990),
(88012, 'Technic club', 7, 1, 34, 31990),
(88014, 'Technic XL motor', 7, 1, 34, 13990),
(88018, 'Közepes, szögletes motor', 7, 1, 34, 10990),
(88023, 'Monkie Kid csapatának drónkoptere', 10, 1462, 31, 51990),
(88024, 'A legendás Virággyümölcs-hegy', 10, 1949, 31, 64990),
(88036, 'A lámpások városa', 9, 2187, 31, 54990),
(853968, 'Disney Frozen 2 Elsa Kulcstartó', 6, 1, 17, 2290),
(853970, 'Disney Jégvarázs 2. Olaf kulcstartó', 6, 1, 17, 2290),
(854065, 'Ragasztható vízszalag', 6, 23, 42, 2990),
(854071, 'Stuart kulcstartó', 6, 46, 30, 2290),
(854197, 'Demogorgon kulcstartó', 6, 46, 39, 2290),
(2000409, 'Alapkészlet', 6, 5100, 35, 129990),
(2000414, 'Starter Kit', 6, 234, 35, 8990),
(2000430, 'Alapkészlet', 6, 2808, 35, 259990),
(2000431, 'Alapkészlet', 6, 2455, 35, 209990),
(5007555, 'Pingvinjelmezes fiú plüss', 2, 1, 29, 8490),
(5007557, 'Cápajelmezes fiú plüss', 2, 1, 29, 8490),
(5007558, 'Rókajelmezes lány plüss', 2, 1, 29, 8490),
(5007565, 'Hot dog jelmezes fiú plüss', 2, 1, 29, 8490),
(5007566, 'Banánjelmezes fiú plüss', 2, 1, 29, 8490);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bolt`
--
ALTER TABLE `bolt`
  ADD PRIMARY KEY (`boltID`);

--
-- Indexes for table `kaphato`
--
ALTER TABLE `kaphato`
  ADD KEY `boltID_2` (`boltID`),
  ADD KEY `cikkszam_2` (`cikkszam`);

--
-- Indexes for table `raktar`
--
ALTER TABLE `raktar`
  ADD PRIMARY KEY (`raktarnev`);

--
-- Indexes for table `tarol`
--
ALTER TABLE `tarol`
  ADD KEY `raktarnev_2` (`raktarnev`),
  ADD KEY `cikkszam_2` (`cikkszam`);

--
-- Indexes for table `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`temaID`);

--
-- Indexes for table `termek`
--
ALTER TABLE `termek`
  ADD PRIMARY KEY (`cikkszam`),
  ADD KEY `temaID` (`temaID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bolt`
--
ALTER TABLE `bolt`
  MODIFY `boltID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tema`
--
ALTER TABLE `tema`
  MODIFY `temaID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kaphato`
--
ALTER TABLE `kaphato`
  ADD CONSTRAINT `kaphato_boltID` FOREIGN KEY (`boltID`) REFERENCES `bolt` (`boltID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `kaphato_cikkszam` FOREIGN KEY (`cikkszam`) REFERENCES `termek` (`cikkszam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tarol`
--
ALTER TABLE `tarol`
  ADD CONSTRAINT `tarol_cikkszam` FOREIGN KEY (`cikkszam`) REFERENCES `termek` (`cikkszam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tarol_raktarnev` FOREIGN KEY (`raktarnev`) REFERENCES `raktar` (`raktarnev`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `termek`
--
ALTER TABLE `termek`
  ADD CONSTRAINT `termek_tenaID` FOREIGN KEY (`temaID`) REFERENCES `tema` (`temaID`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
