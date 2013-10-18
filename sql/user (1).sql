-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Ven 18 Octobre 2013 à 18:14
-- Version du serveur: 5.5.32
-- Version de PHP: 5.3.10-1ubuntu3.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projet_code_igniter`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `comment` text COLLATE utf8_bin NOT NULL,
  `image` int(20) DEFAULT NULL,
  `active` tinyblob,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`, `comment`, `image`, `active`, `create_date`) VALUES
(1, 'ca1', 'test', NULL, NULL, '0000-00-00 00:00:00'),
(3, 'ca2', 'sfsf qs qsf qs sqdf', NULL, NULL, '0000-00-00 00:00:00'),
(4, 'ca3', 'test', NULL, NULL, '0000-00-00 00:00:00'),
(5, 'ca 4', 'test 4', NULL, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `name`, `comment`) VALUES
(1, 'pro1.jpg', 'sdfsf qsf qs f'),
(2, 'pro2.jpg', 'f s qsdf qs fqsf');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `comment` text,
  `active` tinyint(1) DEFAULT NULL,
  `image` int(11) DEFAULT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `name`, `comment`, `active`, `image`, `id_category`) VALUES
(1, 'pro1', 'qsdfqs sq fqsf qsf', NULL, NULL, 1),
(2, 'pro 2', ' qs fqs fqsf qsdf', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
  `id_product` int(11) NOT NULL,
  `id_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product_image`
--

INSERT INTO `product_image` (`id_product`, `id_image`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `first_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `style` int(2) NOT NULL DEFAULT '0',
  `date_update` datetime DEFAULT NULL,
  `date_create` datetime NOT NULL,
  `delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `password`, `name`, `first_name`, `email`, `style`, `date_update`, `date_create`, `delete`) VALUES
(1, '4cb60c3dc021307bcd3461d625e0c04c', 'long', 'yu', 'yu.long.fr@gmail.com', 0, NULL, '0000-00-00 00:00:00', 0),
(2, '790417', 'long', 'yu', 'yu.long.fr@gmail.com', 0, NULL, '2013-10-04 17:23:01', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;