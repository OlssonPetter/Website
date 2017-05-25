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
      $sql="INSERT INTO User VALUES('','$email','$info','$password','$salt','$sex','$age','$sport','')";
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
    <div class="container">
        <a href="index.php">Homepage</a>
        <a href="about.php">Terms</a>
    </div>
    </head>
    <body>



      <h1>Register below</h1>

      <form name="MyRegForm" id="MyRegForm" action="register.php"method="post">
          <p><input placeholder="Enter your email..."name="email_register"></p>
        <p><input type="password" placeholder="Enter your password..." name="password_register"></p>
        <p><input placeholder="Add som information about yourself..."name="info_register"></p>
        <p> Choose gender </p>
         <select name="sex_register">
     <option value="male"selected="">Male</option>
     <option value="female">Female</option>
   </select>
        <p><input placeholder="Enter your age..."name= "age_register"></p>
       <p> What sport are you interested in? </p>
        <select name="sport_register">
    <option value="football">Football</option>
    <option value="tennis">Tennis</option>
    <option value="running" selected>Running</option>
    <option value="gym">Gym</option>
        </select>
          <p>I accepts Activ8's <a href="about.php">terms and conditions</a><input type="checkbox" name="checkbox" id="checkbox"></p>
        <p><input class ="button"id="button_register" type= "submit" value="Register"></p>
            <p><a href="login.php" class="button">here</a>.</p>
        </form>

    </body>
        <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>
</html>
