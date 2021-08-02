DROP DATABASE IF EXISTS my_tomaoli;
CREATE DATABASE my_tomaoli;

USE my_tomaoli;

CREATE TABLE `users` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) UNIQUE NOT NULL,
  `username` varchar(32) UNIQUE NOT NULL,
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

CREATE TABLE `ingredient_drink` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `ingredient_id` varchar(32) NOT NULL,
  `drink_id` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO `users` (`email`, `username`, `password`) VALUES ('admin@root', 'tomaoli', '');

INSERT INTO `ingredients` (`name`, `slug`) VALUES
  ('Campari', 'campari'),
  ('Aperol', 'aperol'),
  ('Rum bianco', 'rum-bianco'),
  ('Prosecco', 'prosecco'),
  ('Selz', 'selz'),
  ('Rum scuro', 'rum-scuro');

INSERT INTO `drinks` (`name`, `slug`) VALUES
  ('Aperol spritz', 'aperol-spritz'),
  ('Campari spritz', 'campari-spritz'),
  ('Gin lemon', 'gin-lemon'),
  ('Americano', 'americano');