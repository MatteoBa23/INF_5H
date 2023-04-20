<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>

<body>
<h2>Visualizzazione del Database</h2>
<table border="1" cellspacing="3" cellpadding="2">
<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_NAME', 'show_db');
define('DB_USER', 'root');
define('DB_PASSWORD', '');


//preparo la query al database
$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	
//controlla se nel database esistono sia l'username che la password inserite precedentemente
$query = "SELECT * FROM utente";
$result = $pdo->query($query);
$qs="nulla";
echo "<h3>Se vuoi ordine in ordine alfabetico o in ordine crescente una colonna, devi cliccare sulla colonna interessata</h3>";
echo "<tr>";
echo "
<td align='center'> $qs=\"<a href='show_ordered_table.php?ord=.$riga[id]'>ID</a>
<td align='center'> <a href='show_ordered_table.php'>Nome</a>
<td align='center'> <a href='show_ordered_table.php'>Cognome</a>";
echo "</tr>";

//visualizzo il database
foreach($result as $riga){
	echo "<tr>";
	echo "<td align=\"center\">"; 
	print $riga["id"] ."<td align=\"center\">". $riga["nome"] ."<td align=\"center\">". $riga["cognome"] ."</td>";
	echo "</tr>";
}
?>
</body>
</html>
