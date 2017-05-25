<?php

session_start();

if (isset($_SESSION['user']))
{
  header("Location: index.php");
}

require'anslutning.php';

if(!empty($_POST['email_login']) && !empty($_POST['password_login']))
{
  $user =mysqli_real_escape_string($con,$_POST['email_login']);
  $password =mysqli_real_escape_string($con,$_POST['password_login']);

   $records= $con->query("SELECT * FROM User WHERE email ='$user'")
   or die("Failed to match query database");
   $results=$records->fetch_assoc();
   $password=$password.$results['salt'];
   $password=sha1($password);

   if(count($results)>0&& $password==$results['password'])
   {
     $_SESSION['user'] = $results['user_id'];
     $_SESSION['email'] = $results['email'];
     $_SESSION['usersport'] = $results['sports'];
     $_SESSION['userrole'] = $results['role'];

     if ($_SESSION['userrole'] == "admin")
     {
       header("Location: adminindex.php");
     }
     else
     {
        header("Location: index.php");
     }

   }
   else
   {
     die("Password and Username did not match, please register or try again");
   }
 }

?>
<!DOCTYPE html>
<html>
    <head>
    <title>ACTIV8</title>
    <div class="container">
        <a href="index.php">Homepage</a>
        <a href="about.php">About</a>
    </div>
    </head>
    <body>
<form name="FormLogin" id="FormLogin" action="login.php" method="post">
  <p><input placeholder="Email" name= "email_login"></p>
  <p><input type="password" placeholder="Password" name="password_login"></p>
    <p><input class="button"type= "submit" value="Login"></p>
  <p>Or register <a href="register.php">here</a>.</p>
</form>



    </body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>


</html>
