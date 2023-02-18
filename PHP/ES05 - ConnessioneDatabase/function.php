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
		
        //inserisco i valori passati con il POST
		$query = "INSERT INTO utente (id,nome,cognome,username,psw,email,data_nascita)
        VALUES(NULL,'$nome','$cog','$username','$psw','$email','$data_nascita')";
         
        //controllo se la query è andata a buon fine
        if($pdo->query($query)==true){
            echo "Utente inserito ";
        }else
            echo "Impossibile inserire: ";

        //inizializzo la variabile di sessione a true
        $_SESSION['login'] = true;
		
		//chiudo la connessione al database
		$pdo=null;
	}

    function reset_psw(){
        $username = $_POST['username'];
        $psw = $_POST['password'];

        $pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
        $query = "UPDATE utente SET psw=$psw WHERE username=$username";

        //controllo se la query è andata a buon fine
        if($pdo->query($query)==true){
            echo "Password aggiornata ";
        }else
            echo "Impossibile aggiornare la password ";

		//chiudo la connessione al database
		$pdo=null;
    }
?>
