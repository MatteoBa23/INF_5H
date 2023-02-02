--------------------------------------------------------------------------------------------------------------
CREAZIONE DATABASE E RELATIVE TABELLE

//creazione database istituzione
CREATE DATABASE istituzione;    

//creazione tabella studenti
CREATE TABLE studenti(
    matricola CHAR(10) PRIMARY KEY,
    nome CHAR(15) NOT NULL,
    cognome CHAR(15) NOT NULL,
    codice_scuola INT NOT NULL,
    FOREIGN KEY(codice_scuola) REFERENCES scuola(codice)
        ON DELETE SET DEFAULT ON UPDATE CASCADE
);

//creazione tabella scuola
CREATE TABLE scuola (
    codice INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    codice_scuola VARCHAR(20)
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
INTO studenti (matricola, nome, cognome, codice_scuola)
VALUES ('D5RF8','Gianno','Giannotti','01');

//elimino istanze
DELETE FROM studenti        //elimino la riga con il nome = 'Antonio'
WHERE nome='Antonio';

//aggiorno informazioni
UPDATE studenti                
SET voto = '3'
WHERE cognome='Giannotti';

INSERT INTO scuola(codice, nome_scuola) VALUES ('01','ITCS Erasmo da Rotterdam')

//istruzione congiunzione tabelle
SELECT st.cognome, sc.nome_scuola
FROM studenti as st, scuola as sc
WHERE st.codice_scuola=sc.codice
