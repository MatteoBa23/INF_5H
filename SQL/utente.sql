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
SET psw = 'provola'
WHERE id = 1;

