
<html>
<head>
<title>Validazione Form</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>  

<?php
session_start();
if(isset($_SESSION["username"])){
    $username = $_SESSION["username"];
    $psw = $_SESSION["password"];
  if ($username != "admin" || $password != "psw")
    echo "Username o password errate";
  else
    header("location: riser.php");
}


if(!isset($_SESSION["username"]))
{?>
  <form name="frmLogin" action="login.php" method="POST">
    Username: <input type="text" name="username" placeholder="username"><br><br>
    Password: <input type="password" name="password" placeholder="password"><br><br>
    <input type="submit" value="Invio">
  </form><?php
}

?>
    
</body>
</html>
