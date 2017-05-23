<!DOCTYPE html>
<html>
  <head>
    <title>ACTIV8</title>
  </head>
  <body>
    <form name="FormMatch" id="FormMatch" action="match.php" method="post">
      <input type="submit" id="button_match" value="Match">
    </form>

    <?php

    require 'anslutning.php';

    session_start();

    $records = $con->query("SELECT * FROM User WHERE user_id = $SESSION['user'] ")
    or die("Failed to find the current user, could therefor not even begin to find a match.");
    $results=$records->fetch_assoc();

    $matches = $con->query("SELECT * FROM User WHERE sport = $results['sport']")
    or die("Match query difd not work");



    if ($matches)
      {
        echo "<table><tr><th>Email</th><th>Age</th>"
        while ($matchArray = $matches->fetch_assoc())
          {
            echo "<tr><td>" .$matchArray['email']. "</td><td>" .$matchArray['age']. "</td></tr>";
          }
          echo "</table>";
      }

    ?>
  </body>
</html>
