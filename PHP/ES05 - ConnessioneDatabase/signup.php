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
/*
//definizioni info per il database
define('DB_SERVER', 'localhost');
define('DB_NAME', 'gestione_utente');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
*/
?>
<h2>Registrazione utente</h2>
<form name="frmLogin" action="login.php" method="post">
    Username: <input type="text" name="username" required pattern="/^[a-zA-Z0-9_@#]*$/"><br><br>
    Password: <input type="password" name="password" placeholder="password"><br><br>
	Conferma password: <input type="password" name="confpassword" placeholder="conferma password"><br><br>
    <input type="submit" value="Invio">
</form>
<?php
/*
registra();
*/
?>
</body>
</html>
