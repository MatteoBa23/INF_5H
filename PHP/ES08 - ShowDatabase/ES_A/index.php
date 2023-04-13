<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>

<body>
<h2>Visualizzazione del Database</h2>
<table border="1" cellspacing="3" cellpadding="2">
<?php
define('DB_SERVER', 'localhost');
define('DB_NAME', 'visualizzo_db');
define('DB_USER', 'root');
define('DB_PASSWORD', '');


//preparo la query al database
$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	
//controlla se nel database esistono sia l'username che la password inserite precedentemente
$query = "SELECT * FROM utente";
//$result = $pdo->query($query);
	
//visualizzo il database

    
	
$limite = 3;
$limite2 = 3;
for($riga=1;$riga<=$limite;$riga++)
{
    echo "<tr>";
    for($colonna=1;$colonna<=$limite2;$colonna++)
    {
        echo "<td align=\"center\">"; echo $query; echo "</td>";
    }
    echo "</tr>";
}

?>
</body>
</html>
