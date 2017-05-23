<?php

require 'anslutning.php';

session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>ACTIV8</title>
    <div class="container">
      <h1><a href="#home">About</a></h1>
    </div>
    <meta charset="utf-8">
    </head>
    <body>


      <?php if (isset($_SESSION['user'])): echo 'Welcome, '.$_SESSION['user']; ?>

        <div class="header">
            <a href="index.php">ACTIV8</a>
        </div>
<div class="container">
  <a href="profile.php">Profile</a>
  <a href="friends.php">Friends</a>
<a href="event.php">Events</a>
  <a href="booking.php">Booking</a>
</div>
      <h1>Welcome, you are now logged in!</h1>


      <a href="logout.php">Logout?</a

      <h1>Find matches!</h1>

      <a href="match.php">Lets go!</a>




      <?php else: ?>
        <div class="header">
            <a href="index.php">ACTIV8</a>
        </div>
    <h1 class ="Startsida"id="Först">WELCOME TO</h1>
    <h2 class ="Startsida"id="Mitten">ACTIV8</h2>
    <h3 class ="Startstida"id="Sist">THE ACTIVE COMMUNITY.</h3>

    <a href="login.php" class="buttonstart1" type="button" >Logga in!</a>
    <a href="register.php" class="buttonstart2" type="button" >Registera dig!</a>

  <?php endif; ?>

        </body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>
</html>
