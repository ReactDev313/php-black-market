-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for EbU84PYSiv
CREATE DATABASE IF NOT EXISTS `EbU84PYSiv` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `EbU84PYSiv`;

-- Dumping structure for table EbU84PYSiv.items
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `IP` varchar(64) CHARACTER SET utf8 DEFAULT '',
  `user_name` varchar(128) CHARACTER SET utf8 DEFAULT '',
  `pwd` varchar(128) CHARACTER SET utf8 DEFAULT '',
  `price` varchar(128) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COMMENT='Items table';

-- Dumping data for table EbU84PYSiv.items: ~4 rows (approximately)
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
REPLACE INTO `items` (`id`, `IP`, `user_name`, `pwd`, `price`) VALUES
	(8, '10.10.10.10', 'asdf', 'adf', '123'),
	(20, '10.10.10.10', 'aaa@gamil.com', 'aaa123', '120'),
	(21, '10.10.10.11', 'aaa1@gamil.com', 'aaa1231', '0'),
	(22, '10.10.10.12', 'aaa2@gamil.com', 'aaa1232', '0');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

-- Dumping structure for table EbU84PYSiv.purchase
CREATE TABLE IF NOT EXISTS `purchase` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `item_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table EbU84PYSiv.purchase: ~2 rows (approximately)
/*!40000 ALTER TABLE `purchase` DISABLE KEYS */;
REPLACE INTO `purchase` (`id`, `user_id`, `item_id`) VALUES
	(12, 1, 8),
	(13, 1, 8);
/*!40000 ALTER TABLE `purchase` ENABLE KEYS */;

-- Dumping structure for table EbU84PYSiv.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `hashed_password` varchar(255) NOT NULL DEFAULT '',
  `role` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0: admin 1: user',
  `balance` double NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COMMENT='users table';

-- Dumping data for table EbU84PYSiv.users: ~6 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `email`, `username`, `hashed_password`, `role`, `balance`) VALUES
	(1, 'admin@hotmail.com', 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 0, 0),
	(2, 'admin1@hotmail.com', 'admin1@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1, 0),
	(3, 'admin3@hotmail.com', 'admin3@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1, 0),
	(4, 'admin4@hotmail.com', 'admin4@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1, 0),
	(5, 'admin5@hotmail.com', 'admin5@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1, 0),
	(6, 'admin11@hotmail.com', 'admin11@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1, 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
