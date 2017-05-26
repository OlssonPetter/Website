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
            <a href="logout.php">Logout?</a>
            <a href="index.php">Homepage</a>
            <a href="profile.php">Profile</a>
            <a href="event.php">Events</a>
            <a href="booking.php">Booking</a>
            <a href="about.php">Terms</a>
            <a href="friends.php">Friends</a>
            <a href="match.php">Find friends</a>
        </div>
     <?php

require'anslutning.php';
        
        if(isset($_POST['friendid']))
        {
    
            $sql = "INSERT INTO `relation`(`follower`, `followed`) VALUES ('".$_SESSION['user']."', '".$_POST['friendid']."')";
            
            if($con->query($sql) == true)
            {
                
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
        echo "<b>Email:</b> ". $matchArray['email'];
        echo "<br /><b>User information:</b> ".$matchArray['user_info'];
        echo "<br /><b>Gender:</b> ".$matchArray['sex'];
        echo "<br /><b>Age:</b> ".$matchArray['age'];
        echo "<br /><b>Sport:</b> ".$matchArray['sports'];

        echo '<input type="hidden" name="friendid" value="'.$matchArray["user_id"] .'">';
        echo '<button type="submit">Lägg till vän</button>';
        echo "</form>";

          }
         
          $matches->free();
        }
    ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="projekt.js" ></script>
    </body>
</html>
