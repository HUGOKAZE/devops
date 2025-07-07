-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 04 avr. 2025 à 20:47
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `job`
--

-- --------------------------------------------------------

--
-- Structure de la table `job_application`
--

DROP TABLE IF EXISTS `job_application`;
CREATE TABLE IF NOT EXISTS `job_application` (
  `application_id` int NOT NULL AUTO_INCREMENT,
  `candidate_id` int NOT NULL,
  `employer_id` int NOT NULL,
  `application_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `cv_build` varchar(255) NOT NULL,
  `idjob` int DEFAULT NULL,
  `statut` int DEFAULT '0',
  PRIMARY KEY (`application_id`),
  KEY `candidate_id` (`candidate_id`),
  KEY `job_application_idjob` (`idjob`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `job_application`
--

INSERT INTO `job_application` (`application_id`, `candidate_id`, `employer_id`, `application_date`, `cv_build`, `idjob`, `statut`) VALUES
(9, 7, 24, '2025-04-01 14:35:44', 'EXAMEN_GL_S5.pdf', 26, 0),
(10, 8, 24, '2025-04-04 01:43:00', 'facture_1742557205.pdf', 26, 1);

-- --------------------------------------------------------

--
-- Structure de la table `job_post`
--

DROP TABLE IF EXISTS `job_post`;
CREATE TABLE IF NOT EXISTS `job_post` (
  `job_post_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `requirement` text,
  `qualification` text,
  `salary_range` varchar(100) DEFAULT NULL,
  `part_time` varchar(20) DEFAULT NULL,
  `day_shift` varchar(20) DEFAULT NULL,
  `post_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `state` varchar(50) DEFAULT 'active',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `skills` text,
  `town` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`job_post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `job_post`
--

INSERT INTO `job_post` (`job_post_id`, `user_id`, `title`, `description`, `requirement`, `qualification`, `salary_range`, `part_time`, `day_shift`, `post_date`, `state`, `created_at`, `updated_at`, `skills`, `town`, `country`) VALUES
(24, 24, 'developpement ', 'fazefxrv in', 'azefzr', 'fez', '200000', '08h-20h', 'january - december', '2025-03-28 13:38:03', 'active', '2025-03-28 13:38:03', '2025-04-01 13:28:24', 'effcvoo,,g),rz', 'Douala', 'Cameroun'),
(25, 25, 'Manager', 'ax,nzejcààf', 'nzenf eincf rzeigfnenrgnifitzerugivniutzergtnzncafxor', 'f ijeznzic', '250000- 400000', '8h -22h', 'lundi a lundi', '2025-03-28 13:49:58', 'active', '2025-03-28 13:49:58', '2025-03-28 13:50:37', 'g corzevicàgitzv ', 'quebec', 'canada'),
(26, 24, 'developpement web', 'zaea', 'zerzeracrez', 'un developpeur web et mobile', '250.000', '10h30 14h50', 'all day', '2025-04-01 00:27:27', 'active', '2025-04-01 00:27:27', '2025-04-01 00:27:27', 'aezzrzre', 'Douala', 'cameroun');

-- --------------------------------------------------------

--
-- Structure de la table `selected`
--

DROP TABLE IF EXISTS `selected`;
CREATE TABLE IF NOT EXISTS `selected` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idjob` int DEFAULT NULL,
  `ident` int DEFAULT NULL,
  `idselecte` int DEFAULT NULL,
  `adresse` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `montant` float DEFAULT NULL,
  `datet` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `cv` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idjob` (`idjob`),
  KEY `ident` (`ident`),
  KEY `idselecte` (`idselecte`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `selected`
--

INSERT INTO `selected` (`id`, `idjob`, `ident`, `idselecte`, `adresse`, `montant`, `datet`, `cv`) VALUES
(1, 24, 24, 1, 'mayclaysal@gmail.com', 200000, '2025-04-01 12:38:10', '67e741e57c5cf.pdf'),
(2, 26, 24, 7, 'mysal@gmail.com', 250, '2025-03-01 13:13:02', '67ebe5dcb72c1.pdf'),
(5, 26, 24, 7, 'mysal@gmail.com', 250, '2025-03-01 13:16:57', '67ebe5dcb72c1.pdf'),
(11, 26, 24, 8, 'hebry@gmail.com', 250, '2025-04-01 13:29:45', '67ebe4a2f0d73.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `second_name` varchar(70) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `date_of_b` date DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('candidate','employer','admin') NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `town` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `company_type` varchar(30) NOT NULL,
  `company_num` varchar(70) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `name`, `second_name`, `email`, `date_of_b`, `password`, `role`, `gender`, `phone`, `image`, `town`, `country`, `company_type`, `company_num`, `created_at`, `updated_at`) VALUES
(1, 'Mayc ', 'Laysal', 'mayclaysal@gmail.com', '2005-04-08', '58543.l', 'candidate', 'Male', '', '', '', '', '', '', '2025-03-20 14:17:44', '2025-03-20 14:17:44'),
(3, 'Mayc ', 'Laysal', 'mayclay@gmail.com', '2005-04-08', '58543.l', 'candidate', 'Male', '650408447', '', '', '', '', '', '2025-03-20 14:23:06', '2025-03-20 14:23:06'),
(7, 'Laysal IT co.', NULL, 'mysal@gmail.com', NULL, '12345678', 'candidate', NULL, '87654321', 'uploads/67dc38d76ab6b_c6.png.jpg', 'Douala', 'Cameroon', 'Sarl', '111BM4RE66', '2025-03-20 16:49:15', '2025-04-01 13:48:38'),
(8, 'henry', NULL, 'vanelleflorengaminana@gmail.com', NULL, '123456789', 'candidate', NULL, '214345', 'uploads/67e17deacf057_c3.png.jpg', 'Douala', 'Cameroon', 'SA', '123D', '2025-03-24 16:44:42', '2025-04-04 09:13:45'),
(9, 'Ngomse', 'Laysal', 'maylaysal@gmail.com', '2004-12-12', '1234', 'candidate', 'Male', '123456789', '', '', '', '', '', '2025-03-27 22:49:15', '2025-03-27 22:49:15'),
(19, 'maxime', 'christ', 'maxime@gmail.com', '2003-04-12', '$2y$10$6bx9BwyvsR1NTWr6jDYyw.3jjxE333AOWYTeZQPHDUc', 'candidate', 'Male', '650408447', '', '', '', '', '', '2025-03-27 23:52:30', '2025-03-27 23:52:30'),
(22, 'admin', 'Laysal', 'maxim@gmail.com', '1988-08-09', '123456789', 'admin', 'Male', '693755672', '', '', '', '', '', '2025-03-27 23:55:13', '2025-04-03 00:33:41'),
(24, 'DEV', NULL, 'dev@gmail.com', NULL, '123456789', 'employer', NULL, '655491178', 'uploads/67e67aa4834d3_logo1.jpeg', 'Douala', 'cameroun', 'SARL', 'AZSED123', '2025-03-28 11:32:04', '2025-03-28 11:32:04'),
(25, 'state', NULL, 'state@gmail.com', NULL, '123456789', 'employer', NULL, '655491178', 'uploads/67e69a89ad87d_I will create a minimalist and creative business logo.jpeg', 'Quebec', 'Canada', 'S.A', '142AEE', '2025-03-28 13:48:09', '2025-03-28 13:48:09');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `job_application`
--
ALTER TABLE `job_application`
  ADD CONSTRAINT `job_application_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `job_post`
--
ALTER TABLE `job_post`
  ADD CONSTRAINT `job_post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
