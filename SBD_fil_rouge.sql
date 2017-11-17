DROP DATABASE Fil_rouge;

CREATE DATABASE Fil_rouge;

USE Fil_rouge;

DROP TABLE TPartie;
DROP TABLE TJoueur;
DROP TABLE TAvatar;
DROP TABLE TScore;
DROP TABLE TEnigme;


CREATE TABLE TEnigme(
	id_enigme SMALLINT UNSIGNED auto_increment,
	url VARCHAR(255) NOT NULL,
	PRIMARY KEY (id_enigme)
);

CREATE TABLE TScore(
	id_score SMALLINT UNSIGNED auto_increment,
	score_joueur INT(10),
	PRIMARY KEY (id_score)
);

CREATE TABLE TAvatar(
	id_avatar SMALLINT UNSIGNED auto_increment,
	nom_avatar VARCHAR(20),
    description VARCHAR(100),
	PRIMARY KEY (id_avatar)
);

CREATE TABLE TJoueur(
	id_joueur SMALLINT UNSIGNED auto_increment,
	pseudo VARCHAR(50),
    mdp VARCHAR(50),
    mail VARCHAR(50),
	PRIMARY KEY (id_joueur)
);

CREATE TABLE TPartie(
	id_partie SMALLINT UNSIGNED auto_increment,
    date_partie DATE,
    id_joueur SMALLINT UNSIGNED NOT NULL,
	id_avatar SMALLINT UNSIGNED NOT NULL,
	id_score SMALLINT UNSIGNED NOT NULL,
	id_enigme SMALLINT UNSIGNED NOT NULL,
    PRIMARY KEY (id_partie),
    CONSTRAINT Fk_id_jou FOREIGN KEY (id_joueur) REFERENCES TJoueur (id_joueur),
	CONSTRAINT Fk_id_avat FOREIGN KEY (id_avatar) REFERENCES TAvatar (id_avatar),
	CONSTRAINT Fk_id_sco FOREIGN KEY (id_score) REFERENCES TScore (id_score),
	CONSTRAINT Fk_id_enig FOREIGN KEY (id_enigme) REFERENCES TEnigme (id_enigme)
);


INSERT INTO TAvatar (nom_avatar, description) VALUES ('BlagNouf', 'Petit mais puissant'), ('BombAttack', 'Se vante d\'être plus puissant qu\'un claque doigt, mais personne n\'a encore pu prouver quoi que soit'), ('CopyPaste', 'Possède la capacité incroyable de se démultiplier'), ('3Rr0R_404', 'Personne ne sait qui c\'est !'), ('SmilingSushii', 'Jadis il s\'appelait Nemo'), ('PixelWay', 'Personnage sympathique, mais relativement carré !');
INSERT INTO TScore (score_joueur) VALUES (2000), (200), (3000), (456782), (2345354), (57585847);

SELECT * FROM TAvatar;
SELECT * FROM TScore;

SELECT pseudo, score_joueur FROM TJoueur, TPartie, TScore WHERE TPartie.id_joueur = TJoueur.id_joueur AND TPartie.id_score = TScore.id_score;