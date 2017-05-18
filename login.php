<?php
?>
<!DOCTYPE html>
<html>
    <head>
    <title>ACTIV8</title>
    </head>
    <body>
        <form id="formLogin" action="login.php" method="post">
        
        <div>
        <p class = "Formulär"> 
        <label for="EpostLogin">E-post</label>
        </p>
        
        <p>
        <input type="text" id="epostlogin" name = "epostlogin" placeholder="Vänligen skriv e-mail här...">
        </p>
        
        <p class = "Formulär">
        <label for="LösenordLogin">Lösenord</label>
        </p>
        
        <p>
        <input type="password" style="-webkit-text-security: square;" id="passwordlogin" name = "passwordlogin" placeholder="Vänligen skriv lösenord här...">
        </p>
        
        <p class = "Formulär"><input class ="button" id ="Login" type="submit" value="Logga in!"></p>
        </div>
    </form>

  
    </body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>


</html>
