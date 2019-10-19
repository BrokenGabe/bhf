-- --------------------------------------------------------
-- Host:                         10.0.0.4
-- Server version:               5.7.18-0ubuntu0.16.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             9.4.0.5174
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for butthurtform
CREATE DATABASE IF NOT EXISTS `butthurtform` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `butthurtform`;

-- Dumping structure for table butthurtform.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `uid` int(4) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Data exporting was unselected.
-- Dumping structure for table butthurtform.data
CREATE TABLE IF NOT EXISTS `data` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `emotions` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `cause` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `causeo` text COLLATE utf8mb4_bin,
  `quell0` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `quell1` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `quell2` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `ip` varchar(16) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
