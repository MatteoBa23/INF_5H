<?php
session_start();
require 'function.php';
?>
<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
<?php
//definizioni info per il database
define('DB_SERVER', 'localhost');
define('DB_NAME', 'gestione_utente');
define('DB_USER', 'root');
define('DB_PASSWORD', '');


if(!isset($_SESSION['login']))
{
	if(!isset($_POST['Submit'])){?>
  		<h2>Registrazione utente</h2>
		<form name="frmLogin" action="<?=$_SERVER['PHP_SELF']?>" method="post">
			Nome: <input type="text" name="nome"><br><br>
			Cognome: <input type="text" name="cog"><br><br>
			Username: <input type="text" name="username"><br><br>
			Password: <input type="password" name="password"><br><br>
			Email: <input type="text" name="email"><br><br>
			Data di nascita: <input type="date" name="data_nascita"><br><br>
		<input type="submit" name="Submit" value="Invio">
		</form><?php
	}else{
		signup();
		echo "Vai alla pagina riservata <br>";
		echo "<a href='riser.php'>Pagina Riservata</a><br>";
	}
			
}
?>



</body>
</html>
