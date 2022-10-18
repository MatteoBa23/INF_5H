<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
<h2>Controllo Credenziali</h2>

<?php
$username = $_POST["username"];
$cognome = $_POST["cognome"];
$password = $_POST["password"];
if($username!="admin" || $password!="password" || $cognome!="rossi") {
	?>
	<h2>Attenzione! Username o password errate</h2><br>
	<?php
} else {
	echo "<h2>Benvenuto " . $username . " nell'area riservata!</h2>";
	
}
?>
</body>
</html>
