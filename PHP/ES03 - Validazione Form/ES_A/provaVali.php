 <html>
<head>
</head>
<body>  

<?php
//inizializzazione delle variabili
$nome = $cognome = $datanascita = $email = $nickname = "";
$cellulare = 0;
//funzione trim elimina gli spazi prima della stringa
$nome = trim($_POST["nome"]);
$cognome = trim($_POST["cognome"]);
$datanascita = trim($_POST["datanascita"]);
$email = trim($_POST["email"]);
$cellulare = trim($_POST["cellulare"]);
$nickname = trim($_POST["nickname"]);
$password = trim($_POST["password"]);


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

<?php
echo "<h2>Input:</h2>";
echo "<br>Nome inserito: ";
echo $nome;
echo "<br>Cognome inserito: ";
echo $cognome;
echo "<br>Data di nascita inserita: ";
echo $datanascita;
echo "<br>";
echo $email;
echo "<br>";
echo $cellulare;
echo "<br>";
echo $nickname;
echo "<br>";
echo $password;
echo "<br>";
?>

</body>
</html>
