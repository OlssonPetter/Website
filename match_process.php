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
    <h1 class="title_h1">Here are your matches, click their names to find out more about them! </h1>
    <h2>Matches in Uppsala:</h2>

    <?php

    require 'anslutning.php';

    session_start();

    $currentUserSport = $_SESSION['usersport'];
    $currentUser = $_SESSION['user'];
    $matches = $con->query("SELECT * FROM User WHERE sports = '$currentUserSport' AND user_id <> $currentUser")
    or die("query failed");


?>
      <form action="profile.php" method="post" name="to_profile">
<?php
    if ($matches != 0)
      {

        echo "<table><tr><th>Name</th><th>Age</th></tr>";
        while ($matchArray = $matches->fetch_assoc())

          {
            echo '<tr><td><a href="friend.php?userid='. $matchArray["user_id"] . '">' .$matchArray["name"]. '</a></td><td>' .$matchArray["age"] . '</td></tr>';

          }
          echo "</table>";
      }


    ?>
 </form>
  </body>
     <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>
</html>
