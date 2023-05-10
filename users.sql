-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 10 mai 2023 à 00:57
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `login`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `skill` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `email`, `password`, `created_at`, `updated_at`, `skill`) VALUES
(1, 'tyuio', 'ilies', 'wsdddd@fffff.fr', '$2y$10$0C7JvmJEK2uLlylgRSXp7.YzqJYKsz8M.UsLL1bTHqGScjnnLEoj2', '2022-10-05 14:33:22', '2022-10-05 21:33:22', ''),
(2, 'zerd', 'kaart', 'wsaqdddd@fffff.fr', '$2y$10$1/2QXVqt3kxApaqnTebPWeDwuOCO/sWN.AzeBFfWiwhOtUA6pEnRG', '2022-10-05 14:34:49', '2022-10-05 21:34:49', ''),
(3, 'testaaa', 'test', 'test@test.fr', '$2y$10$/SBLxmAMSfWQYU0DIx62SuFzFwRQXs9gok2nqDQfWRH8p7khfNV8e', '2022-10-05 14:37:58', '2022-10-05 21:37:58', ''),
(4, 'zarir', 'Faycal', 'fayc@gmail.com', '$2y$10$Utm1Aag.m4QvRZVbwu2PMOlS8wx0ExhiYgh.cNJYMKO/dpExFxmAW', '2022-10-05 14:42:06', '2022-10-05 14:51:28', ''),
(5, 'friedoo', 'daniel', 'daniel.fried@gmail.com', '$2y$10$HT9fVDFSLv5gYSjQRhmBee5F2Sdb2jDzZee8LdeJr39PkoygazYJ6', '2022-10-19 02:12:31', '2022-10-29 11:21:41', ''),
(6, 'zar', 'fayc', 'fayc475@gmail.com', '$2y$10$BxkyHrDY1R.3.UxMP.OVK.eC4mwRyrBdB/mP9HJzEaJzMPV8kBwSO', '2023-05-01 13:16:00', '2023-05-01 20:16:00', ''),
(7, 'bnbd', 'nassim', 'nassim@gmail.com', '$2y$10$a3arm3ZhiJgpxGNNDdpO2uf1NscbUY8Pvf6GvYOhX15irMMMOCmoq', '2023-05-02 17:30:44', '2023-05-03 00:30:44', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
