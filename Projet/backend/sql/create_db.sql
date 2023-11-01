-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 01 nov. 2023 à 13:56
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `ALIMENTATION`
--

CREATE TABLE `ALIMENTATION` (
  `id_user` int(11) NOT NULL,
  `id_aliment` int(11) NOT NULL,
  `date` date NOT NULL,
  `poids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ALIMENTATION`
--

INSERT INTO `ALIMENTATION` (`id_user`, `id_aliment`, `date`, `poids`) VALUES
(1, 2, '2023-10-29', 6),
(1, 2, '2023-10-29', 9),
(1, 2, '2023-10-29', 9),
(1, 2, '2023-10-29', 9),
(1, 2, '2023-10-29', 9),
(1, 2, '2023-10-29', 9),
(1, 2, '2023-10-29', 9),
(1, 2, '2023-10-29', 9),
(1, 2, '2023-10-29', 3),
(1, 2, '2023-10-29', 3),
(1, 2, '2023-10-29', 3),
(1, 2, '2023-10-29', 3),
(1, 2, '2023-10-29', 6),
(1, 2, '2023-10-29', 6),
(1, 2, '2023-10-29', 6),
(1, 1, '2023-10-28', 3),
(1, 1, '2023-10-31', 100),
(1, 1, '2023-10-31', 3456);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
