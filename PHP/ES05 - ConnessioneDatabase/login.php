<?php
session_start();	//avvio sessione
require 'function.php';
?>
<html>
<head>
<title>Validazione Form</title>
</head>
<body>  
<?php
//definizioni info per il database
define('DB_SERVER', 'localhost');
define('DB_NAME', 'gestione_utente');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

//controllo login è già statto controllato
if(!isset($_SESSION['login']))
{
	//se non è già stato effettuato il login compare il form
	if(!isset($_POST['Login'])){?>
  		<form name="frmLogin" action="login.php" method="POST">
		<h3>Inserisci le tue credenziali</h3>
		Username: <input type="text" name="username" placeholder="username"><br><br>
   		Password: <input type="password" name="password" placeholder="password"><br><br>
		Informativa sulla privacy: <input type="checkbox"><br><br>
		Non hai effettuato la registrazione? Registrati <a href="signup.php">qui</a><br><br>
			Vuoi cambiare la password? Cambiala <a href='reset.php'>qui</a><br>
   		<input type="submit" name="Login">
 		</form><?php
		echo "<a href='index.php'>Home page</a><br>";
	}else
		//verifico le credenziali inserite, utente già fatto il login
		login();	
}else {
	//se utente ha già fatto il login, compare link per alcune pagine
	echo "Hai già effettuato il login <br>";
	echo "<a href='index.php'>Home page</a><br>";
	echo "<a href='logout.php'>Logout</a><br>";
	echo "<a href='riser.php'>Pagina riservata</a><br>";
}
?>
</body>
</html>
