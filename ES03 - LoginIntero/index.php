<!-- BALLABIO MATTEO 
  ESERCIZIO LOGIN INTERO -->
<html>
<head><title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
<h2>Inserisci le credenziali</h2>
<?php
	
	if(isset($_POST["username"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
	if($username!="admin" || $password!="password") {
?>
	<h2>Attenzione! Username o password errate</h2>
<?php
} else {
	echo "<h2>Benvenuto " . $username . " nell'area riservata!</h2>";
}
}else {
?>
	<form name="frmLogin" action="index.php" method="POST">
	Username: <input type="text" name="username" placeholder="username"><br><br>
	Password: <input type="password" name="password" placeholder="password"><br><br>
	<input type="submit" value="Invio">
	</form>
<?php
}
?>
</body>
</html>
