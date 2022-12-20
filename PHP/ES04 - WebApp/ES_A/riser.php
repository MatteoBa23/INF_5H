<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>

<body>

<?php
session_start();	//inizio sessione


if(!isset($_SESSION["username"]) && empty($_SESSION["username"]))
{
    echo "Non hai effettuato il "; ?>
    <a href="login.php">login</a><?php
}else
{
    echo "Benvenuto ".$_SESSION["username"];?>
    <a href="logout.php">Logout</a><?php
}?>
    
</body>
</html>
