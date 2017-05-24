<?php
session_start();

require'anslutning.php';

    $event_name =mysqli_real_escape_string($con,$_POST['event_name']);
    $event_info =mysqli_real_escape_string($con,$_POST['event_info']);
    $event_location =mysqli_real_escape_string($con,$_POST['event_location']);
    $event_sport = mysqli_real_escape_string($con,$_POST['event_sport']);
    $event_creator = $_SESSION['email'];

    if(!empty($_POST['event_name'])|| !empty($_POST['event_info'])|| !empty($_POST['event_location'])|| !empty($_POST['event_sport'])|| !empty($_POST['event_creator']))
    {
        $sql= "INSERT INTO Event 
        VALUES('','$event_name','$event_info','$event_location','$event_sport', '$event_creator')";
        
        if($con->query($sql)===TRUE)
            {
                echo("Event created");
            }
        else
            {
                echo"Error:".$sql."<br>".$con->error;
            }

    }

       $matches = $con->query("SELECT * FROM Event")
            or die("query failed");



    if ($matches != 0)
      {
        echo "<table><tr><th>Event name</th><th>Information</th><th>Location</th><th>Sport</th><th>Host</th></tr>";
        while ($matchArray = $matches->fetch_assoc())
          {
            echo "<tr><td>" .$matchArray['event_name']. "</td><td>" .$matchArray['event_info']. "</td><td>" .$matchArray['event_location']. "</td><td>" .$matchArray['event_sport']. "</td><td>" .$matchArray['event_creator']. "</td></tr>";
          }
          echo "</table>";
      }

?>

<!DOCTYPE html>
<html>
    <head>
<div class="container">
  <a href="profile.php">Profile</a>
  <a href="friends.php">Friends</a>
<a href="event.php">Events</a>
  <a href="booking.php">Booking</a>
    <a href="index.php">Homepage</a>
</div>
    </head>
<body>
 
    <a href="create_event.php" class="button" type="button" >+</a>
</body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>

</html>
