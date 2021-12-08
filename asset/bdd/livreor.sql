-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 déc. 2021 à 10:03
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(1, 'sdjicbkw', 0, '2021-12-06 16:02:35'),
(2, 'Salut toi ', 0, '2021-12-06 16:06:35'),
(3, 'Salut toi ', 0, '2021-12-06 16:08:52'),
(4, 'Salut toi ', 0, '2021-12-06 16:09:25'),
(5, 'Salut toi ', 0, '2021-12-06 16:09:41'),
(6, 'Salut toi ', 0, '2021-12-06 16:10:06'),
(7, 'Wingardium Leviosa', 0, '2021-12-06 16:10:42'),
(8, 'Wingardium Leviosa', 1, '2021-12-06 16:18:18'),
(9, 'crotte\r\n', 1, '2021-12-06 16:18:54'),
(10, 'ziqdjcnhugkbwjdlmc,eqfsilh;x', 2, '2021-12-06 16:19:32'),
(11, 'coucou', 3, '2021-12-07 11:08:48'),
(12, 'qlsjkidb', 1, '2021-12-07 11:33:47'),
(13, 'qscdqsfvdx', 1, '2021-12-07 11:34:04'),
(14, 'vvvvv', 1, '2021-12-07 11:34:53'),
(15, 'alors comme Ã§a les apostrophes ne marchent pas ?', 1, '2021-12-07 11:35:46'),
(16, 'HP C SUPER', 5, '2021-12-07 11:38:57'),
(17, 'Elles fonctionnent enfin les \" \'\'\'\" ??? Site pourri ! ', 5, '2021-12-07 11:49:12'),
(18, 'tonton est dans la place', 5, '2021-12-08 10:44:38'),
(19, 'tonton est dans la place comme a Poudlard', 5, '2021-12-08 10:45:13');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'Aurelus', 'coucou'),
(2, 'Marus', 'claire'),
(3, 'Marie', 'therese'),
(4, 'Prout', 'prout'),
(5, 'tonton', 'tonton');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
