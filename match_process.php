<!DOCTYPE html>
<html>
  <head>
    <title>ACTIV8</title>
  </head>
  <body>

    <div class="header">
        <a href="index.php">ACTIV8</a>
    </div>

    <h1>Here are your matches!</h1>

    <?php

    require 'anslutning.php';

    session_start();


    //$records = $con->query("SELECT * FROM User WHERE user_id = '$_SESSION['user']'")
    //or die("Failed to find the current user, could therefor not even begin to find a match.");
    //$results=$records->fetch_assoc();
    $currentuser = $_SESSION['usersport'];
    var_dump($_SESSION['usersport']);
    echo "$currentuser";
    $matches = $con->query("SELECT * FROM User WHERE sports = '$currentuser'")
    or die("query failed");



    if ($matches != 0)
      {
        echo "<table><tr><th>Email</th><th>Age</th></tr>";
        while ($matchArray = $matches->fetch_assoc())
          {
            echo "<tr><td>" .$matchArray['email']. "</td><td>" .$matchArray['age']. "</td></tr>";
          }
          echo "</table>";
      }

    ?>

  </body>
  <link rel="stylesheet" href="projekt.css"/>
</html>
