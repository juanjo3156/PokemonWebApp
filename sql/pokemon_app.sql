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

-- Volcando estructura para tabla pokemon_app.pokemon_list
CREATE TABLE IF NOT EXISTS `pokemon_list` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pkdex_num` char(11) NOT NULL DEFAULT '0',
  `name` char(50) NOT NULL,
  `type` char(50) NOT NULL,
  `region` char(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla pokemon_app.pokemon_list: ~26 rows (aproximadamente)
INSERT INTO `pokemon_list` (`ID`, `pkdex_num`, `name`, `type`, `region`) VALUES
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
	(26, '026', 'Raichu', 'Electric', 'Kanto');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
