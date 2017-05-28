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
        <meta charset="utf-8">
        <link rel="stylesheet" href="projekt.css"/>

        <title>ACTIV8</title>
    </head>

    <body>
        <div class="container">
          <a href="logout.php">Logout</a>
          <a href="index.php">ACTIV8</a>
          <a href="profile.php">Profile</a>
          <a href="event.php">Events</a>
          <a href="booking.php">Booking</a>
          <a href="om.php">About</a>
          <a href="friends.php">Friends</a>
        </div>
     <?php

require'anslutning.php';

        if(isset($_POST['friendid']))
        {
          $currentuser = $_SESSION['user'];
          $currentfriend = $_POST['friendid'];

          $muiltipleFriendValidate = $con->query("SELECT * FROM relation WHERE follower ='$currentuser' AND followed = '$currentfriend' ") or die("muiltipleFriendValidate fugerade inte");
          $dubletArray = $muiltipleFriendValidate->fetch_assoc();
          if($dubletArray == 0)
          {
            $sql = "INSERT INTO `relation`(`follower`, `followed`)
                    VALUES ('".$_SESSION['user']."', '".$_POST['friendid']."')";

            if($con->query($sql) == true)
            {
                header("Location:friends.php");
            }
          }


        }

        $friendid = $_GET["userid"];
        $matches = $con->query("SELECT * FROM User WHERE user_id = '$friendid'")
        or die("query failed");

    if ($matches != 0)
      {

        while ($matchArray = $matches->fetch_assoc())
          {

        echo "<form class=\"profile\" align=\"center\" method='post'>";
        echo "<b>Name:</b> ". $matchArray['name'];
        echo "<br /><b>Email:</b> ".$matchArray['email'];
        echo "<br /><b>User information:</b> ".$matchArray['user_info'];
        echo "<br /><b>Gender:</b> ".$matchArray['sex'];
        echo "<br /><b>Age:</b> ".$matchArray['age'];
        echo "<br /><b>Sport:</b> ".$matchArray['sports'];

        echo '<input type="hidden" name="friendid" value="'.$matchArray["user_id"] .'">';
        echo '<button class=\"button\"type="submit">Lägg till vän</button>';
        echo "</form>";

          }

          $matches->free();
        }
    ?>
        <p>How was your workout with this training partner?</p>
        <a href="feedback.php" class="button">Add feedback</a>
        <?php
        //$current=$_GET["userid"]
        //echo '<tr><td><a href="friend.php?userid='. $current .'</a>
        ?>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="projekt.js" ></script>
    </body>
</html>
