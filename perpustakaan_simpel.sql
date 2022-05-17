-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for perpustakaan_simpel
CREATE DATABASE IF NOT EXISTS `perpustakaan_simpel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `perpustakaan_simpel`;

-- Dumping structure for table perpustakaan_simpel.buku
CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `stok` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table perpustakaan_simpel.buku: ~4 rows (approximately)
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT IGNORE INTO `buku` (`id`, `judul`, `kategori`, `keterangan`, `stok`) VALUES
	(1, 'Belajar PHP Asik', 'pemrograman', 'buku php anjime', 10),
	(14, 'Mengenal Arthuria Pendragon', 'sejarah', 'arturia penfragooonnn uwwooooggghhhh seee', 10),
	(16, 'belajar piano Asik', 'musik', 'buku yan bikin anda berhasil menjadi kaori anjime', 10),
	(17, 'Mengenal Floss anjimwe', 'Komputer', 'sofware yang floss adalah jayaa', 69);
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
