<?php
session_start();	//inzio sessione o prendo quella esistente
?>
<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
<?php
if(!isset($_SESSION["username"]) && empty($_SESSION["username"]))
{
	echo "Non hai effettuato il "; ?>
	<a href="login.php">login</a><?php
}else
{
	echo "Benvenuto "?><br>
	<a href="logout.php">Logout</a><?php
}
?>
<br>
<a href="index.php">Home page</a><br>
</body>
</html>

