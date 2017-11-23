DROP DATABASE Fil_rouge;

CREATE DATABASE Fil_rouge;

USE Fil_rouge;

DROP TABLE TPartie;
DROP TABLE TJoueur;
DROP TABLE TEnigme;


CREATE TABLE TEnigme(
	id_enigme SMALLINT UNSIGNED auto_increment,
	url VARCHAR(255) NOT NULL,
	PRIMARY KEY (id_enigme)
);

CREATE TABLE TJoueur(
	id_joueur SMALLINT UNSIGNED auto_increment,
	pseudo VARCHAR(50),
    mdp VARCHAR(50),
	PRIMARY KEY (id_joueur)
);

CREATE TABLE TPartie(
	id_partie SMALLINT UNSIGNED auto_increment,
    score_joueur INT(10),
    id_joueur SMALLINT UNSIGNED NOT NULL,
	id_enigme SMALLINT UNSIGNED NOT NULL,
    PRIMARY KEY (id_partie),
    CONSTRAINT Fk_id_jou FOREIGN KEY (id_joueur) REFERENCES TJoueur (id_joueur),
	CONSTRAINT Fk_id_enig FOREIGN KEY (id_enigme) REFERENCES TEnigme (id_enigme)
);

INSERT INTO TJoueur (pseudo, mdp) VALUES ('Rolland', 'Culer');
INSERT INTO TPartie (score_joueur, id_joueur, id_enigme) VALUES (0, '1', '1');
INSERT INTO TScore (score_joueur) VALUES (2000), (200), (3000), (456782), (2345354), (57585847);

SELECT * FROM TScore;

SELECT pseudo, score_joueur FROM TJoueur, TPartie, TScore WHERE TPartie.id_joueur = TJoueur.id_joueur AND TPartie.id_score = TScore.id_score;