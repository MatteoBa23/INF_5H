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
//definizioni info del database
define('DB_SERVER', 'localhost');
define('DB_NAME', 'gestione_utente');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

//controllo se esiste la variabile di sessione login
if(!isset($_SESSION['login']))
{
	//controllo se l'utente ha già effettuato il login
	if(!isset($_POST['Login']))
	{?>
  		<form name="frmLogin" action="login.php" method="POST">
		Username: <input type="text" name="username" placeholder="username"><br><br>
   		Password: <input type="password" name="password" placeholder="password"><br><br>
		<p>Non hai effettuato la registrazione? Registrati<p><a href="signup.php">qui</a><br><br>
   		<input type="submit" name="Login">
 		</form><?php
	}else
		login();	
}else
{
	echo "Hai già effettuato il login <br>";
	echo "<a href='index.php'>Home page</a><br>";
	echo "<a href='logout.php'>Logout</a><br>";
	echo "<a href='riser.php'>Pagina riservata</a><br>";
}
	

?>
</body>
</html>
