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
$nome = $cognome = $datanascita = $email = $nickname = "";
$cellulare = 0;

$nome = controlloNome($_POST["nome"]);
$cognome = controlloCog($_POST["cognome"]);
$datanascita = controlloData($_POST["datanascita"]);
$email = controlloEmail($_POST["email"]);
$cellulare = controlloCell($_POST["cellulare"]);
$nickname = controlloNick($_POST["nickname"]);
$password = controlloPass($_POST["password"]);

function controlloNome($nome){
    $nome = trim($nome);	//funzione trim elimina gli spazi prima della stringa
    if(preg_match('/^[a-zA-Z]*$/',$nome))
    {
        echo "Nome: "; 
        echo $nome;
    }else
     echo "Username non valido. Ammessi solo caratteri";
	echo "<br>";
    return $nome;
}
function controlloCog($cognome){
    $cognome = trim($cognome);
    if(preg_match('/^[a-zA-Z]*$/',$cognome))
    {
        echo "Cognome: ";
        echo $cognome;
    }else
        echo "Cognome non valido. Ammessi solo caratteri";
    echo "<br>"; 
    return $cognome;
}
function controlloData($data){
    return $data;
}
function controlloEmail($email){
    $email = trim($email);
    if(preg_match("/^[a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/",$email))
    {
        echo "Email: ";
        echo $email;
    }else
        echo "Email non valida";
    echo "<br>";
    return $email;
}
function controlloCell($cell){
    $cell = trim($cell);
    if(preg_match('/^[0-9]/',$cell))
    {
        echo "Cellulare: ";
        echo $cell;
    }else
        echo "Cellulare non valido. Ammesse solo cifre";
    echo "<br>";
    return $cell;
}
function controlloNick($nick){
    if(preg_match('/^[a-zA-Z0-9_@#]*$/',$nick))
    {
        echo "Nickname: "; 
        echo $nick;
    }else
        echo "Nickname non valido";
    echo "<br>";
    return $nick;
}
function controlloPass($pass){
    $pass = trim($pass);
    return $pass;
}
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
            <div class="campo">
              <input type="text" placeholder="Cognome*" name="cognome">
            </div>
            <div class="campo">
              <input type="date" placeholder="Data di nascita*" name="datanascita">
            </div>
            <div class="campo">
              <input type="text" placeholder="Email*" name="email">
            </div>
            <div class="campo">
              <input type="text" placeholder="Cellulare" name="cellulare">
            </div>
            <div class="campo">
              <input type="text" placeholder="Nickname*" name="nickname">
            </div>
            <div class="campo">
              <input type="password" placeholder="Password*" name="password">
            </div>
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
