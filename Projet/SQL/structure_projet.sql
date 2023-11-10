-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 10 nov. 2023 à 18:52
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

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

-- --------------------------------------------------------

--
-- Structure de la table `ALIMENTS`
--

CREATE TABLE `ALIMENTS` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `type` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `nutriscore` varchar(200) NOT NULL,
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
-- Index pour les tables déchargées
--

--
-- Index pour la table `ALIMENTS`
--
ALTER TABLE `ALIMENTS`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
