-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 16 nov. 2023 à 11:43
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `notes`
--
CREATE DATABASE IF NOT EXISTS `notes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `notes`;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `title`, `content`, `created_at`, `user_id`, `image`) VALUES
(1, 'Ceci est une note', 'Ceci est le contenue d\'une note', '2023-10-18 22:00:00', 1, ''),
(2, 'Apprendre le SQL', 'Le SQL (Structured Query Language) est un langage permettant de communiquer avec une base de données. Ce langage informatique est notamment très utilisé par les développeurs web pour communiquer avec les données d’un site web. SQL.sh recense des cours de SQL et des explications sur les principales commandes pour lire, insérer, modifier et supprimer des données dans une base.', '2023-10-19 14:38:27', 3, ''),
(14, 'One more time', 'Daft Punk', '2023-10-25 12:15:41', 5, ''),
(15, 'nouveau titre 3', 'Le else ne fonctionne pas', '2023-10-25 12:46:26', 5, ''),
(23, 'Test', 'TESRT', '2023-10-25 13:13:58', 1, ''),
(24, 'fdf', 'noooo', '2023-10-25 14:25:44', 5, ''),
(25, 'time', 'sufsqnksqd', '2023-10-25 14:40:57', 1, ''),
(26, '&lt;h1&gt;dssovpdso&lt;/h1&gt;', 'sdds', '2023-10-25 14:43:10', 1, ''),
(27, 'Cette fois on a un titre', 'Et m&ecirc;me du contenu', '2023-10-25 14:44:47', 1, ''),
(37, 'sqdfqsfq', 'qsdfqsfq', '2023-10-31 14:13:34', 5, 'tpab.jpg'),
(38, 'Good Kid MAAD City', '10/10', '2023-10-31 14:23:08', 5, 'goodkid.jpg'),
(40, 'The Hics - Lines', 'bangs in the whip', '2023-10-31 14:29:12', 5, 'lines.jpg'),
(54, 'gvxc', 'xcvxv', '2023-10-31 15:23:26', 5, 'mbid-780b9935-1a3c-40c9-8a34-5424d281e730-12481797682.jpg'),
(55, 'gvxc', 'xcvxv', '2023-10-31 15:23:57', 5, 'mbid-780b9935-1a3c-40c9-8a34-5424d281e730-12481797682.jpg'),
(57, 'wfwfcw', 'wxcwxvwdv', '2023-10-31 15:36:05', 5, 'D8ro0ZTUYAAHjrB.jpg'),
(58, '&lt;shdfbdsf', 'sdfsdfsdf', '2023-10-31 15:37:10', 5, 'mbid-eb03333a-e805-44c2-85a3-0b77fa920871-1198344598_thumb1200.jpg'),
(59, 'Astroneer', '8/10', '2023-11-13 08:25:29', 5, '06198537aefcf1272a464c90a3b9afb9.jpg'),
(61, 'Yakuza : Like A Dragon', '10/10', '2023-11-13 08:28:47', 5, '9456140-yakuza-like-a-dragon-windows-apps-front-cover.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'user',
  `avatar` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `active`, `status`, `avatar`) VALUES
(1, 'john doe', 'jojo@yajou.fr', '', 0, 'user', ''),
(3, 'jane doe', 'janedodo@gmail.com', '', 0, 'user', ''),
(4, 'user', 'user@mail.com', '', 0, 'user', ''),
(5, 'Mohamed', 'contact@mdd.com', '', 0, 'user', ''),
(12, 'Kendrick', 'tbap@damn.com', '', 0, 'user', ''),
(13, 'Cruddy', 'done@zo.com', '', 0, 'user', ''),
(14, 'Cudder', 'test@test00.com', 'azerty', 0, 'admin', 'mbid-eb03333a-e805-44c2-85a3-0b77fa920871-1198344598_thumb1200.jpg'),
(15, 'Joryu', 'dojima@d.h', 'azerty', 0, 'user', ''),
(16, 'K', 'a@b.c', 'test', 0, 'user', '06198537aefcf1272a464c90a3b9afb9.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
