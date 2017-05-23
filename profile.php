<!DOCTYPE html>
<html>
    <head>
    <title>ACTIV8</title>
<div class="container">
  <a href="profile.php">Profile</a>
  <a href="friends.php">Friends</a>
<a href="event.php">Events</a>
  <a href="booking.php">Booking</a>
</div>
    </head>
    <body>
     <?php
session_start();

require'anslutning.php';

    $currentuser = $_SESSION['user'];
    var_dump($_SESSION['user']);
    echo "$currentuser";
    $matches = $con->query("SELECT * FROM User WHERE user_id = '$currentuser'")
    or die("query failed");



    if ($matches != 0)
      {
        echo "<table><tr><th>Email</th><th>User information</th><th>Gender</th><th>Age</th><th>Sport</th></tr>";
        while ($matchArray = $matches->fetch_assoc())
          {
            echo "<tr><td>" .$matchArray['email']. "</td><td>" .$matchArray['user_info']. "</td><td>" .$matchArray['sex']. "</td><td>" .$matchArray['age']. "</td><td>" .$matchArray['sports']. "</td></tr>";
          }
          echo "</table>";
      }


?>   
    
    </body>
    <meta charset="utf-8">
    <link rel="stylesheet" href="projekt.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>
</html>