-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 22 mai 2018 à 23:20
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ulimprime-db`
--

-- --------------------------------------------------------

--
-- Structure de la table `configuration`
--

CREATE TABLE `configuration` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id` int(11) NOT NULL,
  `etudiant_id` int(11) DEFAULT NULL,
  `etat_demande` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `type_demande` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date_enregistrement` datetime NOT NULL,
  `enregistre_par` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `annee` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `etudiant_id`, `etat_demande`, `type_demande`, `date_enregistrement`, `enregistre_par`, `annee`) VALUES
(1, 1, 'Traitée', 'Original', '2018-05-09 03:19:14', 'PARKER Peter', '2018'),
(2, 2, 'Traitée', 'Original', '2018-05-09 03:20:50', 'PARKER Peter', '2018'),
(5, 1, 'Traitée', 'Duplicata', '2018-05-09 18:05:37', 'PARKER Peter', '2018');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datenaissance` date DEFAULT NULL,
  `lieunaissance` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `option_etud` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `specialite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mention` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_examen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `datenaissance`, `lieunaissance`, `option_etud`, `specialite`, `mention`, `date_examen`, `genre`) VALUES
(1, 'DUPONT', 'Paul', NULL, NULL, 'Sciences-Mathématiques', 'Mathématiques', 'Bien', '02 Juin 2017', 'M'),
(2, 'URBAIN', 'Alexandrine', NULL, NULL, 'Agronomie', 'Entomologie', 'Passable', '25 Juillet 2016', 'F');

-- --------------------------------------------------------

--
-- Structure de la table `impression`
--

CREATE TABLE `impression` (
  `id` int(11) NOT NULL,
  `demande_id` int(11) DEFAULT NULL,
  `date_impression` datetime NOT NULL,
  `imprime_par` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `impression`
--

INSERT INTO `impression` (`id`, `demande_id`, `date_impression`, `imprime_par`) VALUES
(1, 1, '2018-05-09 20:37:59', 'PARKER Peter'),
(2, 2, '2018-05-09 20:40:42', 'PARKER Peter'),
(3, 5, '2018-05-09 20:40:42', 'PARKER Peter');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_heure` datetime NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `username`, `password`, `auteur`, `date_heure`, `roles`, `is_active`) VALUES
(1, 'ADMINISTRATEUR', 'Administrateur', 'administrateur', '$2y$13$n.2MsWKGLneGr0AkByV39.27Ys6fjPc6esksuKLGu0gySEa4KkRQ.', 'ADMIN', '2018-05-09 02:02:09', 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}', 1),
(2, 'PARKER', 'Peter', 'peter', '$2y$13$0YZnvUytnu1jI2kUYd7SMejO/TTwvcOuN/6Bmuc6zultjVXm.KZJi', 'Admin', '2018-05-09 02:02:11', 'a:1:{i:0;s:9:\"ROLE_USER\";}', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2694D7A5DDEAB1A3` (`etudiant_id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `impression`
--
ALTER TABLE `impression`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_245BB1B180E95E18` (`demande_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `impression`
--
ALTER TABLE `impression`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `FK_2694D7A5DDEAB1A3` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiant` (`id`);

--
-- Contraintes pour la table `impression`
--
ALTER TABLE `impression`
  ADD CONSTRAINT `FK_245BB1B180E95E18` FOREIGN KEY (`demande_id`) REFERENCES `demande` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
