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
  `nutriscore` varchar(200) NOT NULL,
  `calories` int(11) NOT NULL,
  `glucides` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ALIMENTS`
--

INSERT INTO `ALIMENTS` (`id`, `id_user`, `type`, `nom`, `nutriscore`, `calories`, `glucides`, `image`) VALUES
(1, 0, 'Snacks', 'TUC', 'C', 144, 20, 'tuc.webp'),
(2, 1, 'Petits-déjeuners', 'Nutella', 'E', 539, 58, 'nutella.jpg'),
(3, 2, 'Snacks', 'Prince', 'D', 467, 69, 'prince.jpg'),
(4, 1, 'Produits laitiers', 'SKYR', 'A', 57, 4, 'skyr.jpg'),
(5, 1, 'Snacks', 'Kinder Bueno', 'E', 572, 50, 'kinder_bueno.jpg'),
(6, 1, 'Produits laitiers', 'Yaourt nature', 'A', 45, 5, 'yaourt_nature.jpg'),
(7, 1, 'Aliments et boissons à base de végétaux', 'Amandes', 'A', 621, 5, 'amandes.jpg'),
(8, 1, 'Aliments et boissons à base de végétaux', 'Pain de mie', 'B', 268, 49, 'pain_de_mie.jpg'),
(9, 1, 'Aliments et boissons à base de végétaux', 'Spaghetti', 'A', 347, 64, 'spaghetti.jpg'),
(10, 1, 'Condiments', 'Moutarde', 'C', 151, 4, 'moutarde.jpg'),
(11, 1, 'Condiments', 'Ketchup', 'D', 102, 23, 'ketchup.jpg'),
(12, 1, 'Condiments', 'Mayonnaise', 'E', 648, 2, 'mayonnaise.jpg'),
(13, 1, 'Snacks', 'Madeleines', 'D', 419, 54, 'madelaines.jpg'),
(14, 1, 'Snacks', 'Napolitain', 'E', 428, 58, 'napolitain.jpg'),
(15, 1, 'Aliments et boissons à base de végétaux', 'Lentilles', 'A', 111, 11, 'lentilles.jpg'),
(16, 1, 'Viandes', 'Steak haché', 'C', 209, 0, 'steak_hache.jpg'),
(17, 1, 'Viandes', 'Jambon', 'B', 115, 1, 'jambon.jpg'),
(18, 1, 'Viandes', 'Knacki', 'D', 267, 2, 'knacki.jpg'),
(19, 1, 'Desserts', 'Panier de Yoplait', 'B', 91, 12, 'panier_de_yoplait.jpg'),
(20, 1, 'Desserts', 'Compote de pomme', 'A', 55, 12, 'compote_de_pomme.jpg');


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
(1, 'hugo', 'joly', 'hugo.joly@gmail.com', '0634873951', 2000, 'hugo', 'joly', 0, 'macron.jpg'),
(2, 'baptiste', 'gratens', 'baptiste.gratens@gmail.com', '0615962772', 2500, 'baptiste', 'gratens', 400, ''),
(3, 'Alix', 'domange', 'alix.domange@gmail.com', '0634873951', 2000, 'alix', 'domange', 0, '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;



--
-- AUTO_INCREMENT pour la table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
