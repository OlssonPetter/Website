<?php

session_start();

if (isset($_SESSION['user']))
{
  header("Location: index.php");
}
require 'anslutning.php';
if(!empty($_POST['email_register'])|| !empty($_POST['password_register'])|| !empty($_POST['info_register'])|| !empty($_POST['sex_register'])|| !empty($_POST['age_register'])|| !empty($_POST['sport_register']))
{
  $email=mysqli_real_escape_string($con,$_POST['email_register']);
  $password=mysqli_real_escape_string($con,$_POST['password_register']);
  $info=mysqli_real_escape_string($con,$_POST['info_register']);
  $sex=mysqli_real_escape_string($con,$_POST['sex_register']);
  $age=mysqli_real_escape_string($con,$_POST['age_register']);
  $sport=mysqli_real_escape_string($con,$_POST['sport_register']);
  $salt= uniqid(mt_rand(),true);
  $password=$password.$salt;
  $password=sha1($password);
  if (preg_match('/\S+@\S+\.\S+/', $email) === 0)
  {
    echo"Unvalid emailadress ";
    exit();
  }
  $results=$con->query("SELECT * FROM User WHERE email ='$email'");
  $records=$results-> fetch_assoc();
  if(count($records)> 0)
  {
    die("Username already exists");
  }
  else
  {
      $sql="INSERT INTO User VALUES('','$email','$info','$password','$salt','$sex','$age','$sport')";
  }
if($con->query($sql)===TRUE)
{
  echo("User created");
}
else
    {
  echo"Error:".$sql."<br>".$con->error;
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
    <title>ACTIV8</title>
    </head>
    <body>


      <h1>Register below</h1>

      <form name="MyRegForm" id="MyRegForm" action="register.php"method="post">
        <input placeholder="Enter your email..."name="email_register">
        <input type="password" placeholder="Enter your password..." name="password_register">
        <input placeholder="Add som information about yourself..."name="info_register">
        <input placeholder="Enter your sex..."name="sex_register">
        <input placeholder="Enter your age..."name= "age_register">
        <input placeholder="What sport are you interested in?"name= "sport_register">
        <input id="button_register" type= "submit" value="Register">
        <p>Or login <a href="login.php">here</a>.</p>
        </form>

    </body>
        <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>
</html>
