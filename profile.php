<?php

session_start();

if(!isset($_SESSION['user']))
{
  header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>ACTIV8</title>
    <div class="container">
      <a href="logout.php">Logout</a>
      <a href="index.php">ACTIV8</a>
      <a href="profile.php">Profile</a>
      <a href="event.php">Events</a>
      <a href="booking.php">Booking</a>
      <a href="om.php">About</a>
      <a href="friends.php">Training Partners</a>
    </div>
    </head>
    <body>
      <h1 class="title_h1"> This is your profile</h1>
     <?php
session_start();

require'anslutning.php';

if (isset($_POST['upload'])){
        $target = "pictures/".basename($_FILES['image']['name']);

        $image = $_FILES['image']['name'];
        $userId = $_SESSION['user'];
    
        $sql= "UPDATE user SET image='$image' WHERE user_id = $userId";
    
        if($con->query($sql)===TRUE)
        {
            echo("Information updated");
        }
        else
        {
    echo"Error:".$sql."<br>".$con->error;
    }
    


        $sql = "INSERT INTO user (image) VALUES ('$image') WHERE user_id = '$userId'";
        mysqli_query($con, $sql);


        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            echo "Image uploaded sucessfully";
        }
        else {
            echo "There was a problem uploading image";
        }
}
       
        
if(!empty($_POST['password_edit'])|| !empty($_POST['info_edit'])|| !empty($_POST['sex_edit'])|| !empty($_POST['age_edit'])|| !empty($_POST['sport_edit']))
{
  $password=mysqli_real_escape_string($con,$_POST['password_edit']);
  $info=mysqli_real_escape_string($con,$_POST['info_edit']);
  $sex=mysqli_real_escape_string($con,$_POST['sex_edit']);
  $age=mysqli_real_escape_string($con,$_POST['age_edit']);
  $sport=mysqli_real_escape_string($con,$_POST['sport_edit']);
  $_SESSION['usersport'] = $sport;
  $salt= uniqid(mt_rand(),true);
  $password=$password.$salt;
  $password=sha1($password);



  $results=$con->query("SELECT * FROM User WHERE email ='$email'");
  $records=$results-> fetch_assoc();
  if(count($records)> 0)
  {
    die("Username already exists");
  }
  else
  {
    $edit_profile = $_SESSION['user'];
    $sql= "UPDATE User SET user_info='$info', password='$password', salt='$salt', sex='$sex', age='$age', sports='$sport' WHERE user_id = $edit_profile";
  }
if($con->query($sql)===TRUE)
    {
  echo("Information updated");
    }
else
    {
  echo"Error:".$sql."<br>".$con->error;
    }
}

        $user = $_SESSION['user'];
        $bild = $con->query("SELECT image FROM user WHERE 'user_id' = '$user'")
            or die("query failed");
        
       if ($bild != 0)
       {
        while ($bilder = $bild->fetch_assoc())
        {
            echo "<div id='img_div'>";
            echo "<img src='pictures/".$bilder['image']."'>";
            echo "</div>";
       
        }  
           $bild->free();
       }
        
    $currentuser = $_SESSION['user'];
    $matches = $con->query("SELECT * FROM User WHERE user_id = '$currentuser'")
        or die("query failed");

    if ($matches != 0)
      {
        //echo "<table><tr><th>Email</th><th>User information</th><th>Gender</th><th>Age</th><th>Sport</th></tr>";
        while ($matchArray = $matches->fetch_assoc())
          {

        echo "<div class=\"profile\" align=\"center\">";
        echo "<b>Email:</b> ". $matchArray['email'];
        echo "<br /><b>User information:</b> ".$matchArray['user_info'];
        echo "<br /><b>Gender:</b> ".$matchArray['sex'];
        echo "<br /><b>Age:</b> ".$matchArray['age'];
        echo "<br /><b>Sport:</b> ".$matchArray['sports'];
        echo "</div>";


            //echo "<tr><td>" .$matchArray['email']. "</td><td>" .$matchArray['user_info']. "</td><td>" .$matchArray['sex']. "</td><td>" .$matchArray['age']. "</td><td>" .$matchArray['sports']. "</td></tr>";
          }
          //echo "</table>";
          $matches->free();
      }
?>
<a href="profile_edit.php" class="button">Edit profile.</a>
    </body>
    <meta charset="utf-8">
    <link rel="stylesheet" href="projekt.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>
</html>
