<?php
require'anslutning.php';
$user =mysqli_real_escape_string($conn,$_POST['email']);
   $password =mysqli_real_escape_string($conn,$_POST['password']);

   $records= $con->query("SELECT * FROM User WHERE email ='$user'")
   or die("Failed to match query database");
   $results=$records->fetch_assoc();
   $password=$password.$results['salt'];
   $password=sha1($password);

   if(count($results)>0&& $password==$results['password'])
   {
     echo("its a match");

   }
   else {
    die("did not find match in database");
   }

?>
<!DOCTYPE html>
<html>
    <head>
    <title>ACTIV8</title>
    </head>
    <body>
<form name="FormLogin" id="FormLogin">
  <input placeholder="Email" name= "email">
  <input type="password" placeholder="Password" name="password">
  <button>Login</button>
  <p>Or register <a href="register.php">here</a>.</p>
</form>



    </body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>


</html>
