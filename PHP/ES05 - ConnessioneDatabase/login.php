<?php
session_start();	//avvio sessione
?>
<html>
<head>
<title>Validazione Form</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>  
<?php
if(isset($_POST["username"])){
	$username = $_POST["username"];
	$password = $_POST["password"];
if($username!="admin" || $password!="psw")
	echo "Nome utente o password errate";
else
{
	$_SESSION["username"] = $_POST["username"];
	$_SESSION["password"] = $_POST["password"];
	header("location: riser.php");
}
}
if(!isset($_SESSION["username"]))
{?>
  <form name="frmLogin" action="login.php" method="post">
    Username: <input type="text" name="username" placeholder="username"><br><br>
    Password: <input type="password" name="password" placeholder="password"><br><br>
    <input type="submit" value="Invio">
  </form><?php
}
?>
</body>
</html>
