<html>
    <head>
        <title>ITCS Erasmo da Rotterdam</title>
    </head>

<body>
<h2>Visualizzazione del Database ordinato</h2>
<table border="1" cellspacing="3" cellpadding="2">
<?php
define('DB_SERVER', 'localhost');
define('DB_NAME', 'show_db');
define('DB_USER', 'root');
define('DB_PASSWORD', '');


//preparo la query al database
$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	
//controlla se nel database esistono sia l'username che la password inserite precedentemente
$query = "SELECT * FROM utente ORDER BY cognome ASC";
$result = $pdo->query($query);

echo "<tr>";
echo "<td align=\"center\"> ID <td align=\"center\"> Nome <td align=\"center\"> Cognome";
echo "</tr>";
//visualizzo il database
foreach($result as $riga){
	echo "<tr>";
	echo "<td align=\"center\">"; 
	print $riga["id"] ."<td align=\"center\"> ". $riga["nome"] ."<td align=\"center\">". $riga["cognome"] ."</td>";
	echo "</tr>";
}

?>

</body>
</html>
