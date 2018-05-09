-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 28 Avril 2018 à 00:02
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `user`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `image_text` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`, `id_user`) VALUES
(24, '091-512.png', 'kfkdhghfg', 1),
(26, 'Screenshot from 2018-04-05 17-25-14.png', 'hedhi 5edemti', 6);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `id_source` int(11) NOT NULL,
  `id_destination` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `id_source`, `id_destination`, `message`) VALUES
(51, 1, 2, 'salem'),
(52, 1, 2, 'salem'),
(53, 1, 5, 'salem'),
(54, 1, 2, 'dfdfdf'),
(55, 1, 2, 'dfdfdf');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `password` text NOT NULL,
  `numtel` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `adresse` text NOT NULL,
  `travaille` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `lastname`, `password`, `numtel`, `age`, `adresse`, `travaille`) VALUES
(1, 'iyadh-jedidi@live.fr', 'iyadh', 'jedidi', '123', 52856207, 21, 'mahdia', 'Etudiant(e)'),
(2, 'ameni@gmail.com', 'ameni', 'mestiri', '123456789', 12548, 21, 'mahdia', 'Etudiant(e)'),
(5, 'test@gmail.com', 'test', 'test', '123456789', 14587, 25, 'tunis', 'Etudiant(e)'),
(6, 'ameni@live.fr', 'ameni', 'mabrouk', '123', 21485885, 22, 'mahdia', 'Etudiant(e)'),
(7, 'test@gmail.com', 'test', 'test1', '123', 54545, 21, 'mahdia', 'Etudiant(e)');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
