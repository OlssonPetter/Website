<?php

session_start();

if(!isset($_SESSION['user']))
{
  header("Location:index.php");
}
?>

!<!DOCTYPE html>
<html>
<head>
  <title> ACTIV8 </title>
       <div class="container">
        <a href="logout.php">Logout?</a>
        <a href="index.php">Homepage</a>
        <a href="profile.php">Profile</a>
        <a href="event.php">Events</a>
        <a href="booking.php">Booking</a>
        <a href="about.php">About</a>
        <a href="friends.php">Friends</a>
        <a href="match.php">Find friends</a>
    </div>
    <meta charset="utf-8">
    <h1> Here are your friends!</h1>
</head>
<body>
</body>
  <link rel="stylesheet" href="projekt.css"/>
</html>
