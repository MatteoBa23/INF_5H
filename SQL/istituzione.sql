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
INTO studenti (matricola, cognome, nome, data_nascita, codice_scuola)
VALUES ('m4f&a','Giannotti','Luigi','1998/06/25','2');

//elimino istanze
DELETE FROM studenti        //elimino la riga con il nome = 'Antonio'
WHERE nome='Antonio';

//aggiorno informazioni
UPDATE studenti                //aggiorno il cognome solo nella riga con il cognome = 'Giannotti'
SET voto = '3'
WHERE cognome='Giannotti';
