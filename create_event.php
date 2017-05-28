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
      <a href="friends.php">Friends</a>
    </div>
    </head>
    <body>
      <h1 class="title_h1"> Type in event information here</h1>
        <form name="Create_Event_Form" id="Create_Event_Form" action="event.php"method="post" onsubmit="return validateEvent()">
        <p></p><input placeholder="Enter event name..." name="event_name"></p>
        <p><input placeholder="Enter event information..."name="event_info"></p>
        <p><input placeholder="Enter event location..."name="event_location"></p>
        <p>Choose event sport</p>
        <select name="event_sport">
        <option value="running" selected>Running</option>
        <option value="football">Football</option>
        <option value="tennis">Tennis</option>
        <option value="gym">Gym</option>
        <option value="golf">Golf</option>
        <option value="swimming">Swimming</option>
        <option value="rugby">Rugby</option>
        <option value="chess">Chess</option>
        <option value="athletics">Athletics</option>
        <option value="baseball">Baseball</option>
        <option value="frisbee">Frisbee</option>
        </select>
        <p><input class="button" id="create_event" type= "submit" value="Create event!"></p>
        </form>

    </body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>

</html>
