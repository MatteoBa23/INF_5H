<?php
session_start();	//inzio sessione o prendo quella esistente
?>
<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
<?php
if(!isset($_SESSION['login'])){
        echo "<h2>Devi eseguire il login per accedere alla sezione riservata</h2><br>";
        echo "<br><a href='login.php'>Login</a><br>";
        echo "<a href='index.php'>Home</a><br>";
}else{
        echo "<h2>Benvenuto nella sezione riservata</h2><br>";
		echo "Vuoi cambiare la password? Cambiala <a href='reset.php'>qui</a><br><br>";
		echo "Vuoi eliminare l'account? Eliminalo da <a href='delete.php'>qui</a><br><br>";
        echo "<a href='index.php'>Home</a><br>";
        echo "<a href='logout.php'>Logout</a><br>";
}
?>
</body>
</html>
