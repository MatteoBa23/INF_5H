<html>
    <head>
        <title>ITCS Erasmo da Rotterdam</title>
    </head>

    <body>
        <h2>Controllo credenziali inserite</h2>

        <?php
        $username = $_POST["username"];
        $password = $_POST["password"];
        if($username!="admin" && $password!="password")
        {
            ?>
            <h2>ATTENZIONE!! Accesso Negato. Username o password sbagliate.</h2>
            <?php
        } else {
            echo "<h2>Benvenuto " . $username . "<br/>nell'area riservata";
        }
        ?>
    </body>
</html>
