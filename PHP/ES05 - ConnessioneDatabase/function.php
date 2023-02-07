<?php

    function login(){
    //variabili passate dal metodo POST del login
    $username = $_POST['username'];
    $psw = $_POST['password'];

    //preparo la query al database
    $pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	
    //controlla se nel database esistono sia l'username che la password inserite precedentemente
    $query = "SELECT * FROM utente WHERE username='$username' AND psw='$psw'";
    $result = $pdo->query($query);

    //controllo se la variabile ha acquisito le informazioni dal database
    if ($result->rowCount() > 0){
        //esito positivo
        $_SESSION['login'] = true;
        echo "<h3>Benvenuto utente </h3><br>";
        echo "<a href='riser.php'>Pagina riservata</a>";
    }else{
        //esito negativo
        $_SESSION['login'] = false;
        echo "Nome utente o password errate";
    }
    }
	
	
	function signup() {
		$nome = $_POST['nome'];
		$cog = $_POST['cog'];
		$username = $_POST['username'];
		$psw = $_POST['password'];
		$email = $_POST['email'];
		$data_nascita = $_POST['data_nascita'];
		
		//preparo la query al database
		$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
		
		$query = "INSERT INTO utente VALUES(id=NULL, nome='$nome', cognome='$cog', username='$username', psw='$psw', email='$email', data_nascita='$data_nascita' )";
		$_SESSION['login'] = true;
	}
	
?>
