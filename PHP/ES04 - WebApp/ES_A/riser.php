<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>

<body>

<?php
include "functions.php";

session_start();	//inizio sessione

if(isset($_SESSION["username"] && empty($_SESSION["username"])))
	echo "Benvenuto!";
else 
{
	header("location: login.php");	//funzione va direttamente nella pagina indicata 
	die();							//distrugge la sessione
}
?>

</body>
</html>
