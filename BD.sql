-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2021 at 07:08 PM
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
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`id`, `email`, `password`) VALUES
(1, 'admin@esprit.tn', 'admin');

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`id`, `nom`, `comment`, `date_com`, `id_patient`, `id_post`) VALUES
(18, 'behija', 'Merci wassim!', '2021-01-03 19:54:30', 1, 35),
(17, 'wassim', 'Merci cher administrateur.', '2021-01-03 19:46:13', 1, 35),
(16, 'admin', 'Bravo wassim!', '2021-01-03 19:45:40', 1, 35);

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `diplome` varchar(250) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medecin`
--

INSERT INTO `medecin` (`id`, `nom`, `prenom`, `diplome`, `adresse`, `email`) VALUES
(2, 'amine', 'boubaker', 'psycologue', 'Rue Tahrir', 'amine.boubaker@esprit.tn');

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
  `code` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `date_naissance`, `telephone`, `email`, `login`, `password`, `code`) VALUES
(3, 'wassim', 'benromdhane', '1998-01-09', 94366666, 'wassimbenr@gmail.com', 'wassim', 'wassim', NULL),
(4, 'behija', 'benghorbel', '1999-01-11', 92582051, 'behija.benghorbel@esprit.tn', 'behija', 'behija', 5002);

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
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `titre`, `categorie`, `post`, `image`, `date_post`, `id_patient`) VALUES
(35, 'Les psychologues en renforts nâ€™arriveront pas avant la fin janvier', 'Maladie mentale', 'Les renforts en santÃ© mentale tardent Ã  se dÃ©ployer au QuÃ©bec. Il faudra attendre Ã  la fin du mois de janvier avant que des psychologues du secteur privÃ© puissent sâ€™ajouter aux ressources existantes pour rÃ©duire les listes dâ€™attente.\r\nEn entrevue, le ministre dÃ©lÃ©guÃ© Ã  la SantÃ©, Lionel Carmant, a reconnu lundi que Â« câ€™est plus long Â» que ce quâ€™il Â« aurait souhaitÃ© Â».\r\nDeux jours aprÃ¨s lâ€™attaque de lâ€™Halloween dans le Vieux-QuÃ©bec, le ministre avait promis des investissements supplÃ©mentaires de 100 millions de dollars en santÃ© mentale. Le plan incluait lâ€™ajout de 350 sentinelles psychosociales en prÃ©vention et la mise Ã  contribution de 800 psychologues du secteur privÃ©.\r\nCes derniers, disait-il, allaient aider leurs collÃ¨gues du rÃ©seau public Ã  Â« vider les listes dâ€™attente Â» qui comptaient alors 16 000 noms.\r\nOr lors de lâ€™Ã©tude des crÃ©dits le 4 dÃ©cembre, le ministre a dÃ» concÃ©der que les renforts nâ€™arriveraient pas avant la fin du mois de janvier, et que le guichet dâ€™accÃ¨s contenait dÃ©sormais non plus 16 000, mais 18 300 noms.', '../assets/img/blog/general.png', '2021-01-03 19:44:16', 3);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
