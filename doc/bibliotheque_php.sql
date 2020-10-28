-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 28 oct. 2020 à 17:04
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliotheque_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `summary` varchar(800) NOT NULL,
  `category` varchar(50) NOT NULL,
  `publication_date` date NOT NULL,
  `user_id` int(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `title`, `author`, `summary`, `category`, `publication_date`, `user_id`) VALUES
(1, 'la bible', 'Dieu', '2 testaments pour le prix d\'un', 'fiction', '0000-12-25', 3),
(2, 'les miserables', 'Victor Hugo', 'quand Jean Valgean, un ancien bagnard devient un notable et eleve Causette', 'classique', '1862-01-01', 2),
(3, 'Dune', 'Franck Herbert', 'Des gars qui vont à la plage et ne trouvent pas la mer', 'SF', '1965-01-01', 3),
(4, 'Jojo Lapin roi des malins', 'Enid Blyton', 'les aventures du plus malin des lapins', 'enfant', '2001-01-17', 3),
(5, 'le roi sur le seuil', 'David Gemmel', 'L\'histoire se déroule environ un siècle après le siège de Dros Delnoch par les Nadirs d\'Ulric.', 'Medfan', '2009-06-01', NULL),
(6, 'guerre des gaules', 'Jules César', 'Un ouvrage unique en son genre, relation écrite par l\'auteur principal du drame qu\'elle fait revivre et publiée pendant cette guerre de huit ans, à des fins de propagande personnelle : un tour de force, qui ne fut jamais répété. Cette histoire d\'un conflit prolongé est un livre de combat, en même temps que le témoignage le plus ancien et le plus important sur les origines de la France, la Belgique, la Suisse, l\'Allemagne rhénane et la Grande-Bretagne.\r\nC\'est un grand peuple celtique en pleine évolution que César a gagné à la civilisation latine, ce fut aussi une culture dont nous commençons à entrevoir l\'originalité et le raffinement.', 'histoire', '1926-01-01', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `city_code` char(5) NOT NULL,
  `city` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` char(1) NOT NULL,
  `birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `adress`, `city_code`, `city`, `phone`, `email`, `sex`, `birth_date`) VALUES
(1, 'Dupont', 'Richard', '9 rue du gros horloge', '76100', 'Rouen', '0606060606', 'r.dupont@gmail.com', 'h', '1962-05-21'),
(2, 'Melez', 'Claire', '45 rue du Molinel', '59100', 'Lille', '0707070707', 'clairemelez@outlook.com', 'f', '1989-11-14'),
(3, 'Gossart', 'Thomas', '1 rue du lancer de harang', '59170', 'Roubaix', '0607060706', 'toto59@gmail.com', 'h', '1992-11-11');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
