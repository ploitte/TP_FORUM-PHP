-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 11 Juillet 2017 à 17:05
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `f_categories`
--

CREATE TABLE `f_categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `f_categories`
--

INSERT INTO `f_categories` (`id`, `nom`) VALUES
(1, 'Programmmation'),
(2, 'Jeux Vidéo'),
(3, 'Musique'),
(4, 'Animaux');

-- --------------------------------------------------------

--
-- Structure de la table `f_post`
--

CREATE TABLE `f_post` (
  `id` int(11) NOT NULL,
  `id_createur` int(11) NOT NULL,
  `sujet` text NOT NULL,
  `texte` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `f_post`
--

INSERT INTO `f_post` (`id`, `id_createur`, `sujet`, `texte`, `date`) VALUES
(1, 0, 'Les mouches en été', 'Elles font chier', '2017-07-11 14:28:41'),
(2, 0, 'les bretzels', 'C\'est bon les bretzels', '2017-07-11 14:51:19'),
(3, 0, 'Salut les compagnie', 'Hello', '2017-07-11 14:56:46'),
(4, 0, 'Les mouches en été', 'sdfsdfsdf', '2017-07-11 14:57:00');

-- --------------------------------------------------------

--
-- Structure de la table `f_sous_categories`
--

CREATE TABLE `f_sous_categories` (
  `id` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `f_sous_categories`
--

INSERT INTO `f_sous_categories` (`id`, `id_categories`, `nom`) VALUES
(1, 1, 'Html'),
(2, 1, 'Css'),
(3, 1, 'JavaScript'),
(4, 1, 'Php'),
(5, 1, 'Sql'),
(6, 2, 'Arma3'),
(7, 2, 'Pubg'),
(8, 2, 'Bf1'),
(9, 2, 'Dofus'),
(10, 2, 'Csgo');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `date`) VALUES
(1, 'Lucas', 'lucrosinol@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '2017-07-10 15:21:31'),
(2, 'etherium', 'eth@bittrex.com', '24acc94e740c36bd1d8a701883b40f4ca06e1442', '2017-07-10 15:43:28');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `f_categories`
--
ALTER TABLE `f_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_post`
--
ALTER TABLE `f_post`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_sous_categories`
--
ALTER TABLE `f_sous_categories`
  ADD PRIMARY KEY (`id`,`id_categories`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `f_categories`
--
ALTER TABLE `f_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `f_post`
--
ALTER TABLE `f_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `f_sous_categories`
--
ALTER TABLE `f_sous_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `f_sous_categories`
--
ALTER TABLE `f_sous_categories`
  ADD CONSTRAINT `f_sous_categories_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `f_categories` (`id`);
