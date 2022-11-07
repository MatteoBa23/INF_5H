<?php
$nome = trim($_POST["nome"]);
$cognome = trim($_POST["cognome"]);
$email = trim($_POST["email"]);
$cellulare = trim($_POST["cellulare"]);
$nickname = trim($_POST["nickname"]);
$password = trim($_POST["password"]);

echo "<h2>Dati inseriti: </h2>";
echo "<br>";

//controllo campo nome
if(preg_match('/^[a-zA-Z]*$/',$nome))
{
    echo "Nome inserito: "; 
    echo $nome;
}else
    echo "Username non valido. Ammessi solo caratteri";
echo "<br>";

//controllo campo cognome
if(preg_match('/^[a-zA-Z]*$/',$cognome))
{
    echo "Cognome inserito: ";
    echo $cognome;
    
}else
    echo "Cognome non valido. Ammessi solo caratteri";
echo "<br>";  
  
//controllo campo data di nascita


//controllo campo email
if(preg_match("/^[a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/",$email))
{
    echo "Email inserita: ";
    echo $email;
}else
    echo "Email non valida";
echo "<br>";

//controllo campo cellulare
if(preg_match('/^[0-9]/',$cellulare))
{
    echo "Cellulare inserito: ";
    echo $cellulare;
}else
    echo "Cellulare non valido. Ammesse solo cifre";
echo "<br>";

//controllo campo nickname
if(preg_match('/^[a-zA-Z0-9_@#]*$/',$nickname))
{
    echo "Nickname inserito: "; 
    echo $nickname;
}else
    echo "Nickname non valido";
echo "<br>";

//controllo campo password

?>
