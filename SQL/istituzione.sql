--------------------------------------------------------------------------------------------------------------
CREAZIONE DATABASE E RELATIVE TABELLE

//creazione database istituzione
CREATE DATABASE istituzione;    

//creazione tabella studenti
CREATE TABLE studenti (
    matricola CHAR(15) PRIMARY KEY,
  	cognome CHAR(20),
    codice_scuola INT REFERENCES scuola(codice)
);

//creazione tabella scuola
CREATE TABLE scuola (
    codice INT NOT NULL AUTO_INCREMENT PRIMARY KEY 
);


--------------------------------------------------------------------------------------------------------------
MODIFICA DELLE TABELLE

//aggiungo colonna (attributo) alla tabella studenti
ALTER TABLE studenti ADD COLUMN(
    nome CHAR(15),
    data_nascita DATE
);

//elimino la colonna nome
ALTER TABLE studenti DROP COLUMN nome

//inserisco i valori nei campi 
INSERT
INTO studenti (nome, data_nascita)
VALUES ('Giannotti','1998/06/19');
