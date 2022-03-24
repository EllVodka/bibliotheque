-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 09 mars 2021 à 14:48
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `num` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `age` int(3) NOT NULL,
  `mail` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`num`, `nom`, `prenom`, `age`, `mail`) VALUES
(1, 'Sergueev', 'Eric', 18, 'eric.sergueev@gmail.com'),
(2, 'Deloffe', 'Raphael', 18, 'draphael59400@gmail.com'),
(3, 'Looten', 'Alexi', 18, 'loot.alexis@gmail.com'),
(4, 'Gruermer', 'Brian', 46, 'guerre.brian@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

CREATE TABLE `emprunt` (
  `id` int(11) NOT NULL,
  `codeLivre` int(11) NOT NULL,
  `date` date NOT NULL,
  `numAdherent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `code` int(2) NOT NULL,
  `disponibilité` tinyint(1) NOT NULL,
  `Titre` varchar(70) COLLATE utf8_bin NOT NULL,
  `Auteur` varchar(50) COLLATE utf8_bin NOT NULL,
  `Catégorie` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`code`, `disponibilité`, `Titre`, `Auteur`, `Catégorie`) VALUES
(1, 1, 'Les Misérable', 'Victor Hugo', 'Roman'),
(2, 1, 'Harry Potter à l\'école des sorcier, tome 1', 'JK Rowling', 'Fantasie Littéraire'),
(3, 1, 'Harry Potter et la Chambre des Secrets, tome 2', 'JK Rowling', 'Fantasie Littéraire'),
(4, 1, 'Harry Potter et le Prisonnier d\'Azkaban, tome 3', 'JK Rowling', 'Fantaisie Littéraire'),
(5, 1, 'Le Petit Prince', 'Antoine de Saint-Exupéry', 'Roman'),
(6, 1, 'Alice au pays des merveilles', 'Lewis Caroll', 'Fantaisie Littéraire'),
(7, 1, 'Da Vinci Code', 'Dan Brown', 'Policier'),
(8, 1, 'L\'alchimiste', 'Paulo Coelho', 'Roman'),
(9, 1, 'Vingt mille lieuse sous les mers', 'Jules Verne', 'Science-fiction'),
(10, 1, 'Twilight: Fascination, tome 1', 'Stephanie Meyer', 'Fantaisie Littéraire'),
(11, 1, 'Twilight: Tentation, tome 2', 'Stephanie Meyer', 'Fantasie Littéraire'),
(12, 1, 'L\'île mystérieuse', 'Jules Verne', 'Science-fiction');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codeLivre` (`codeLivre`,`numAdherent`),
  ADD KEY `numAdherent` (`numAdherent`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `code` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD CONSTRAINT `emprunt_ibfk_1` FOREIGN KEY (`codeLivre`) REFERENCES `livre` (`code`),
  ADD CONSTRAINT `emprunt_ibfk_2` FOREIGN KEY (`numAdherent`) REFERENCES `adherent` (`num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
