<?php
session_start();
require 'function.php';
?>
<html>
    <head>
        <title>ITCS Erasmo da Rotterdam</title>
    </head>

    <body>
        <h2>Pagina per eliminare l'account</h2><br>
        <p>Per eliminare il tuo account devi compilare questi campi</p>
        <p>* = campi obbligatori</p>

        <?php
		
		//definizioni info per il database
		define('DB_SERVER', 'localhost');
		define('DB_NAME', 'gestione_utente');
		define('DB_USER', 'root');
		define('DB_PASSWORD', '');
		
		
        if(!isset($_POST['Submit'])){?>
            <form name="frmLogin" action="<?=$_SERVER['PHP_SELF']?>" method="post"><br>
            <h3>Inserisci le tue credenziali</h3>
            Email*: <input type="text" name="email"><br><br>
            Conferma della cancellazione dell'account: <input type="checkbox"><br><br>
            <input type="submit" name="Login">
            </form>
            <a href='index.php'>Home Page</a><br><?php
        }else {
			deletepsw();
			echo "Account eliminato correttamente, torna alla home page: <br>";
            echo "<a href='index.php'>Home Page</a><br>";
		}
            

        ?>



        
    </body>
</html>