<html>
<head>
<title>Validazione Form</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>  

<?php
//inizializzazione delle variabili
$nome = $cognome = $datanascita = $email = $nickname = "";
$cellulare = 0;

$nome = controlloNome($_POST["nome"]);
$cognome = controlloCog($_POST["cognome"]);
$datanascita = controlloData($_POST["datanascita"]);
$email = controlloEmail($_POST["email"]);
$cellulare = controlloCell($_POST["cellulare"]);
$nickname = controlloNick($_POST["nickname"]);
$password = controlloPass($_POST["password"]);

function controlloNome($nome){
    $nome = trim($nome);	//funzione trim elimina gli spazi prima della stringa
    if(preg_match('/^[a-zA-Z]*$/',$nome))
    {
        echo "Nome inserito: "; 
        echo $nome;
    }else
     echo "Username non valido. Ammessi solo caratteri";
	echo "<br>";
    return $nome;
}
function controlloCog($cognome){
    $cognome = trim($cognome);
    if(preg_match('/^[a-zA-Z]*$/',$cognome))
    {
        echo "Cognome inserito: ";
        echo $cognome;
    }else
        echo "Cognome non valido. Ammessi solo caratteri";
    echo "<br>"; 
    return $cognome;
}
function controlloData($data){
    return $data;
}
function controlloEmail($email){
    $email = trim($email);
    if(preg_match("/^[a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/",$email))
    {
        echo "Email inserita: ";
        echo $email;
    }else
        echo "Email non valida";
    echo "<br>";
    return $email;
}
function controlloCell($cell){
    $cell = trim($cell);
    if(preg_match('/^[0-9]/',$cell))
    {
        echo "Cellulare inserito: ";
        echo $cell;
    }else
        echo "Cellulare non valido. Ammesse solo cifre";
    echo "<br>";
    return $cell;
}
function controlloNick($nick){
    if(preg_match('/^[a-zA-Z0-9_@#]*$/',$nick))
    {
        echo "Nickname inserito: "; 
        echo $nick;
    }else
        echo "Nickname non valido";
    echo "<br>";
    return $nick;
}
function controlloPass($pass){
    $pass = trim($pass);
    return $pass;
}
?>

<h2>Validazione php</h2>
<!-- creazione form -->
	<form name="frmLogin" method="POST" action="<?php ($_SERVER["PHP_SELF"]);?>">
		Username*: <input type="text" name="nome"><br><br>
		Cognome*: <input type="text" name="cognome"><br><br>
		Data di nascita*: <input type="date" name="datanascita"><br><br> 
		Email*: <input type="text" name="email"><br><br>
		Cellulare: <input type="text" name="cellulare"><br><br>
		Nickname*: <input type="text" name="nickname"><br><br>
		Password*: <input type="password" name="password"><br><br> 
	<input type="submit" value="Invio"><!-- tasto invio -->
	</form>
</body>
</html>
