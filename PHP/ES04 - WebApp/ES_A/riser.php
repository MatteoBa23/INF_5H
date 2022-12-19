<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>

<body>

<?php
session_start();	//inizio sessione

$username = $_SESSION["username"];
if(!isset($username))
    header("location: login.php");	//funzione va direttamente nella pagina indicata 
else 
    echo "Benvenuto ".$username;
?>
<a href="logout.php">Logout</a>
</body>
</html>
