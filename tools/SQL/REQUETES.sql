CREATE DATABASE 48heures;
use 48heures;

CREATE TABLE user(
    iduser INT AUTO_INCREMENT PRIMARY KEY,
    nom varchar(20),
    mdp varchar(20),
    is_admin int
);

CREATE TABLE genre(
    idgenre INT AUTO_INCREMENT PRIMARY KEY,
    descriGenre varchar(20)
);

CREATE TABLE profile(
    idprofile INT AUTO_INCREMENT PRIMARY KEY,
    iduser INT,
    idGenre INT,
    taille  real,
    poids real,
    foreign key (iduser) references user (iduser),
    foreign key (idGenre) references genre (idGenre)
);