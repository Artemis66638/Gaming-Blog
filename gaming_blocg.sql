-- Adminer 4.8.1 MySQL 8.0.29 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `gaming_blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `gaming_blog`;

CREATE TABLE `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `page` int NOT NULL,
  `id_user` int NOT NULL,
  `comment` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

CREATE TABLE `topics` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(121) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `topics` (`id`, `name`) VALUES
(18,	'Top topics'),
(16,	'uncategory'),
(19,	'Гайд'),
(17,	'О жизни Геймера'),
(15,	'Обзор');

CREATE TABLE `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint NOT NULL,
  `id_topic` int DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_topic` (`id_topic`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_topic`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `admin` tinyint NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created`) VALUES
(53,	1,	'artemis',	'artemis33@gmail.com',	'$2y$10$YlLkubU1QVbcrh3Ga9hUIebKYkIYGCj.zWaaX01Eptgm/0AxsCpr6',	'2022-06-10 15:59:58'),
(54,	0,	'asd',	'asd@gmail.com',	'$2y$10$DbBU.Bjb/arWsNNmQ9dRm.faBlOGnkDGkpBut19hBshs2SUXlerZG',	'2022-06-12 00:45:26'),
(55,	0,	'dsad',	'asdas@gmail.com',	'$2y$10$zEw8pT1ch4E9iuf/K93PrOnTXXK.dVYXgTG4hVwzuuNLJMHw0Sxwi',	'2022-06-12 00:50:01'),
(56,	0,	'edward',	'edward33@gmail.com',	'$2y$10$MmwH8aNBMnHydK3GpD7eu.R30lgJGuyMneGibMu6egJTHn2ZPXRDm',	'2022-06-12 07:21:57');

-- 2022-06-12 09:38:46
