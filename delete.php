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
    <title>ACTIV8</title>
    <div class="container">
        <a href="index.php">Homepage</a>
        <a href="profile.php">Profile</a>
        <a href="event.php">Events</a>
        <a href="booking.php">Booking</a>
        <a href="about.php">About</a>
        <a href="friends.php">Friends</a>
        <a href="match.php">Find friends</a>
        <a href="delete.php">Delete user</a>
    </div>
  </head>
  <body>
    <h1>Welcome Admin!</h1>
    <h2>Here you can search for and delete users:<h2>

    <form  method="post" action="delete_search.php"  id="searchform">
        <input  type="text" name="name">
        <input  type="submit" name="submit" value="Search">
    </form>




  </body>
  <link rel="stylesheet" href="projekt.css"/>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="projekt.js" ></script>
</html>
