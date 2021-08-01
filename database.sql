DROP DATABASE IF EXISTS my_tomaoli;
CREATE DATABASE my_tomaoli;

USE my_tomaoli;

CREATE TABLE `users` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) UNIQUE NOT NULL,
  `nickname` varchar(32) UNIQUE NOT NULL,
  `password` varchar(32) NOT NULL, 
  `theme` varchar(16) NOT NULL DEFAULT('green'), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `drinks` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) UNIQUE NOT NULL,
  `description` text, 
  `slug` varchar(32) UNIQUE NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `ingredients` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) UNIQUE NOT NULL,
  `slug` varchar(32) UNIQUE NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO `users` (`email`, `nickname`, `password`) VALUES ('admin@root', 'tomaoli', SHA(''))