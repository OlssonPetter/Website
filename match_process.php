<!DOCTYPE html>
<html>
  <head>
    <title>ACTIV8</title>
<div class="container">
  <a href="profile.php">Profile</a>
  <a href="friends.php">Friends</a>
<a href="event.php">Events</a>
  <a href="booking.php">Booking</a>
    <a href="index.php">Homepage</a>
</div>
  </head>
  <body>
    <h1>Here are your matches!</h1>

    <?php

    require 'anslutning.php';

    session_start();
      
    $currentuser = $_SESSION['usersport'];
    var_dump($_SESSION['usersport']);
    echo "$currentuser";
    $matches = $con->query("SELECT * FROM User WHERE sports = '$currentuser'")
    or die("query failed");


?>
      <form action="profile.php" method="post" name="to_profile"></form>
<?php
    if ($matches != 0)
      {
        echo "<table><tr><th>Email</th><th>Age</th></tr>";
        while ($matchArray = $matches->fetch_assoc())
          {
            echo "<tr><td>" .$matchArray['email']. "</td><td>" .$matchArray['age']. "</td></tr>";
          }
          echo "</table>";
      }

    ?>

  </body>
     <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>
</html>
