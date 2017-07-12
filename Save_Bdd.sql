-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mer 12 Juillet 2017 à 16:52
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
(10, 2, 'Csgo'),
(11, 3, 'Rap'),
(12, 3, 'Classique'),
(13, 3, 'Electro'),
(14, 3, 'Jazz'),
(15, 3, 'Rock'),
(16, 4, 'Chiens'),
(17, 4, 'Chats'),
(18, 4, 'Chevaux'),
(19, 4, 'Oiseaux'),
(20, 4, 'Poissons');

-- --------------------------------------------------------

--
-- Structure de la table `f_sujet`
--

CREATE TABLE `f_sujet` (
  `id` int(11) NOT NULL,
  `id_souscategorie` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `s_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `f_sujet`
--

INSERT INTO `f_sujet` (`id`, `id_souscategorie`, `pseudo`, `titre`, `texte`, `s_date`) VALUES
(11, 0, 'Lucas', 'sdfsdf', 'sdfsdfsdf', '2017-07-12 16:22:07'),
(12, 0, 'Lucas', 'sdfsdf', 'sdfsdfsdf', '2017-07-12 16:22:23'),
(13, 0, 'Lucas', 'efsdfsdf', 'sdfsdfsdf', '2017-07-12 16:23:03'),
(14, 0, 'Lucas', 'qsdqsd', 'qsdqsdqsd', '2017-07-12 16:24:03'),
(15, 0, 'Lucas', 'qsdqsdqsd', 'qsdqsdqsd', '2017-07-12 16:24:46'),
(16, 0, 'Lucas', 'qsdqsdqsd', 'qsdqsdqsd', '2017-07-12 16:25:22'),
(17, 0, 'Lucas', 'sdfsdfsdfsdfs', 'sdfsdfsdf', '2017-07-12 16:29:01'),
(18, 0, 'Lucas', 'fsdfsdf', 'sdfsdfsdf', '2017-07-12 16:29:55');

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
(2, 'etherium', 'eth@bittrex.com', '24acc94e740c36bd1d8a701883b40f4ca06e1442', '2017-07-10 15:43:28'),
(3, 'Michel', 'michmich@gmail.com', 'b05719858da1f0f47b294571114d5381a2bb9543', '2017-07-12 09:02:05'),
(4, 'james', 'james@gmail.com', '5ba987ef5ef188ddef6ef47fd0f870220b218041', '2017-07-12 09:59:56'),
(5, 'jacky', 'jacky@gmail.com', 'bc50b0eb5a9195fe98b2ff07888b9a5a65a5c8d5', '2017-07-12 12:19:41');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `f_categories`
--
ALTER TABLE `f_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_sous_categories`
--
ALTER TABLE `f_sous_categories`
  ADD PRIMARY KEY (`id`,`id_categories`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Index pour la table `f_sujet`
--
ALTER TABLE `f_sujet`
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
-- AUTO_INCREMENT pour la table `f_categories`
--
ALTER TABLE `f_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `f_sous_categories`
--
ALTER TABLE `f_sous_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `f_sujet`
--
ALTER TABLE `f_sujet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `f_sous_categories`
--
ALTER TABLE `f_sous_categories`
  ADD CONSTRAINT `f_sous_categories_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `f_categories` (`id`);