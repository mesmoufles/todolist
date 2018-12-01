-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  sam. 01 déc. 2018 à 14:04
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecv`
--

-- --------------------------------------------------------

--
-- Structure de la table `criticity`
--

CREATE TABLE `criticity` (
  `id` int(11) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `criticity`
--

INSERT INTO `criticity` (`id`, `level`) VALUES
(1, 'Léger'),
(2, 'Moyen'),
(3, 'Grave'),
(4, 'Bloquant');

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `criticity_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tasks`
--

INSERT INTO `tasks` (`id`, `description`, `criticity_id`, `user_id`) VALUES
(20, 'coucou', 1, 3),
(17, 'Mousses au chocolat', 2, 5),
(4, 'ffvgjhjgjy', 2, 2),
(5, 'dfgdfgdfgdfg', 1, 1),
(6, 'azerty', 1, 1),
(7, 'azertyu', 1, 1),
(8, 'azertyu', 1, 1),
(9, 'test', 1, 1),
(10, 'fdgdfgdfgdfg', 9, 1),
(11, '11111111', 4, 1),
(19, 'Faire la vaisselle', 1, 3),
(16, 'Faire du php', 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`) VALUES
(8, 'Iléosud', 'Eléonore'),
(7, 'Labrosse', 'Adam'),
(9, 'Sop', 'Alain'),
(10, 'Morte', 'Adèle');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `criticity`
--
ALTER TABLE `criticity`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `indexLastName` (`lastname`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `criticity`
--
ALTER TABLE `criticity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
