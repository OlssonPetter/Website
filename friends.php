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
  <title> ACTIV8 </title>
  <div class="container">
    <a href="logout.php">Logout</a>
    <a href="index.php">ACTIV8</a>
    <a href="profile.php">Profile</a>
    <a href="event.php">Events</a>
    <a href="booking.php">Booking</a>
    <a href="om.php">About</a>
    <a href="friends.php">Training Partners</a>
  </div>
    <meta charset="utf-8">
    <h1 class ="title_h1"> Here are your trainingpartners, contact them via email to start working out!</h1>
</head>
<body>
    <?php
        require 'anslutning.php';

    $currentUser = $_SESSION['user'];
    $sql ="SELECT * FROM user INNER JOIN relation ON user.user_id = relation.followed WHERE relation.follower = $currentUser";

    $query = mysqli_query($con, $sql) or die (mysqli_error($con));

    ?>
      <form action="profile.php" method="post" name="to_profile">
        <?php
    echo "<table><tr><th>Name</th><th>Sport</th></tr>";
    while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        echo '<tr><td><a href="friend.php?userid='. $row["user_id"] . '">' .$row["name"]. '</a></td><td>' .$row["sports"] . '</td></tr>';

    }
     echo "</table>";
    ?>
         </form>
</body>
  <link rel="stylesheet" href="projekt.css"/>
</html>
