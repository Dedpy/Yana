-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2020 at 11:08 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yana`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id_ad` int(11) NOT NULL AUTO_INCREMENT,
  `login_ad` varchar(250) NOT NULL,
  `password_ad` varchar(250) NOT NULL,
  PRIMARY KEY (`id_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `comment` longtext NOT NULL,
  `date_com` datetime NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_post` (`id_post`),
  KEY `id_patient` (`id_patient`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`id`, `nom`, `comment`, `date_com`, `id_patient`, `id_post`) VALUES
(4, 'admin', 'hekkk', '2020-12-08 11:26:02', 1, 1),
(3, 'admin', 'chbik labes', '2020-12-08 11:23:29', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hitorique_consultation`
--

DROP TABLE IF EXISTS `hitorique_consultation`;
CREATE TABLE IF NOT EXISTS `hitorique_consultation` (
  `id_historique_consultation` int(11) NOT NULL AUTO_INCREMENT,
  `description_consultation` varchar(250) NOT NULL,
  `id_rendezvous` int(11) NOT NULL,
  PRIMARY KEY (`id_historique_consultation`),
  KEY `FK_id_rdv` (`id_rendezvous`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medecin`
--

DROP TABLE IF EXISTS `medecin`;
CREATE TABLE IF NOT EXISTS `medecin` (
  `id_med` int(11) NOT NULL AUTO_INCREMENT,
  `nom_med` varchar(250) NOT NULL,
  `prenom_med` varchar(250) NOT NULL,
  `email_med` varchar(250) NOT NULL,
  `diplome` varchar(250) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `login_med` varchar(250) NOT NULL,
  `password_med` varchar(250) NOT NULL,
  PRIMARY KEY (`id_med`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `date_naissance` date NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `login` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `post` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `date_post` datetime NOT NULL,
  `id_patient` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_commentaire` (`id_patient`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `titre`, `categorie`, `post`, `image`, `date_post`, `id_patient`) VALUES
(25, 'Depression', 'Depression', 'labes labes', 'img/blog/general.png', '2020-12-08 11:23:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id_reclamation` int(11) NOT NULL AUTO_INCREMENT,
  `message_reclamation` varchar(250) NOT NULL,
  PRIMARY KEY (`id_reclamation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rendezvous`
--

DROP TABLE IF EXISTS `rendezvous`;
CREATE TABLE IF NOT EXISTS `rendezvous` (
  `id_rendezvous` int(11) NOT NULL AUTO_INCREMENT,
  `date_rendezvous` date NOT NULL,
  `heure_rendezvous` int(2) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  PRIMARY KEY (`id_rendezvous`),
  KEY `FK_RDV_id_patient` (`id_patient`),
  KEY `FK_RDV_id_doctor` (`id_doctor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `email` varchar(50) NOT NULL,
  `hash` varchar(255) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`email`, `hash`) VALUES
('', 'd41d8cd98f00b204e9800998ecf8427e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
