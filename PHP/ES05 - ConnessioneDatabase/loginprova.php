<?php
session_start();	//avvio sessione
?>
<html>
<head>
<title>Validazione Form</title>
</head>
<body>  
<?php
//definizioni info per il database
define('DB_SERVER', 'localhost');
define('DB_NAME', 'nome_database');
define('DB_USER', 'nome_utente');
define('DB_PASSWORD', 'password');

//definisco le variabili per il database
$username = $_POST['username']; $password = $_POST['password'];

try {
	//connessione al database
	$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	
	//preparazione delle query 
	$stmt = $pdo->prepare("SELECT * FROM utenti WHERE username = :username AND password = :password");
	$stmt->bindParam(':email', $email);
    $stmt->bindParam(':psw', $psw);
	
	//eseguo la query precedentemente scritta
	$stmt->execute();
	
	//controllo l'esistenza dei campi nel database
	if ($stmt->rowCount() > 0) {
      echo "Campi trovati";
    } else {
      echo "Campi inesistenti";
    }
	
    // Chiudi la connessione al database
	$pdo = null;


	
}catch (PDOException $e) {
    //gestisco l'eccezzione che si può creare
    echo "Errore di connessione: " . $e->getMessage();
    exit;
}


//chiudo la connessione al database
$pdo=null;

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
	Email: <input type="text" name="email" placeholder="email"><br><br>
    Password: <input type="password" name="password" placeholder="password"><br><br>
	<p>Non hai effettuato la registrazione? Registrati<p><a href="signup.php">qui</a><br><br>
    <input type="submit" value="Invio">
	
  </form><?php
}
?>
</body>
</html>
