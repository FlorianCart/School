-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 06 Octobre 2016 à 14:25
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `school`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `sexe` enum('homme','femme') NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `sexe`, `email`, `mdp`) VALUES
(2, 'admin', 'admin', 'homme', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur`
--

DROP TABLE IF EXISTS `chauffeur`;
CREATE TABLE IF NOT EXISTS `chauffeur` (
  `id` int(3) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `sexe` enum('homme','femme') DEFAULT NULL,
  `permis` varchar(100) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `matiere` varchar(100) DEFAULT NULL,
  `id_cours` int(3) NOT NULL AUTO_INCREMENT,
  `id_prop` int(3) NOT NULL,
  `pour_c` varchar(100) DEFAULT NULL,
  `pour_l` varchar(100) DEFAULT NULL,
  `pour_e` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_cours`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`matiere`, `id_cours`, `id_prop`, `pour_c`, `pour_l`, `pour_e`) VALUES
('Histoire', 14, 6, 'collegiens', 'lyceens', 'etudiants'),
('Maths', 15, 6, 'collegiens', 'lyceens', ''),
('GÃ©ographie', 21, 6, '', 'lyceens', ''),
('Francais', 22, 10, 'collegiens', 'lyceens', NULL),
('Technologie', 23, 12, NULL, 'lyceens', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `id` int(3) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `sexe` enum('homme','femme') DEFAULT NULL,
  `matiere` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

DROP TABLE IF EXISTS `trajet`;
CREATE TABLE IF NOT EXISTS `trajet` (
  `depart` varchar(100) DEFAULT NULL,
  `arrivee` varchar(100) DEFAULT NULL,
  `id_trajet` int(3) NOT NULL AUTO_INCREMENT,
  `horaire` datetime DEFAULT NULL,
  `etat` int(1) DEFAULT '1',
  `idu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_trajet`),
  KEY `lol` (`idu`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `trajet`
--

INSERT INTO `trajet` (`depart`, `arrivee`, `id_trajet`, `horaire`, `etat`, `idu`) VALUES
('colombe', 'asnieres', 1, '0000-00-00 00:00:00', 0, 2),
('asniere', 'colombe', 2, NULL, 0, 3),
('ff', 'ff', 3, '0000-00-00 00:00:00', 0, 2),
('de', 'de', 4, '2016-10-10 10:30:00', 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `sexe` enum('homme','femme') NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `ville` varchar(100) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `categorie` enum('admin','professeur','etudiant','utilisateur') NOT NULL DEFAULT 'utilisateur',
  `naissance` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `sexe`, `email`, `mdp`, `telephone`, `ville`, `cp`, `adresse`, `categorie`, `naissance`) VALUES
(2, 'jouanny', 'jerome', 'homme', 'jouanny.jerome@gmail.com', '92i', '0625007104', '', '', '', 'utilisateur', '2016-10-05'),
(3, 'jouanny', 'jerome', 'homme', 'jouanny.jerodme@gmail.com', '92i', '0625007104', '', '', '', 'utilisateur', '2016-10-18'),
(4, 'jouanny', 'jerome', 'homme', 'jouanny.jerodme@gmail.com', '92i', NULL, '', '', '', 'utilisateur', '2016-10-07'),
(5, 'de', 'de', 'homme', 'de@gmail.com', 'de', '4444444444', 'de', '12000', 'de', 'professeur', '1996-12-26'),
(6, 'tr', 'tr', 'homme', 'tr@gmail.com', 'tr', '7777777777', 'tr', '92600', 'tr', 'etudiant', '1996-10-12');

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

DROP TABLE IF EXISTS `vehicules`;
CREATE TABLE IF NOT EXISTS `vehicules` (
  `marque` varchar(100) DEFAULT NULL,
  `type_vehicule` varchar(100) NOT NULL,
  `immatriculation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `lol` FOREIGN KEY (`idu`) REFERENCES `utilisateur` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
