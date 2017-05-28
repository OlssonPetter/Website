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
      <h3 class="title_h1"> Scroll down to see training facilities</h3>
        <form><h2>Personal trainer</h2> </form>
        <div class="booking">
       <form><p>Press here to make booking at Actic</p> </form>
        <a href="http://www.actic.se/traning/personlig-traning/" class="button" type="button" >Visit website!</a>
      </div>

        <div class="booking">
      <form>  <p>Press here to make booking at Friskis&Svettis</p> </form>
        <a href="http://www.uppsala.friskissvettis.se/" class="button" type="button" >Visit website!</a>
        </div>

        <div class="booking">
      <form>  <p>Press here to make booking at Campus1477</p> </form>
        <a href="http://www.campus1477.se/sv/tjanster/gym-personlig-traning/personlig-traning/" class="button" type="button" >Visit website!</a>
        </div>

        <form><h2>Training facilities</h2> </form>
        <div class="booking">
      <form>  <p>Press here to make booking at Uppsala tennis club </p> </form>
        <a href="http://www.utk.se/" class="button" type="button" >Visit website!</a>
        </div>
        <div class="booking">
      <form>  <p>Press here to make booking at Golf.se</p> </form>
        <a href="http://www.golf.se/" class="button" type="button" >Visit website!</a>
        </div>



    </body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>

</html>
