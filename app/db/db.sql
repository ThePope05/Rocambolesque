-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                10.4.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Versie:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Databasestructuur van rocambolesque wordt geschreven
CREATE DATABASE IF NOT EXISTS `rocambolesque` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `rocambolesque`;

-- Structuur van  tabel rocambolesque.reservation wordt geschreven
CREATE TABLE IF NOT EXISTS `reservation` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `AmountOfPeople` int(11) NOT NULL,
  `AmountOfChildren` int(11) NOT NULL,
  `ReservationTime` datetime NOT NULL,
  `Comment` longtext DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumpen data van tabel rocambolesque.reservation: 0 rows
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;

-- Structuur van  tabel rocambolesque.userreservation wordt geschreven
CREATE TABLE IF NOT EXISTS `userreservation` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` tinyint(4) NOT NULL,
  `Reservation` tinyint(4) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `userid` (`UserId`),
  UNIQUE KEY `reservation` (`Reservation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumpen data van tabel rocambolesque.userreservation: 0 rows
/*!40000 ALTER TABLE `userreservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `userreservation` ENABLE KEYS */;

-- Structuur van  tabel rocambolesque.users wordt geschreven
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Password` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Number` varchar(12) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Number` (`Number`) USING BTREE,
  UNIQUE KEY `Email` (`Email`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumpen data van tabel rocambolesque.users: 0 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
