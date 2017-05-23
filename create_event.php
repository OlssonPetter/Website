<?php
?>
<!DOCTYPE html>
<html>
    <head>
    <title>ACTIV8</title>
    </head>
    <body>
        <form name="Create_Event_Form" id="Create_Event_Form" action="event.php"method="post">
        <input placeholder="Enter event name..." name="event_name">
        <input placeholder="Enter event information..."name="event_info">
        <input placeholder="Enter event location..."name="event_location">
        <p>Choose event sport</p>
        <select name="event_sport">
         <option value="running" selected>Running</option>
        <option value="football">Football</option>
        <option value="tennis">Tennis</option>
        <option value="gym">Gym</option>
        </select>
        <input id="create_event" type= "submit" value="Create event!">
        </form>
    
    </body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>

</html>