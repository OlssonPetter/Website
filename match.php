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

    <h1>Find a match and start improving your life!</h1>

    <form name="FormMatch" id="FormMatch" action="match_process.php" method="post">
      <input type="submit" id="button_match" value="Match" class="button">
    </form>


  </body>
     <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>
</html>
