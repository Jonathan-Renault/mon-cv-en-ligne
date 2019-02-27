-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 15 nov. 2018 à 13:51
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vaccination_bdd191018`
--

-- --------------------------------------------------------

--
-- Structure de la table `v5_contact`
--

CREATE TABLE `v5_contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `objet` text NOT NULL,
  `message` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `v5_contact`
--

INSERT INTO `v5_contact` (`id`, `nom`, `mail`, `objet`, `message`, `created_at`) VALUES
(1, 'emy', 'e@live.fr', 'hello', 'hkglu(jfltfnkrlfnkltnfkuonllfklutgfk,g,:l;mèhj', '2018-11-14'),
(2, '', '', '', '', '2018-11-14'),
(3, '', '', '', '', '2018-11-14');

-- --------------------------------------------------------

--
-- Structure de la table `v5_relation`
--

CREATE TABLE `v5_relation` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vaccin_id` int(11) NOT NULL,
  `date_injection` date DEFAULT NULL,
  `rappel` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `v5_users`
--

CREATE TABLE `v5_users` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` enum('actif','inactif') NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `sexe` enum('femme','homme') DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `role` enum('utilisateur','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `v5_users`
--

INSERT INTO `v5_users` (`id`, `mail`, `mdp`, `token`, `created_at`, `updated_at`, `status`, `nom`, `prenom`, `sexe`, `date_naissance`, `role`) VALUES
(1, 'Irwin@me.com', '', '0', '2018-06-06 12:23:00', NULL, 'actif', 'Irwin', 'Armando', 'homme', '1960-01-25', 'utilisateur'),
(2, 'Whitney@me.com', '', '0', '2018-06-07 12:23:00', NULL, 'actif', 'Whitney', 'Holmes', 'homme', '1960-01-26', 'utilisateur'),
(3, 'Griffin@me.com', '', '0', '2018-06-08 12:23:00', NULL, 'actif', 'Griffin', 'Tanek', 'homme', '1960-01-27', 'utilisateur'),
(4, 'Holder@me.com', '', '0', '2018-06-09 12:23:00', NULL, 'actif', 'Holder', 'Sandra', 'femme', '1960-01-28', 'utilisateur'),
(5, 'Potter@me.com', '', '0', '2018-06-10 12:23:00', NULL, 'actif', 'Potter', 'Jerry', 'homme', '1960-01-29', 'utilisateur'),
(6, 'Graham@me.com', '', '0', '2018-06-11 12:23:00', NULL, 'actif', 'Graham', 'Barry', 'homme', '2000-12-12', 'utilisateur'),
(7, 'Dyer@me.com', '', '0', '2018-06-12 12:23:00', NULL, 'actif', 'Dyer', 'Mikayla', 'femme', '1960-01-31', 'utilisateur'),
(8, 'Drake@me.com', '', '0', '2018-06-13 12:23:00', NULL, 'actif', 'Drake', 'Malachi', 'femme', '1960-02-01', 'utilisateur'),
(9, 'Calderon@me.com', '', '0', '2018-06-14 12:23:00', NULL, 'actif', 'Calderon', 'Emerson', 'homme', '1989-12-15', 'utilisateur'),
(10, 'Cleveland@me.com', '', '0', '2018-01-15 12:45:00', NULL, 'actif', 'Cleveland', 'Pamela', 'femme', '1960-02-03', 'utilisateur'),
(11, 'Cook@me.com', '', '0', '2018-01-16 12:45:00', NULL, 'actif', 'Cook', 'Noelle', 'femme', '1960-02-04', 'utilisateur'),
(12, 'Pena@me.com', '', '0', '2018-01-17 12:45:00', NULL, 'actif', 'Pena', 'Yardley', 'homme', '1960-02-05', 'utilisateur'),
(13, 'Martinez@me.com', '', '0', '2018-01-18 12:45:00', NULL, 'actif', 'Martinez', 'Ronan', 'homme', '1960-02-06', 'utilisateur'),
(14, 'Baird@me.com', '', '0', '2018-01-19 12:45:00', NULL, 'actif', 'Baird', 'Basia', 'femme', '1960-02-07', 'utilisateur'),
(15, 'Mack@me.com', '', '0', '2018-01-20 12:45:00', NULL, 'actif', 'Mack', 'Lila', 'femme', '1960-02-08', 'utilisateur'),
(16, 'Luna@me.com', '', '0', '2018-08-21 14:49:00', NULL, 'actif', 'Luna', 'Ulla', 'femme', '1960-02-09', 'utilisateur'),
(17, 'Ochoa@me.com', '', '0', '2018-06-22 12:23:00', NULL, 'actif', 'Ochoa', 'Christian', 'homme', '1960-02-10', 'utilisateur'),
(18, 'Marquez@me.com', '', '0', '2018-06-23 12:23:00', NULL, 'actif', 'Marquez', 'Yardley', 'femme', '1960-02-11', 'utilisateur'),
(19, 'Boyle@me.com', '', '0', '2018-06-24 14:27:00', NULL, 'actif', 'Boyle', 'Denton', 'homme', '1960-02-12', 'utilisateur'),
(20, 'Gonzales@me.com', '', '0', '2018-06-25 12:23:00', NULL, 'actif', 'Gonzales', 'Stuart', 'homme', '1960-02-13', 'utilisateur'),
(21, 'Hayes@me.com', '', '0', '2018-06-26 12:23:00', NULL, 'actif', 'Hayes', 'Rooney', 'homme', '1960-02-14', 'utilisateur'),
(22, 'Thompson@me.com', '', '0', '2018-06-27 12:23:00', NULL, 'actif', 'Thompson', 'Levi', 'homme', '1960-02-15', 'utilisateur'),
(23, 'Hess@me.com', '', '0', '2018-06-28 12:23:00', NULL, 'actif', 'Hess', 'Uriel', 'femme', '1960-02-16', 'utilisateur'),
(24, 'Mathews@me.com', '', '0', '2018-06-29 12:23:00', NULL, 'actif', 'Mathews', 'Vielka', 'femme', '1960-02-17', 'utilisateur'),
(25, 'Buckley@me.com', '', '0', '2018-06-30 12:23:00', NULL, 'actif', 'Buckley', 'Zane', 'femme', '1960-02-18', 'utilisateur'),
(26, 'Duke@me.com', '', '0', '2018-07-01 12:23:00', NULL, 'actif', 'Duke', 'Bert', 'femme', '1962-05-19', 'utilisateur'),
(27, 'Monroe@me.com', '', '0', '2018-07-02 12:23:00', NULL, 'actif', 'Monroe', 'Baxter', 'femme', '1962-10-10', 'utilisateur'),
(28, 'Barber@me.com', '', '0', '2018-01-17 12:45:00', NULL, 'actif', 'Barber', 'Arden', 'femme', '1981-05-15', 'utilisateur'),
(29, 'Hubbard@me.com', '', '0', '2018-01-18 12:45:00', NULL, 'actif', 'Hubbard', 'Nigel', 'femme', '1981-12-16', 'utilisateur'),
(30, 'Molina@me.com', '', '0', '2018-01-19 12:45:00', NULL, 'actif', 'Molina', 'Willa', 'femme', '1964-10-22', 'utilisateur'),
(31, 'Castillo@me.com', '', '0', '2018-07-06 12:23:00', NULL, 'actif', 'Castillo', 'Piper', 'femme', '1959-06-03', 'utilisateur'),
(32, 'Stevenson@me.com', '', '0', '2018-07-07 12:23:00', NULL, 'actif', 'Stevenson', 'Jared', 'femme', '1959-06-04', 'utilisateur'),
(33, 'Salinas@me.com', '', '0', '2018-07-08 12:23:00', NULL, 'actif', 'Salinas', 'Michelle', 'femme', '1991-06-01', 'utilisateur'),
(34, 'Mcintyre@me.com', '', '0', '2018-07-09 12:23:00', NULL, 'actif', 'Mcintyre', 'Galena', 'femme', '1943-11-01', 'utilisateur'),
(35, 'Kane@me.com', '', '0', '2018-07-10 12:23:00', NULL, 'actif', 'Kane', 'Dexter', 'femme', '2001-12-01', 'utilisateur'),
(36, 'Houston@me.com', '', '0', '2018-07-11 12:23:00', NULL, 'actif', 'Houston', 'Emerson', 'femme', '1991-06-01', 'utilisateur'),
(37, 'Parrish@me.com', '', '0', '2018-07-12 12:23:00', NULL, 'actif', 'Parrish', 'Zephania', 'femme', '1943-11-01', 'utilisateur'),
(38, 'Juarez@me.com', '', '0', '2018-07-13 12:23:00', NULL, 'actif', 'Juarez', 'Yen', 'femme', '1955-04-27', 'utilisateur'),
(39, 'Ramsey@me.com', '', '0', '2018-07-14 12:23:00', NULL, 'actif', 'Ramsey', 'Veronica', 'femme', '1987-11-28', 'utilisateur'),
(40, 'Henson@me.com', '', '0', '2018-07-15 12:23:00', NULL, 'actif', 'Henson', 'Allegra', 'femme', '1972-08-15', 'utilisateur'),
(41, 'Mcgee@me.com', '', '0', '2018-07-16 12:23:00', NULL, 'actif', 'Mcgee', 'Alexa', 'femme', '1974-04-28', 'utilisateur'),
(42, 'Roberson@me.com', '', '0', '2018-07-17 12:23:00', NULL, 'actif', 'Roberson', 'Heather', 'femme', '1970-04-29', 'utilisateur'),
(43, 'Klein@me.com', '', '0', '2018-02-18 00:23:00', NULL, 'actif', 'Klein', 'Francis', 'femme', '1991-06-01', 'utilisateur'),
(44, 'Britt@me.com', '', '0', '2018-07-19 12:23:00', NULL, 'actif', 'Britt', 'Libby', 'femme', '1963-04-07', 'utilisateur'),
(45, 'Reid@me.com', '', '0', '2018-07-20 12:23:00', NULL, 'actif', 'Reid', 'Fatima', 'femme', '2012-10-11', 'utilisateur'),
(46, 'Bullock@me.com', '', '0', '2018-07-21 12:23:00', NULL, 'actif', 'Bullock', 'Ainsley', 'femme', '1945-10-12', 'utilisateur'),
(47, 'Rollins@me.com', '', '0', '2018-07-22 12:23:00', NULL, 'actif', 'Rollins', 'Inez', 'femme', '1994-08-01', 'utilisateur'),
(48, 'Hubbard@me.com', '', '0', '2018-07-23 12:23:00', NULL, 'actif', 'Hubbard', 'Stewart', 'femme', '1964-04-11', 'utilisateur'),
(49, 'Willis@me.com', '', '0', '2018-07-24 12:23:00', NULL, 'actif', 'Willis', 'Carson', 'femme', '1982-10-18', 'utilisateur'),
(50, 'Goff@me.com', '', '0', '2018-07-25 12:23:00', NULL, 'actif', 'Goff', 'Dieter', 'femme', '1984-08-14', 'utilisateur'),
(51, 'Roman@me.com', '', '0', '2018-07-26 12:23:00', NULL, 'actif', 'Roman', 'Nora', 'femme', '1974-04-28', 'utilisateur'),
(52, 'Pace@me.com', '', '0', '2018-07-27 12:23:00', NULL, 'actif', 'Pace', 'Clinton', 'femme', '1965-08-06', 'utilisateur'),
(53, 'Frost@me.com', '', '0', '2018-07-28 12:23:00', NULL, 'actif', 'Frost', 'Sonia', 'femme', '1950-08-09', 'utilisateur'),
(54, 'Flores@me.com', '', '0', '2018-07-29 12:23:00', NULL, 'actif', 'Flores', 'Valentine', 'femme', '1982-10-18', 'utilisateur'),
(55, 'Bush@me.com', '', '0', '2018-07-30 12:23:00', NULL, 'actif', 'Bush', 'Savannah', 'femme', '1984-08-14', 'utilisateur'),
(56, 'Harrington@me.com', '', '0', '2018-07-31 12:23:00', NULL, 'actif', 'Harrington', 'Ivana', 'femme', '1974-04-28', 'utilisateur'),
(57, 'Walker@me.com', '', '0', '2018-08-01 12:23:00', NULL, 'actif', 'Walker', 'Judah', 'femme', '1988-01-16', 'utilisateur'),
(58, 'Nieves@me.com', '', '0', '2018-08-02 12:23:00', NULL, 'actif', 'Nieves', 'Asher', 'femme', '1968-09-17', 'utilisateur'),
(59, 'Castro@me.com', '', '0', '2018-08-03 12:23:00', NULL, 'actif', 'Castro', 'Beverly', 'femme', '1964-04-11', 'utilisateur'),
(60, 'Warren@me.com', '', '0', '2018-08-04 12:23:00', NULL, 'actif', 'Warren', 'Lionel', 'femme', '1953-01-28', 'utilisateur'),
(61, 'Irwin@me.com', '', '0', '2018-10-05 02:23:00', NULL, 'actif', 'Irwin', 'Armando', 'femme', '1950-08-09', 'utilisateur'),
(62, 'Whitney@me.com', '', '0', '2018-08-06 12:23:00', NULL, 'actif', 'Whitney', 'Holmes', 'femme', '1950-08-09', 'utilisateur'),
(63, 'Griffin@me.com', '', '0', '2018-08-07 12:23:00', NULL, 'actif', 'Griffin', 'Tanek', 'femme', '1953-01-08', 'utilisateur'),
(64, 'Holder@me.com', '', '0', '2018-08-08 12:23:00', NULL, 'actif', 'Holder', 'Sandra', 'femme', '1980-08-15', 'utilisateur'),
(65, 'Potter@me.com', '', '0', '2018-08-09 12:23:00', NULL, 'actif', 'Potter', 'Jerry', 'femme', '1970-06-12', 'utilisateur'),
(66, 'Graham@me.com', '', '0', '2018-08-10 12:23:00', NULL, 'actif', 'Graham', 'Barry', 'femme', '1974-04-28', 'utilisateur'),
(67, 'Dyer@me.com', '', '0', '2018-08-11 12:23:00', NULL, 'actif', 'Dyer', 'Mikayla', 'femme', '1984-08-14', 'utilisateur'),
(68, 'Drake@me.com', '', '0', '2018-08-12 12:23:00', NULL, 'actif', 'Drake', 'Malachi', 'femme', '1969-02-11', 'utilisateur'),
(69, 'Calderon@me.com', '', '0', '2018-08-13 12:23:00', NULL, 'actif', 'Calderon', 'Emerson', 'femme', '1974-08-09', 'utilisateur'),
(70, 'Cleveland@me.com', '', '0', '2018-03-31 17:23:00', NULL, 'actif', 'Cleveland', 'Pamela', 'femme', '1949-03-30', 'utilisateur'),
(71, 'Cook@me.com', '', '0', '2018-08-15 12:23:00', NULL, 'actif', 'Cook', 'Noelle', 'femme', '1982-10-18', 'utilisateur'),
(72, 'Pena@me.com', '', '0', '2018-08-16 12:23:00', NULL, 'actif', 'Pena', 'Yardley', 'femme', '1967-11-01', 'utilisateur'),
(73, 'Martinez@me.com', '', '0', '2018-08-17 12:23:00', NULL, 'actif', 'Martinez', 'Ronan', 'femme', '1965-01-04', 'utilisateur'),
(74, 'Baird@me.com', '', '0', '2018-08-18 12:23:00', NULL, 'actif', 'Baird', 'Basia', 'femme', '1971-09-18', 'utilisateur'),
(75, 'Mack@me.com', '', '0', '2018-08-19 12:23:00', NULL, 'actif', 'Mack', 'Lila', 'femme', '1953-01-28', 'utilisateur'),
(76, 'Luna@me.com', '', '0', '2018-08-20 12:23:00', NULL, 'actif', 'Luna', 'Ulla', 'femme', '1972-09-08', 'utilisateur'),
(77, 'Ochoa@me.com', '', '0', '2018-08-21 12:23:00', NULL, 'actif', 'Ochoa', 'Christian', 'femme', '1966-03-10', 'utilisateur'),
(78, 'Marquez@me.com', '', '0', '2018-08-22 12:23:00', NULL, 'actif', 'Marquez', 'Yardley', 'femme', '1966-03-10', 'utilisateur'),
(79, 'Boyle@me.com', '', '0', '2018-08-23 12:23:00', NULL, 'actif', 'Boyle', 'Denton', 'femme', '1955-04-12', 'utilisateur'),
(80, 'Gonzales@me.com', '', '0', '2018-08-24 12:23:00', NULL, 'actif', 'Gonzales', 'Stuart', 'femme', '1970-06-12', 'utilisateur'),
(81, 'Hayes@me.com', '', '0', '2018-08-25 12:23:00', NULL, 'actif', 'Hayes', 'Rooney', 'femme', '1953-01-08', 'utilisateur'),
(82, 'Thompson@me.com', '', '0', '2018-08-26 12:23:00', NULL, 'actif', 'Thompson', 'Levi', 'femme', '1965-01-04', 'utilisateur'),
(83, 'Hess@me.com', '', '0', '2018-08-27 12:23:00', NULL, 'actif', 'Hess', 'Uriel', 'femme', '1969-02-11', 'utilisateur'),
(84, 'Mathews@me.com', '', '0', '2018-08-28 12:23:00', NULL, 'actif', 'Mathews', 'Vielka', 'femme', '1955-04-12', 'utilisateur'),
(85, 'Buckley@me.com', '', '0', '2018-08-29 12:23:00', NULL, 'actif', 'Buckley', 'Zane', 'femme', '2000-01-28', 'utilisateur'),
(86, 'Duke@me.com', '', '0', '2018-08-30 12:23:00', NULL, 'actif', 'Duke', 'Bert', 'femme', '1929-08-28', 'utilisateur'),
(87, 'Monroe@me.com', '', '0', '2018-08-31 12:23:00', NULL, 'actif', 'Monroe', 'Baxter', 'femme', '1999-02-10', 'utilisateur'),
(88, 'Barber@me.com', '', '0', '2018-09-01 12:23:00', NULL, 'actif', 'Barber', 'Arden', 'femme', '1953-01-08', 'utilisateur'),
(89, 'Hubbard@me.com', '', '0', '2018-09-02 12:23:00', NULL, 'actif', 'Hubbard', 'Nigel', 'femme', '1960-04-22', 'utilisateur'),
(90, 'Molina@me.com', '', '0', '2018-09-03 12:23:00', NULL, 'actif', 'Molina', 'Willa', 'femme', '1960-04-23', 'utilisateur'),
(91, 'Castillo@me.com', '', '0', '2018-09-04 12:23:00', NULL, 'actif', 'Castillo', 'Piper', 'femme', '1960-04-24', 'utilisateur'),
(92, 'Stevenson@me.com', '', '0', '2018-09-05 12:23:00', NULL, 'actif', 'Stevenson', 'Jared', 'femme', '1960-04-25', 'utilisateur'),
(93, 'Salinas@me.com', '', '0', '2018-09-06 12:23:00', NULL, 'actif', 'Salinas', 'Michelle', 'femme', '1960-04-26', 'utilisateur'),
(94, 'Mcintyre@me.com', '', '0', '2018-09-07 12:23:00', NULL, 'actif', 'Mcintyre', 'Galena', 'femme', '1960-04-27', 'utilisateur'),
(95, 'Kane@me.com', '', '0', '2018-09-08 12:23:00', NULL, 'actif', 'Kane', 'Dexter', 'femme', '1960-04-28', 'utilisateur'),
(96, 'Houston@me.com', '', '0', '2018-09-09 12:23:00', NULL, 'actif', 'Houston', 'Emerson', 'femme', '1960-04-29', 'utilisateur'),
(97, 'Parrish@me.com', '', '0', '2018-09-10 12:23:00', NULL, 'actif', 'Parrish', 'Zephania', 'femme', '1960-04-30', 'utilisateur'),
(98, 'Juarez@me.com', '', '0', '2018-09-11 12:23:00', NULL, 'actif', 'Juarez', 'Yen', 'femme', '1960-05-01', 'utilisateur'),
(99, 'Ramsey@me.com', '', '0', '2018-09-12 12:23:00', NULL, 'actif', 'Ramsey', 'Veronica', 'femme', '1960-05-02', 'utilisateur'),
(100, 'Henson@me.com', '', '0', '2018-09-13 12:23:00', NULL, 'actif', 'Henson', 'Allegra', 'femme', '1960-05-03', 'utilisateur'),
(101, 'Mcgee@me.com', '', '0', '2018-09-14 12:23:00', NULL, 'actif', 'Mcgee', 'Alexa', 'femme', '1960-05-04', 'utilisateur'),
(102, 'Roberson@me.com', '', '0', '2018-09-15 12:23:00', NULL, 'actif', 'Roberson', 'Heather', 'femme', '1963-04-07', 'utilisateur'),
(103, 'Klein@me.com', '', '0', '2018-09-16 12:23:00', NULL, 'actif', 'Klein', 'Francis', 'femme', '2012-10-11', 'utilisateur'),
(104, 'Britt@me.com', '', '0', '2018-09-17 12:23:00', NULL, 'actif', 'Britt', 'Libby', 'femme', '1945-10-12', 'utilisateur'),
(105, 'Reid@me.com', '', '0', '2018-09-18 12:23:00', NULL, 'actif', 'Reid', 'Fatima', 'femme', '1960-05-08', 'utilisateur'),
(106, 'Bullock@me.com', '', '0', '2018-09-19 12:23:00', NULL, 'actif', 'Bullock', 'Ainsley', 'femme', '1960-05-09', 'utilisateur'),
(107, 'Rollins@me.com', '', '0', '2018-09-20 12:23:00', NULL, 'actif', 'Rollins', 'Inez', 'femme', '1960-05-10', 'utilisateur'),
(108, 'Hubbard@me.com', '', '0', '2018-09-21 12:23:00', NULL, 'actif', 'Hubbard', 'Stewart', 'femme', '1960-05-11', 'utilisateur'),
(109, 'Willis@me.com', '', '0', '2018-09-22 12:23:00', NULL, 'actif', 'Willis', 'Carson', 'femme', '1960-05-12', 'utilisateur'),
(110, 'Goff@me.com', '', '0', '2018-09-23 12:23:00', NULL, 'actif', 'Goff', 'Dieter', 'femme', '1960-05-13', 'utilisateur'),
(111, 'Roman@me.com', '', '0', '2018-09-24 12:23:00', NULL, 'actif', 'Roman', 'Nora', 'femme', '1960-05-14', 'utilisateur'),
(112, 'Pace@me.com', '', '0', '2018-09-25 12:23:00', NULL, 'actif', 'Pace', 'Clinton', 'femme', '1960-05-15', 'utilisateur'),
(113, 'Frost@me.com', '', '0', '2018-09-26 12:23:00', NULL, 'actif', 'Frost', 'Sonia', 'femme', '1960-05-16', 'utilisateur'),
(114, 'Flores@me.com', '', '0', '2018-09-27 12:23:00', NULL, 'actif', 'Flores', 'Valentine', 'femme', '1960-05-17', 'utilisateur'),
(115, 'Bush@me.com', '', '0', '2018-09-28 12:23:00', NULL, 'actif', 'Bush', 'Savannah', 'femme', '1960-05-18', 'utilisateur'),
(116, 'Harrington@me.com', '', '0', '2018-09-29 12:23:00', NULL, 'actif', 'Harrington', 'Ivana', 'femme', '1960-05-19', 'utilisateur'),
(117, 'Walker@me.com', '', '0', '2018-09-30 12:23:00', NULL, 'actif', 'Walker', 'Judah', 'femme', '1960-05-20', 'utilisateur'),
(118, 'Nieves@me.com', '', '0', '2018-10-01 12:23:00', NULL, 'actif', 'Nieves', 'Asher', 'femme', '1960-05-21', 'utilisateur'),
(119, 'Castro@me.com', '', '0', '2018-10-02 12:23:00', NULL, 'actif', 'Castro', 'Beverly', 'femme', '1963-04-07', 'utilisateur'),
(120, 'Warren@me.com', '', '0', '2018-10-03 12:23:00', NULL, 'actif', 'Warren', 'Lionel', 'femme', '2012-10-11', 'utilisateur'),
(121, 'Mendoza@me.com', '', '0', '2018-10-04 12:23:00', NULL, 'actif', 'Mendoza', 'Geoffrey', 'femme', '1945-10-12', 'utilisateur'),
(122, 'Cooley@me.com', '', '0', '2018-10-05 12:23:00', NULL, 'actif', 'Cooley', 'Cole', 'femme', '1960-05-25', 'utilisateur'),
(123, 'Torres@me.com', '', '0', '2018-10-06 12:23:00', NULL, 'actif', 'Torres', 'Nayda', 'femme', '1960-05-26', 'utilisateur'),
(124, 'Gallagher@me.com', '', '0', '2018-10-07 12:23:00', NULL, 'actif', 'Gallagher', 'Jayme', 'femme', '1960-05-27', 'utilisateur'),
(125, 'Henson@me.com', '', '0', '2018-10-08 12:23:00', NULL, 'actif', 'Henson', 'Grace', 'femme', '1960-05-28', 'utilisateur'),
(126, 'Warner@me.com', '', '0', '2018-10-09 12:23:00', NULL, 'actif', 'Warner', 'Casey', 'femme', '1960-05-29', 'utilisateur'),
(127, 'Knight@me.com', '', '0', '2018-10-10 12:23:00', NULL, 'actif', 'Knight', 'Charles', 'femme', '1960-05-30', 'utilisateur'),
(128, 'Hernandez@me.com', '', '0', '2018-10-11 12:23:00', NULL, 'actif', 'Hernandez', 'Winter', 'femme', '1960-05-31', 'utilisateur'),
(129, 'Watson@me.com', '', '0', '2018-10-12 12:23:00', NULL, 'actif', 'Watson', 'Venus', 'femme', '1960-06-01', 'utilisateur'),
(130, 'Estes@me.com', '', '0', '2018-10-13 12:23:00', NULL, 'actif', 'Estes', 'Jescie', 'femme', '1960-06-02', 'utilisateur'),
(131, 'Mack@me.com', '', '0', '2018-10-14 12:23:00', NULL, 'actif', 'Mack', 'Patience', 'femme', '1960-06-03', 'utilisateur'),
(132, 'Baker@me.com', '', '0', '2018-10-15 12:23:00', NULL, 'actif', 'Baker', 'Galena', 'femme', '1960-06-04', 'utilisateur'),
(133, 'Glover@me.com', '', '0', '2018-10-16 12:23:00', NULL, 'actif', 'Glover', 'Zephr', 'femme', '1960-06-05', 'utilisateur'),
(134, 'Benton@me.com', '', '0', '2018-10-17 12:23:00', NULL, 'actif', 'Benton', 'Kelsey', 'femme', '1960-06-06', 'utilisateur'),
(135, 'Matthews@me.com', '', '0', '2018-10-18 12:23:00', NULL, 'actif', 'Matthews', 'Ishmael', 'femme', '1960-06-07', 'utilisateur'),
(136, 'Bradley@me.com', '', '0', '2018-10-19 12:23:00', NULL, 'actif', 'Bradley', 'Derek', 'femme', '1960-06-08', 'utilisateur'),
(137, 'Thornton@me.com', '', '0', '2018-10-20 12:23:00', NULL, 'actif', 'Thornton', 'Zoe', 'femme', '1960-06-09', 'utilisateur'),
(138, 'Fields@me.com', '', '0', '2018-10-21 12:23:00', NULL, 'actif', 'Fields', 'Maxwell', 'femme', '1960-06-10', 'utilisateur'),
(139, 'Trevino@me.com', '', '0', '2018-10-22 12:23:00', NULL, 'actif', 'Trevino', 'Wynter', 'femme', '1960-06-11', 'utilisateur'),
(140, 'Barnett@me.com', '', '0', '2018-10-23 12:23:00', NULL, 'actif', 'Barnett', 'Maggy', 'femme', '1960-06-12', 'utilisateur'),
(141, 'Huber@me.com', '', '0', '2018-10-24 12:23:00', NULL, 'actif', 'Huber', 'Aiko', 'femme', '1960-06-13', 'utilisateur'),
(142, 'Franklin@me.com', '', '0', '2018-10-25 12:23:00', NULL, 'actif', 'Franklin', 'Hedy', 'femme', '1960-06-14', 'utilisateur'),
(143, 'Burks@me.com', '', '0', '2018-10-26 12:23:00', NULL, 'actif', 'Burks', 'Yardley', 'femme', '1960-06-15', 'utilisateur'),
(144, 'Valentine@me.com', '', '0', '2018-10-27 12:23:00', NULL, 'actif', 'Valentine', 'Karina', 'femme', '1960-06-16', 'utilisateur'),
(145, 'Frazier@me.com', '', '0', '2018-10-28 12:23:00', NULL, 'actif', 'Frazier', 'Cally', 'femme', '1960-06-17', 'utilisateur'),
(146, 'Sanders@me.com', '', '0', '2018-10-29 12:23:00', NULL, 'actif', 'Sanders', 'Abraham', 'femme', '1960-06-18', 'utilisateur'),
(147, 'Bartlett@me.com', '', '0', '2018-10-30 12:23:00', NULL, 'actif', 'Bartlett', 'Yardley', 'femme', '1960-06-19', 'utilisateur'),
(148, 'Mccarty@me.com', '', '0', '2018-10-31 12:23:00', NULL, 'actif', 'Mccarty', 'Teegan', 'femme', '1963-04-07', 'utilisateur'),
(149, 'Beck@me.com', '', '0', '2018-11-01 12:23:00', NULL, 'actif', 'Beck', 'Kalia', 'femme', '2012-10-11', 'utilisateur'),
(150, 'Chavez@me.com', '', '0', '2018-11-02 12:23:00', NULL, 'actif', 'Chavez', 'Kendall', 'femme', '1945-10-12', 'utilisateur'),
(151, 'Clarke@me.com', '', '0', '2018-11-03 12:23:00', NULL, 'actif', 'Clarke', 'Zelda', 'femme', '1960-06-23', 'utilisateur'),
(152, 'Mcfadden@me.com', '', '0', '2018-11-04 12:23:00', NULL, 'actif', 'Mcfadden', 'Scarlett', 'femme', '1960-06-24', 'utilisateur'),
(153, 'Charles@me.com', '', '0', '2018-11-05 12:23:00', NULL, 'actif', 'Charles', 'Clayton', 'femme', '1960-06-25', 'utilisateur'),
(154, 'Simpson@me.com', '', '0', '2018-11-06 12:23:00', NULL, 'actif', 'Simpson', 'Mona', 'femme', '1960-06-26', 'utilisateur'),
(155, 'Whitehead@me.com', '', '0', '2018-11-07 12:23:00', NULL, 'actif', 'Whitehead', 'Lucas', 'femme', '1960-06-27', 'utilisateur'),
(156, 'Merrill@me.com', '', '0', '2018-11-08 12:23:00', NULL, 'actif', 'Merrill', 'Genevieve', 'femme', '1960-06-28', 'utilisateur'),
(157, 'Lambert@me.com', '', '0', '2018-11-09 12:23:00', NULL, 'actif', 'Lambert', 'Amery', 'femme', '1960-06-29', 'utilisateur'),
(158, 'Langley@me.com', '', '0', '2018-11-10 12:23:00', NULL, 'actif', 'Langley', 'Rina', 'femme', '1960-06-30', 'utilisateur'),
(159, 'Barlow@me.com', '', '0', '2018-08-01 12:24:00', NULL, 'actif', 'Barlow', 'Reed', 'femme', '1960-07-01', 'utilisateur'),
(160, 'Scott@me.com', '', '0', '2018-11-12 12:23:00', NULL, 'actif', 'Scott', 'Hermione', 'femme', '1960-07-02', 'utilisateur'),
(161, 'del@me.com', '$2y$10$Ln1Ir577rCNeJrTmMMybb.JPnRA19bA01K.zMQ5G6scs2VO1v/L6u', '86M0xINyMtPEPpOQGJ6WUNCnfvvQtCsva3V2QpojjmWqc8XF3U7BfMBL7mUWSzW0eTmIfo35FyZ9lqBSJaMClh0uQ4EaF7L5q6EpQNkI0ZwaXuGcd0vB8wdC', '2018-11-13 12:23:00', '2018-11-15 12:05:13', 'actif', 'del', 'emy', 'femme', '1960-07-03', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `v5_vaccin`
--

CREATE TABLE `v5_vaccin` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `obligatoire` tinyint(1) NOT NULL,
  `validite` int(10) DEFAULT NULL,
  `frequences_injections` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `v5_vaccin`
--

INSERT INTO `v5_vaccin` (`id`, `nom`, `obligatoire`, `validite`, `frequences_injections`, `created_at`, `updated_at`) VALUES
(33, 'Le Tétanos', 1, 240, 'Obligatoire dès la naissance. Les rappels de l\'adulte sont recommandés à âges fixes (25, 45, 65 ans).', '2018-11-01 10:01:21', NULL),
(34, 'La Poliomyélite', 1, 240, 'Obligatoire dès la naissance. Les rappels de l\'adulte sont recommandés à âges fixes (25, 45, 65 ans…).', '2018-11-01 10:01:21', NULL),
(35, 'L’Haemophilius Influenzae B ', 1, 0, 'Obligatoire dès la naissance.  Rappel à 2 mois, 4 mois et 11 mois. Inutile après 5 ans.', '2018-11-01 10:01:21', NULL),
(36, 'La Coqueluche', 1, 120, 'Recommandée à l\'âge de 2 mois ainsi qu\'à l\'entourage du nourrisson si leur dernier rappel de la coqueluche date de plus de 10 ans', '2018-11-01 10:01:21', NULL),
(37, 'L’Hépatite B', 1, 0, 'Recommandée à l\'âge de 2 mois. Si la vaccination n\'a pas été réalisée au cours de la 1ère année de vie, elle peut être réalisée jusqu\'à 15 ans inclus. À partir de 16 ans, elle est recommandée uniquement chez les personnes exposées au risque de l\'hépatite ', '2018-11-01 10:01:21', NULL),
(38, 'La Rougeole', 1, 0, 'Recommandée à l\'âge de 12 mois avec une 2e dose entre 16 et 18 mois', '2018-11-01 10:01:21', NULL),
(39, 'Les Oreillons', 1, 0, 'Recommandée à l\'âge de 12 mois avec une 2e dose entre 16 et 18 mois', '2018-11-01 10:01:21', NULL),
(40, 'La Rubéole', 1, 0, 'Recommandée à l\'âge de 12 mois avec une 2e dose entre 16 et 18 mois', '2018-11-01 10:01:21', NULL),
(41, 'Le Méningocoque ', 1, 0, 'Recommandée à l\'âge de 5 mois avec un rattrapage jusqu\'à 24 ans inclus', '2018-11-01 10:01:21', NULL),
(42, 'Le Pneumocoque', 1, 0, 'Recommandée à l\'âge de 2 mois', '2018-11-01 10:01:21', NULL),
(46, 'Le Papillomavirus Humains ', 0, 0, 'Recommandée chez les jeunes filles de 11 à 14 ans avec un rattrapage jusqu\'à 19 inclus', '2018-11-01 10:01:21', NULL),
(47, 'Fièvre typhoïde', 0, 36, 'La vaccination est par contre clairement indiquée pour des voyages aventureux dans de mauvaises conditions d\'hygiène ou dans des voyages d\'une durée de plus de trois semaines.', '2018-11-01 10:01:21', NULL),
(48, 'La Rage', 0, 60, 'La vaccination de pré-exposition doit être proposée aux sujets ayant un risque élevé de contamination par le virus de la rage. ', '2018-11-01 10:01:21', NULL),
(49, 'La Leptospirose', 0, 24, 'La vaccination peut être proposée pour les personnes susceptibles d\'être en contact avec un environnement contaminé du fait de la pratique régulière et durable d\'une activité en zone humide ou aquatique.', '2018-11-01 10:01:21', NULL),
(50, 'L’Encéphalite japonaise', 0, 0, 'La vaccination contre le virus de l’encéphalite japonaise est recommandée chez les personnes partant en expatriation dans un pays situé dans l\'Asie ou chez des voyageurs devant séjourner dans cette même zone.', '2018-11-01 10:01:21', NULL),
(51, 'L’Encéphalite à Tiques', 0, 36, 'La vaccination contre l’encéphalite à tiques est recommandée chez les voyageurs (adulte et enfant de plus d’1 an) devant séjourner en zone rurale ou boisée des régions touchées (Europe centrale, Europe de l’Est et du Nord, nord de l’Asie centrale, nord de', '2018-11-01 10:01:21', NULL),
(52, 'La Fièvre jaune', 0, 0, 'En France, la vaccination contre la fièvre jaune est obligatoire chez les enfants de plus de 12 mois et les adultes voyageant ou résidant en Guyane.', '2018-11-01 10:01:21', NULL),
(53, 'L\'Hépatite A', 0, 36, 'La vaccination contre l’hépatite A concerne les personnes exposées à ce virus. Elle a pour effet de diminuer fortement le risque de contracter cette infection.', '2018-11-01 10:01:21', NULL),
(54, 'Le Choléra', 0, 0, 'Le personnel humanitaire peut être exposé dans les zones sinistrées et les camps de réfugiés. Notamment en Afrique, Moyen-Orient , Amérique Centrale et en Asie.', '2018-11-01 10:01:21', NULL),
(55, 'La Grippe', 0, 0, 'Recommandée chaque année pour les personnes à risques y compris les enfants à partir de 6 mois, les femmes enceintes et les personnes âgées de 65 ans et plus', '2018-11-01 10:01:21', NULL),
(56, 'La poliomyélite', 0, 0, 'La vaccination contre la poliomyélite s’adresse à tous, enfants et adultes tout au long de la vie. Elle permet d’éviter la maladie et ses complications. ', '2018-11-01 10:01:21', NULL),
(57, 'La Diphtérie', 0, 240, 'Obligatoire dès la naissance. Les rappels de l\'adulte sont recommandés à âges fixes (25, 45, 65 ans…).', '2018-11-01 10:01:21', NULL),
(58, 'Le Zona', 1, 0, 'Recommandée chez les personnes âgées de 65 à 74 ans inclus.', '2018-11-01 10:01:21', NULL),
(62, 'Le Tétanos ', 1, 240, 'Obligatoire dès la naissance. Les rappels de l\'adulte sont recommandés à âges fixes (25, 45, 65 ans…).', '2018-11-01 10:01:21', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `v5_contact`
--
ALTER TABLE `v5_contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `v5_relation`
--
ALTER TABLE `v5_relation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `v5_users`
--
ALTER TABLE `v5_users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `v5_vaccin`
--
ALTER TABLE `v5_vaccin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `v5_contact`
--
ALTER TABLE `v5_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `v5_relation`
--
ALTER TABLE `v5_relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `v5_users`
--
ALTER TABLE `v5_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT pour la table `v5_vaccin`
--
ALTER TABLE `v5_vaccin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
