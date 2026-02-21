-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 06 fév. 2026 à 16:01
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `learnflexplus`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `adresse_residence` varchar(255) DEFAULT NULL,
  `email` varchar(180) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `age`, `adresse_residence`, `email`, `telephone`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'ni', 'Jo', NULL, NULL, 'Joe@gmail.com', '28078748', '$2y$13$514RoFpQ7RjWTWjU6k6K/OWN.V8KfZdjKD5K1DIDyHRzCEvs5OrmO', 'ADMIN', NULL, NULL),
(2, 'Jomni', 'Omar', 22, 'Tunis', 'omar@test.com', '12345678', '1234azerty', 'Etudiant', NULL, '2026-02-05 22:24:48'),
(5, 'Sameh', 'Riahi', 29, 'Av. Fethi Zouhir, Cebalat Ben Ammar', 'samara7050@hotmail.com', '123456789', '$2y$10$dPYmHSIViZzKcsprlWIsvuxXTZ23BOVgqvum/U9G1z4UQR.AYideG', 'Enseignant', '2026-02-05 21:38:22', NULL),
(6, '242424242', '57587587', 100, 'zqdzqzqdq', 'qdfzdqdqzdz@out', 'efsefseefse', '$2y$10$VPZ6MxELh4W5gQMm8AHHDOnoEJdIgPQohx3eet.WAwHyxQM/sTEzi', 'Etudiant', '2026-02-06 14:24:03', NULL),
(7, '68684686', '68686', 100, 'qdzqdqzdzq', 'zdqzdzqd', 'zdqzdzqdz', '$2y$13$HNgWLODIHoKQPBYoVG3RtOStxApp05fPeaNdb8Y5SyjmRSW.bMkjq', 'Admin', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

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
