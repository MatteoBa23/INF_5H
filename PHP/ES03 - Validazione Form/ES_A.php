<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
<h2>Esempio validazione dei campi di un form in PHP</h2>
<p>* = campi obbligatori</p>
<?php
/*$_SERVER["PHP_SELF"] --> invia i dati del modulo alla pagina stessa, invece di passare a una pagina diversa. 
i messaggi di errore verranno mostrati sulla stessa pagina del modulo*/
//definisco le variabili
$nome = $cognome = $email = $nickname = $cellulare = $datanascita = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = test_input($_POST["nome"]);
  $cognome = test_input($_POST["cognome"]);
  $datanascita = test_input($_POST["datanascita"]);
  $email = test_input($_POST["email"]);
  $cellulare = test_input($_POST["cellulare"]);
  $nickname = test_input($_POST["nickname"]);
  $password = test_input($_POST["password"]);
}
function test_input($data) {
  $data = trim($data);
  return $data;
}
?>
<form name="frmLogin" method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
Username*: <input type="text" name="nome"><br><br>
Cognome*: <input type="text" name="cognome"><br><br>
Data di nascita*: <input type="text" name="datanascita"><br><br> 
Email*: <input type="text" name="email"><br><br>
Cellulare: <input type="text" name="cellulare"><br><br>
Nickname*: <input type="text" name="nickname"><br><br>
Password*: <input type="password" name="password"><br><br> 
<input type="submit" value="Invio">
</form>

<?php
echo "<h2>Dati inseriti:</h2>";
echo "Nome inserito: ";
echo $nome;
echo "<br>";
echo "Cognome inserito: ";
echo $cognome;
echo "<br>";
echo "Data di nascita: ";
echo $datanascita;
echo "<br>";
echo "Email inserita: ";
echo $email;
echo "<br>";
echo "Cellulare: ";
echo $cellulare;
echo "<br>";
echo "Nickname: ";
echo $nickname;
echo "<br>";
echo "Password: ";
echo $password;
echo "<br>";
?>
</body>
</html>
