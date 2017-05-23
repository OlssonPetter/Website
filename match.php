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
  </head>
  <body>

    <h1>Find a match and start improving your life!</h1>

    <form name="FormMatch" id="FormMatch" action="match_process.php" method="post">
      <input type="submit" id="button_match" value="Match">
    </form>


  </body>
  <link rel="stylesheet" href="projekt.css"/>
</html>
