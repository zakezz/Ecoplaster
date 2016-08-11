-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 31 Juillet 2016 à 03:08
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Client_ecoplaster`
--

-- --------------------------------------------------------

--
-- Structure de la table `Clients_eco`
--

CREATE TABLE `Clients_eco` (
  `id_client` int(11) NOT NULL,
  `nom_prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `cp` int(5) NOT NULL,
  `telephone` int(10) DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lien_devis` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Clients_eco`
--
ALTER TABLE `Clients_eco`
  ADD PRIMARY KEY (`id_client`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Clients_eco`
--
ALTER TABLE `Clients_eco`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
