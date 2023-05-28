-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 18 avr. 2022 à 08:49
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `numch` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(30) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`numch`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`numch`, `categorie`, `prix`) VALUES
(1, 'simple', 650),
(2, 'double', 720),
(3, 'simple', 650),
(4, 'double', 720),
(5, 'double', 720),
(6, 'double', 720),
(7, 'suite', 850),
(8, 'double', 720),
(9, 'suite', 850);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `cin` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(11) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `tel` int(11) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`cin`, `nom`, `prenom`, `adresse`, `tel`) VALUES
(14875624, 'heni', 'fehri', 'jarzouna', 29014527),
(14785412, 'taheni', 'labyeth', 'jandouba', 25415478),
(27485124, 'jeser', 'chirbib', 'kef', 23547894),
(45874251, 'malek', 'tagouti', 'sidi bou said', 96541254),
(15789652, 'hayi', 'bay', 'jdidi', 28558542),
(96854721, 'oumaima', 'ouelhazi', 'jarzouna', 29037552);

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `numr` int(11) NOT NULL AUTO_INCREMENT,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `nignts` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `id_ch` int(11) NOT NULL,
  `id_c` int(11) NOT NULL,
  PRIMARY KEY (`numr`),
  KEY `id_ch` (`id_ch`),
  KEY `id_c` (`id_c`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`numr`, `check_in`, `check_out`, `nignts`, `adults`, `children`, `id_ch`, `id_c`) VALUES
(1, '2022-03-08', '2022-03-10', 2, 2, 2, 1, 14875624),
(2, '2022-03-08', '2022-03-10', 2, 2, 2, 2, 14875624),
(3, '2021-11-14', '2021-11-15', 1, 2, 3, 5, 14785412),
(4, '2020-03-03', '2020-03-05', 2, 3, 4, 7, 27485124),
(5, '2022-03-18', '2022-03-20', 2, 2, 3, 1, 45874251),
(6, '2022-03-24', '2022-03-25', 1, 2, 2, 9, 15789652),
(7, '2022-03-08', '2022-03-10', 2, 2, 2, 6, 14875624);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
