insert into user values (null, 'John', '1234', 1);
insert into user values (null, 'Alice', '1234', 0);
insert into user values (null, 'Luc', '1234', 0);

insert into genre values (1, 'Homme');
insert into genre values (2, 'Femme');

insert into profile values (null, 1, 1, 178, 70);
insert into profile values (null, 3, 1, 175, 90);
insert into profile values (null, 2, 2, 165, 45);

insert into objectif values (1, 'Perdre du poids');
insert into objectif values (2, 'Gagner du poids');

insert into profileObjectif values (null, 2, 1, 15, '2023-05-06');
insert into profileObjectif values (null, 3, 2, 15, '2023-07-09');


INSERT INTO regime values (1, 'Regime hypercalorique', 20);
INSERT INTO regime values (2, 'Regime riche en proteines', 30);
INSERT INTO regime values (3, 'Regime à index glycemique eleve', 10);
INSERT INTO regime values (4, 'Regime fractionne', 30);
INSERT INTO regime values (5, 'Regime a haute teneur en glucides', 20);

INSERT INTO regime values (6, 'Regime hypocalorique', 20);
INSERT INTO regime values (7, 'Regime faible en glucides', 30);
INSERT INTO regime values (8, 'Regime mediterraneen', 15);
INSERT INTO regime values (9, 'Regime vegetarien', 30);
INSERT INTO regime values (9, 'Regime verte', 30);


INSERT INTO plat values(1, 'Banane', 200, 2, 0.10);
INSERT INTO plat values(2, 'Lait', 500, 2, 0.23);
INSERT INTO plat values(3, 'Beurre arachide', 300, 2, 0.56);
INSERT INTO plat values(4, 'Poudre de proteine', 300, 2, 0.16);
INSERT INTO plat values(5, 'Poulet roti', 2000, 2, 0.60);
INSERT INTO plat values(6, 'Legumes', 1000, 2, 0.40);
INSERT INTO plat values(7, 'Riz brun ou complet', 1000, 2, 0.23);
INSERT INTO plat values(8, 'Huile d olive', 1300, 2, 0.10);
INSERT INTO plat values(9, 'Epices', 400, 2, 0.10);
INSERT INTO plat values(10, 'Pain complet', 3000, 2, 0.64);
INSERT INTO plat values(11, 'Oeuf', 700, 2, 0.30);
INSERT INTO plat values(12, 'Avocat', 400, 2, 0.20);
INSERT INTO plat values(13, 'Pates completes', 1800, 2, 0.70);
INSERT INTO plat values(14, 'Poulet grille en des', 2000, 2, 0.65);
INSERT INTO plat values(15, 'Sauce tomate legere', 1300, 2, 0.20);
INSERT INTO plat values(16, 'Herbes', 700, 2, 0.10);
INSERT INTO plat values(17, 'Fromage rape', 3000, 2, 0.40);
INSERT INTO plat values(18, 'Fruits', 2300, 2, 0.35);
INSERT INTO plat values(19, 'Noix', 1300, 2, 0.10);


INSERT INTO plat values(20, 'Poulet grille', 2000, 1, 0.65);
INSERT INTO plat values(21, 'Legumes vertes', 1000, 1, 0.40);
INSERT INTO plat values(22, 'Tomates', 800, 1, 0.32);
INSERT INTO plat values(23, 'Cerises', 1200, 1, 0.16);
INSERT INTO plat values(24, 'Concombre', 2000, 1, 0.65);
INSERT INTO plat values(25, '', 2000, 1, 0.65);
INSERT INTO plat values(26, 'Poulet grille', 2000, 1, 0.65);
INSERT INTO plat values(27, 'Poulet grille', 2000, 1, 0.65);
INSERT INTO plat values(28, 'Poulet grille', 2000, 1, 0.65);
INSERT INTO plat values(29, 'Poulet grille', 2000, 1, 0.65);
INSERT INTO plat values(30, 'Poulet grille', 2000, 1, 0.65);
INSERT INTO plat values(31, 'Poulet grille', 2000, 1, 0.65);
INSERT INTO plat values(32, 'Poulet grille', 2000, 1, 0.65);
INSERT INTO plat values(33, 'Poulet grille', 2000, 1, 0.65);
INSERT INTO plat values(34, 'Poulet grille', 2000, 1, 0.65);

insert into regimeplat values (1, 2, 1, 1);
insert into regimeplat values (2, 2, 2, 1);
insert into regimeplat values (3, 2, 3, 1);
insert into regimeplat values (4, 2, 4, 1);
insert into regimeplat values (5, 1, 5, 150);
insert into regimeplat values (6, 1, 6, 75);
insert into regimeplat values (7, 1, 7, 0.5);
insert into regimeplat values (8, 1, 8, 0.1);
insert into regimeplat values (9, 1, 9, 1);
insert into regimeplat values (10, 3, 10, 2);
insert into regimeplat values (11, 3, 11, 1);
insert into regimeplat values (12, 3, 12, 1);
insert into regimeplat values (13, 3, 9, 1);
insert into regimeplat values (14, 4, 13, 1);
insert into regimeplat values (15, 4, 14, 100);
insert into regimeplat values (16, 4, 15, 80);
insert into regimeplat values (17, 4, 16, 1);
insert into regimeplat values (18, 4, 17, 110);
insert into regimeplat values (19, 4, 6, 50);
insert into regimeplat values (20, 4, 9, 1);
insert into regimeplat values (21, 5, 18, 1);
insert into regimeplat values (22, 5, 19, 1);

INSERT INTO plat values (18, 'Fruits', 1600, 2, 0.10);
INSERT INTO plat values (19, 'Fruits', 1600, 2, 0.10);
INSERT INTO plat values (20, 'Fruits', 1600, 2, 0.10);
INSERT INTO plat values (21, 'Fruits', 1600, 2, 0.10);

