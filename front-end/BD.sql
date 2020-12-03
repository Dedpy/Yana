-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2020 at 01:36 PM
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
  `login` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `id_doctor` int(11) NOT NULL AUTO_INCREMENT,
  `nom_doctor` varchar(250) NOT NULL,
  `prenom_doctor` varchar(250) NOT NULL,
  `tel_doctor` int(11) NOT NULL,
  `email_doctor` varchar(250) NOT NULL,
  `login_doctor` varchar(250) NOT NULL,
  `password_doctor` varchar(250) NOT NULL,
  `diplome_doctor` varchar(250) NOT NULL,
  PRIMARY KEY (`id_doctor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_patient` varchar(250) NOT NULL,
  `prenom_patient` varchar(250) NOT NULL,
  `tel_patient` int(11) NOT NULL,
  `email_patient` varchar(250) NOT NULL,
  `login_patient` varchar(250) NOT NULL,
  `password_patient` varchar(250) NOT NULL,
  `datenaissance_patient` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id_question` int(11) NOT NULL AUTO_INCREMENT,
  `sujet_question` varchar(250) NOT NULL,
  `message_question` varchar(250) NOT NULL,
  `date_question` date NOT NULL,
  `categorie_question` varchar(250) NOT NULL,
  `id_patient` int(11) NOT NULL,
  PRIMARY KEY (`id_question`),
  KEY `FK_Q_id_patient` (`id_patient`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Table structure for table `reponses`
--

DROP TABLE IF EXISTS `reponses`;
CREATE TABLE IF NOT EXISTS `reponses` (
  `id_reponse` int(11) NOT NULL AUTO_INCREMENT,
  `message_reponse` varchar(250) NOT NULL,
  `date_reponse` date NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  PRIMARY KEY (`id_reponse`),
  KEY `FK_R_id_patient` (`id_patient`),
  KEY `FK_R_id_question` (`id_question`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
