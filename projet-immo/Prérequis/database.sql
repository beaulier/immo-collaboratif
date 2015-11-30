-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 30 Novembre 2015 à 09:58
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `profils`
--

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE IF NOT EXISTS `profils` (
  `nom` varchar(30) NOT NULL,
  `age` smallint(6) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `metier` varchar(30) NOT NULL,
  `sport` varchar(30) DEFAULT NULL,
  `film` varchar(30) DEFAULT NULL,
  `image_profil` text NOT NULL,
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `state` varchar(1) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `profils`
--

INSERT INTO `profils` (`nom`, `age`, `adresse`, `metier`, `sport`, `film`, `image_profil`, `id`, `state`) VALUES
('Thomas', 24, '15 rue Hoche 94200 Ivry sur Seine', 'informaticien', 'foot', 'star wars', 'https://auth.etna-alternance.net/api/users/beauli_t/photo', 0, '1'),
('Paul', 26, '16 rue des Freres Blais 94200 Ivry sur Seine', 'facteur', 'foot', 'interstellar', 'https://auth.etna-alternance.net/api/users/beltra_p/photo', 1, '1'),
('Tristan', 32, '10 rue Lenine 94200 Ivry sur Seine', 'restaurateur', 'tennis', 'star wars', 'https://auth.etna-alternance.net/api/users/boitea_t/photo', 2, '0');

-- --------------------------------------------------------

--
-- Structure de la table `zones`
--

CREATE TABLE IF NOT EXISTS `zones` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `INTITULE` text COLLATE utf8_bin NOT NULL,
  `TAILLE` text COLLATE utf8_bin NOT NULL,
  `ADRESSE` text COLLATE utf8_bin NOT NULL,
  `PRIX` text COLLATE utf8_bin NOT NULL,
  `URL_IMAGE` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `zones`
--

INSERT INTO `zones` (`ID`, `INTITULE`, `TAILLE`, `ADRESSE`, `PRIX`, `URL_IMAGE`) VALUES
(0, 'Appartement 5 pieces', '80', '9 rue Louis Rousseau 94200 Ivry sur Seine', '763 000', 'http://static.pap.fr/photos/A82/A82A1556.jpg'),
(1, 'Appartement 3 pieces', '60', '4 rue Rene Robin 94200 Ivry sur Seine', '255 000', 'http://b.visuels.poliris.com/bigs/b/6/2/8/b62898a4-4af4.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
