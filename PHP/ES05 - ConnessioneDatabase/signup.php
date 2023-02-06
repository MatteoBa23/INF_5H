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
?>
<h2>Registrazione utente</h2>
<form name="frmLogin" action="login.php" method="post">
    Username: <input type="text" name="username" required pattern="/^[a-zA-Z0-9_@#]*$/"><br><br>
    Password: <input type="password" name="password"><br><br>
	Email: <input type="text" name="email"><br><br>
	Data di nascita: <input type="text" name="data_nascita"><br><br>
    <input type="submit" value="Invio">
</form>
<?php

signup();

?>
</body>
</html>
