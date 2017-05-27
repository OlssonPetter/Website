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
      <h1 class="title_h1"> You can edit your profile information here:</h1>
    <?php


    ?>
        <div class="booking">
        <form name="MyRegForm" id="MyRegForm" action="profile.php"method="post">
        <input type="password" placeholder="Enter your new password..." name="password_edit">
        <input placeholder="Add som information about yourself..."name="info_edit">
        <p> Choose gender </p>
         <p><select name="sex_edit">
     <option value="male"selected="">Male</option>
     <option value="female">Female</option>
     <option value="other">Other</option>
   </select></p>
        <p><input placeholder="Enter your age..."name= "age_edit"></p>
       <p> What sport are you interested in? </p>
        <select name="sport_edit">
        <option value="football">Football</option>
        <option value="tennis">Tennis</option>
        <option value="running" selected>Running</option>
        <option value="gym">Gym</option>
        <option value="golf">Golf</option>
        <option value="swimming">Swimming</option>
        <option value="rugby">Rugby</option>
        <option value="chess">Chess</option>
        <option value="athletics">Athletics</option>
        <option value="baseball">Baseball</option>
        <option value="frisbee">Frisbee</option>
        </select>
        <p><input id="button_register" type= "submit" value="Save changes!" class="button"></p>
        </form>
        </div>
        <div class="booking">
            <form name="picture_edit" id="picture_edit" action="profile.php">
            <p>Upload picture here</p>
            <input type="file" name="pic" accept="image">
                <input type="submit" class="button" value="Upload!">
        </form>
        </div>
    </body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>
</html>
