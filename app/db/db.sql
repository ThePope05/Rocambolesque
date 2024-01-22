-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                8.0.31 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Versie:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

drop database rocambolesque;
create database rocambolesque;

use rocambolesque;

-- Structuur van  tabel rocambolesque.reservations wordt geschreven
CREATE TABLE IF NOT EXISTS `reservations` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `AmountOfPeople` int NOT NULL,
  `AmountOfChildren` int NOT NULL,
  `ReservationTime` datetime NOT NULL,
  `Comment` longtext,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Data exporteren was gedeselecteerd

-- Structuur van  tabel rocambolesque.users wordt geschreven
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Password` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Number` varchar(12) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Number` (`Number`) USING BTREE,
  UNIQUE KEY `Email` (`Email`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `categorys` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `foods` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Description` longtext NOT NULL,
  `CategoryId` int NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `CategoryId` (`CategoryId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Data exporteren was gedeselecteerd
-- insert example data
INSERT INTO `users` (`Id`, `Password`, `Email`, `Number`, `Firstname`, `Lastname`) VALUES
  (1, '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'example@mboutrecht.nl', '0612345678', 'admin', 'admin');

INSERT INTO `categorys` (`Id`, `Name`) VALUES
  (1, 'Voorgerecht'),
  (2, 'Hoofdgerecht'),
  (3, 'Nagerecht'),
  (4, 'Kinder menu');

INSERT INTO `foods` (`Name`, `Description`, `CategoryId`) VALUES
  ("Soupe à l'Oignon Gratinee", 'Traditionele uiensoep, gegarneerd met gegratineerde kaas en stokbrood.', 1),
  ("Salade de Chèvre Chaud", "Warme geitenkaassalade met honing, noten en frambozendressing", 1),
  ("Coquilles Saint-Jacques", 'Gebakken sint-jakobsschelpen met een saus van boter en witte wijn', 1),
  ('Escargots de Bourgogne', 'Slakken bereid met knoflookboter en peterselie', 1),
  ('Coq au Vin', 'Traditioneel Frans gerecht van gestoofde kip in rode wijn', 2),
  ('Bouillabaisse', 'Traditionele Provençaalse vissoep met diverse vissoorten', 3),
  ('Croque Monsieur', 'Gegrilde ham en kaas sandwich, belegd met béchamelsaus en gegratineerd', 4),
  ('Ratatouille', 'Gestoofde groenten zoals courgette, aubergine, paprika en tomaat', 2),
  ('Crème Brûlée', 'Romig vanille dessert met een gekarameliseerde suikerlaag', 3),
  ('Tarte Tatin', 'Omgekeerde appeltaart met gekarameliseerde appels', 4),
  ('Moules Marinières', 'Gekookte mosselen in witte wijn met ui, knoflook en peterselie', 1),
  ('Quiche Lorraine', 'Hartige taart met spek, kaas en ui', 2);

  

  

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
