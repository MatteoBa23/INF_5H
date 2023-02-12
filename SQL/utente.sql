//CREAZIONE DATABASE E TABELLE
CREATE DATABASE Gestione_Utente;

CREATE TABLE utente (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(65) NOT NULL,
  cognome VARCHAR(65) NOT NULL,
  username VARCHAR(65) NOT NULL UNIQUE,
  psw VARCHAR(65) NOT NULL,
  email VARCHAR(65) NOT NULL UNIQUE,
  data_nascita DATE NOT NULL,  
  PRIMARY KEY(id)
); 


-----------------------------------------------------------------
//INSERIMENTI - MODIFICHE ALLE TABELLE

//INSERIMENTO DATI
INSERT
INTO utente (id,nome,cognome,username,psw,email,data_nascita)
VALUES (NULL,'Giacomo','Provozza','GiacoProvo','giacomino','giacomo.provozza@gmail.com','2006/02/25');

INSERT
INTO utente (id,nome,cognome,username,psw,email,data_nascita)
VALUES (NULL,'Sofia','Esplosa','SofiEsplo','sofia','sofia.esplosa@gmail.com','2007/08/12');

INSERT
INTO utente (id,nome,cognome,username,psw,email,data_nascita)
VALUES (NULL,'Marco','Vino','MarcoVino','marcolino','marco.vino@gmail.com','2002/04/02');

//AGIORNO TABELLE
UPDATE utente
SET nome = "Giacomino"
WHERE id=3;

UPDATE utente
SET cognome = "Tortellino"
WHERE id=3;

UPDATE utente
SET username = "GiacoTorte"
WHERE id=3;

UPDATE utente
SET psw = "Giaco"
WHERE id=3;

UPDATE utente
SET email = "giacomino.tortellino@gmailcom"
WHERE id=3;

UPDATE utente
SET nascita = "2003/01/21"
WHERE id=3;

