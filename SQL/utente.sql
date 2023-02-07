//CREAZIONE DATABASE E TABELLE
CREATE DATABASE Gestione_Utente;

CREATE TABLE utente (
  id INT NOT NULL AUTO_INCREMENT,
  username VARCHAR(65) NOT NULL,
  psw VARCHAR(65) NOT NULL,
  PRIMARY KEY(id)
); 


-----------------------------------------------------------------
//INSERIMENTI - MODIFICHE ALLE TABELLE

//INSERIMENTO DATI
INSERT
INTO utente (id,username,psw)
VALUES (NULL,'Giannotto','provozza');

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

