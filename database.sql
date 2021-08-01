DROP DATABASE IF EXISTS my_tomaoli;
CREATE DATABASE my_tomaoli;

USE my_tomaoli;

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

CREATE TABLE `options` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) UNIQUE NOT NULL,
  `value` varchar(32) UNIQUE NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO `options` (`name`, `value`) VALUES ('theme', 'green')