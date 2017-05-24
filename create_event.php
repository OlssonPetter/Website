<?php
?>
<!DOCTYPE html>
<html>
    <head>
    <title>ACTIV8</title>
 <div class="container">
    <a href="about.php">About</a>
  <a href="profile.php">Profile</a>
  <a href="friends.php">Friends</a>
<a href="event.php">Events</a>
  <a href="booking.php">Booking</a>
     <a href="index.php">Homepage</a>
     <a href="match.php">Find friends</a>
</div>
    </head>
    <body>
        <form name="Create_Event_Form" id="Create_Event_Form" action="event.php"method="post">
        <p></p><input placeholder="Enter event name..." name="event_name"></p>
        <p><input placeholder="Enter event information..."name="event_info"></p>
        <p><input placeholder="Enter event location..."name="event_location"></p>
        <p>Choose event sport</p>
        <select name="event_sport">
        <option value="running" selected>Running</option>
        <option value="football">Football</option>
        <option value="tennis">Tennis</option>
        <option value="gym">Gym</option>
        </select>
        <p><input class="button" id="create_event" type= "submit" value="Create event!"></p>
        </form>

    </body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>

</html>
