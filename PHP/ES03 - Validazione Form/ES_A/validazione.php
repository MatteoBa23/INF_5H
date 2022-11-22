<html>
<head>
<title>Validazione Form</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>  

<div class="risultati">
    <h2>Input inseriti</h2>
<?php

//inizializzazione delle variabili
$nome = $cognome = $datanascita = $email = $nickname = $cellulare = $password = "";

//inizializzazione variabili per errori
$errNome = $errCognome = $errData = $errEmail = $errNick = $errPasw = "";

if(isset($_POST["nome"])){
	$nome = trim($_POST["nome"]);
	$cognome = trim($_POST["cognome"]);
	$datanascita = trim($_POST["datanascita"]);
	$email = trim($_POST["email"]);
	$cellulare = trim($_POST["cellulare"]);
	$nickname = trim($_POST["nickname"]);
	$password = trim($_POST["password"]);
}

//controllo campo nome
if(preg_match('/^[a-zA-Z]*$/',$nome))
{
    echo "Nome: "; 
    echo $nome;
}else 
	echo $errNome = "Il nome deve contenere solo caratteri";
	
if($nome=="")
	$errNome="Campo obbligatorio";
	
echo "<br>";

//controllo campo cognome
if(preg_match('/^[a-zA-Z]*$/',$cognome))
{
    echo "Cognome: ";
    echo $cognome;
}else
    echo "Cognome non valido. Ammessi solo caratteri";

if($cognome=="")
	echo $errCognome = "Campo obbligatorio";

echo "<br>"; 


//controllo campo email
if(preg_match("/^[a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/",$email))
{
    echo "Email: ";
    echo $email;
}else
    echo "Email non valida";

if($email=="")
	echo $errEmail = "Campo obbligatorio";

echo "<br>";


//controllo campo cellulare
if(preg_match('/^[0-9]/',$cellulare))
{
    echo "Cellulare: ";
    echo $cellulare;
}else
    echo "Cellulare non valido. Ammesse solo cifre";

echo "<br>";


//controllo campo nickname
if(preg_match('/^[a-zA-Z0-9_@#]*$/',$nickname))
{
    echo "Nickname: "; 
    echo $nickname;
}else
    echo "Nickname non valido";

if($nickname=="")
	$errNick = "Campo obbligatorio";

echo "<br>";

?>
</div>

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
              <input type="date" placeholder="Data di nascita*" name="datanascita">
            </div>
            <span style="color:ff1d0b;"><?php echo $errData;?></span>
            <div class="campo">
              <input type="text" placeholder="Email*" name="email">
            </div>
            <span style="color:ff1d0b;"><?php echo $errEmail;?></span>
            <div class="campo">
              <input type="text" placeholder="Cellulare" name="cellulare">
            </div>
            <div class="campo">
              <input type="text" placeholder="Nickname*" name="nickname">
            </div>
            <span style="color:ff1d0b;"><?php echo $errNick;?></span>
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
