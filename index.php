<?php

require 'anslutning.php';

session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>ACTIV8</title>
    <div class="container">
      <h1><a href="about.php">About</a></h1>
    </div>
    <meta charset="utf-8">
    </head>
    <body>


      <?php if (isset($_SESSION['user'])): echo 'Welcome, '.$_SESSION['user']; ?>

<div class="container">
  <a href="profile.php">Profile</a>
  <a href="friends.php">Friends</a>
<a href="event.php">Events</a>
  <a href="booking.php">Booking</a>
    <a href="index.php">Homepage</a>
    <a href="match.php">Find friends</a>
</div>
      <h1>Welcome, you are now logged in!</h1>


      <p><a class="button" href="logout.php">Logout?</a

      <h1>Find matches!</h1>

      <a class="button"href="match.php">Lets go!</a></p>




      <?php else: ?>
        <div class="header">
            <a href="index.php">ACTIV8</a>
        </div>
    <h2 class ="Startsida"id="Först">WELCOME TO</h2>
    <h1 class ="Startsida"id="Mitten">ACTIV8</h1>
    <h3 class ="Startstida"id="Sist">THE ACTIVE COMMUNITY.</h3>

    <a href="login.php" class="button" type="button" >Logga in!</a>
    <a href="register.php" class="button" type="button" >Registera dig!</a>

  <?php endif; ?>

        </body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>
</html>
