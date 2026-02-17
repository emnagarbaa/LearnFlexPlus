-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 17 fév. 2026 à 09:56
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
  `updated_at` datetime DEFAULT NULL,
  `is_verified` tinyint(4) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `age`, `adresse_residence`, `email`, `telephone`, `password`, `role`, `created_at`, `updated_at`, `is_verified`, `profile_image`) VALUES
(1, 'ni', 'Jo', NULL, NULL, 'Joe@gmail.com', '28078748', '', 'Enseignant', NULL, '2026-02-16 20:14:22', 0, '26956-69937a9e5c9c6.jpg'),
(2, 'Jomni', 'Omar', 22, 'Tunis', 'omar@test.com', '12345678', '1234azerty', 'Etudiant', NULL, '2026-02-05 22:24:48', 0, NULL),
(5, 'Sameh', 'Riahi', 29, 'Av. Fethi Zouhir, Cebalat Ben Ammar', 'samara7050@hotmail.com', '123456789', '$2y$10$dPYmHSIViZzKcsprlWIsvuxXTZ23BOVgqvum/U9G1z4UQR.AYideG', 'Enseignant', '2026-02-05 21:38:22', NULL, 0, NULL),
(8, 'Kara', 'Choo', 19, '20,Rue de Staline, Tunis', 'Karacho@hotmail.com', '28078749', '$2y$13$4fk1BxCp120l/k.dPCpHhu4ievJUQnYyhP0IOwQCSzAoeF9pprS5G', 'Etudiant', '2026-02-06 16:07:08', '2026-02-06 16:07:08', 0, NULL),
(9, 'Kicho', 'Sandra', 20, '11,Rue de Paris, Tunis', 'Sandra@gmail.com', '123589', '$2y$13$CXamicBRf7W.jDrEIIbTgu0fN777n7nNXV6gsC1Kwa4U8jJ8Y5xHO', 'Enseignant', '2026-02-06 16:18:20', '2026-02-06 16:18:20', 0, NULL),
(10, 'AAA', 'XXX', 20, '20, Cebalat Ben Ammar, Ariana', 'miro.toro6@gmail.com', '28078748', '$2y$13$dXpuwqPAg8S8TSKWTDeluegv8ZMkEsM/Xn1J9ybnBeiwk1vjcP2r6', 'Enseignant', '2026-02-14 22:30:25', '2026-02-16 20:15:25', 0, 'Bruce-Wayne-screencaps-bruce-wayne-33054524-628-254-69937add5c26b.jpg'),
(12, 'Jomni', 'Omar', NULL, NULL, 'omar.jomni@esprit.tn', NULL, 'c1d04be33d47d08d32a3782ba5e7cb41', 'Etudiant', '2026-02-16 19:21:21', '2026-02-16 19:21:21', 1, '12d9f4b0b70b236544e859dcdeb7e999.jpg'),
(14, 'AAA', 'Choo', 40, NULL, 'Asmon@gmail.com', NULL, '$2y$10$CM5iM.4c5XnYIehTYFiStuukZtqzAuutnq.8IifvJSWAmmtjVvvl6', 'Etudiant', '2026-02-16 20:15:07', '2026-02-16 20:15:07', 0, '986ceb8306d43f204177abe8b2ae27a12a0abc7a-69937acb0810c.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
