-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.27-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para pokemon_app
CREATE DATABASE IF NOT EXISTS `pokemon_app` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `pokemon_app`;

-- Volcando estructura para tabla pokemon_app.pokemon_favorites
CREATE TABLE IF NOT EXISTS `pokemon_favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pokemon_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `pokemon_id` (`pokemon_id`),
  CONSTRAINT `pokemon_id` FOREIGN KEY (`pokemon_id`) REFERENCES `pokemon_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla pokemon_app.pokemon_favorites: ~0 rows (aproximadamente)

-- Volcando estructura para tabla pokemon_app.pokemon_list
CREATE TABLE IF NOT EXISTS `pokemon_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pkdex_num` char(11) NOT NULL DEFAULT '0',
  `name` char(50) NOT NULL,
  `type` char(50) NOT NULL,
  `region` char(50) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla pokemon_app.pokemon_list: ~45 rows (aproximadamente)
INSERT INTO `pokemon_list` (`id`, `pkdex_num`, `name`, `type`, `region`) VALUES
	(1, '001', 'Bulbasaur', 'Grass - Poison', 'Kanto'),
	(2, '002', 'Ivysaur', 'Grass - Poison', 'Kanto'),
	(3, '003', 'Venusaur', 'Grass - Poison', 'Kanto'),
	(4, '004', 'Charmander', 'Fire', 'Kanto'),
	(5, '005', 'Charmeleon', 'Fire', 'Kanto'),
	(6, '006', 'Charizard', 'Fire', 'Kanto'),
	(7, '007', 'Squirtle', 'Water', 'Kanto'),
	(8, '008', 'Wartortle', 'Water', 'Kanto'),
	(9, '009', 'Blastoise', 'Water', 'Kanto'),
	(10, '010', 'Caterpie', 'Bug', 'Kanto'),
	(11, '011', 'Metapod', 'Bug', 'Kanto'),
	(12, '012', 'Butterfree', 'Bug - Flying', 'Kanto'),
	(13, '013', 'Weedle', 'Bug - Poison', 'Kanto'),
	(14, '014', 'Kakuna', 'Bug - Poison', 'Kanto'),
	(15, '015', 'Beedrill', 'Bug - Poison', 'Kanto'),
	(16, '016', 'Pidgey', 'Normal - Flying', 'Kanto'),
	(17, '017', 'Pidgeotto', 'Normal - Flying', 'Kanto'),
	(18, '018', 'Pidgeot', 'Normal - Flying', 'Kanto'),
	(19, '019', 'Rattata', 'Normal', 'Kanto'),
	(20, '020', 'Raticate', 'Normal', 'Kanto'),
	(21, '021', 'Spearow', 'Normal - Flying', 'Kanto'),
	(22, '022', '	Fearow', 'Normal - Flying', 'Kanto'),
	(23, '023', 'Ekans', 'Poison', 'Kanto'),
	(24, '024', 'Arbok', 'Poison', 'Kanto'),
	(25, '025', 'Pikachu', 'Electric', 'Kanto'),
	(26, '026', 'Raichu', 'Electric', 'Kanto'),
	(28, '027', 'Sandshrew', 'Ground', 'Kanto'),
	(29, '028', 'Sandslash', 'Ground', 'Kanto'),
	(30, '029', 'Nidoran♀', 'Poison', 'Kanto'),
	(31, '030', 'Nidorina', 'Poison', 'Kanto'),
	(32, '031', '	Nidoqueen', 'Poison - Ground', 'Kanto'),
	(33, '032', 'Nidoran♂', 'Poison', 'Kanto'),
	(34, '033', 'Nidorino	', 'Poison', 'Kanto'),
	(35, '034', 'Nidoking', 'Poison - Ground', 'Kanto'),
	(36, '035', 'Clefairy', 'Fairy', 'Kanto'),
	(37, '036', 'Clefable	', 'Fairy', 'Kanto'),
	(38, '037', 'Vulpix', 'Fire', 'Kanto'),
	(39, '038', '	Ninetales	', 'Fire', 'Kanto'),
	(40, '039', '	Jigglypuff', 'Normal - Fairy', 'Kanto'),
	(41, '040', 'Wigglytuff', 'Normal - Fairy', 'Kanto'),
	(42, '041', 'Zubat', 'Poison - Flying', 'Kanto'),
	(43, '042', '	Golbat', 'Poison - Flying', 'Kanto'),
	(44, '043', '	Oddish', 'Grass - Poison', 'Kanto'),
	(45, '044', 'Gloom', 'Grass - Poison', 'Kanto'),
	(46, '045', '	Vileplume', 'Grass - Poison', 'Kanto');

-- Volcando estructura para tabla pokemon_app.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(100) NOT NULL,
  `password` char(150) NOT NULL,
  `email` char(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla pokemon_app.users: ~1 rows (aproximadamente)
INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
	(1, 'user1', 'password', 'email@email.com');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
