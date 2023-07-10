CREATE DATABASE 48heures;
use 48heures;

CREATE TABLE utilisateur(
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

CREATE TABLE objectif(
    idobjectif INT AUTO_INCREMENT PRIMARY KEY,
    descriObjectif varchar(30)
);

CREATE TABLE profileObjectif(
    idprofileObjectif INT AUTO_INCREMENT PRIMARY KEY,
    idprofile INT,
    idobjectif INT,
    poids real,
    date date,
    foreign key (idprofile) references profile (idprofile),
    foreign key (idobjectif) references objectif (idGenre)
);

CREATE TABLE regime(
    idregime INT AUTO_INCREMENT PRIMARY KEY,
    descriRegime varchar(30),
    duree real,
    idobjectif INT,
    poids real,
    foreign key (idobjectif) references objectif (idobjectif)
);

CREATE TABLE unite(
    idunite  INT AUTO_INCREMENT PRIMARY KEY,
    descriUnite varchar(30)
);

CREATE TABLE plat (
    idplat  INT AUTO_INCREMENT PRIMARY KEY,
    descriPlat varchar(30),
    pu real,
    idunite INT,
    foreign key (idunite) references unite (idunite)
);

CREATE TABLE regimePlat(
    idregimeplat INT AUTO_INCREMENT PRIMARY KEY,
    idregime INT,
    idplat INT,
    quantite real,
    foreign key (idregime) references regime (idregime),
    foreign key (idplat) references plat (idplat)
);

CREATE TABLE activite(
    idactivite  INT AUTO_INCREMENT PRIMARY KEY,
    descriActivite varchar(30)
);

CREATE TABLE regimeActivite(
    idregimeActivite INT AUTO_INCREMENT PRIMARY KEY,
    idregime INT,
    idactivite INT,
    quantite real,
    foreign key (idregime) references regime (idregime),
    foreign key (idactivite) references activite (idactivite)
);