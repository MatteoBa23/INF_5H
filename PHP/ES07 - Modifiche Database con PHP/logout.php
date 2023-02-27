<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
<?php
session_start();
session_destroy();
echo "Logout effettuato";
?>
<br>
<a href="login.php">Accedi di nuovo</a><br>
<a href="index.php">Home page</a><br>
</body>
</html>