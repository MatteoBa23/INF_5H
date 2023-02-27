<?php
session_start();
require 'function.php';
?>
<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>

<body>
<h2>Reset della password</h2>
<?php
//definizioni info per il database
define('DB_SERVER', 'localhost');
define('DB_NAME', 'gestione_utente');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

if(!isset($_POST['Login']))
{?>
    <form name="frmLogin" action="reset.php" method="POST">
	    <h3>Inserisci il tuo username e la nuova password per il reset della password</h3>
	    Username: <input type="text" name="username"><br><br>
        Nuova password: <input type="password" name="password"><br><br>
   	    <input type="submit" name="Login">
 	</form><?php
	echo "<a href='index.php'>Home page</a><br>";
}else {
    reset_psw();
    echo " torna al login: <br>";
    echo "<a href='login.php'>Login</a><br>";
}
?>


</body>
</html>