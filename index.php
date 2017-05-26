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


      <?php if (isset($_SESSION['user'])): echo 'Welcome, '.$_SESSION['name']; ?>

        <div class="container">
            <a href="logout.php">Logout?</a>
            <a href="index.php">Homepage</a>
            <a href="profile.php">Profile</a>
            <a href="event.php">Events</a>
            <a href="booking.php">Booking</a>
            <a href="about.php">Terms</a>
            <a href="friends.php">Friends</a>
            <a href="match.php">Find friends</a>
        </div>
        
    <form name="FormMatch" id="FormMatch" action="match_process.php" method="post">
      <input type="submit" id="button_match" value="TIME TO ACTIV8!" class="button">
    </form>




      <?php else: ?>
        <div class="container">
            <a href="index.php">Homepage</a>
            <a href="about.php">Terms</a>
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
