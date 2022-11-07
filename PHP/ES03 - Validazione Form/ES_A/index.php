<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
<h2>Esempio validazione dei campi di un form in PHP</h2>
<p>* = campi obbligatori</p>

<form name="frmLogin" method="POST" action="check.php">
Username*: <input type="text" name="nome"><br><br>
Cognome*: <input type="text" name="cognome"><br><br>
Data di nascita*: <input type="data" name="datanascita"><br><br> 
Email*: <input type="text" name="email"><br><br>
Cellulare: <input type="text" name="cellulare"><br><br>
Nickname*: <input type="text" name="nickname"><br><br>
Password*: <input type="password" name="password"><br><br> 
<input type="submit" value="Invio">
</form>

</body>
</html>
