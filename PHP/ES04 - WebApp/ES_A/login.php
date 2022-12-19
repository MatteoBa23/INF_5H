<?php
include("functions.php");
?>
<html>
<head>
<title>Validazione Form</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>  
    <div class="tab-form">
      <div class="title-text">
        <div class="title">Login</div>
        <div class="title-login">* = campi obbligatori</div>
      </div>
      <div class="form-container">
        <div class="form-campi">
          <form action="riser.php" class="login" method="POST" name="frmLogin">
            <div class="campo">
              <input type="text" placeholder="Nome*" name="nome">
            </div>  
            <div class="campo">
              <input type="text" placeholder="Cognome*" name="cognome">
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
      <a href="index.php">HomePage</a>
    </div>
</body>
</html>
