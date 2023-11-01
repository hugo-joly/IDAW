-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 01 nov. 2023 à 14:06
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

-- --------------------------------------------------------

--
-- Structure de la table `ALIMENTS`
--

CREATE TABLE `ALIMENTS` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `type` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `multiscore` varchar(200) NOT NULL,
  `calories` int(11) NOT NULL,
  `glucides` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ALIMENTS`
--

INSERT INTO `ALIMENTS` (`id`, `id_user`, `type`, `nom`, `multiscore`, `calories`, `glucides`, `image`) VALUES
(1, 0, 'Snacks', 'TUC', 'C', 144, 20, ''),
(2, 0, 'qsdfqsdf', 'qsdfqsdf', 'qdfqsdf', 3, 3, 'sfdgsfg'),
(4, 2, 'wwfgsdfgsdfgsdfgsdfgsdfgsdfg', 'sdfgsdfgsdgsfgsgsfg', 'sgsdgsgsfgsfgsfgsfgs', 43, 43, 'sdfgsdghdgfhdgh'),
(6, 1, '<dfqsgs', 'fgsdfgsdfg', 'ssfdg', 1, 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `FAV_ALIMENTS`
--

CREATE TABLE `FAV_ALIMENTS` (
  `id_user` int(11) NOT NULL,
  `id_aliments` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `PERS_ALIMENTS`
--

CREATE TABLE `PERS_ALIMENTS` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `multiscore` varchar(200) NOT NULL,
  `calories` int(11) NOT NULL,
  `glucides` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `USERS`
--

CREATE TABLE `USERS` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telephone` varchar(200) NOT NULL,
  `objectif` int(11) NOT NULL,
  `identifiant` varchar(200) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  `sport` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `USERS`
--

INSERT INTO `USERS` (`id`, `nom`, `prenom`, `email`, `telephone`, `objectif`, `identifiant`, `mdp`, `sport`, `image`) VALUES
(1, 'hugo', 'joly', 'hugo.joly@gmail.com', '0634873951', 2000, 'hugo', 'joly', 0, 'macron.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ALIMENTS`
--
ALTER TABLE `ALIMENTS`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `PERS_ALIMENTS`
--
ALTER TABLE `PERS_ALIMENTS`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ALIMENTS`
--
ALTER TABLE `ALIMENTS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `PERS_ALIMENTS`
--
ALTER TABLE `PERS_ALIMENTS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
