
<html>
<head>
<title>Validazione Form</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>  


<?php

//inizializzazione delle variabili
$nome = $cognome = $password = "";

//inizializzazione variabili per errori
$errNome = $errCognome = $errPasw = "";

if(isset($_POST["nome"])){
	$nome = trim($_POST["nome"]);
	$cognome = trim($_POST["cognome"]);
	$password = trim($_POST["password"]);
}

//controllo campo nome
if(!preg_match('/^[a-zA-Z]*$/',$nome))
{
    echo $errNome = "Il nome deve contenere solo caratteri";
}else if($nome=="")
	$errNome="Campo obbligatorio";

echo "<br>";

//controllo campo cognome
if(!preg_match('/^[a-zA-Z]*$/',$cognome))
{
    echo "Cognome non valido. Ammessi solo caratteri";

}else if($cognome=="")
	echo $errCognome = "Campo obbligatorio";

echo "<br>"; 

?>


    <div class="tab-form">
      <div class="title-text">
        <div class="title">Login</div>
        <div class="title-login">* = campi obbligatori</div>
      </div>
      <div class="form-container">
        <div class="form-campi">
          <form action="<?php ($_SERVER["PHP_SELF"]);?>" class="login" method="POST" name="frmLogin">
            <div class="campo">
              <input type="text" placeholder="Nome*" name="nome">
            </div>
            <span style="color:ff1d0b;"><?php echo $errNome;?></span>
            <div class="campo">
              <input type="text" placeholder="Cognome*" name="cognome">
            </div>
            <span style="color:ff1d0b;"><?php echo $errCognome;?></span>
            <div class="campo">
              <input type="password" placeholder="Password*" name="password">
            </div>
            <span style="color:ff1d0b;"><?php echo $errPasw;?></span>
            <div class="campo tasto">
              <div class="tasto-layer"></div>
              <input type="submit" value="Login">
            </div>     
          </form> 
        </div>
      </div>
    </div>
</body>
</html>
