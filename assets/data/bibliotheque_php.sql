DROP DATABASE IF EXISTS bibliotheque_php;
CREATE DATABASE bibliotheque_php CHARACTER SET 'utf8';
USE bibliotheque_php;

DROP USER IF EXISTS 'BibliothequePHP'@'Localhost';
CREATE USER 'BibliothequePHP'@'Localhost';
GRANT ALL PRIVILEGES ON bibliotheque_php.* To 'BibliothequePHP'@'Localhost' IDENTIFIED BY 'bibli';


CREATE TABLE User(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  lastname VARCHAR(50) NOT NULL,
  firstname VARCHAR(50) NOT NULL,
  adress VARCHAR(50) NOT NULL,  
  city_code CHAR(5) NOT NULL,
  city VARCHAR(30) NOT NULL,
  phone VARCHAR(10) NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE,
  sex CHAR(1) NOT NULL,
  birth_date DATE NOT NULL,
  PRIMARY KEY (id)
)
ENGINE=InnoDB;

INSERT INTO User(lastname, firstname, email, city, city_code, adress, sex, birth_date, phone)
VALUES
("Dupont", "Richard", "r.dupont@gmail.com", "Rouen", "76100", "9 rue du gros horloge", "h", "1962-05-21","0606060606"),
("Melez", "Claire", "clairemelez@outlook.com", "Lille", "59100", "45 rue du Molinel", "f", "1989-11-14","0707070707"),
("Gossart", "Thomas", "toto59@gmail.com", "Roubaix", "59170", "1 rue du lancer de harang", "h","1992-11-11","0607060706");


CREATE TABLE Book(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL,
  author VARCHAR(100) NOT NULL,
  summary VARCHAR(800) NOT NULL, 
  category VARCHAR(50) NOT NULL, 
  publication_date DATE NOT NULL,
  user_id INT(5) UNSIGNED,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES User(id)
)
ENGINE=InnoDB;

INSERT INTO Book (title, author, summary, category, publication_date)
VALUES 
("la bible", "Dieu", "2 testaments pour le prix d'un", "fiction", "0000-12-25"),
("les miserables", "Victor Hugo", "quand Jean Valgean, un ancien bagnard devient un notable et eleve Causette", "classique","1862-01-01"),
("Dune", "Franck Herbert", "Des gars qui vont à la plage et ne trouvent pas la mer", "SF","1965-01-01"),
("Jojo Lapin roi des malins", "Enid Blyton", "les aventures du plus malin des lapins", "enfant", "2001-01-17"),
("le roi sur le seuil", "David Gemmel", "L'histoire se déroule environ un siècle après le siège de Dros Delnoch par les Nadirs d'Ulric.", "Medfan", "2009-06-01");