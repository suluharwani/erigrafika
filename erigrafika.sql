-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for erigrafika
CREATE DATABASE IF NOT EXISTS `erigrafika` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `erigrafika`;

-- Dumping structure for table erigrafika.about_us
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(500) NOT NULL DEFAULT '0',
  `username` varchar(500) NOT NULL DEFAULT '0',
  `foto` varchar(500) NOT NULL DEFAULT '0',
  `password` varchar(500) NOT NULL DEFAULT '0',
  `level` varchar(500) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(500) NOT NULL DEFAULT '0',
  `logo` varchar(500) NOT NULL DEFAULT '0',
  `contact` varchar(500) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.contact_admin
CREATE TABLE IF NOT EXISTS `contact_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_telepon` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.contact_us
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contact` int(11) NOT NULL DEFAULT '0',
  `alamat` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `telepon` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.data_admin
CREATE TABLE IF NOT EXISTS `data_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.email_pengunjung
CREATE TABLE IF NOT EXISTS `email_pengunjung` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.icon
CREATE TABLE IF NOT EXISTS `icon` (
  `id` int(11) DEFAULT NULL,
  `icons_icon_tags` varchar(25) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.logo
CREATE TABLE IF NOT EXISTS `logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(500) DEFAULT NULL,
  `thumb` varchar(500) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.pengunjung
CREATE TABLE IF NOT EXISTS `pengunjung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(50) NOT NULL DEFAULT '0',
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.portofolio
CREATE TABLE IF NOT EXISTS `portofolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(500) NOT NULL DEFAULT '0',
  `gambar` varchar(500) NOT NULL DEFAULT '0',
  `thumb` varchar(500) NOT NULL DEFAULT '0',
  `isi` varchar(500) NOT NULL DEFAULT '0',
  `tanggal` varchar(500) NOT NULL DEFAULT '0',
  `id_admin` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.post
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meta` varchar(500) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `isi` varchar(500) DEFAULT NULL,
  `gambar` varchar(500) DEFAULT NULL,
  `thumb` varchar(500) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.review
CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL DEFAULT '0',
  `organisasi` varchar(100) NOT NULL DEFAULT '0',
  `review` varchar(500) NOT NULL DEFAULT '0',
  `foto` varchar(500) NOT NULL DEFAULT '0',
  `thumb` varchar(500) NOT NULL DEFAULT '0',
  `star` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.video_depan
CREATE TABLE IF NOT EXISTS `video_depan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(500) NOT NULL DEFAULT '0',
  `foto` varchar(500) NOT NULL DEFAULT '0',
  `link_video` varchar(500) NOT NULL DEFAULT '0',
  `keterangan` varchar(5000) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.web_info
CREATE TABLE IF NOT EXISTS `web_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_web` varchar(500) NOT NULL DEFAULT '0',
  `alamat` varchar(500) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.web_slider
CREATE TABLE IF NOT EXISTS `web_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `keterangan` varchar(5000) NOT NULL,
  `tanggal` date NOT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table erigrafika.web_video
CREATE TABLE IF NOT EXISTS `web_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(500) NOT NULL DEFAULT '0',
  `keterangan` varchar(500) NOT NULL DEFAULT '0',
  `gambar` varchar(500) NOT NULL DEFAULT '0',
  `link_video` varchar(500) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
