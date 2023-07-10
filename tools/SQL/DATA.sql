insert into utilisateur values (null, 'John', '1234', 1);
insert into utilisateur values (null, 'Alice', '1234', 0);
insert into utilisateur values (null, 'Luc', '1234', 0);

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
INSERT INTO regime values (8, 'Regime mediterraneen', 15); --
INSERT INTO regime values (9, 'Regime vegetarien', 30);
INSERT INTO regime values (10, 'Regime verte', 30);


INSERT INTO plat values (1, 'Banane', 200, 2, 0.10);
INSERT INTO plat values (2, 'Lait', 500, 2, 0.23);
INSERT INTO plat values (3, 'Beurre arachide', 300, 2, 0.56);
INSERT INTO plat values (4, 'Poudre de proteine', 300, 2, 0.16);
INSERT INTO plat values (5, 'Poulet roti', 2000, 2, 0.60);
INSERT INTO plat values (6, 'Legumes', 1000, 2, 0.40);
INSERT INTO plat values (7, 'Riz brun ou complet', 1000, 2, 0.23);
INSERT INTO plat values (8, 'Huile d olive', 1300, 2, 0.10);
INSERT INTO plat values (9, 'Epices', 400, 2, 0.10);
INSERT INTO plat values (10, 'Pain complet', 3000, 2, 0.64);
INSERT INTO plat values (11, 'Oeuf', 700, 2, 0.30);
INSERT INTO plat values (12, 'Avocat', 400, 2, 0.20);
INSERT INTO plat values (13, 'Pates completes', 1800, 2, 0.70);
INSERT INTO plat values (14, 'Poulet grille en des', 2000, 2, 0.65);
INSERT INTO plat values (15, 'Sauce tomate legere', 1300, 2, 0.20);
INSERT INTO plat values (16, 'Herbes', 700, 2, 0.10);
INSERT INTO plat values (17, 'Fromage rape', 3000, 2, 0.40);
INSERT INTO plat values (18, 'Fruits', 2300, 2, 0.35);
INSERT INTO plat values (19, 'Noix', 1300, 2, 0.10);


INSERT INTO plat values (20, 'Poulet grille', 2000, 1, 0.65);
INSERT INTO plat values (21, 'Legumes vertes', 1000, 1, 0.40);
INSERT INTO plat values (22, 'Tomates', 800, 1, 0.32);
INSERT INTO plat values (23, 'Cerises', 1200, 1, 0.16);
INSERT INTO plat values (24, 'Concombre', 2000, 1, 0.65);
INSERT INTO plat values (25, 'Huile d olive', 1300, 2, 0.10);
INSERT INTO plat values (26, 'Jus de citron', 500, 1, 0.79);
INSERT INTO plat values (27, 'Saumon', 3500, 1, 0.65);
INSERT INTO plat values (28, 'Brocoli', 2000, 1, 0.65);
INSERT INTO plat values (29, 'Poivrons', 1500, 1, 0.65);
INSERT INTO plat values (30, 'Courgettes', 2100, 1, 0.65);
INSERT INTO plat values (31, 'Herbes', 700, 1, 0.10);
INSERT INTO plat values (32, 'Epices', 400, 1, 0.10);
INSERT INTO plat values (33, 'Wrap de ble entier', 2000, 1, 0.65);
INSERT INTO plat values (34, 'Legumes', 1000, 1, 0.40);
INSERT INTO plat values (35, 'Poulet grille en des', 2000, 1, 0.65);
INSERT INTO plat values (36, 'Sauce legere a base de yaourt', 2000, 2, 0.65);
INSERT INTO plat values (38, 'Oeuf', 700, 1, 0.30);
INSERT INTO plat values (39, 'Epinards', 1000, 1, 0.20);
INSERT INTO plat values (40, 'Champignons', 500, 1, 0.10);
INSERT INTO plat values (41, 'Oignons', 500, 1, 0.10);
INSERT INTO plat values (42, 'Quinoa cuit', 5000, 1, 0.70);
INSERT INTO plat values (43, 'Pois mange-tout', 2000, 1, 0.30);


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

insert into regimeplat values (23, 8, 20, 100);
insert into regimeplat values (24, 8, 21, 150);
insert into regimeplat values (25, 8, 22, 140);
insert into regimeplat values (26, 8, 23, 250);
insert into regimeplat values (27, 8, 24, 100);
insert into regimeplat values (28, 8, 25, 0.10);
insert into regimeplat values (29, 8, 26, 1.5);
insert into regimeplat values (30, 6, 27, 150);
insert into regimeplat values (31, 6, 28, 325);
insert into regimeplat values (32, 6, 29, 100);
insert into regimeplat values (33, 6, 30, 100);
insert into regimeplat values (34, 6, 31, 1);
insert into regimeplat values (35, 6, 32, 1);
insert into regimeplat values (37, 7, 33, 500);
insert into regimeplat values (38, 7, 34, 200);
insert into regimeplat values (39, 7, 35, 100);
insert into regimeplat values (40, 7, 36, 200);
INSERT INTO regimeplat values (41, 10, 38, 1);
INSERT INTO regimeplat values (42, 10, 39, 0.15);
INSERT INTO regimeplat values (43, 10, 40, 0.15);
INSERT INTO regimeplat values (44, 10, 41, 0.15);
insert into regimeplat values (45, 9, 42, 200);
INSERT INTO regimeplat values (46, 9, 43, 300);
INSERT INTO regimeplat values (47, 9, 28, 350);
INSERT INTO regimeplat values (48, 9, 29, 100);
INSERT INTO regimeplat values (49, 9, 36, 200);


INSERT INTO activite values (1, 'Marche rapide', 1, 0.50);
INSERT INTO activite values (2, 'Course a pied', 1, 0.50);
INSERT INTO activite values (3, 'Circuit training a la maison', 1, 0.50);
INSERT INTO activite values (4, 'HIIT', 1, 0.50);
INSERT INTO activite values (5, 'Velo', 1, 0.50);
INSERT INTO activite values (6, 'Musculation', 1, 0.50);
INSERT INTO activite values (7, 'Corde a sauter', 1, 0.50);

INSERT INTO activite values (8, 'Deadlifts', 2, 0.50);
INSERT INTO activite values (9, 'Bench Press', 2, 0.50);
INSERT INTO activite values (10, 'Squats', 2, 0.50);
INSERT INTO activite values (11, 'Bent-over row', 2, 0.50);
INSERT INTO activite values (12, 'Military press', 2, 0.50);
INSERT INTO activite values (13, 'Extensions halteres', 2, 0.50);
INSERT INTO activite values (14, 'Flexion des biceps', 2, 0.50);


INSERT INTO regimeActivite values (1, 1, 1);
INSERT INTO regimeActivite values (2, 1, 2);
INSERT INTO regimeActivite values (3, 2, 3);
INSERT INTO regimeActivite values (4, 3, 4);
INSERT INTO regimeActivite values (5, 4, 5);
INSERT INTO regimeActivite values (6, 5, 6);
INSERT INTO regimeActivite values (7, 5, 7);

INSERT INTO regimeActivite values (8, 6, 8);
INSERT INTO regimeActivite values (9, 7, 9);
INSERT INTO regimeActivite values (10, 8, 10);
INSERT INTO regimeActivite values (11, 9, 11);
INSERT INTO regimeActivite values (12, 9, 12);
INSERT INTO regimeActivite values (13, 10, 13);
INSERT INTO regimeActivite values (14, 10, 14);