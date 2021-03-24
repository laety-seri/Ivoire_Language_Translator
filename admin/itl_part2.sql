-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 mars 2021 à 19:05
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `itl_part2`
--

-- --------------------------------------------------------

--
-- Structure de la table `activités`
--

CREATE TABLE `activités` (
  `id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `texte1` varchar(255) NOT NULL,
  `langue_start` varchar(255) NOT NULL,
  `texte2` varchar(255) NOT NULL,
  `langue_end` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `datec` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `data`
--

INSERT INTO `data` (`id`, `texte1`, `langue_start`, `texte2`, `langue_end`, `audio`, `datec`) VALUES
(1, 'femme', 'Français', 'wonnon', 'bété', '../daudios/BTfemme.m4a', '2021-03-24 01:55:18'),
(2, 'viens manger', 'Français', 'hi ké li', 'bété', '../daudios/BTviensmanger.m4a', '2020-07-03 01:17:09'),
(3, 'je suis une femme', 'Français', 'é non wonnon mon', 'bété', '../daudios/BTjesuisunefemme.m4a', '2020-07-03 01:22:04'),
(4, 'bonjour', 'dioula', 'mo ah eh', 'bété', '../daudios/4keus_feat._niska_m.d_aac_83104.m4a', '2020-08-21 12:14:42'),
(5, 'difficile', 'Français', 'a ka gbre', 'dioula', '../daudios/difficile.3gpp', '2020-08-24 03:21:31'),
(6, 'facile', 'Français', 'a ka nongo', 'dioula', '../daudios/facile.3gpp', '2020-08-24 03:23:04'),
(7, 'impossible', 'Français', 'kebari', 'dioula', '../daudios/impossible.3gpp', '2020-08-24 03:24:43'),
(8, 'jeune', 'Français', 'kanbere', 'dioula', '../daudios/jeune.3gpp', '2020-08-24 03:25:30'),
(9, 'pauvre', 'Français', 'fantan', 'dioula', '../daudios/pauvre.3gpp', '2020-08-24 03:26:24'),
(10, 'propre', 'Français', 'sannia', 'dioula', '../daudios/propre.3gpp', '2020-08-24 03:27:38'),
(11, 'rouge', 'Français', 'wouleman', 'dioula', '../daudios/rouge.3gpp', '2020-08-24 03:28:19'),
(12, 'gros', 'Français', 'a ka bo', 'dioula', '../daudios/gros.3gpp', '2020-08-24 03:28:56'),
(13, 'mauvais', 'Français', 'a ka djougou', 'dioula', '../daudios/mauvais.3gpp', '2020-08-24 03:29:42'),
(14, 'blanc', 'Français', 'toubabou', 'dioula', '../daudios/blanc.3gpp', '2020-08-24 03:30:06'),
(15, 'dernier', 'Français', 'la ban', 'dioula', '../daudios/dernier.3gpp', '2020-08-24 03:32:15'),
(16, 'froid', 'Français', 'nenain', 'dioula', '../daudios/froid.3gpp', '2020-08-24 03:34:18'),
(17, 'seul', 'Français', 'kele', 'dioula', '../daudios/seul.3gpp', '2020-08-24 03:35:15'),
(18, 'chef', 'Français', 'massa', 'dioula', '../daudios/chef.3gpp', '2020-08-24 03:35:44'),
(19, 'enfant', 'Français', 'dein', 'dioula', '../daudios/enfant.3gpp', '2020-08-24 03:36:19'),
(20, 'mort', 'Français', 'chouu', 'dioula', '../daudios/mort.3gpp', '2020-08-24 03:37:11'),
(21, 'bouche', 'Français', 'da', 'dioula', '../daudios/bouche.3gpp', '2020-08-24 03:39:22'),
(22, 'voix', 'Français', 'kan', 'dioula', '../daudios/voix.3gpp', '2020-08-24 03:39:50'),
(23, 'paix', 'Français', 'bein', 'dioula', '../daudios/paix.3gpp', '2020-08-24 03:40:15'),
(24, 'bonjour', 'Français', 'ani sogoma', 'dioula', '../daudios/bonjour.3gpp', '2020-08-24 03:57:47'),
(25, 'A demain', 'Français', 'anbissini', 'dioula', '../daudios/a demain.3gpp', '2020-08-24 03:58:40'),
(26, 'bonsoir', 'Français', 'ani sou', 'dioula', '../daudios/bonsoir nuit.3gpp', '2020-08-24 03:59:38'),
(27, 'Ca va', 'Français', 'I kakene wa ', 'dioula', '../daudios/ça va .3gpp', '2020-08-24 04:01:22'),
(28, 'et la santé?', 'Français', 'I fari be di', 'dioula', '../daudios/et la santé.3gpp', '2020-08-24 04:03:54'),
(29, 'Et ta famille', 'Français', 'Somorodô', 'dioula', '../daudios/et ta famille tacour.3gpp', '2020-08-24 04:05:03'),
(30, 'et les enfants?', 'Français', 'dîn ka kene', 'dioula', '../daudios/et les enfants.3gpp', '2020-08-24 04:08:11'),
(31, 'et ta femme?', 'Français', 'i Moussodô', 'dioula', '../daudios/et ta femme.3gpp', '2020-08-24 04:09:35'),
(32, 'elle va bien', 'Français', 'A kakene', 'dioula', '../daudios/elle va bien.3gpp', '2020-08-24 04:10:30'),
(33, 'la matinée s’est bien passée?', 'Français', 'ere tle na wa', 'dioula', '../daudios/lamatinéesestbien passé.3gpp', '2020-08-24 04:15:17'),
(34, 'Que Dieu nous accorde demain', 'Français', 'Allah ka aôn be deme', 'dioula', '../daudios/que DIEU nous accorde demain.3gpp', '2020-08-24 04:16:37'),
(35, 'Que la nuit se passe bien', 'Français', 'Ka dougou niou mân gouin', 'dioula', '../daudios/que la nuit se passe bien.3gpp', '2020-08-24 04:19:32'),
(36, 'Merci', 'Français', 'Amina', 'dioula', '../daudios/merci.3gpp', '2020-08-24 04:20:59'),
(37, 'A plus tard ', 'Français', 'Anbedoni', 'dioula', '../daudios/a plutard.3gpp', '2020-08-24 04:22:06'),
(38, 'Bonne arrivée', 'Français', 'Adanse', 'dioula', '../daudios/bonne arrivée.3gpp', '2020-08-24 04:22:52'),
(39, 'Vite vite', 'Français', 'diouna diouna ', 'dioula', '../daudios/vite vite.3gpp', '2020-08-24 04:26:03'),
(40, 'Donne moi un peu d’eau', 'Français', 'Dji doni djân', 'dioula', '../daudios/donne moi un peu deau.3gpp', '2020-08-24 04:27:42'),
(41, 'Pardon', 'Français', 'Sabari', 'dioula', '../daudios/pardon.3gpp', '2020-08-24 04:30:07'),
(42, 'Bon travail', 'Français', 'Anibara', 'dioula', '../daudios/bon travail.3gpp', '2020-08-24 04:32:06'),
(43, 'Beaucoup', 'Français', 'Thiama', 'dioula', '../daudios/beaucoup.3gpp', '2020-08-24 04:32:52'),
(44, 'Donne moi beaucoup d’argent', 'Français', 'Wari thiama djân', 'dioula', '../daudios/donne moi beaucoup dargent.3gpp', '2020-08-24 04:36:44'),
(45, 'Venez', 'Français', 'Ayi na', 'dioula', '../daudios/venez.3gpp', '2020-08-24 04:43:34'),
(46, 'On va manger', 'Français', 'Aôn bi doumini ke', 'dioula', '../daudios/on va manger.3gpp', '2020-08-24 04:48:18'),
(47, 'Je l’ai vu', 'Français', 'Oum ya ye', 'dioula', '../daudios/je lai vu.3gpp', '2020-08-24 05:01:14'),
(75, 'ancien', 'Français', 'kidoun', 'Peulh', '../daudios/ancien.m4a', '2020-08-28 10:28:08'),
(76, 'autre', 'Français', 'godoungo', 'Peulh', '../daudios/autre.m4a', '2020-08-28 10:28:40'),
(77, 'beau', 'Français', 'hinolabha', 'Peulh', '../daudios/beau.m4a', '2020-08-28 10:29:06'),
(78, 'chaud', 'Français', 'hinowouli', 'Peulh', '../daudios/chaud.m4a', '2020-08-28 10:29:38'),
(79, 'clair', 'Français', 'nodjalbi', 'Peulh', '../daudios/clair.m4a', '2020-08-28 10:30:06'),
(80, 'content', 'Français', 'nowelti', 'Peulh', '../daudios/content.m4a', '2020-08-28 10:30:42'),
(81, 'dernier', 'Français', 'sakitoro', 'Peulh', '../daudios/dernier.m4a', '2020-08-28 10:31:39'),
(82, 'different', 'Français', 'wonagotoun', 'Peulh', '../daudios/different.m4a', '2020-08-28 10:32:04'),
(83, 'difficile', 'Français', 'nossati', 'Peulh', '../daudios/difficile.m4a', '2020-08-28 10:32:39'),
(84, 'doux', 'Français', 'noweli', 'Peulh', '../daudios/doux.m4a', '2020-08-28 10:37:48'),
(85, 'drôle', 'Français', 'nokirdi', 'Peulh', '../daudios/drôle.m4a', '2020-08-28 10:38:57'),
(86, 'entier', 'Français', 'notimmi', 'Peulh', '../daudios/entier.m4a', '2020-08-28 10:39:23'),
(87, 'facile', 'Français', 'nowelifi', 'Peulh', '../daudios/facil.m4a', '2020-08-28 10:39:58'),
(88, 'faux', 'Français', 'fenadè', 'Peulh', '../daudios/faux.m4a', '2020-08-28 10:40:28'),
(89, 'gros', 'Français', 'modjandi', 'Peulh', '../daudios/gros.m4a', '2020-08-28 10:41:01'),
(90, 'heureux', 'Français', 'himowelti', 'Peulh', '../daudios/heureux.m4a', '2020-08-28 10:41:33'),
(91, 'juste', 'Français', 'kononwoniri', 'Peulh', '../daudios/juste.m4a', '2020-08-28 10:45:42'),
(92, 'malade', 'Français', 'ossèla', 'Peulh', '../daudios/malade.m4a', '2020-08-28 10:46:12'),
(93, 'mauvais', 'Français', 'omodja', 'Peulh', '../daudios/mauvais.m4a', '2020-08-28 10:46:48'),
(94, 'même', 'Français', 'gotoun', 'Peulh', '../daudios/même.m4a', '2020-08-28 10:47:59'),
(95, 'pauvre', 'Français', 'baydolo', 'Peulh', '../daudios/pauvre.m4a', '2020-08-28 10:49:14'),
(96, 'propre', 'Français', 'nolabhi', 'Peulh', '../daudios/propre.m4a', '2020-08-28 10:49:52'),
(97, 'rouge', 'Français', 'bodè', 'Peulh', '../daudios/rouge.m4a', '2020-08-28 10:50:37'),
(98, 'sale', 'Français', 'notouni', 'Peulh', '../daudios/sale.m4a', '2020-08-28 10:51:10'),
(99, 'serieux', 'Français', 'himokelti', 'Peulh', '../daudios/sérieux.m4a', '2020-08-28 10:51:37'),
(100, 'super', 'Français', 'èyoALLAH', 'Peulh', '../daudios/super.m4a', '2020-08-28 10:52:09'),
(101, 'toute', 'Français', 'fope', 'Peulh', '../daudios/toute.m4a', '2020-08-28 10:52:37'),
(102, 'vieux', 'Français', 'mahoudo', 'Peulh', '../daudios/vieux.m4a', '2020-08-28 10:53:08'),
(103, 'vrai', 'Français', 'kogoga', 'Peulh', '../daudios/vrai.m4a', '2020-08-28 10:53:32'),
(104, 'super', 'Français', 'ènèni', 'bété', '../daudios/BTsuper.m4a', '2020-08-28 11:12:42'),
(105, 'autre', 'Français', 'vinin', 'bété', '../daudios/BTautre.m4a', '2020-08-28 11:13:26'),
(106, 'bizarre', 'Français', 'ècossabrou', 'bété', '../daudios/BTbizarre.m4a', '2020-08-28 11:13:55'),
(107, 'certain', 'Français', 'vinin', 'bété', '../daudios/BTautre.m4a', '2020-08-28 11:14:33'),
(108, 'prochain', 'Français', 'vinin', 'bété', '../daudios/BTautre.m4a', '2020-08-28 11:15:02'),
(109, 'difficile', 'Français', 'ètèmin', 'bété', '../daudios/BTdifficile(grave).m4a', '2020-08-28 11:15:41'),
(110, 'drole', 'Français', 'èléglaco', 'bété', '../daudios/BTdrole.m4a', '2020-08-28 11:16:18'),
(111, 'facile', 'Français', 'némétin', 'bété', '../daudios/BTfacile.m4a', '2020-08-28 11:16:49'),
(112, 'jeune', 'Français', 'woody_oh_digba', 'bété', '../daudios/BTjeune.m4a', '2020-08-28 11:17:33'),
(113, 'juste', 'Français', 'èkokpéé', 'bété', '../daudios/BTjuste.m4a', '2020-08-28 11:18:07'),
(114, 'malade', 'Français', 'angou', 'bété', '../daudios/BTmalade.m4a', '2020-08-28 11:18:38'),
(115, 'pauvre', 'Français', 'pouè', 'bété', '../daudios/BTpauvre.m4a', '2020-08-28 11:19:04'),
(116, 'possible', 'Français', 'èbèlé', 'bété', '../daudios/BTpossible.m4a', '2020-08-28 11:19:33'),
(117, 'propre', 'Français', 'hénènouko', 'Peulh', '../daudios/BTpropre.m4a', '2020-08-28 11:20:01'),
(118, 'rouge', 'Français', 'zèlé', 'bété', '../daudios/BTrouge.m4a', '2020-08-28 11:20:31'),
(119, 'sale', 'Français', 'fé', 'bété', '../daudios/BTsale.m4a', '2020-08-28 11:21:04'),
(120, 'simple', 'Français', 'ècofouho', 'bété', '../daudios/BTsimple.m4a', '2020-08-28 11:21:55'),
(121, 'tranquille', 'Français', 'vrihé', 'bété', '../daudios/BTtranquille.m4a', '2020-08-28 11:22:29'),
(122, 'triste', 'Français', 'gninzé', 'bété', '../daudios/BTtriste.m4a', '2020-08-28 11:23:22'),
(123, 'vide', 'Français', 'couho', 'bété', '../daudios/BTvide.m4a', '2020-08-28 11:24:02'),
(124, 'bonne', 'Français', 'nèni', 'bété', '../daudios/BTbonne.m4a', '2020-08-28 11:24:37'),
(126, 'doux', 'Français', 'mèni', 'bété', '../daudios/BTdoux.m4a', '2020-08-28 11:26:32'),
(127, 'faux', 'Français', 'yio', 'bété', '../daudios/BTfaux.m4a', '2020-08-28 11:27:11'),
(128, 'français', 'Français', 'gomlan_gbo', 'bété', '../daudios/BTfrancais.m4a', '2020-08-28 11:28:08'),
(129, 'heureux', 'Français', 'ouannan', 'bété', '../daudios/BTheureux.m4a', '2020-08-28 11:28:51'),
(130, 'mauvais', 'Français', 'gningni', 'bété', '../daudios/BTmauvais.m4a', '2020-08-28 11:29:21'),
(131, 'serieux', 'Français', 'okotéé', 'bété', '../daudios/BTserieux.m4a', '2020-08-28 11:29:58'),
(132, 'vieux', 'Français', 'gognon', 'bété', '../daudios/BTvieux.m4a', '2020-08-28 11:30:31'),
(133, 'vrai', 'Français', 'diè', 'bété', '../daudios/BTvrai.m4a', '2020-08-28 11:30:59'),
(134, 'ancien', 'Français', 'gogo', 'bété', '../daudios/BTancien.m4a', '2020-08-28 11:31:25'),
(135, 'beau', 'Français', 'bagnon', 'bété', '../daudios/BTbeau.m4a', '2020-08-28 11:31:52'),
(136, 'blanc', 'Français', 'fah', 'bété', '../daudios/BTblanc.m4a', '2020-08-28 11:32:19'),
(137, 'cher', 'Français', 'ètèpriko', 'bété', '../daudios/BTcher.m4a', '2020-08-28 11:32:50'),
(138, 'dernier', 'Français', 'bémin', 'bété', '../daudios/BTdernier.m4a', '2020-08-28 11:33:13'),
(139, 'different', 'Français', 'èniblémin', 'bété', '../daudios/BTdifferent.m4a', '2020-08-28 11:33:51'),
(140, 'droit', 'Français', 'gbihi', 'bété', '../daudios/BTdroit.m4a', '2020-08-28 11:35:19'),
(141, 'entier', 'Français', 'èwaniclo', 'bété', '../daudios/BTentier.m4a', '2020-08-28 11:35:48'),
(142, 'froid', 'Français', 'wotro', 'bété', '../daudios/BTfroid.m4a', '2020-08-28 11:37:03'),
(143, 'gentil', 'Français', 'oninnnidréko', 'bété', '../daudios/BTgentille.m4a', '2020-08-28 11:37:33'),
(144, 'grand', 'Français', 'yité', 'bété', '../daudios/BTgrand.m4a', '2020-08-28 11:38:07'),
(145, 'haut', 'Français', 'ètroko', 'bété', '../daudios/BThaut.m4a', '2020-08-28 11:38:37'),
(146, 'humain', 'Français', 'gnekpa', 'bété', '../daudios/BThumain.m4a', '2020-08-28 11:39:04'),
(147, 'jolie', 'Français', 'ènèni', 'bété', '../daudios/BTjoli.m4a', '2020-08-28 11:44:49'),
(148, 'jolie', 'Français', 'ènèni', 'bété', '../daudios/BTjoli.m4a', '2020-08-28 11:50:08'),
(150, 'long', 'Français', 'ètromi', 'bété', '../daudios/BTlong.m4a', '2020-08-28 11:51:36'),
(151, 'meilleur', 'Français', 'èziko', 'bété', '../daudios/BTmeilleur.m4a', '2020-08-28 11:52:21'),
(152, 'nouveau', 'Français', 'lélé', 'bété', '../daudios/BTnouveau.m4a', '2020-08-28 11:52:52'),
(153, 'pareil', 'Français', 'mlé', 'bété', '../daudios/BTpareil.m4a', '2020-08-28 11:53:55'),
(154, 'petit', 'Français', 'tékéhi', 'bété', '../daudios/BTpetit.m4a', '2020-08-28 11:54:20'),
(155, 'plein', 'Français', 'èyihé', 'bété', '../daudios/BTplein.m4a', '2020-08-28 11:54:47'),
(156, 'premier', 'Français', 'youcou', 'bété', '../daudios/BTpremier.m4a', '2020-08-28 11:55:14'),
(157, 'quoi', 'Français', 'tèkoi', 'bété', '../daudios/BTquoi.m4a', '2020-08-28 11:56:06'),
(158, 'seul', 'Français', 'gboro', 'bété', '../daudios/BTseul.m4a', '2020-08-28 11:56:36'),
(159, 'vivant', 'Français', 'oyè', 'bété', '../daudios/BTvivant.m4a', '2020-08-28 11:57:06'),
(160, 'aide', 'Français', 'okpèlio', 'bété', '../daudios/BTaide.m4a', '2020-08-28 11:57:30'),
(161, 'chef', 'Français', 'fi', 'bété', '../daudios/BTchef.m4a', '2020-08-28 11:58:54'),
(162, 'enfant', 'Français', ' you', 'bété', '../daudios/BTenfant.m4a', '2020-08-28 11:59:25'),
(163, 'gauche', 'Français', 'okpè', 'bété', '../daudios/BTgauche.m4a', '2020-08-28 11:59:59'),
(164, 'geste', 'Français', 'zigbo', 'bété', '../daudios/BTgeste.m4a', '2020-08-28 12:00:30'),
(165, 'livre', 'Français', 'borgo', 'bété', '../daudios/BTlivre.m4a', '2020-08-28 12:01:15'),
(166, 'merci', 'Français', 'yawouo', 'bété', '../daudios/BTmerci.m4a', '2020-08-28 12:01:44'),
(167, 'ombre', 'Français', 'zouzou', 'bété', '../daudios/BTombre.m4a', '2020-08-28 12:02:42'),
(168, 'part', 'Français', 'homédè', 'bété', '../daudios/BTpart.m4a', '2020-08-28 12:03:20'),
(169, 'poche', 'Français', 'poché', 'bété', '../daudios/BTpoche.m4a', '2020-08-28 12:03:55'),
(170, 'madame', 'Français', 'monni_wonnon', 'bété', '../daudios/BTmadame.m4a', '2020-08-28 12:04:29'),
(171, 'paix', 'Français', 'waléwaliè', 'bété', '../daudios/BTpaix.m4a', '2020-08-28 12:05:19'),
(172, 'voix', 'Français', 'wèlé', 'bété', '../daudios/BTvoix.m4a', '2020-08-28 12:05:42'),
(173, 'affaire', 'Français', 'gbo', 'bété', '../daudios/BTaffaire.m4a', '2020-08-28 12:06:04'),
(174, 'arme', 'Français', 'kossougou', 'bété', '../daudios/BTarme.m4a', '2020-08-28 12:06:29'),
(175, 'armée', 'Français', 'srodja', 'bété', '../daudios/BTarmée.m4a', '2020-08-28 12:07:03'),
(176, 'attention', 'Français', 'manamin', 'bété', '../daudios/BTattention.m4a', '2020-08-28 12:07:31'),
(177, 'boite', 'Français', 'clokoua', 'bété', '../daudios/BTboite.m4a', '2020-08-28 12:08:11'),
(178, 'bouche', 'Français', 'mouha', 'bété', '../daudios/BTbouche.m4a', '2020-08-28 12:08:39');

-- --------------------------------------------------------

--
-- Structure de la table `graph`
--

CREATE TABLE `graph` (
  `id` int(11) NOT NULL,
  `search` varchar(255) NOT NULL,
  `count` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `graph`
--

INSERT INTO `graph` (`id`, `search`, `count`) VALUES
(6, 'piment', '3'),
(11, 'je suis une femme', '5'),
(14, 'homme', '19'),
(15, 'poisson', '7'),
(17, 'foutou', '1'),
(18, 'riz', '23'),
(21, 'viens manger', '14'),
(23, 'femme', '2');

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `id` int(11) NOT NULL,
  `langue` varchar(255) NOT NULL,
  `datec` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `langues`
--

INSERT INTO `langues` (`id`, `langue`, `datec`) VALUES
(1, 'bété', '2020-06-27 05:48:40'),
(2, 'dioula', '2020-06-28 02:43:27'),
(4, 'Français', '2020-06-28 03:18:18'),
(5, 'Anglais', '2020-06-28 03:18:48'),
(6, 'Baoulé', '2020-06-30 05:16:52'),
(7, 'Abbey', '2020-08-25 04:29:22'),
(8, 'Peulh', '2020-08-28 10:19:17');

-- --------------------------------------------------------

--
-- Structure de la table `propositions`
--

CREATE TABLE `propositions` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `propositions` varchar(400) NOT NULL,
  `critiques` varchar(400) NOT NULL,
  `date_enrg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `propositions`
--

INSERT INTO `propositions` (`id`, `email`, `propositions`, `critiques`, `date_enrg`) VALUES
(1, 'ibrahim885209@gmail.com', 'bonjour vous devriez aneliore la traduction', 'kdjhbanmdns', '2020-08-19 15:38:51'),
(4, 'ibrahim885209@gmail.com', 'bonjour je mappelle soumah ibrahim et je voudrai', 'bonjour jegvs kdvva chv skhs', '2020-08-19 16:13:01'),
(5, 'ibrahim885209@gmail.com', 'bonjour je suis suis suis suis ', 'bonjour wkdh w dhbwse hoishbd ohs', '2020-08-19 16:14:25'),
(7, 'ibrahim885209@gmail.com', 'bonjour je mappelle soumah ibrahim et je voudrai', 'bonjour jegvs kdvva chv skhs', '2020-08-19 16:15:51'),
(8, 'ibrahimmichot73@outlook.fr', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos minus a quae officia fugit, distinctio, natus tenetur ipsa at optio harum accusantium iste, asperiores ad commodi esse quis consequuntur facere!\r\n  Dignissimos libero optio cum. Distinctio vero veritatis eaque, quia itaque consequatur cum in libero voluptate enim doloremque nulla cupiditate fugiat architecto soluta unde numquam. La', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos minus a quae officia fugit, distinctio, natus tenetur ipsa at optio harum accusantium iste, asperiores ad commodi esse quis consequuntur facere!\r\n  Dignissimos libero optio cum. Distinctio vero veritatis eaque, quia itaque consequatur cum in libero voluptate enim doloremque nulla cupiditate fugiat architecto soluta unde numquam. La', '2020-08-19 16:35:11'),
(10, 'basiti@gmail.com', 'je voudrais aqvoir d une part comment est au on va arriver a trqduire dans nos differentes langues les tex', 'je voudrais aqvoir d une part comment est au on va arriver a trqduire dans nos differentes langues les tex', '2020-08-21 10:35:31');

-- --------------------------------------------------------

--
-- Structure de la table `recherches`
--

CREATE TABLE `recherches` (
  `id` int(11) NOT NULL,
  `search_text` varchar(100) NOT NULL,
  `langue_start` varchar(50) NOT NULL,
  `langue_end` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `statut` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recherches`
--

INSERT INTO `recherches` (`id`, `search_text`, `langue_start`, `langue_end`, `ip`, `statut`, `date`) VALUES
(0, 'mort', 'Français', '', '::1', '', '2020-11-15 00:00:00'),
(1, 'femme', 'Français', 'bété', '::1', '', '2020-07-02 00:00:00'),
(2, 'femme', 'Français', 'bété', '::1', '', '2020-07-02 00:00:00'),
(3, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03 00:00:00'),
(4, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03 00:00:00'),
(5, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03 00:00:00'),
(6, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03 00:00:00'),
(7, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03 00:00:00'),
(8, 'je suis une femme', 'Français', 'bété', '::1', '', '2020-07-03 00:00:00'),
(9, 'femme', 'Français', 'bété', '::1', '', '2020-08-22 00:00:00'),
(10, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22 00:00:00'),
(11, 'bonjour', 'bété', 'bété', '::1', '', '2020-08-22 00:00:00'),
(12, 'femme', 'Français', 'bété', '::1', '', '2020-08-22 00:00:00'),
(13, 'femme', 'Français', 'bété', '::1', '', '2020-08-22 00:00:00'),
(14, 'femme', 'Français', 'bété', '::1', '', '2020-08-22 00:00:00'),
(15, 'bonjour', 'bété', 'bété', '::1', '', '2020-08-22 00:00:00'),
(16, 'bonjour', 'dioula', 'bété', '::1', '', '2020-08-22 00:00:00'),
(17, 'bonjour', 'dioula', 'Baoulé', '::1', '', '2020-08-22 00:00:00'),
(18, '', '', '', '::1', '', '2020-08-22 00:00:00'),
(19, '', '', '', '::1', '', '2020-08-22 00:00:00'),
(20, 'femme', 'Français', 'bété', '::1', '', '2020-08-22 00:00:00'),
(21, 'femme', 'Français', 'bété', '::1', '', '2020-08-22 00:00:00'),
(22, '', '', '', '::1', '', '2020-08-22 00:00:00'),
(23, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22 00:00:00'),
(24, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22 00:00:00'),
(25, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22 00:00:00'),
(26, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22 00:00:00'),
(27, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22 00:00:00'),
(28, 'bonjour', 'bété', 'bété', '::1', '', '2020-08-22 00:00:00'),
(29, 'bonjour', 'bété', 'bété', '::1', '', '2020-08-22 00:00:00'),
(30, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22 00:00:00'),
(31, 'femme', 'Français', 'bété', '::1', '', '2020-08-22 00:00:00'),
(32, 'femme', 'Français', 'bété', '::1', '', '2020-08-22 00:00:00'),
(33, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22 00:00:00'),
(34, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `suggestion`
--

CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL,
  `texte1` varchar(255) NOT NULL,
  `langue_start` varchar(255) NOT NULL,
  `texte2` varchar(255) NOT NULL,
  `langue_end` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `datec` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nometprenoms` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nometprenoms`, `email`, `password`, `role`, `date`) VALUES
(1, 'soumah ibrahim', 'ibrahim885209@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrateur', '2020-08-24 01:16:42'),
(2, 'michot', 'ibrahim1.soumah@uvci.edu.ci', '827ccb0eea8a706c4c34a16891f84e7b', 'Superviseur', '2020-08-24 01:17:06'),
(3, 'team ILT', 'ilt@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Opérateur de saisie', '2020-08-24 01:17:53'),
(4, 'pat', 'patrick@gmail.com', '7852341745c93238222a65a910d1dcc5', 'Administrateur', '2021-01-27 04:12:58'),
(5, 'laety', 'laety@test.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Superviseur', '2021-03-23 02:05:07'),
(6, 'laety', 'laety2@test.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrateur', '2021-03-24 01:13:25');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activités`
--
ALTER TABLE `activités`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `graph`
--
ALTER TABLE `graph`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `propositions`
--
ALTER TABLE `propositions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recherches`
--
ALTER TABLE `recherches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activités`
--
ALTER TABLE `activités`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
