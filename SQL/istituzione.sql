--------------------------------------------------------------------------------------------------------------
CREAZIONE DATABASE E RELATIVE TABELLE

//creazione database istituzione
CREATE DATABASE istituzione;    

//creazione tabella studenti
CREATE TABLE studenti(
	matricola CHAR(10) PRIMARY KEY,
    nome CHAR(15) NOT NULL,
    cognome CHAR(15) NOT NULL,
    data_nascita DATE NOT NULL,
    codice_scuola INT NOT NULL,
    FOREIGN KEY(codice_scuola) REFERENCES scuola(codice)
        ON UPDATE CASCADE
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
INTO studenti (matricola, nome, cognome, data_nascita, codice_scuola)
VALUES ('D5RF8','Gianno','Giannotti','1998/06/12','2')

//elimino istanze
DELETE FROM studenti        //elimino la riga con il nome = 'Antonio'
WHERE nome='Antonio';

//aggiorno informazioni
UPDATE studenti                //aggiorno il cognome solo nella riga con il cognome = 'Giannotti'
SET voto = '3'
WHERE cognome='Giannotti';
