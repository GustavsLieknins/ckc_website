CREATE DATABASE ckc_lieknins;

USE ckc_lieknins;

CREATE TABLE ckc_events (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	datetime DATETIME NOT NULL,
	event VARCHAR(255) NOT NULL,
	place VARCHAR(255) NOT NULL
);

CREATE TABLE ckc_kolektivi (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name VARCHAR(80) NOT NULL,
	description VARCHAR(500) NOT NULL 
);


INSERT INTO ckc_events
(datetime,event,place)
VALUES
('2024-03-31 13:00:00', 'Lieldienas Cēsīs', 'Rožu laukums'),
('2024-04-04 18:00:00', 'Leļļu teātra izrāde "Gangsteromīte"', 'Koncertzāle "Cēsis"');
('2024-07-19 08:00:00', 'Cēsu pilsētas svētki 818', 'Cēsis');

INSERT INTO ckc_kolektivi
(name,description)
VALUES
('Cēsis','Pūtēju orķestris'),
('Raitais solis','Tautu deju ansamblis'),
('Vidzeme','Jauktais koris'),
('Dzieti','Tautas vērtes kopa');
