<?php
    session_start();

    $role = $_SESSION['userrole'];
    if(!isset($_SESSION['userrole']) || $role!="admin")
    {
      header('Location: index.php');
    }



?>



<!DOCTYPE html>
<html>
  <head>
    <title>ACTIV8</title>
    <div class="container">
        <a href="index.php">ACTIV8</a>
        <a href="profile.php">Profile</a>
        <a href="event.php">Events</a>
        <a href="booking.php">Booking</a>
        <a href="about.php">About</a>
        <a href="friends.php">Training Partners</a>
        <a href="match.php">Find training Partners</a>
        <a href="delete.php">Delete user</a>
    </div>
  </head>
  <body>
    <h1>Here are your matches!</h1>

    <?php

    require 'anslutning.php';

    session_start();

//Detta ok?
    $victim = $_POST['name'];
    $_SESSION['victim'] = $victim;
    var_dump($_POST['name']);
    echo "$victim";
    $matches = $con->query("SELECT * FROM User WHERE email = '$victim'")
    or die("query failed");


    if ($matches != 0)
      {
        echo "<table><tr><th>Email</th><th>User information</th><th>Gender</th><th>Age</th><th>Sport</th></tr>";
        while ($matchArray = $matches->fetch_assoc())
          {
            echo "<tr><td>" .$matchArray['email']. "</td><td>" .$
                matchArray['user_info']. "</td><td>" .$matchArray['sex']. "</td><td>" .$matchArray['age']. "</td><td>" .$matchArray['sports']. "</td></tr>";
          }
          echo "</table>";
      }

    ?>



    <form  method="post" action="delete_search_destroy.php"  id="deleteform">
        <input  type="submit" name="delete" value="Delete">
    </form>


  </body>
     <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>
</html>
