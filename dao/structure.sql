
CREATE DATABASE IF NOT EXISTS couture;

USE couture;

CREATE TABLE IF NOT EXISTS utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    genre VARCHAR(10) NOT NULL,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    phoneNumber VARCHAR(20) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    address TEXT
);

CREATE TABLE IF NOT EXISTS cours (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    instructeur VARCHAR(255) NOT NULL,
    duree_semaines INT NOT NULL
);

CREATE TABLE IF NOT EXISTS InscriptionCours (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_utilisateur INT NOT NULL,
    id_cours INT NOT NULL,
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id),
    FOREIGN KEY (id_cours) REFERENCES cours(id)
);


INSERT INTO cours (titre, description, instructeur, duree_semaines) 
VALUES 
('Couture pour débutants', 'Pour apprendre les techniques de base telles que l’utilisation de la machine à coudre, la réalisation d’ourlets, etc.', 'Michelle Legrand', 4),
('Couture avec patrons', 'Pour apprendre à utiliser les patrons de base pour des modèles de pantalons, jupes et pulls.', 'Lucas Chardons', 6),
('Couture avancée', 'Pour apprendre à créer des patrons et à coudre des modèles plus difficiles.', 'Marion Mai', 10);


