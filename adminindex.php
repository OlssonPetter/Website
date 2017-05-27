<?php
    session_start();

    $role = $_SESSION['userrole'];
    if(!isset($_SESSION['userrole']) || $role!="admin")
    {
      header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <h1>Welcome Admin!</h1>

    <div class="container">
        <a href="index.php">Homepage</a>
        <a href="profile.php">Profile</a>
        <a href="event.php">Events</a>
        <a href="booking.php">Booking</a>
        <a href="om.php">About</a>
        <a href="friends.php">Friends</a>
        <a href="match.php">Find friends</a>
        <a href="delete.php">Delete user</a>
    </div>
          <h1>Welcome, you are now logged in!</h1>


          <p><a class="button" href="logout.php">Logout?</a

          <h1>Find matches!</h1>

          <a class="button"href="match.php">Lets go!</a></p>

  </body>
  <link rel="stylesheet" href="projekt.css"/>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="projekt.js" ></script>
</html>
