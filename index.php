<?php

require 'anslutning.php';

session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>ACTIV8</title>
    <meta charset="utf-8">
    </head>
    <body>


      <?php if (isset($_SESSION['user'])):  ?>
     <h1 class="instruc_h1">Press the button to find people with the same sport interest as you!</h1>
        <div class="container">
          <a href="logout.php">Logout</a>
          <a href="index.php">ACTIV8</a>
          <a href="profile.php">Profile</a>
          <a href="event.php">Events</a>
          <a href="booking.php">Booking</a>
          <a href="om.php">About</a>
          <a href="friends.php">Friends</a>
        </div>

    <form name="FormMatch" id="FormMatch" action="match_process.php" method="post">
      <input type="submit" id="button_match" value="TIME TO ACTIV8!" class="button">
    </form>




      <?php else: ?>
        <div class="container">
            <a href="index.php">Homepage</a>
            <a href="om.php">About</a>
        </div>
    <h2 class ="Startsida"id="Först">WELCOME TO</h2>
    <h1 class ="Startsida"id="Mitten">ACTIV8</h1>
    <h3 class ="Startstida"id="Sist">THE ACTIVE COMMUNITY.</h3>

    <a href="login.php" class="button" type="button" >Login!</a>
    <a href="register.php" class="button" type="button" >Register!</a>

  <?php endif; ?>

        </body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>
</html>
