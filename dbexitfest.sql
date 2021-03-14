-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2019 at 01:08 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbexitfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `images2017`
--

DROP TABLE IF EXISTS `images2017`;
CREATE TABLE IF NOT EXISTS `images2017` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `path` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `images2017`
--

INSERT INTO `images2017` (`id`, `name`, `path`) VALUES
(1, 'img1', 'images-gallery\\2017\\img (1).jpg'),
(2, 'img2', 'images-gallery\\2017\\img (2).jpg'),
(3, 'img3', 'images-gallery\\2017\\img (3).jpg'),
(4, 'img4', 'images-gallery\\2017\\img (4).jpg'),
(5, 'img5', 'images-gallery\\2017\\img (5).jpg'),
(6, 'img6', 'images-gallery\\2017\\img (6).jpg'),
(7, 'img7', 'images-gallery\\2017\\img (7).jpg'),
(8, 'img8', 'images-gallery\\2017\\img (8).jpg'),
(9, 'img9', 'images-gallery\\2017\\img (9).jpg'),
(10, 'img10', 'images-gallery\\2017\\img (10).jpg'),
(11, 'img11', 'images-gallery\\2017\\img (11).jpg'),
(12, 'img12', 'images-gallery\\2017\\img (12).jpg'),
(13, 'img13', 'images-gallery\\2017\\img (13).jpg'),
(14, 'img14', 'images-gallery\\2017\\img (14).jpg'),
(15, 'img15', 'images-gallery\\2017\\img (15).jpg'),
(16, 'img16', 'images-gallery\\2017\\img (16).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images2018`
--

DROP TABLE IF EXISTS `images2018`;
CREATE TABLE IF NOT EXISTS `images2018` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `path` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `images2018`
--

INSERT INTO `images2018` (`id`, `name`, `path`) VALUES
(1, 'img1', 'images-gallery\\2018\\img (1).jpg'),
(2, 'img2', 'images-gallery\\2018\\img (2).jpg'),
(3, 'img3', 'images-gallery\\2018\\img (3).jpg'),
(4, 'img4', 'images-gallery\\2018\\img (4).jpg'),
(5, 'img5', 'images-gallery\\2018\\img (5).jpg'),
(6, 'img6', 'images-gallery\\2018\\img (6).jpg'),
(7, 'img7', 'images-gallery\\2018\\img (7).jpg'),
(8, 'img8', 'images-gallery\\2018\\img (8).jpg'),
(9, 'img9', 'images-gallery\\2018\\img (9).jpg'),
(10, 'img10', 'images-gallery\\2018\\img (10).jpg'),
(11, 'img11', 'images-gallery\\2018\\img (11).jpg'),
(12, 'img12', 'images-gallery\\2018\\img (12).jpg'),
(13, 'img13', 'images-gallery\\2018\\img (13).jpg'),
(14, 'img14', 'images-gallery\\2018\\img (14).jpg'),
(15, 'img15', 'images-gallery\\2018\\img (15).jpg'),
(16, 'img16', 'images-gallery\\2018\\img (16).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images2019`
--

DROP TABLE IF EXISTS `images2019`;
CREATE TABLE IF NOT EXISTS `images2019` (
  `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `path` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `images2019`
--

INSERT INTO `images2019` (`id`, `name`, `path`) VALUES
(1, 'img1', 'images-gallery\\2019\\img (1).jpg'),
(2, 'img2', 'images-gallery\\2019\\img (2).jpg'),
(3, 'img3', 'images-gallery\\2019\\img (3).jpg'),
(4, 'img4', 'images-gallery\\2019\\img (4).jpg'),
(5, 'img5', 'images-gallery\\2019\\img (5).jpg'),
(6, 'img6', 'images-gallery\\2019\\img (6).jpg'),
(7, 'img7', 'images-gallery\\2019\\img (7).jpg'),
(8, 'img8', 'images-gallery\\2019\\img (8).jpg'),
(9, 'img9', 'images-gallery\\2019\\img (9).jpg'),
(10, 'img10', 'images-gallery\\2019\\img (10).jpg'),
(11, 'img11', 'images-gallery\\2019\\img (11).jpg'),
(12, 'img12', 'images-gallery\\2019\\img (12).jpg'),
(13, 'img13', 'images-gallery\\2019\\img (13).jpg'),
(14, 'img14', 'images-gallery\\2019\\img (14).jpg'),
(15, 'img15', 'images-gallery\\2019\\img (15).jpg'),
(16, 'img16', 'images-gallery\\2019\\img (16).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

DROP TABLE IF EXISTS `privacy_policy`;
CREATE TABLE IF NOT EXISTS `privacy_policy` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(300) COLLATE utf8_bin NOT NULL,
  `file` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`id`, `name`, `file`) VALUES
(1, 'Public Data\r\n', 'text\\public data.txt'),
(2, 'Personal Data\r\n', 'text\\personal data.txt'),
(3, 'Data Processing\r\n', 'text\\data processing.txt'),
(4, 'Security and Data Storage\r\n', 'text\\security and data storage.txt'),
(5, 'Information About Visits\r\n', 'text\\information about visits.txt'),
(6, 'Your Rights\r\n', 'text\\your rights.txt');

-- --------------------------------------------------------

--
-- Table structure for table `stages`
--

DROP TABLE IF EXISTS `stages`;
CREATE TABLE IF NOT EXISTS `stages` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(300) COLLATE utf8_bin NOT NULL,
  `imgfile` text COLLATE utf8_bin NOT NULL,
  `txtfile` text COLLATE utf8_bin NOT NULL,
  `logofile` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `stages`
--

INSERT INTO `stages` (`id`, `name`, `imgfile`, `txtfile`, `logofile`) VALUES
(1, 'Main Stage', 'images\\01_Main-Stage.jpg', 'text\\01_Main-Stage.txt', 'logos\\01_main-stage-logo.svg'),
(2, 'mts Dance Arena', 'images\\02_Dance-Arena.jpg', 'text\\02_mts-Dance-Arena.txt', 'logos\\02_dance-arena-logo.svg'),
(3, 'Addiko Fusion Stage', 'images\\03_Addiko-Fusion.jpg', 'text\\03_Addiko-Fusion-Stage.txt', 'logos\\03_addiko-fusion-stage-logo.svg'),
(4, 'Explosive Stage', 'images\\04_Explosive-Stage.jpg', 'text\\04_Explosive-Stage.txt', 'logos\\04_explosive-stage-logo.svg'),
(5, 'No Sleep Novi Sad', 'images\\05_No-Sleep-Novi-Sad.jpg', 'text\\05_No-Sleep-Novi-Sad.txt', 'logos\\05_nsns-stage-logo.svg'),
(6, 'Cocta Beats', 'images\\06_Cockta-Beats.jpg', 'text\\06_Cocta-Beats.txt', 'logos\\06_cockta-bab-stage-logo.svg'),
(7, 'X-Bass Pit', 'images\\07_X-Bass-Pit.jpg', 'text\\07_(X-Bass)-Pit.txt', 'logos\\07_X-bass-pit-stage-logo.png'),
(8, 'Wenti Wadada Positive Reggae powered by NOIZZ', 'images\\08_WWPR-powered-by-NOIZZ.jpg', 'text\\08_Wenti-Wadada-Positive-Reggae-powered-by-NOIZZ.txt', 'logos\\08_wwr-stage-logo.png'),
(9, 'Gaia Experiment Trance Stage', 'images\\09_Gaia-eXperiment-Trance-Stage.jpg', 'text\\09_Gaia-Experiment-Trance-Stage.txt', 'logos\\09_gaia-stage-logo.png'),
(10, 'Aqua Viva Latino Stage', 'images\\10_Aqua-Viva-Latino.jpg', 'text\\10_Aqua-Viva-Latino-Stage.txt', 'logos\\10_aqua-viva-stage-logo.png'),
(11, 'Urban Bug Stage', 'images\\11_Urban-Bug.jpg', 'text\\11_Urban-Bug-Stage.txt', 'logos\\11_urban-bug-stage-logo.svg'),
(12, 'AS FM Stage powered by Guarana', 'images\\12_AS-FM-Stage-powered-by-Guarana.jpg', 'text\\12_AS-FM-Stage-powered-by-Guarana.txt', 'logos\\12_as-fm-stage-logo.svg'),
(13, 'Silent Disco Stage', 'images\\13_Silent-Disco.jpg', 'text\\13_Silent-Disco-Stage.txt', 'logos\\13_silent-disco-stage-logo.svg'),
(14, 'Chipsy Disco Zone', 'images\\14_Chipsy-Disko-Zone.jpg', 'text\\14_Chipsy-Disco-Zone.txt', 'logos\\14_chipsy-disko-zone-stage-logo.png'),
(15, 'Pachamama World Chill-Inn', 'images\\15_Pachamama-World-Chill-Inn.jpg', 'text\\15_Pachamama-World-(Chill-Inn).txt', 'logos\\15_pachamama-chillin-stage-logo.svg'),
(16, 'Craft Street', 'images\\16_Craft-Street.jpg', 'text\\16_Craft-Street.txt', 'logos\\16_craft-street-stage-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `terms_of_use`
--

DROP TABLE IF EXISTS `terms_of_use`;
CREATE TABLE IF NOT EXISTS `terms_of_use` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(300) COLLATE utf8_bin NOT NULL,
  `file` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `terms_of_use`
--

INSERT INTO `terms_of_use` (`id`, `name`, `file`) VALUES
(1, 'Terms and Conditions of Information', 'text\\terms and conditions of information.txt'),
(2, 'Content Ownership', 'text\\content ownership.txt'),
(3, 'Website Disclaimer\r\n', 'text\\website disclaimer.txt'),
(4, 'Outbound Links', 'text\\outbound links.txt'),
(5, 'Privacy', 'text\\privacy.txt'),
(6, 'Access Limitation', 'text\\access limitation.txt'),
(7, 'Terms and Conditions Updates\r\n', 'text\\terms and conditions updates.txt');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Table structure for table `lineup2019`
--

DROP TABLE IF EXISTS `lineup2019`;
CREATE TABLE IF NOT EXISTS `lineup2019` (
  `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `path` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lineup2019`
--

INSERT INTO `lineup2019` (`id`, `name`, `path`) VALUES
(1, 'img1', 'images-gallery\\2019\\img1.jpg'),
(2, 'THE CURE', 'https://en.wikipedia.org/wiki/The_Cure'),
(3, 'img3', 'https://www.youtube.com/watch?v=9GkVhgIeGJQ&list=RDEMLUGe1lzhB7MnQLLEheFTww&start_radio=1'),
(4, 'img4', 'images-gallery\\2019\\img2.jpg'),
(5, 'DIMITRIVEGAS & LIKE MIKE', 'https://en.wikipedia.org/wiki/Dimitri_Vegas_%26_Like_Mike'),
(6, 'img6', 'https://www.youtube.com/watch?v=t4GnkulQOKA&list=RDEME6TkmkezEOsfEiugskh1iA&start_radio=1'),
(7, 'img7', 'images-gallery\\2019\\img3.jpg'),
(8, 'GRETA VAN FLEET', 'https://en.wikipedia.org/wiki/Greta_Van_Fleet'),
(9, 'img9', 'https://www.youtube.com/watch?v=aJg4OJxp-co&list=RDEMlMVb9rw7BIxGRZt7EmOHWw&start_radio=1'),
(10, 'img10', 'images-gallery\\2019\\img4.jpg'),
(11, 'TOM WALKER', 'https://en.wikipedia.org/wiki/Tom_Walker_(singer)'),
(12, 'img12', 'https://www.youtube.com/watch?v=nqnkBdExjws&list=RDEMKKGc44MzRWIKvzw0SVOiww&start_radio=1'),
(13, 'img13', 'images-gallery\\2019\\img5.jpg'),
(14, 'PAUL KALKVRENNER', 'https://en.wikipedia.org/wiki/Paul_Kalkbrenner'),
(15, 'img15', 'https://www.youtubew0SVOww&start_radio=1'),
(16, 'img16', 'images-gallery\\2019\\img6.jpg'),
(17, 'CARL COX', 'https://en.wikipedia.org/wiki/Carl_Cox'),
(18, 'img18', 'https://www.youtubew0SVOww&start_radio=1'),
(19, 'img19', 'images-gallery\\2019\\img7.jpg'),
(20, 'LOST FREQUENCIES', 'https://lostfrequencies.com/'),
(21, 'img21', 'https://www.youtubew0SVOww&start_radio=1'),
(22, 'img22', 'images-gallery\\2019\\img8.jpg'),
(23, 'AMELIE LENS', 'https://en.wikipedia.org/wiki/Amelie_Lens'),
(24, 'img24', 'https://www.youtubew0SVOww&start_radio=1');
-- --------------------------------------------------------

--
-- Table structure for table `lineup2018`
--

DROP TABLE IF EXISTS `lineup2018`;
CREATE TABLE IF NOT EXISTS `lineup2018` (
  `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `path` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lineup2018`
--

INSERT INTO `lineup2018` (`id`, `name`, `path`) VALUES
(1, 'img1', 'images-gallery\\2018\\img1.jpg'),
(2, 'ZIGGY MARLEY', 'https://en.wikipedia.org/wiki/Ziggy_Marley'),
(3, 'img3', 'https://www.youtube.com/'),
(4, 'img4', 'images-gallery\\2018\\img2.jpg'),
(5, 'ALICE MERTON', 'https://www.alicemerton.com/'),
(6, 'img6', 'https://www.youtube.comsfEiugskh1iA&start_radio=1'),
(7, 'img7', 'images-gallery\\2018\\img3.jpg'),
(8, 'MACEO PLEX', 'https://en.wikipedia.org/wiki/Maceo_Plex'),
(9, 'img9', 'https://www.youtube.com/watch?v=aJg4OJxp-co&list=RDEMlM7EmOHWw&start_radio=1'),
(10, 'img10', 'images-gallery\\2018\\img4.jpg'),
(11, 'NINA KRAVICZ', 'https://en.wikipedia.org/wiki/Nina_Kraviz'),
(12, 'img12', 'https://www.youtube.com/watch?v=nqnkBdExjws&list=RDEMKKGc44MzRWIKvzw0SVOiww&start_radio=1'),
(13, 'img13', 'images-gallery\\2018\\img5.jpg'),
(14, 'JAX JONES', 'https://www.jaxjones.co.uk/'),
(15, 'img15', 'https://www.youtubew0SVOww&start_radio=1'),
(16, 'img16', 'images-gallery\\2018\\img6.jpg'),
(17, 'MAHMUT ORHAN', 'https://en.wikipedia.org/wiki/Mahmut_Orhan'),
(18, 'img18', 'https://www.youtubew0SVOww&start_radio=1'),
(19, 'img19', 'images-gallery\\2018\\img7.jpg'),
(20, 'OFENBACH', 'http://www.weareofenbach.com/'),
(21, 'img21', 'https://www.youtubew0SVOww&start_radio=1'),
(22, 'img22', 'images-gallery\\2018\\img8.jpg'),
(23, 'RICHIE HAWTIN', 'https://www.richiehawtin.com/'),
(24, 'img24', 'https://www.youtubew0SVOww&start_radio=1');
-- --------------------------------------------------------

--
-- Table structure for table `lineup2020`
--

DROP TABLE IF EXISTS `lineup2020`;
CREATE TABLE IF NOT EXISTS `lineup2020` (
  `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `path` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lineup2020`
--

INSERT INTO `lineup2020` (`id`, `name`, `path`) VALUES
(1, 'img1', 'images-gallery\\2020\\img1.jpg'),
(2, 'DAVID GUETTA', 'https://en.wikipedia.org/wiki/David_Guetta'),
(3, 'img3', 'https://www.youtube.com/'),
(4, 'img4', 'images-gallery\\2020\\img2.jpg'),
(5, 'JAMES ARTHUR', 'https://en.wikipedia.org/wiki/James_Arthur'),
(6, 'img6', 'https://www.youtube.comsfEiugskh1iA&start_radio=1'),
(7, 'img7', 'images-gallery\\2020\\img3.jpg'),
(8, 'TYGA', 'https://en.wikipedia.org/wiki/Tyga'),
(9, 'img9', 'https://www.youtube.com/watch?v=aJg4OJxp-co&list=RDEMlM7EmOHWw&start_radio=1'),
(10, 'img10', 'images-gallery\\2020\\img4.jpg'),
(11, 'MEDUZA', 'https://en.wikipedia.org/wiki/Meduza_(producers)'),
(12, 'img12', 'https://www.youtube.com/watch?v=nqnkBdExjws&list=RDEMKKGc44MzRWIKvzw0SVOiww&start_radio=1'),
(13, 'img13', 'images-gallery\\2020\\img5.jpg'),
(14, 'ZHU', 'https://zhumusic.com/'),
(15, 'img15', 'https://www.youtubew0SVOww&start_radio=1'),
(16, 'img16', 'images-gallery\\2020\\img6.jpg'),
(17, 'FATBOY SLIM', 'https://en.wikipedia.org/wiki/Fatboy_Slim'),
(18, 'img18', 'https://www.youtubew0SVOww&start_radio=1'),
(19, 'img19', 'images-gallery\\2020\\img7.jpg'),
(20, 'BORIS BREJCHA', 'https://www.borisbrejcha.de/'),
(21, 'img21', 'https://www.youtubew0SVOww&start_radio=1'),
(22, 'img22', 'images-gallery\\2020\\img8.jpg'),
(23, 'SEPULTURA', 'https://mk.wikipedia.org/wiki/Sepultura'),
(24, 'img24', 'https://www.youtubew0SVOww&start_radio=1');
-- --------------------------------------------------------
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbexitfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`,`email`,`password`) VALUES
(1, 'Petar', 'Petrovic','petarpetrovic@gmail.com','1234');

-- --------------------------------------------------------