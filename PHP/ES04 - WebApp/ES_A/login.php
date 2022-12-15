
<html>
<head>
<title>Validazione Form</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>  


<?php
include "functions.php";
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
