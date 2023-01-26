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

//session_destroy(); 

if(!isset($_SESSION['login']))
{
	//echo "ciao";
	if(!isset($_POST['Login']))
	{?>
  		<form name="frmLogin" action="login.php" method="POST">
		Username: <input type="text" name="username" placeholder="username"><br><br>
   		Password: <input type="password" name="password" placeholder="password"><br><br>
		<p>Non hai effettuato la registrazione? Registrati<p><a href="signup.php">qui</a><br><br>
   		<input type="submit" name="Login">
 		</form><?php
	}else
	{
		login();
	}
	
		
}else
{
	echo "Hai già effettuato il login <br>";
	echo "<a href='index.php'>Home page</a><br>";
	echo "<a href='riser.php'>Pagina riservata</a><br>";
}
	

?>
</body>
</html>
