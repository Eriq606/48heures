CREATE DATABASE 48heures;
use 48heures;

CREATE TABLE user(
    iduser INT AUTO_INCREMENT PRIMARY KEY,
    nom varchar(20),
    mdp varchar(20),
    is_admin int
);